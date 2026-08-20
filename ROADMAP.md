# Contao Learning Roadmap

Target: build and publish a production version of bart-p.com while learning Contao, Symfony, and one small Vue integration.

Work from top to bottom. The first unchecked item is the next task.

## 1. Local Setup

- [x] Check PHP and required extensions
- [x] Check Composer
- [x] Install Symfony CLI
- [x] Check MariaDB
- [x] Create a Contao Managed Edition project
- [ ] Initialize Git
- [x] Check `.gitignore`
- [x] Confirm secrets are not tracked
- [x] Create a database and database user
- [x] Configure `.env.local`
- [x] Test the database connection
- [x] Run migrations
- [ ] Create a backend administrator
- [ ] Start the local server
- [ ] Log into the backend
- [ ] Find and inspect the Contao logs

## 2. Basic Contao Website

- [ ] Create a website root
- [ ] Configure language and fallback
- [ ] Create Home, About, and Contact pages
- [ ] Create a theme
- [ ] Create a navigation module
- [ ] Create a Twig page layout
- [ ] Add navigation to the header slot
- [ ] Add articles to the main slot
- [ ] Assign the layout to the website root
- [ ] Create an article on every page
- [ ] Add basic content elements
- [ ] Confirm every page renders

## 3. Website Structure And Content

- [ ] Inventory the current bart-p.com content
- [ ] Decide what to keep, rewrite, or remove
- [ ] Finalize the page tree
- [ ] Define homepage sections
- [ ] Define About page sections
- [ ] Define Projects page sections
- [ ] Define Notes page sections
- [ ] Define Contact page sections
- [ ] Add Legal Notice and Privacy Policy
- [ ] Add rough real content
- [ ] Import required images and files
- [ ] Review the complete content structure

## 4. Native Contao Features

- [ ] Create a News archive
- [ ] Create News list and reader pages
- [ ] Publish one test post
- [ ] Decide how videos fit into News
- [ ] Create a contact form
- [ ] Configure form email delivery
- [ ] Create a useful 404 page
- [ ] Try backend user permissions

## 5. Custom Theme

- [ ] Create version-controlled theme files
- [ ] Create version-controlled Twig templates
- [ ] Define colors, typography, and spacing
- [ ] Style the page container
- [ ] Build the header
- [ ] Style the navigation
- [ ] Style content elements
- [ ] Build the footer
- [ ] Add responsive navigation
- [ ] Add mobile layouts
- [ ] Customize the page template
- [ ] Customize one content-element template
- [ ] Test every page at common screen sizes

## 6. Custom Content Element

- [ ] Create the application code structure
- [ ] Choose a useful custom content element
- [ ] Register the Symfony service
- [ ] Configure its DCA fields
- [ ] Add backend labels and translations
- [ ] Create its Twig template
- [ ] Render it on a page
- [ ] Add validation
- [ ] Write tests
- [ ] Run its database changes through migrations

## 7. Projects Feature

- [ ] Define project fields
- [ ] Create project persistence
- [ ] Create backend project management
- [ ] Add publishing controls
- [ ] Add sorting
- [ ] Add backend permissions
- [ ] Create project list rendering
- [ ] Create project detail rendering
- [ ] Add projects through the backend
- [ ] Add tests

## 8. Vue Integration

- [ ] Add the frontend build setup
- [ ] Install Vue
- [ ] Create a Symfony JSON endpoint
- [ ] Return project data
- [ ] Build a project filter component
- [ ] Mount Vue inside the Contao page
- [ ] Keep the server-rendered list as fallback
- [ ] Build production frontend assets
- [ ] Test with JavaScript disabled

## 9. Production Quality

- [ ] Finish the real content
- [ ] Check heading structure
- [ ] Check keyboard navigation
- [ ] Check color contrast
- [ ] Add useful page titles and descriptions
- [ ] Optimize images
- [ ] Check frontend performance
- [ ] Test the contact form
- [ ] Check error pages
- [ ] Review privacy requirements
- [ ] Create a database backup
- [ ] Create a files backup

## 10. Hetzner Deployment

- [ ] Check the available PHP versions
- [ ] Check required PHP extensions
- [ ] Check SSH and Composer access
- [ ] Check Contao Manager support
- [ ] Check SFTP access
- [ ] Check phpMyAdmin access
- [ ] Configure the domain document root as `public/`
- [ ] Choose SSH or SFTP deployment
- [ ] Transfer the application
- [ ] Create the production `.env.local`
- [ ] Install production dependencies
- [ ] Export the local database
- [ ] Import the production database
- [ ] Transfer the `files/` directory
- [ ] Run Contao setup
- [ ] Run migrations
- [ ] Run file synchronization
- [ ] Configure HTTPS
- [ ] Test the site before switching domains
- [ ] Back up the existing website
- [ ] Point bart-p.com to the Contao site

## 11. After Launch

- [ ] Confirm automated backups
- [ ] Check production logs
- [ ] Test the contact form again
- [ ] Document the code deployment process
- [ ] Document the database restore process
- [ ] Record lessons for the Listegy build
