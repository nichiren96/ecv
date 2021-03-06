<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkill extends FormRequest
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
            'label'=> 'required',
            'description' => 'required'
        ];
    }


     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'label.required' => 'Veuillez mentionner une compétence',
            'description.required'  => 'Veuillez renseigner une brève description de cette compétence',
            
        ];
    }
}
