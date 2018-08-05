<?php
/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 7/15/2018
 * Time: 10:57 AM
 */

if (! function_exists('url_admin'))
{
    function url_admin($url)
    {
        return url('/admin/'.$url);
    }
}