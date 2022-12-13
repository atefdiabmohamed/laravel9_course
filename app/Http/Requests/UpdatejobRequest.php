<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatejobRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
       'job_name'=>'required',
       'job_active'=>'required'
        ];
    }
    public function messages()
    {
     return [
'job_name.required'=>'the name of job is required',
'job_active.required'=>'the active status of job is required',

    
     ];   
    }
}
