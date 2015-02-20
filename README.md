# codeigniter-validation-error-and-input-in-session
This repo will use codeigniter flash session to store form input and validation errors so that you can use redirect instead of loading view after validation failed.

## How to install ##

 1. copy MY_Form_validation.php file from libraries folder to your application/libraries.
 2. copy MY_form_helper.php file from helpers to your application/helpers.

## How to use ##
Now you can use the form helper as described in Codeigniter userguide even after redirect because the errors and input values are stored in session.
