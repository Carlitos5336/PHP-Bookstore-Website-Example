<?php
$output = <<<OUTPUT
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link css  -->
    <link rel="stylesheet" href="./style.css">

    <!-- icons  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Login with us</title>
</head>

<body>
    <div class=" flex-r container">
        <div class="flex-r login-wrapper">
            <div class="login-text">
                <div class="logo">
                    <span><i class="fab fa-speakap"></i></span>
                    <span>Carlos Ogando</span>
                </div>
                <h1>Sign Up</h1>
                <p>DEMO DE App para prof. Willis Polanco </p>

                <form class="flex-c">
                    <div class="input-box">
                        <span class="label">E-mail</span>
                        <div class=" flex-r input">
                            <input type="text" placeholder="name@abc.com">
                            <i class="fas fa-at"></i>
                        </div>
                    </div>
                    
                    <div class="input-box">
                        <span class="label">Contraseña</span>
                        <div class="flex-r input">
                            <input type="password" placeholder="8+ (a, A, 1, #)">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>

                    <div class="check">
                        <input type="checkbox" name="" id="">
                        <span>He leído los términos y condiciones</span>
                    </div>

                    <input class="btn" type="submit" value="Crear nueva cuenta">
                    <span class="extra-line">
                        <span>¿Tienes una cuenta?</span>
                        <a href="#">Iniciar sesión</a>
                    </span>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

OUTPUT;
echo $output;