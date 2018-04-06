<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganizationRequest extends FormRequest
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
            'street' => 'required',
            'houseno' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'plan_id' => 'required',
            'accept' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vereinsname',
            'street.required' => 'Strasse',
            'houseno.required' => 'Hausnummer',
            'zipcode.required' => 'PLZ',
            'city.required' => 'Stadt',
            'tel.required' => 'Telefonnummer',
            'email.required' => 'E-Mail-Adresse',
            'plan_id.required' => 'Plan',
            'accept.required' => 'AGB Bestätigen',
        ];
    }
}
