<?php
require_once 'models/CalculatorModel.php';

class CalculatorController

{
    public static function getAddition($a, $b)
    {
        $getOperation = CalculatorModel::getAddition($a, $b);
        echo $getOperation; // No necesitas json_encode aquí
    }

    public static function getSubstraction($a, $b)
    {
        // Lógica para obtener el resultado de la operación de restka entre dos números dados por el usuario.
        // $getOperation = CalculatorModel::getSubstraction($a, $b);
        // echo json_encode($getOperation);
        $getOperation = CalculatorModel::getSubstraction($a, $b);
        echo $getOperation; // No necesitas json_encode aquí
    }

    public static function getMultiplication($a, $b)
    {
        // Lógica para obtener el resultado de la operación de mutiplicación entre dos números dados por el usuario.
        // $getOperation = CalculatorModel::getMultiplication($a, $b);
        // echo json_encode($getOperation);
        $getOperation = CalculatorModel::getMultiplication($a, $b);
        echo $getOperation; // No necesitas json_encode aquí
    }

    public static function getDivision($a, $b)
    {
        // Lógica para obtener el resultado de la operación de division entre dos números dados por el usuario.
        // $getOperation = CalculatorModel::getDivision($a, $b);
        // echo json_encode($getOperation);
        $getOperation = CalculatorModel::getDivision($a, $b);
        echo $getOperation; // No necesitas json_encode aquí
    }
}
