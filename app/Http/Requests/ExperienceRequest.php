<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
            return array();
            }
            case 'POST':
            {
                return array(
                    'title'=>'required|string|max:255',
                    'description'=>'required|string|max:555',
                    'company_name'=>'required|string|max:255',
                    'start_date'=>'required|date',
                    // 'end_date'=>'date',
                );
            }
            case 'PUT':
            {
                return array(
                    'title'=>'required|string|max:255',
                    'description'=>'required|string|max:555',
                    'company_name'=>'required|string|max:255',
                    'start_date'=>'required|date',
                );
            }
            case 'PATCH':

        }
    }
}
