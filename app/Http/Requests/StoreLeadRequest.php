<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Campos obrigatórios (formulário de contato)
            'name'            => 'required|string|max:255',
            'email'           => 'nullable|email|max:255',
            'whatsapp'        => 'required|string|max:20',
            'company'         => 'required|string|max:255',
            'main_problem'    => 'required|string|max:5000',

            // Campos opcionais
            'cnpj'                   => ['nullable', 'string', 'max:18', 'regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/'],
            'role'                   => 'nullable|string|max:255',
            'decision_power'         => 'nullable|in:decisor,influenciador,executor',
            'segment'                => 'nullable|string|max:255',
            'employees'              => 'nullable|in:1,2-5,6-20,21-50,50+',
            'revenue'                => 'nullable|in:<250k,250k-1M,1M-5M,5M-10M,10M+',
            'bottlenecks'            => 'nullable|string|max:5000',
            'process_status'         => 'nullable|in:manual,partial,automated,integrated',
            'tech_vision'            => 'nullable|string|max:5000',
            'past_attempts'          => 'nullable|string|max:5000',
            'current_tools'          => 'nullable|string|max:5000',
            'impact'                 => 'nullable|string|max:5000',
            'timing'                 => 'nullable|string|max:5000',
            'budget'                 => 'nullable|in:3k-5k,5k-10k,10k-20k,20k+',
            'other_decision_makers'  => 'nullable|string|max:255',
            'expectation'            => 'nullable|string|max:5000',
        ];
    }

    public function messages(): array
    {
        return [
            'cnpj.regex' => 'O CNPJ deve estar no formato 00.000.000/0000-00.',
        ];
    }
}
