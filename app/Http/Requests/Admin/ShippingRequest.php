<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
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
            'id' => 'required|exists:settings',
            'value' => 'required',
            'plain_value' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'يجب اختيار وسيله دفع صحيحه',
            'value.required' => 'يجب اختيار اسم وسيله التوصيل',
            'plain_value.required' => 'يجب ادخال قيمه التوصيل ب0 او برقم صحيح',
            'plain_value.numeric' => 'قيمه التوصيل يجب ان تكون ارقام',
        ];
    }

}
