<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::guest())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:25|min:1',
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
            'confirm_password' => ['required',
                'min:8',
                'max:16',
                'same:password',],
            'phone' => 'required|digits_between:9,10',
            'city' => 'required',
            'age' => 'required|digits_between:1,80',
        ];
    }
}
