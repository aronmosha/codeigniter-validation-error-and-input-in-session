<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('set_value'))
{
    function set_value($name,$default='')
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
         $result=$CI->session->flashdata($name.$suffix);
         if($result==FALSE){
            return $default;
         }
         else{
            return $result;
         }    
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
    function set_radio($name,$value,$default='')
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
         $result=$CI->session->flashdata($name.$suffix);
         if($result==FALSE){
            if($value==$default) return 'checked';
         }
         else{
            if($result==$value) return 'checked';
         }   
    }   
}
if ( ! function_exists('set_select'))
{
    function set_select($name,$value,$default='')
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
         $result=$CI->session->flashdata($name.$suffix);
         if($result==FALSE){
            if($value==$default) return 'selected';
         }
         else{
            if($result==$value) return 'selected';
         }      
    }   
}
if ( ! function_exists('set_checkbox'))
{
    function set_checkbox($name,$value,$default='')
    {
        $suffix='_input';
        $CI =& get_instance();
         $CI->load->library('session');
         $result=$CI->session->flashdata($name.$suffix);
         if($result==FALSE){
            if($value==$default) return 'checked';
         }
         else{
            if($result==$value) return 'checked';
         }       
    }   
}