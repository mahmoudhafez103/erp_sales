<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateinvoiceDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'invoice_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|decimal',
            'unit_price' => 'required|decimal',
            'total_price' => 'required|decimal',
            'added_by' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'invoice_id.required' => 'A invoice_id is required',
            'product_id.required' => 'A product_id is required',
            'quantity.required' => 'A quantity is required',
            'quantity.decimal' => 'quantity shoud decimal',
            'unit_price.required' => 'A unit_price is required',
            'unit_price.decimal' => 'unit_price shoud decimal',
            'total_price.required' => 'A unit_price is required',
            'total_price.decimal' => 'total_price shoud decimal',
            'added_by.required' => 'A added_by is required',
        ];
    }
}