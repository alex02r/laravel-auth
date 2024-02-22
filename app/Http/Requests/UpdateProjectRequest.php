<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name'=>'required',
            'description'=>'required',
            'date_start'=>'required'
        ];
    }
    public function messages(){
        return [
            'name' => 'Il Nome del progetto deve essere obbligatorio',
            'description' => 'La descrizione del progetto deve essere obbligatoria',
            'date_start' => 'La data di inizio del progetto deve essere obbligatoria',
        ];
    }
}
