<?php
    print_r($_POST);
    if(!isset($_POST["codigo"])){
        header('location: afterlog.php?mensaje=error');
    }

    include_once 'conexion.php';
    $codigo=$_POST["codigo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $placa = $_POST["placa"];
    

    $sentencia = $bd->prepare("UPDATE vehiculos SET marca = ?, modelo = ?,fecha_ingreso = ?,placa = ? WHERE id = ?;");
    $resultado = $sentencia->execute([$marca,$modelo,$fecha_ingreso,$placa,$codigo]);

    if ($resultado === TRUE) {
        header('Location: afterlog.php?mensaje=editado');
    } else {
        header('Location: afterlog.php?mensaje=error');
        exit();
    }
