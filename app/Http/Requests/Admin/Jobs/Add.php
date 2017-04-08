<?php

namespace App\Http\Requests\Admin\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class Add extends FormRequest
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
            'title' => 'required' ,
            'summary' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'experience' => 'required',
            'employment_type' => 'required',
            'expiry' => 'required',
            'department' => 'required|numeric|exists:departments,id',
            'locations' => 'required|numeric|exists:locations,id',
            'number_positions' => 'required|numeric',
            'salary' => 'required|numeric',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'lang' => 'required',
            'image_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2024',

        ];
    }
}
