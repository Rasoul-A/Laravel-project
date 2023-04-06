<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;// Make this true temporary
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'name'=>['required','alpha','min:6','max:10'],
                'email'=>['required','email'],
                'password'=>['required']
            ];
    }
    public function messages()
    {
        return [
            'name.required'=>'This is a changed text for required validation rule' //for changing default text of validation rule.
            ,'email.email' =>'I changed email error text',
            'email.required'=>'فیلد ایمیل مورد نیاز است.'
        ];
    }
}
