# Javascript App Block Module

This module will allow users to include any number of JS Apps (such as React or Angular) on any non-decoupled Drupal site. Users will also be able to determine whether they want to reference the remote library or a local copy. Using blocks, the module will let users decide which region will be used to display JS app content and the location of the javascript being used to process the app.

## To Do

- [x] Create basic structure of Module
- [x] Simple example of using the Module to include the library on a specific page
- [x] Evoke the inclusion of the library globally
- [x] Create basic admin page that either includes the library globally or does not
- [x] Admin setting that determines the location of the App javascript file that manages the React content - just one app for now
- [x] Programatically create a block for the react app to appear in - just one app for now (file upload to private, block class)
- [x] Add logic to allow for the inclusion of multiple apps, each with the settings above (block, javascript file, context. etc.) 
- [ ] Apply class from custom block to the block itself using a template
- [ ] Apply custom app library only if the block appears on the page
- [ ] Test with actual react app code
- [ ] Test with react app consuming jquery from a local View
- [ ] Add logic for allowing the user to use different versions of react, including remote versions?
- [ ] Add logic for allowing users to select whatever library they want to go along with the javascript

## Basic Usage

You can globally include the React library by checking the "Enable React Globally" checkbox on the React Subpages Settings page (/admin/configuration/react-sub/settings).



