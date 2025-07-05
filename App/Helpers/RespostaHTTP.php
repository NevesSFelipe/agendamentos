<?php

namespace App\Helpers;

final class RespostaHTTP
{
    /**
     * Retorna resposta JSON padronizada.
     *
     * @param int $codigoHTTP Código HTTP (ex: 200, 404)
     * @param bool $status Status do processamento (true/false)
     * @param mixed $dados Dados da resposta (string, array, objeto)
     * @return string JSON codificado
     */
    public static function respostaHTTPJson(int $codigoHTTP, bool $status, $dados): string
    {

        http_response_code($codigoHTTP);

        $resposta = [
            'status' => $status,
            'resposta' => $dados
        ];

        header('Content-Type: application/json; charset=utf-8');
        return json_encode($resposta, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    }

}