<?php
     session_start();

     include 'layouts/head.php';
     include 'layouts/header_admin.php';
?>
    <h1>Olá <?=$_SESSION["escritorLogado"]["nome"] ?></h1>
<?php
    include 'layouts/footer.php'
?>