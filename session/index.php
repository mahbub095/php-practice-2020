<?php
//session_start();
session_name('myapp');
session_start([
'cookie_lifetime'=>60
]);

//time
$_SESSION['name'] ='Runu';
echo $_SESSION['name'];
//session_destroy();