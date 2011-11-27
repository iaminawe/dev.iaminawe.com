# BACKGROUND IMAGES #

This module enables users to set custom background images to any 'section' of the site. Leveraging the power of Context, this module defines a new context reaction called "Background Image" which will let you change the background image based on any criteria you can craft with context's conditions.

Background Image uses an existing content type as the interface to manage the images. So, you would first have to create a content type with an image upload field (media fields are also supported), then configure background image to use that content type. CSS is used to set/override the 'background' css property on the page of any element.

## Getting Started ##

Setup is fairly straightforward, but you will need to configure a few things to get started.

- Create a new content type with an image field and create a node with an image uploaded.
- Go to the settings page (admin/config/content/background-image) and in the 'Node Settings' section select the node type you created as well as the image field you uploaded. Now you have an image field mapped directly to the background image module.
- Still in the settings page, provide a css selector and color and repeat attributes in the 'Default CSS Settings' section.
Create a context, and add the reaction 'Background Image'. There will be a select list with all the nodes of the specified type to choose from. Additionally you can override any css setting here as well.
- If you want, you can also set a weight for the background image. The weight helps the module decide which background image to use if there are overlapping contexts. Useful if you want to setup a default image as a site-wide context, and have other more specific contexts override it.