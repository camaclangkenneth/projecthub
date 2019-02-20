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
        return [
            'title' => 'required|string|max:64',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:64',
            'deadline' => 'required|string|max:64',
        ];
    }
}
