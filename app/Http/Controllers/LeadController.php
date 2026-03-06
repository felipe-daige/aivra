<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function store(StoreLeadRequest $request)
    {
        $lead = Lead::create($request->validated());

        try {
            Http::post('https://webhook.aivratech.com.br/webhook/novo-lead', [
                'lead_id' => $lead->id,
            ]);
        } catch (\Throwable $e) {
            Log::warning('Webhook novo-lead falhou', ['error' => $e->getMessage()]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Lead registrado com sucesso.',
            'lead_id' => $lead->id,
        ], 201);
    }
}
