<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('set_val'))
{
    function set_val($name)
    {
    	$suffix='_input';
        $CI =& get_instance();
		 $CI->load->library('session');
		return $CI->session->flashdata($name.$suffix);    
	}   
}
if ( ! function_exists('get_error'))
{
    function get_error($name)
    {
    	$suffix='_error';
        $CI =& get_instance();
		 $CI->load->library('session');
		return $CI->session->flashdata($name.$suffix);    
	}   
}