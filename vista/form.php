<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/form.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">

    </head>
    <body class="fondoFormulari">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-6">
                        <nav class="navbar navbar-expand-sm fondoFormulari navbar-dark">
                            <div class="container fluid">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link colorLetras botonRedondo" href="../index.php">Inicio</a>
                                    </li>
                                        <a class="nav-link colorLetras botonRedondo" href="#">¿Quienes somos?</a>
                                    <li>
                                    </li>
                                        <a class="nav-link colorLetras botonRedondo" href="#">¿A que nos dedicamos?</a>
                                    <li>
                                        <a class="nav-link colorLetras botonRedondo" href="trabajos.php">¡Nuestros trabajos!</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        <br>
        <br>
        <br>
        <div class="row fondoFormulari">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form method="POST">
                    <div class="form-group">
                        <label for="nombre"><p class="textoBotones">Nombre:</p></label>
                        <input type="text" class="form-control" name="nombre">
                    </div>   
                    <div class="form-group">
                        <label for="email"><p class="textoBotones">Dirección de Email:</p></label>
                         <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="texto"><p class="textoBotones">Escribe tu consulta</p></label>
                        <textarea class="form-control" name="texto" rows="15" cols="50"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
        </div>
        <div class="col-lg-3"></div>
        </div>
    <?php
    include '../control/formcontacto.php';
    ?>
    </body>
</html>