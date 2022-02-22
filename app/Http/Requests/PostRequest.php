<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' =>['required','min:3','unique:posts'],
            'description' => ['required','min:10']
        ];
    }

    public function messages() {
        return [
             'title.required' => 'The Title Is Required',
            'title.min' => 'The Title Must Be At Least 3 Chars',
            'title.unique' =>'Title Must Be Unique',
            'description.required' => 'The Description Is Required',
            'description.min' => 'The Description Must Be 10 Chars'
        ];
    }
}
