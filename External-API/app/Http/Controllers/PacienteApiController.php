<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Paciente;

class PacienteApiController extends Controller
{
    public function importar()
    {
        // URL da API externa (exemplo, troque pela real)
        $url = 'https://api.hospitalparceiro.com/pacientes';

        $response = Http::get($url);

        if ($response->successful()) {
            $pacientes = $response->json();
            $salvos = [];
            foreach ($pacientes as $p) {
                $paciente = Paciente::updateOrCreate(
                    ['cpf' => $p['cpf']],
                    [
                        'nome' => $p['nome'],
                        'email' => $p['email'],
                        'idade' => $p['idade'],
                    ]
                );
                $salvos[] = $paciente;
            }
            return view('pacientes.lista', ['pacientes' => $salvos]);
        } else {
            return back()->with('error', 'Erro ao acessar a API externa.');
        }
    }
}
