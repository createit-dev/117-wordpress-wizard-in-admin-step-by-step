# Wordpress wizard in admin: step by step
Wizard step by step configurator in wp-admin area. Undistracted quick-setup for your plugin!

In this tutorial we will learn how to create step by step forms with pagination: Back / Next Step. All admin elements will be hidden to allow user to focus on wizard only. 

In addition: we will add options to jump between steps and always save current form! For example: you can start in step1 and jump directly to step3. Your changes from step1 will be automatically saved!

Single wizard step is just form with fields. Submit button is hidden using CSS (sr-only class). We're going to submit the form using JavaScript. By clicking any button or navigation with steps we will: update input 'redirectToUrl' (where to redirect after submit) and simulate clicking the submit input.

![](https://github.com/createit-dev/117-wordpress-wizard-in-admin-step-by-step/blob/master/ct-wp-wizard-admin/images/wp-wizard-screencast.gif)
