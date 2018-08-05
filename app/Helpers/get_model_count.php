<?php
/**
 * Created by PhpStorm.
 * User: Cristian
 * Date: 7/19/2018
 * Time: 5:00 PM
 */

if (! function_exists('model_count'))
{
    function model_count(\Illuminate\Database\Eloquent\Collection $model)
    {
        return $model->count();
    }
}