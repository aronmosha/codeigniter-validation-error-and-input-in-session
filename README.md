# codeigniter-validation-error-and-input-in-session
This repo will use codeigniter flash session to store form input and validation errors so that you can use redirect instead of loading view after validation failed.

## How to install ##

 1. copy MY_Form_validation.php file from libraries folder to your application/libraries.
 2. copy my_form_helper.php file from helpers to your application/helpers.

## How to use ##
You should load session and form validation libraries.

    $autoload['libraries'] = array('form_validation','session');

You can load the my_form_helper on autoload.php

    $autoload['helper'] = array('url','form','my_form');

or 
using.

    $this->load-helper('my_form'); 

whenever you want to use it.

Now form_validation has the method persist which will persit the error messages and form input for next reload all you need to do is call the function and pass in the posted data.

    $this->form_validation->persist($_POST);

You can now get the form input by

    set_val('name');

And Error by.

    get_error('name');

## Example ##
View:

    		  <div class="form-group">
			    <label for="Email"  class="col-sm-2 control-label">Email </label>
			    <div class="col-sm-8">
			      <input type="email" value="<?=set_val('email'); ?>" class="form-control" name="email">
			      <span class="validation-error"><?=get_error('email'); ?></span>
			    </div>
			  </div>

Controller function which process form.

    	public function do_login()

	{

		$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run()==FALSE){

			$this->form_validation->persist($_POST);

			redirect('login');

		}

		else{
			//Validation passed
		}

	}


