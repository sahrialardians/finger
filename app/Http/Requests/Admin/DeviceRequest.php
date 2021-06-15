<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DeviceRequest extends FormRequest
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
            'name' => 'required',
            'device_number' => 'required|int',
            'type_of_communication' => 'required',
            'ip_address' => 'required',
            'ip_address' => 'required',
            'port' => 'required|int',
            'location' => 'required'
        ];
    }
}
