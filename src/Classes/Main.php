<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $value = $_POST['value'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  $tipoUnidades = $_POST['tipoUnidades'];
  // echo "Valor: " . $value . "<br>";
  // echo "De: " . $fromUnit . "<br>";
  // echo "A: " . $toUnit . "<br>";
  // echo "Tipos de Unidades: " . $tipoUnidades . "<br>";
  // Crear la instancia del conversor de la unidad adecuada
  $convertedValue = "";
  function unidades(UnitConverter $converter){
    $converter->convert();
    return $converter->getConvertedValue();
  }

  $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
  $convertedValue = unidades($converter);

  // echo "Valor convertido: " . $convertedValue;
}
