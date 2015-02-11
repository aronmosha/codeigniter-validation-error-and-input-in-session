<?php
class MY_Form_validation extends CI_Form_validation
{
  function __construct($config = array())
  {
    parent::__construct($config);
  }

  function persist($formData=null)
  {
    $CI =& get_instance();
    $CI->load->library('session');
    $errors =& _get_validation_object()->_error_array;
     foreach($errors as $Key => $Value)
      {
          $suffix='_error';
         $CI->session->set_flashdata($Key.$suffix, $Value);
      }
       foreach($formData as $Key => $Value)
       {
        $suffix='_input';
         $CI->session->set_flashdata($Key.$suffix, $Value);
       }
    return;
    
  }
}