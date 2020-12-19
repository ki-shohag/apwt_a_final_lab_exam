<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|min:3',
            'user_name' => 'required|min:3',
            'company_name' => 'required|min:3',
            'password' => 'required|min:3',
            'confirm_password' => 'required|min:3',
            'phone' => 'required|min:11',
            'profile_pic' => 'required'
        ];
    }

    public function messages(){
        return [
            'full_name.required'=> "Name cannot be empty!",
            'full_name.min'=> "At least 3 characters are required!",
            'user_name.required'=> "User Name cannot be empty!",
            'user_name.min'=> "At least 3 characters are required!",
            'company_name.required'=> "Company Name cannot be empty!",
            'company_name.min'=> "At least 3 characters are required!",
            'password.required'=> "Password cannot be empty!",
            'password.min'=> "At least 3 characters are required!",
            'confirm_passwor.required'=> "Confirm Password cannot be empty!",
            'confirm_password.min'=> "At least 3 characters are required!",
            'phone.required'=> "Phone cannot be empty!",
            'phone.min'=> "At least 11 digits are required!",
            'profile_pic.required'=> "Please select a profile picture!!",
            'profile_pic.min'=> "At least 3 characters are required!",
        ];
    }
}
