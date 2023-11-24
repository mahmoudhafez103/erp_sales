<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreinvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'invoice_date' => 'required',
            'customer_code' => 'required',
            'is_approved' => 'required',
            'notes' => 'required',
            'discount_value' => 'required|decimal',
            'total_cost_items' => 'required|decimal',
            'total_befor_discount' => 'required|decimal',
            'total_cost' => 'required|decimal',
            'pill_type' => 'required',
            'added_by' => 'required|int',
        ];
    }

    public function messages(): array
    {
        return [
            'invoice_date.required' => 'A invoice_date is required',
            'customer_code.required' => 'A customer_code is required',
            'is_approved.required' => 'A is_approved is required',
            'notes.required' => 'A notes is required',
            'total_cost_items.required' => 'A total_cost_items is required',
            'total_befor_discount.required' => 'A total_befor_discount is required',
            'total_cost.required' => 'A total_cost is required',
            'pill_type.required' => 'A pill_type is required',
            'added_by.required' => 'A added_by is required',
        ];
    }
}