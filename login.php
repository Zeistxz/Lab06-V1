<!DOCTYPE html>
<html>
<head>
    <title>Login Park</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylel.css">
</head>

<body>
    
    <div class="login">
        <h1 class="text-center">MyParkPro</h1>
            <?php
                include ("conexion.php");
                include ("c_login.php");
            ?>
        <form method="post" action="" class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Usuario</label>
                <input class="form-control" type="email" name="usuario" id="email" required>
                <div class="invalid-feedback">
                    Ingrese un correo válido
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" type="password" name="pass" id="password" required> 
                <div class="invalid-feedback">
                    Ingrese su contraseña
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Recordar</label>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Ingresar" name="btnlogin">
        </form>

    </div>

</body>

</html>