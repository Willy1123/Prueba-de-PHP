<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><h2>EJEMPLO DE INICIO DE SESIÓN EN PHP</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="index2.php" method="post">
                        <br>
                        <h3>Nombre:</h3>
                        <input name="usuario_nombre" class="form-control" type="text" placeholder="Usuario">
                        
                        <h3>Contraseña:</h3>
                        <input name="usuario_clave" class="form-control" type="password" placeholder="Contraseña">
                        <br>
                        <button class="btn btn-success btn-block" type="submit">Entrar</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
        
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
