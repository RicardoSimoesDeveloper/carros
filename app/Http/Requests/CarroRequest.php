<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CarroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        
        return [
            'marca' => ['required', 'string', 'max:30'],
            'modelo' => ['required', 'string', 'max:30'],
            'ano' => ['required', 'numeric', 'digits:4'],
            'ano_modelo' => ['numeric', 'digits:4'],
            'km' => ['numeric', 'min:1', 'max:8'],
            'tipo_combustivel' => ['max:20'],
            'motor' => ['max:5', 'min:1'],
            'cor' => ['max:20'],
            'tipo_direcao'  => ['max:20'],
            'alarme'  => ['min:3', 'Max:3',],
            'placa'  => ['min:7', 'max:7'],
            'valor'  => ['numeric'],
            'qntd_portas'  => ['numeric', 'digits:1'],
        ];
    }

    public function attributes()
    {
        $columns = DB::select(
            'SHOW FULL COLUMNS FROM carros'
        );
        $attributes = [];
        foreach ($columns as $column) {
            $attributes[$column->Field] = (!empty($column->Comment)) ? $column->Comment : $column->Field;
        }

        return $attributes;
    }

    protected function failedValidation(ValidationValidator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
        ], 422));
    }

    public function setValidation(array $data)
    {
        $validator = Validator::make($data, $this->rules());
        $this->setValidator($validator);
    }

    public function messages()
    {

        return [
            'marca.required' => 'O marca do carro é obrigatório',
            'marca.string'   => 'O marca do carro precisa ser um texto',
            'marca.max'      => 'O marca do carro deve ter no máximo 30 caracteres',

            'modelo.required' => 'A modelo do carro é obrigatória',
            'modelo.string'   => 'A modelo do carro precisa ser um texto',
            'modelo.max'      => 'A modelo do carro deve ter no máximo 30 caracteres',

            'ano.required' => 'O ano do carro é obrigatório',
            'ano.numeric'  => 'O ano do carro deve ser numérico',
            'ano.digits'   => 'O ano do carro deve ter 4 dígitos',

            'ano_modelo.numeric' => 'O ano de modelo do carro deve ser numérico',
            'ano_modelo.digits'  => 'O ano de modelo do carro deve ter 4 dígitos',

            'km.numeric' => 'A quilometragem do carro deve ser numérica',
            'km.min'     => 'A quilometragem do carro deve ter no mínimo 1 caractere',
            'km.max'     => 'A quilometragem do carro deve ter no máximo 8 caracteres',

            'tipo_combustivel.max' => 'O tipo de combustivel deve ter no máximo 20 caracteres',

            'motor.max' => 'O motor do carro deve ter no máximo 5 caracteres',
            'motor.min' => 'O motor do carro deve ter no mínimo 1 caractere',

            'cor.max' => 'A cor do carro deve ter no máximo 20 caracteres',

            'tipo_direcao.max' => 'O tipo de direção do carro deve ter no máximo 20 caracteres',

            'alarme.min'    => 'O carro tem alarme deve ter no mínimo 3 caractere',
            'alarme.max'    => 'O carro tem alarme deve ter no máximo 3 caracteres',

            'placa.min' => 'A placa do carro deve ter no mínimo 7 dígitos',
            'placa.max' => 'A placa do carro deve ter no máximo 7 dígitos',

            'valor.numeric' => 'O valo do carro deve ser numérico',

            'qntd_portas.numeric' => 'A quantidade de porta(s) do carro deve ser numérico',
            'qntd_portas.digits'  => 'A quantidade de posta(s) do carro deve ter 1 dígito',
        ];
    }
}
