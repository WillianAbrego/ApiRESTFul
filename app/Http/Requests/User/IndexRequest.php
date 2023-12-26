<?php

namespace App\Http\Requests\User;

use App\Exceptions\JsonAuthorizationException;
use App\Exceptions\JsonValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'foo' => 'required',
        ];
    }
    protected function failedAuthorization()
    {
        throw new JsonAuthorizationException;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new JsonValidationException($validator);
    }
}
