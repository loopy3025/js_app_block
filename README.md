# React Subpages

This module will allow users to include any number of React Apps on pages of their choosing on any non-decoupled Drupal site. They will be able to select by entity type, view, url, or other factors. Users will also be able to determine whether they want to reference the remote library or a local copy. Lastly, the module will let users decide which region will be used to display React content and the location of the javascript being used to process the content.

## To Do

- [x] Create basic structure of Module
- [x] Simple example of using the Module to include the library on a specific page
- [x] Evoke the inclusion of the library globally
- [ ] Create basic admin page that either includes the library or does not
- [ ] Admin setting that determines the region which will include React App
- [ ] Admin setting that determines the location of the App javascript file that manages the React content
- [ ] Create logic for the React App object in the database as a way of organizing all the other data for an instance of React content. At this early stage, only include the App Region and location of the App javascript.
- [ ] Add an admin setting for conditions under which the App appears
> - [ ] Content Type: checkbox
> - [ ] View Display: checkbox
> - [ ] Paths: textbox with a different path on each line

## Notes
