# Contao Learning Roadmap

Target: build and publish a production version of bart-p.com while learning Contao. Additional Symfony, custom content-element, Notes, and Vue work can follow after launch.

Work from top to bottom. The first unchecked item is the next task.

## 1. Local Setup

- [x] Check PHP and required extensions
- [x] Check Composer
- [x] Install Symfony CLI
- [x] Check MariaDB
- [x] Create a Contao Managed Edition project
- [x] Initialize Git
- [x] Check `.gitignore`
- [x] Confirm secrets are not tracked
- [x] Create a database and database user
- [x] Configure `.env.local`
- [x] Test the database connection
- [x] Run migrations
- [x] Create a backend administrator
- [x] Start the local server
- [x] Log into the backend
- [x] Find and inspect the Contao logs

## 2. Basic Contao Website

- [x] Create a website root
- [x] Configure language and fallback
- [x] Create Home, Projects, and Contact pages
- [x] Create a theme
- [x] Create a navigation module
- [x] Create a Twig page layout
- [x] Add navigation to the header slot
- [x] Add articles to the main slot
- [x] Assign the layout to the website root
- [x] Create an article on every page
- [x] Add basic content elements
- [x] Confirm every page renders

## 3. Homepage

Work mobile-first. Complete the homepage before moving to the next page.

### Content Structure

- [x] Inventory the existing bart-p.com content
- [x] Decide what to keep, rewrite, or remove
- [x] Define the homepage sections
- [x] Add the hero content
- [x] Add the hero links
- [x] Create the Projects News archive
- [x] Add the first project teaser
- [x] Create a homepage Projects list module
- [x] Limit the homepage project list to four entries
- [x] Add the Projects module to the homepage
- [ ] Review the complete homepage content structure

### Design Foundation

- [ ] Create version-controlled theme files
- [ ] Create version-controlled Twig templates
- [ ] Choose the initial visual direction
- [ ] Define colors
- [ ] Define typography
- [ ] Define spacing and content widths
- [ ] Style the base page container

### Homepage Design

- [ ] Build and style the header
- [ ] Style the navigation
- [ ] Style the hero
- [ ] Style the hero links
- [ ] Design the reusable project preview
- [ ] Style the homepage project list
- [ ] Style the View Projects link
- [ ] Build and style the footer
- [ ] Add project images if required by the design
- [ ] Add responsive enhancements for larger screens
- [ ] Test the homepage at narrow, medium, and wide widths
- [ ] Check homepage headings, links, contrast, and keyboard navigation

## 4. Projects

Projects are stored as News records in the Projects archive. The homepage and Projects page reuse the same records and project-preview template.

### First Project

- [ ] Define the standard project content structure
- [ ] Complete one real project teaser
- [ ] Add its teaser image
- [ ] Add its full project content
- [ ] Add technologies used
- [ ] Add project and source links where applicable
- [ ] Decide how publication dates should be displayed
- [ ] Decide whether homepage projects are selected using the Featured setting

### Project Listing

- [ ] Create the complete Projects list module
- [ ] Add the Projects list module to the Projects page
- [ ] Reuse the homepage project-preview template
- [ ] Style the Projects page introduction
- [ ] Style the complete project list
- [ ] Configure pagination if required
- [ ] Test empty, short, and long teaser content

### Project Details

- [ ] Create a Project Reader page
- [ ] Create a News Reader module for projects
- [ ] Add the reader module to the Project Reader page
- [ ] Configure the Projects archive redirect page
- [ ] Design the project-detail layout
- [ ] Style project technologies and external links
- [ ] Add responsive image handling
- [ ] Test navigation from preview to detail page

### Remaining Projects

- [ ] Add the remaining project records
- [ ] Add and optimize project images
- [ ] Review all project teasers
- [ ] Review all project detail pages
- [ ] Test the homepage and Projects page with real project data

## 5. Contact

Complete the content and form before designing the page.

### Contact Content

- [ ] Define the Contact page sections
- [ ] Add the final contact introduction
- [ ] Add email, GitHub, and LinkedIn details
- [ ] Review the Contact page content structure

### Contact Form

- [ ] Define the required form fields
- [ ] Create the contact form
- [ ] Add validation
- [ ] Add a privacy notice or consent field if required
- [ ] Configure form email delivery
- [ ] Create a useful success response
- [ ] Test successful submissions
- [ ] Test validation errors
- [ ] Test email delivery

### Contact Design

- [ ] Style the Contact page
- [ ] Style form controls
- [ ] Style validation and success messages
- [ ] Add responsive enhancements
- [ ] Check labels, focus states, contrast, and keyboard navigation

## 6. Legal Pages

- [ ] Create the Legal Notice page
- [ ] Add the final Legal Notice content
- [ ] Create the Privacy Policy page
- [ ] Document contact-form data handling in the Privacy Policy
- [ ] Add the final Privacy Policy content
- [ ] Add both legal pages to the footer
- [ ] Apply the shared text-page design
- [ ] Check legal links on mobile and desktop
- [ ] Review the legal and privacy requirements

## 7. Site Completion

- [ ] Create a useful 404 page
- [ ] Add useful page titles
- [ ] Add useful meta descriptions
- [ ] Check the heading structure on every page
- [ ] Check keyboard navigation
- [ ] Check visible focus states
- [ ] Check color contrast
- [ ] Check responsive navigation
- [ ] Test all internal and external links
- [ ] Add alternative text to meaningful images
- [ ] Optimize all production images
- [ ] Check frontend performance
- [ ] Test the contact form again
- [ ] Check error pages
- [ ] Test every page at common screen sizes
- [ ] Test intermediate viewport widths
- [ ] Review the complete site content
- [ ] Create a database backup
- [ ] Create a files backup

## 8. Hetzner Deployment

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

## 9. After Launch

- [ ] Confirm automated backups
- [ ] Check production logs
- [ ] Test the contact form again
- [ ] Check production email delivery
- [ ] Check production pages and project details
- [ ] Document the code deployment process
- [ ] Document the database restore process
- [ ] Record lessons for the Listegy build

## 10. Future Learning

These tasks are intentionally outside the initial launch scope.

### Notes

- [ ] Create a Notes News archive
- [ ] Define the note content structure
- [ ] Create Notes list and reader pages
- [ ] Create homepage and complete Notes list modules
- [ ] Publish the first note
- [ ] Decide how videos fit into Notes
- [ ] Add a Notes section to the homepage

### Custom Content Element

- [ ] Choose a useful custom content element
- [ ] Create the application code structure
- [ ] Register the Symfony service
- [ ] Configure its DCA fields
- [ ] Add backend labels and translations
- [ ] Create its Twig template
- [ ] Add validation
- [ ] Write tests
- [ ] Run its database changes through migrations

### Vue Integration

- [ ] Choose a small enhancement that benefits from Vue
- [ ] Add the frontend build setup
- [ ] Install Vue
- [ ] Create a Symfony JSON endpoint if required
- [ ] Build the Vue component
- [ ] Keep server-rendered content as a fallback
- [ ] Build production frontend assets
- [ ] Test with JavaScript disabled

### Additional Contao Learning

- [ ] Try backend user permissions
- [ ] Customize another content-element template
- [ ] Explore additional native Contao features
