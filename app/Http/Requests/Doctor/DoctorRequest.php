<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' =>      ['required', 'string', 'email'],
            'firstname'=>   ['required', 'string',],
            'lastname'=>    ['required', 'string',],
            'phone'=>       ['required'],
            'year'=>        ['required'],
            'birthdate'=>   ['required'],
            'exprience'=>  ['required'],
            'bloodGroup'=>  ['required'],
            'university'=>  ['required'],
            'gender'=>      ['required'],
            'photo'=>       ['nullable'],
            'linkedin'=>    ['required'],
            'twitter'=>     ['required'],
            'instagram'=>   ['required'],
            'degree'=>      ['required'],
            'specialization'=> ['required']
           
        ];
    }
}
