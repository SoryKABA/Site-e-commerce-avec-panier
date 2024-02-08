<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'customer_name' => ['string', 'max:20', 'regex:/^[a-z0-9\-]+$/'],
            'customer_surname' => ['string', 'max:20', 'regex:/^[a-z0-9\-]+$/'],
            'customer_phone' => ['string', 'max:10'],
            'customer_email' => ['email', 'max:40'],
            'description' => ['string', 'max:250', 'regex:/^[a-z0-9\-]+$/'],
            'amount' => ['required']
        ];
    }
}
