# React Subpages

This module will allow users to include any number of React Apps on pages of their choosing on any non-decoupled Drupal site. They will be able to select by entity type, view, url, or other factors. Users will also be able to determine whether they want to reference the remote library or a local copy. Lastly, the module will let users decide which region will be used to display React content and the location of the javascript being used to process the content.

## To Do

- [x] Create basic structure of Module
- [x] Simple example of using the Module to include the library on a specific page
- [x] Evoke the inclusion of the library globally
- [x] Create basic admin page that either includes the library globally or does not
- [ ] Admin setting that determines the location of the App javascript file that manages the React content - just one app for now
- [ ] Admin setting that determines the region which will include React App - just one app for now
- [ ] Add an admin setting for conditions under which the App appears
> - [ ] Content Type
> - [ ] View Display
> - [ ] Paths
- [ ] Add logic to allow for the inclusion of multiple apps, each with the settings above (location, javascript file, context. etc.)
- [ ] Add logic for allowing the user to use diofferent versions of react, including remote versions?

## Basic Usage

You can globally include the React library by checking the "Enable React Globally" checkbox on the React Subpages Settings page (/admin/configuration/react-sub/settings).



