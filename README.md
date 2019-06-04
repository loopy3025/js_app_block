# Javascript App Block Module

This module will allow users to include any number of JS Apps (such as React or Angular) on any non-decoupled Drupal site. Users will also be able to determine whether they want to reference the remote library or a local copy. Using blocks, the module will let users decide which region will be used to display JS app content and the location of the javascript being used to process the app.

## To Do

- [x] Create basic structure of Module
- [x] Simple example of using the Module to include the library on a specific page
- [x] Evoke the inclusion of the library globally
- [x] Create basic admin page that either includes the library globally or does not
- [ ] Admin setting that determines the location of the App javascript file that manages the React content - just one app for now
- [ ] Programatically create a block for the react app to appear in - just one app for now (file upload to private, block class)
- [ ] Add logic to allow for the inclusion of multiple apps, each with the settings above (block, javascript file, context. etc.) *Can we do this by adding a URL field to a custom block type instead of forcing users to utilize the admin page for this?*
- [ ] Add logic for allowing the user to use different versions of react, including remote versions?
- [ ] Add logic for allowing users to select whatever library they want to go along with the javascript

## Basic Usage

You can globally include the React library by checking the "Enable React Globally" checkbox on the React Subpages Settings page (/admin/configuration/react-sub/settings).



