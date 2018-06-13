<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    /**
     * API Service: localhost/api/index.php
     * Coleccion    : resoluciones/*
     *
     * Get      : Lista de resoluciones
     *            /resoluciones  
     *            /administrado/<dni>/resoluciones
     * Delete   : Borra resolucion (es)
     * Post     : Crea una resolucion.
     * 
     * Coleccion    : administrados
     * 
     */
    require 'vendor/autoload.php';

    $app = new \Slim\App;
    $app->get('/resoluciones/{numero}', function (Request $request, Response $response, array $args) {
        $numero = $args['numero'];
        $response->getBody()->write("Resolucion : $numero");

        return $response;
    });
    $app->run();

?>    