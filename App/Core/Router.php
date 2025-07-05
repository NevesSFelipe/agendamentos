<?php

namespace App\Core;

use App\Helpers\RespostaHTTP;

class Router {

    private string $url;
    private string $controller;
    private string $metodo;
    private array $parametros = [];

    public function __construct(string $url)
    {
        $this->url = trim($url, '/');
    }

    public function handle()
    {
        $this->controller = CONTROLLER_DEFAULT;
        $this->metodo = METODO_DEFAULT;

        if ( empty($this->url) === false ) {
         
            $segmentos = explode("/", $this->url);

            if ( count($segmentos) === 1) { $this->controller = $segmentos[0]; }

            if ( count($segmentos) === 2) { 
                
                $this->controller = $segmentos[0];
                $this->metodo = $segmentos[1];

            }

            if ( count($segmentos) > 2) { 

                $this->controller = $segmentos[0];
                $this->metodo = $segmentos[1];
                $this->parametros = array_slice($segmentos, 2);

            }

        }

        $this->controller = ucfirst($this->controller) . "Controller";

        print $this->chamarEndPoint();

    }

    private function chamarEndPoint()
    {

        $controllerNamespace = "\\App\\Controllers\\{$this->controller}";

        if ( class_exists($controllerNamespace) === false ) {
            return RespostaHTTP::respostaHTTPJson(404, false, "Classe não existe.");
        }

        $instanciaController = new $controllerNamespace;

        if ( method_exists($instanciaController, $this->metodo) === false ) {
            return RespostaHTTP::respostaHTTPJson(404, false, "Método não existe.");
        }

        $retornoAPI = call_user_func_array([$instanciaController, $this->metodo], $this->parametros);
        return RespostaHTTP::respostaHTTPJson(200, true, $retornoAPI);

    }

    


}