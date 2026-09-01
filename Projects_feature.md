# Projects Feature - Implementation Overview

This file is a working overview, not a strict specification. Decisions can change as the feature develops.

## 1. Technology Taxonomy

- [x] Create the `tl_technology` DCA
- [x] Add `name` and `slug` fields
- [x] Add validation and unique database indexes
- [x] Register the backend module
- [x] Sort technologies alphabetically by name
- [x] Add backend labels and field translations
- [x] Test technology management in the backend
- [ ] Create and register `TechnologyModel`

Technologies do not need their own `sorting` or `published` fields for now. Their order within a project will be stored in the project-technology relation.

---

## 2. Project Data Model

Decide before implementing the project DCA:

- [ ] Confirm that custom project records replace the existing News-based projects
- [ ] Choose between a long-description field and Contao content elements
- [ ] Choose between a dedicated gallery field and a gallery content element

Suggested project fields:

- title
- slug
- short description
- main image
- project URL
- GitHub URL
- date
- published

Use Contao image sizes to create thumbnails from the main image instead of storing a separate thumbnail.

---

## 3. Project Backend

- [ ] Create the `tl_project` DCA
- [ ] Add validation and database indexes
- [ ] Configure the backend list and operations
- [ ] Add image selection using the Contao file manager
- [ ] Add publishing controls
- [ ] Register the project backend module
- [ ] Add backend labels and field translations
- [ ] Test project management in the backend

---

## 4. Project Model

- [ ] Create and register `ProjectModel`
- [ ] Add a query for published projects ordered newest first
- [ ] Add a query for finding a published project by ID or slug

Keep the model simple and follow normal Contao conventions.

---

## 5. Project <-> Technology Relation

Projects can have multiple technologies, and technologies can belong to multiple projects.

Example:

- Project: Portfolio
- Technologies: PHP, Contao, Twig, JavaScript

Planned relation table: `tl_project_technology`

Suggested fields:

- project ID
- technology ID
- sorting

Tasks:

- [ ] Create the relation table and DCA
- [ ] Prevent duplicate project-technology assignments
- [ ] Add technology assignment to the project backend
- [ ] Preserve the chosen technology order per project
- [ ] Add queries for loading a project's technologies
- [ ] Add queries that support filtering projects by technology

---

## 6. Homepage Component

Create a custom frontend module or content element for selected projects.

Behavior:

- only published projects
- newest first
- maximum four projects
- pass projects and technologies to Twig

Each card shows:

- main image rendered at the appropriate image size
- title
- short description
- technologies
- link to the detail page

---

## 7. Projects Overview Page

- [ ] Create a project-list component
- [ ] Initially show all published projects
- [ ] Reuse the project-card template
- [ ] Later add filtering by technology

Example filter:

`All | PHP | Contao | Twig | JavaScript`

---

## 8. Project Detail Page

Each project gets its own detail URL, for example:

`/projects/my-project`

Show:

- title
- long-form content
- main image
- gallery
- technologies
- project URL
- GitHub URL

---

## 9. Twig Templates

Likely templates:

- `project_card.html.twig`
- `project_list.html.twig`
- `project_detail.html.twig`

Reuse `project_card.html.twig` between the homepage and projects overview.

---

## Implementation Order

```text
TechnologyModel
-> Project data-model decisions
-> Project DCA and ProjectModel
-> Project-technology relation
-> Frontend modules/controllers
-> Twig templates
-> Homepage, project list, and project detail page
```
