<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'vin' => 'required_wihout:registration|min:4|max:10|unique:cars',
            'color' => 'required|string',
            'price' => 'integer',
            'description' => 'string',
            'registration' => 'required_without:vin',
            'registraion_date' => 'date',
            'model_id' => 'required|integer',
            'brand_id' => 'required|integer',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return ["ok"];
        return [
            'vin.required_without' => 'vin jest wymagany jesli nie ma rejestracji',
            'vin.min:4' => 'vin musi mieć minimum 4 znaki',
            'vin.max:10' => 'vin musi miec maksimum 10 znaków',
            'vin.unique' => 'Istnieje już taki nr vin',
            'color.required' => 'kolor jest wymagany',
            'color.string' => 'kolor musi być tekstem',
            'price.int' => 'cena musi być liczba',
            'description.string' => 'opis musi być tekstem',
            'registration.required_without' => 'rejestracja jest wmagana bez vinu',
            'model_id.required' => 'model jest wymagany'
        ];
    }
}
