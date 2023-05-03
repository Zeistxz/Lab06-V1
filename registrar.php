<?php
//print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["marca"]) || empty($_POST["modelo"]) || empty($_POST["fecha_ingreso"]) || empty($_POST["placa"])) {
    header('Location: afterlog.php?mensaje=falta');
    exit();
}

include_once 'conexion.php';
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$placa = $_POST["placa"];

$sentencia = $bd->prepare("INSERT INTO vehiculos(marca,modelo,fecha_ingreso,placa) VALUES (?,?,?,?);");
$resultado = $sentencia->execute([$marca, $modelo, $fecha_ingreso, $placa]);

if ($resultado === TRUE) {
    header('Location: afterlog.php?mensaje=registrado');
} else {
    header('Location: afterlog.php?mensaje=error');
    exit();
}

