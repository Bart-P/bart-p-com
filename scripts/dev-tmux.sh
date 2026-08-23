#!/usr/bin/env bash

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(cd "$SCRIPT_DIR/.." && pwd)"

if [[ -z "${TMUX:-}" ]]; then
  printf 'Error: run this script inside an active tmux session.\n' >&2
  exit 1
fi

if [[ ! -f "$ROOT_DIR/package.json" || ! -f "$ROOT_DIR/composer.json" ]]; then
  printf 'Error: expected package.json and composer.json under %s\n' "$ROOT_DIR" >&2
  exit 1
fi

for cmd in tmux nvim opencode symfony; do
  if ! command -v "$cmd" >/dev/null 2>&1; then
    printf 'Error: missing required command: %s\n' "$cmd" >&2
    exit 1
  fi
done

if command -v mise >/dev/null 2>&1; then
  MISE_BIN="$(command -v mise)"
elif [[ -x "$HOME/.local/bin/mise" ]]; then
  MISE_BIN="$HOME/.local/bin/mise"
else
  printf 'Error: missing required command: mise\n' >&2
  exit 1
fi

SHELL_NAME="${SHELL##*/}"
case "$SHELL_NAME" in
  fish)
    MISE_ACTIVATE="$MISE_BIN activate fish | source"
    ;;
  bash)
    MISE_ACTIVATE="eval \"\$($MISE_BIN activate bash)\""
    ;;
  zsh)
    MISE_ACTIVATE="eval \"\$($MISE_BIN activate zsh)\""
    ;;
  *)
    printf 'Error: unsupported shell for mise activation: %s\n' "$SHELL_NAME" >&2
    exit 1
    ;;
esac

SESSION="$(tmux display-message -p '#S')"
CURRENT_INDEX="$(tmux display-message -p '#I')"
WINDOW_COUNT="$(tmux list-windows -t "$SESSION" | wc -l | tr -d ' ')"

tmux set-option -t "$SESSION" base-index 1
tmux set-option -t "$SESSION" renumber-windows on

create_window() {
  local index="$1"
  local name="$2"

  tmux new-window -d -t "$SESSION:$index" -n "$name" -c "$ROOT_DIR"
}

activate_mise() {
  local target="$1"

  tmux send-keys -t "$target" "$MISE_ACTIVATE" C-m
}

if [[ "$CURRENT_INDEX" != "0" && "$CURRENT_INDEX" != "1" ]]; then
  printf 'Error: run this script from the first tmux window in a new session.\n' >&2
  exit 1
fi

if [[ "$WINDOW_COUNT" != "1" ]]; then
  printf 'Error: expected a fresh tmux session with exactly one window.\n' >&2
  exit 1
fi

if [[ "$CURRENT_INDEX" != "1" ]]; then
  tmux move-window -s "$SESSION:$CURRENT_INDEX" -t "$SESSION:1"
fi

tmux rename-window -t "$SESSION:1" "nvim"
tmux send-keys -t "$SESSION:1" C-c
tmux send-keys -t "$SESSION:1" "cd '$ROOT_DIR'" C-m
activate_mise "$SESSION:1"
tmux send-keys -t "$SESSION:1" "nvim ." C-m

create_window "2" "shell"
activate_mise "$SESSION:2"

create_window "3" "opencode"
activate_mise "$SESSION:3"
tmux send-keys -t "$SESSION:3" "opencode" C-m

create_window "4" "sass"
activate_mise "$SESSION:4"
tmux send-keys -t "$SESSION:4" "npm run styles:watch" C-m

create_window "5" "contao"
activate_mise "$SESSION:5"
tmux send-keys -t "$SESSION:5" "if symfony server:status >/dev/null 2>&1; then symfony server:log; else symfony server:start --no-tls; fi" C-m

tmux select-window -t "$SESSION:1"
