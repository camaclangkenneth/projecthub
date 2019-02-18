<?php

namespace App\Modules\Project\Http\Requests;

use App\Http\Requests\ApiRequest;

class ProjectRequest extends ApiRequest
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
            case 'POST':
            {
                return [
                    'title' => 'required',
                    'description' => 'required',
                    'status' => 'required',
                    'deadline' => 'required',
                ];
            }
            case 'PUT':
            {
                return [
                    'title' => 'required',
                    'description' => 'required',
                    'status' => 'required',
                    'deadline' => 'required',
                ];
            }
            case 'PATCH':
            {
                return [
                    'manager' => 'required',
                    'client' => 'required',
                ];
            }
            default: break;
        }
        
    }
}
