<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{

    public function authorize(): bool
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('update');
    }

    public function rules(): array
    {
        $method = $this->method();
        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'type' => ['required', Rule::in(['I', 'B', 'i', 'b'])],
                'email' => ['required', 'email'],
                'address' => ['required'],
                'city' => ['required'],
                'postalCode' => ['required'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'type' => ['sometimes', 'required', Rule::in(['I', 'B', 'i', 'b'])],
                'email' => ['sometimes','required', 'email'],
                'address' => ['sometimes','required'],
                'city' => ['sometimes','required'],
                'postalCode' => ['sometimes','required'],
            ];
        }



    }

    function prepareForValidation()
    {
        if ($this->postalCode) {


            $this->merge([
                'postal_code' => $this->postalCode
            ]);
        }
    }
}
