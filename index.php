<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '';
echo '<!-- link css  -->';
echo '<link rel="stylesheet" href="./style.css">';
echo '';
echo '<!-- icons  -->';
echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"';
echo 'integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">';
echo '';
echo '<title>Login with us</title>';
echo '</head>';
echo '';
echo '<body>';
echo '<div class=" flex-r container">';
echo '<div class="flex-r login-wrapper">';
echo '<div class="login-text">';
echo '<div class="logo">';
echo '<span><i class="fab fa-speakap"></i></span>';
echo '<span>Coders</span>';
echo '</div>';
echo '<h1>Sign Up</h1>';
echo '<p>It's not long before you embark on this journey! </p>';
echo '';
echo '<form class="flex-c">';
echo '<div class="input-box">';
echo '<span class="label">E-mail</span>';
echo '<div class=" flex-r input">';
echo '<input type="text" placeholder="name@abc.com">';
echo '<i class="fas fa-at"></i>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="input-box">';
echo '<span class="label">Password</span>';
echo '<div class="flex-r input">';
echo '<input type="password" placeholder="8+ (a, A, 1, #)">';
echo '<i class="fas fa-lock"></i>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="check">';
echo '<input type="checkbox" name="" id="">';
echo '<span>I've read and agree with T&C</span>';
echo '</div>';
echo '';
echo '<input class="btn" type="submit" value="Create an Account">';
echo '<span class="extra-line">';
echo '<span>Already have an account?</span>';
echo '<a href="#">Sign In</a>';
echo '</span>';
echo '</form>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '';
echo '</html>';
echo '';
?>