<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('admin'))
{
    /**
     * Check if we are viewing the admin area
     *
     * @return bool
     */
    function admin()
    {
        return get_instance()->uri->segment(1) === 'admin';
    }
}

if ( ! function_exists('admin_url'))
{
    /**
     * site_url function prefixed with admin/
     *
     * @param string $url
     * @return string
     */
    function admin_url($url = '')
    {
        return site_url('admin/'.$url);
    }
}

if ( ! function_exists('refresh'))
{
    /**
     * Reload current page
     *
     * @return void
     */
    function refresh()
    {
        redirect(current_url(), 'refresh');
    }
}
