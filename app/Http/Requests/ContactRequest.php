<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'fullname' => 'required',
            'gender' => 'required',
            'email' => 'email',
            'postcode' => 'required',
            'opinion' => 'required',
        ];
    }
}