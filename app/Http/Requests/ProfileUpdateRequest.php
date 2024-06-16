<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'dni' => ['required', 'string', 'size:9', 'unique:users,dni,' . $this->user()->id . ',id,deleted_at,NULL'],
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'integer:9', 'unique:users,phoneNumber,' . $this->user()->id . ',id,deleted_at,NULL'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,' . $this->user()->id . ',id,deleted_at,NULL'],
            'address' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'postalCode' => ['required', 'integer:5'],
        ];
    }

    public function messages()
    {
        return [
            'dni.required' => 'Debe introducir el DNI.',
            'dni.size' => 'El DNI debe tener 9 caracteres.',
            'dni.unique' => 'El DNI ya existe.',
            'name.required' => 'Debe introducir el nombre.',
            'name.max' => 'El nombre debe tener menos de 255 caracteres.',
            'surname.required' => 'Debe introducir los apellidos.',
            'surname.max' => 'Los apellidos deben tener menos de 255 caracteres.',
            'phoneNumber.required' => 'Debe introducir el número de teléfono.',
            'phoneNumber.integer' => 'El teléfono sólo puede contener 9 números.',
            'phoneNumber.unique' => 'El número de teléfono ya existe.',
            'email.required' => 'Debe introducir el correo electrónico.',
            'email.lowercase' => 'El correo electrónico debe escribirse en minúscula.',
            'email.email' => 'El formato del correo electrónico no es correcto.',
            'email.max' => 'El correo electrónico debe tener menos de 255 caracteres.',
            'email.unique' => 'El correo electrónico ya existe.',
            'address.required' => 'Debe introducir la dirección.',
            'address.max' => 'La dirección debe tener menos de 255 caracteres.',
            'location.required' => 'Debe introducir la localidad.',
            'location.max' => 'La localidad debe tener menos de 255 caracteres.',
            'province.required' => 'Debe introducir la provincia.',
            'province.max' => 'La provincia debe tener menos de 255 caracteres.',
            'postalCode.required' => 'Debe introducir el código postal.',
            'postalCode.integer' => 'El código postal sólo puede contener 5 números.',
        ];
    }
}
