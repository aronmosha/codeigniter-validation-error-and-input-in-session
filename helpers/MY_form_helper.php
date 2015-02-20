<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('set_value'))
{
    function set_value($name)
    {
    	$suffix='_input';
        $CI =& get_instance();
		 $CI->load->library('session');
		return $CI->session->flashdata($name.$suffix);    
	}   
}
if ( ! function_exists('form_error'))
{
    function form_error($name)
    {
    	$suffix='_error';
        $CI =& get_instance();
		 $CI->load->library('session');
		return $CI->session->flashdata($name.$suffix);    
	}   
}
if ( ! function_exists('set_radio'))
{
    function set_radio($name,$value)
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
        return ($CI->session->flashdata($name.$suffix)==$value)?"cheked":"";   
    }   
}
if ( ! function_exists('set_select'))
{
    function set_select($name,$value)
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
        return ($CI->session->flashdata($name.$suffix)==$value)?"cheked":"";     
    }   
}
if ( ! function_exists('set_checkbox'))
{
    function set_checkbox($name,$value)
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
        return ($CI->session->flashdata($name.$suffix)==$value)?"cheked":"";       
    }   
}