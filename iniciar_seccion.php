<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="imgs/arepazo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color:black;">
<div id="particles-js"></div>
<div class="contenedor_todo_inicio">

    <div class="contenedor_inicio">
        <div class="ctn-form iniciar_sesion_texto">
         
            <h1 class="titulo_inicio"> Iniciar Sesión </h1>
    
            <form class="iniciar_sesion_formulario" action="validar.php" method="POST">
                <div class="form_usuario">
                <label class="ul">Usuario: </label>
                <input class="Usuario" type="text" name="nombre_usuario" placeholder="Usuario...">
                </div>
                <div class="form_contraseña">
                <label class="lc">Contraseña:</label>
                <input class="Contraseña" type="password" name="contraseña" placeholder="Contraseña...">
                </div>

                <div class="wrapper">
                    <div class="main-div main-div3">
                    <input class="Iniciar btn-inicio" type="submit" value="Ingresar">
                    </div>
                </div>
            </form>
            <footer>
<div class="container_inicio">
        <div class="btn fb-btn">
            <a href="https://www.facebook.com/El-Arepazo_QUIMBAYA-112779571063750/"> <i class="fa fa-facebook" aria-hidden="true" id="fb" ></i></a>
        </div>
        <div class="btn ig-btn">
            <a href="https://instagram.com/el_arepazo_montenegro"><i class="fa fa-instagram" aria-hidden="true" id="ig"></i></a>    
        </div>
    </div>
</footer>
        </div>
    </div>





</div>
    <!-- particulas -->
<script src="js/app.js"></script>
<script src="js/animado.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>

</body>

</html>