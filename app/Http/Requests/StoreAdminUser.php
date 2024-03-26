<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminUser extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:admin_users,email',
            'phone' => 'required|min:8|max:14|unique:admin_users,phone',
            'nrc_no' => 'required',
            // 'dob' => 'required|date_format:Y-m-d',
            'gender' => 'required',
            'password' => 'required|min:8',
            // 'city_id'      => 'required'
        ];
    }

    public function messages(){
        return [
            // 'city_id.required'  => 'The city field is required.'
        ];
    }
}
