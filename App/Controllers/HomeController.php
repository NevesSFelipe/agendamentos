<?php

namespace App\Controllers;

class HomeController {

    public function index()
    {
        return [
            "documentacao" => "Bem-vindo à API de Agendamentos",
            "endpoints_disponiveis" => [
                "GET /funcionario/login" => "Em desenvolvimento..."
            ]
        ];
    }

}