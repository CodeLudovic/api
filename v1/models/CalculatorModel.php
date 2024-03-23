<?php

class CalculatorModel

{
    public static function getAddition($a, $b)
    {
        // Lógica para realizar la operación de suma entre dos números dados por el usuario.
        // Retorna JSON con respuesta de la operación
        $result = $a + $b;
        return json_encode(array("respuesta" => $result));
    }

    public static function getSubstraction($a, $b)
    {
        // Lógica para realizar la operación de resta entre dos números dados por el usuario.
        // Retorna JSON con respuesta de la operación
        $result = $a - $b;
        return json_encode(array("respuesta" => $result));
    }

    public static function getMultiplication($a, $b)
    {
        // Lógica para realizar la operación de multiplicación entre dos números dados por el usuario.
        // Retorna JSON con respuesta de la operación
        $result = $a * $b;
        return json_encode(array("respuesta" => $result));
    }

    public static function getDivision($a, $b)
    {
        // Lógica para realizar la operación de división entre dos números dados por el usuario.
        // Retorna JSON con respuesta de la operación
        if ($b === 0) {
            return json_encode(array("respuesta" => "No se puede dividir por cero"));
        }

        $result = $a / $b;
        return json_encode(array("respuesta" => $result));
    }
}
