<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'sucesso',
            'mensagem' => 'API Laravel inicializada com sucesso para a Formação DIO!',
            'versao' => '1.0.0'
        ], 200);
    }
}
