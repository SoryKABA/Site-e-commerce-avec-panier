<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
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
            'title' => ['required', 'min:5'],
            'description' => ['required', 'min:20'],
            'quantity' => ['required', 'min:1'],
            'price' => ['required', 'min:0', 'integer'],
            'categories_id' => ['required', 'exists:categories,id'],
            'sizes_id' => ['required', 'exists:sizes,id'],
            'slug' => ['required', 'regex:/^[a-z0-9\-]+$/', Rule::unique('products')->ignore($this->route()->parameter('product'))],
            'pictures' => ['array'],
            'pictures.*' => ['image', 'max:2000']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->input('slug') ?: Str::slug($this->input('title'))
        ]);
    }
}
