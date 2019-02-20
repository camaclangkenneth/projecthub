<?php

namespace App\Modules\Client\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
                    'name' => 'required|string|max:64',
                    'contact1' => 'required|number|min:11|max:12',
                    'contactperson1' => 'required|string|min:3|max:50',
                    'address' => 'required|string|min:10|max:255',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|string|max:64',
                    'contact1' => 'required|number|min:10|max:12',
                    'contactperson1' => 'required|string|min:3|max:50',
                    'address' => 'required|string|min:10|max:255',
                ];
            }
            default: break;
        }
    }
}
