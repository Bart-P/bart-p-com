# Projects Feature – Overview

## 1. Data Model

### Project
- title
- slug
- short description
- long description
- main image
- thumbnail
- gallery images
- project URL
- GitHub URL
- published
- date / sorting
- technologies relation

### Technology
- name
- slug
- sorting
- published if needed

---

## 2. Contao Backend

Create DCAs for:

- `tl_project`
- `tl_technology`

This gives us backend management for:

- creating/editing projects
- creating/editing technologies
- assigning technologies to projects
- selecting images with the Contao file manager
- validation (where?)

---

## 3. Models

Create Contao models:

- `ProjectModel`
- `TechnologyModel`

Keep these simple and use normal Contao conventions.

---

## 4. Project ↔ Technology Relation

Projects can have multiple technologies.

Example:

- Project
  - PHP
  - Laravel
  - Vue
  - TypeScript

This should be implemented as a reusable relation so we can later filter projects by technology.

---

## 5. Homepage Component

Create a custom frontend module/content element for:

**Selected Projects**

Behavior:

- only published projects
- newest first
- maximum 4 projects
- pass projects to Twig

Each card shows:

- main image
- title
- short description
- technologies
- link to detail page

---

## 6. Projects Overview Page

Create a separate project-list component.

Initially:

- show all published projects

Later:

- filtering by technology

Example:

`All | PHP | Laravel | Vue | TypeScript`

---

## 7. Project Detail Page

Each project gets its own detail page, for example:

`/projects/my-project`

Show:

- title
- long description
- main image
- gallery
- technologies
- project URL
- GitHub URL

---

## 8. Twig Templates

Likely:

- `project_card.html.twig`
- `project_list.html.twig`
- `project_detail.html.twig`

Reuse `project_card` between homepage and project overview where possible.

---

## Structure

```text
Contao Backend
↓
Projects + Technologies
↓
Models
↓
Frontend Modules / Controllers
↓
Twig
↓
Homepage / Project List / Project Detail
```
