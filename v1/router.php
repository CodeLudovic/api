<?php

require_once 'controllers/CalculatorController.php';

//URL base de la API Externa configurable.
$URL = '/api/v1/';

class Router
{
    public function route($method, $uri)
    {
        global $URL;

        $numericRegex = '/^-?\d*\.?\d+$/';
        switch ($method) {
            case 'GET':
                if (strpos($uri, $URL . 'addition') !== false) {
                    $a = isset($_GET['a']) ? $_GET['a'] : '';
                    $b = isset($_GET['b']) ? $_GET['b'] : '';
                    if ($b === '' || $a === '' || !preg_match($numericRegex, $a) || !preg_match($numericRegex, $b)) {
                        $this->notNumber($uri);
                    } else return CalculatorController::getAddition(floatval($a), floatval($b));
                } elseif (strpos($uri, $URL . 'substraction') !== false) {
                    $a = isset($_GET['a']) ? $_GET['a'] : '';
                    $b = isset($_GET['b']) ? $_GET['b'] : '';
                    if ($b === '' || $a === '' || !preg_match($numericRegex, $a) || !preg_match($numericRegex, $b)) {
                        $this->notNumber($uri);
                    } else return CalculatorController::getSubstraction(floatval($a), floatval($b));
                } elseif (strpos($uri, $URL . 'multiplication') !== false) {
                    $a = isset($_GET['a']) ? $_GET['a'] : '';
                    $b = isset($_GET['b']) ? $_GET['b'] : '';
                    if ($b === '' || $a === '' || !preg_match($numericRegex, $a) || !preg_match($numericRegex, $b)) {
                        $this->notNumber($uri);
                    } else return CalculatorController::getMultiplication(floatval($a), floatval($b));
                } elseif (strpos($uri, $URL . 'division') !== false) {
                    $a = isset($_GET['a']) ? $_GET['a'] : '';
                    $b = isset($_GET['b']) ? $_GET['b'] : '';
                    if ($b === '' || $a === '' || !preg_match($numericRegex, $a) || !preg_match($numericRegex, $b) || floatval($b) == 0) {
                        $this->notNumber($uri);
                    } else return CalculatorController::getDivision(floatval($a), floatval($b));
                } else {
                    $this->notFound();
                }
                break;
            default:
                $this->notFound();
                break;
        }
    }

    private function notFound()
    {
        // http_response_code(404);
        echo json_encode(array("message" => "Ruta no encontrada"));
    }

    private function notNumber($uri)
    {
        global $URL;
        if (strpos($uri, $URL . 'division') !== false) {
            $response = array(
                "message" => "Debe ingresar los números correctamente. Solo se aceptan valores numericos."
            );

            if ($_GET['b'] == 0) {
                $response["additional_message"] = "El valor del divisor no puede ser 0.";
            }
            http_response_code(404);
            echo json_encode($response);
        } else {
            http_response_code(404);
            echo json_encode(array("message" => "Debe ingresar los números correctamente. Solo se aceptan valores numericos."));
        }
    }
}
