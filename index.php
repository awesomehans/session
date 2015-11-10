<?php
//session_start();
//
//$_SESSION['username'] = 'JeffWay';
//
//session_destroy();
//$_SESSION = array();
//
//header('location: login.php');

setcookie('fontSize', 25, time() + 60 * 60 * 24 * 365); //create cookie that will last one year
setcookie('fontSize', 25, time() - 1); //delete cookie by setting expiration date to the past

setcookie('prefs[fontsize]', 25, time() + 30);
setcookie('prefs[favoriteCategory]', 'news', time() + 30);
setcookie('prefs[screenWidth]', '1024', time() + 30);

if (isset($_COOKIE['prefs'])){
    foreach ($_COOKIE['prefs'] as $key => $val){
        echo htmlspecialchars($key) . ': ' . htmlspecialchars($val) . '<br>';
    }
}