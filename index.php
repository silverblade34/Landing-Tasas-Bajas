<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
    <title>Landing-hipotecario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/stylesHipotecario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('../includes/header2.php');
    ?>
    <!--Cuerpo-->
    <main>
        <div class="cuerpo-landing row">
            <div class="publicidad-landing col-lg-6">
                <div class="text-title">
                    <h2 class="title-hipotecario">La oportunidad <br><span>está en tu inmueble.</span></h2>
                </div>
                <div class="text-title">
                    <img class="img-hipotecario" src="https://www.prestaclub.com/images/fiesta-tasas.webp" alt="">
                </div>
            </div>
            <div class="cuerpo-form-landing col-lg-6">
                <form action="" method="POST" id="formulario">
                    <div class="active-form activo" id="registro-vacio">
                        <div class="msg-error-alert" id="msg-error-alert">Verifique que sus datos sean correctos.</div>
                        <div class="title-form pt-4">
                            <h3>Solicitar información</h3>
                        </div>
                        <div>
                            <label for="">Nombre y Apellidos</label>
                            <input type="text" name="NombreClienteLanding" id="nombre" class="form-control" placeholder="Escribe tu nombre" value="" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 "><label for="">DNI</label>
                                <input type="number" max="99999999" id="dni" name="DNIClienteLanding" class="form-control" placeholder="Ingresa tu DNI" value="" required>
                            </div>
                            <div class="col-lg-6"><label for="">Teléfono</label>
                                <input type="number" name="CelularClienteLanding" id="telefono" min="900000000" max="999999999" class="form-control" placeholder="Ingresa tu teléfono" value="" required>
                            </div>
                        </div>
                        <div>
                            <label for="">Correo</label>
                            <input type="email" name="CorreoClienteLanding" class="form-control" placeholder="Ingresa tu correo electrónico" id="correo" value="" required>
                        </div>
                        <div class="text-terminos">
                            <input type="checkbox" name="" id="" checked> Acepto las <a href="https://prestaclub.com/politica-de-privacidad/" class="link-terminos">políticas de privacidad y termínos y condiciones.</a>
                        </div>
                        <div class="pt-3 text-center">
                            <input type="checkbox" value="fiesta-tasas-bajas" name="" id="origen" class="check-origen">
                            <input type="submit" value="Enviar" name="enviarDatos" class="enviar-form-hipotecario">
                        </div>
                    </div>
                    <div class="registro-logrado" id="registro-logrado">
                        <div class="content-check">
                            <div>
                                <img src="https://www.prestaclub.com/images/check-icon-white.webp" alt="">
                            </div>
                            <div>
                                <h4>Registrado!</h4>
                            </div>
                            <div>
                                <p>Nos comunicaremos contigo en el menor tiempo posible</p>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php
    include('../includes/footer.php');
    ?>
    <script src="../script/spreedsheets.js"></script>
    <script src="../script/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>