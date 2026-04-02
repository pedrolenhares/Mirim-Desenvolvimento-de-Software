<?php

namespace App\Http\Controllers;

use App\Enums\HttpStatus;
use App\Mail\contatoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'assunto' => 'required|string|max:50',
            'mensagem' => 'required|string|max:3000',
        ]);

        try {
            Mail::to('contato@mirimweb.com.br')->send(new contatoMail($dados));
            return response()->json(['message' => 'Mensagem enviada com sucesso!'], HttpStatus::OK->value);   
            }
            catch (\Exception $e) {    

            {
                return response()->json(['message' => 'Erro ao enviar a mensagem: ' . $e->getMessage()], HttpStatus::INTERNAL_SERVER_ERROR->value);
            }
        }
    }   
}
