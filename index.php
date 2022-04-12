<?php
$list1 = "<a href='login.php'>Login</a>";
$list2 = "<a href='singUp.php'>Signup</a>";
include 'components/head.php';
include 'components/header.php'
?>
<h1 class="mt-2 text-center">Hello in application generate contacts</h1>
<div class="d-flex flex-column flex-md-row-reverse justify-content-around align-items-center">
    <img class="col-md-4 col-7 mt-2" src="components/images/leading.svg" alt="">
    <p class="text-center fs-2 mt-2">Application web pour la gestion des contacts <br> sécurisé et gratuite</p>
</div>
<div class="d-flex flex-column flex-md-row align-items-center gap-4 mt-2">
    <a href="login.php" class="rounded-pill btn btn-info col-10 col-md-2 text-white fw-bold mx-5">Login</a>
    <a href="singUp.php" class="rounded-pill btn btn-info col-10 col-md-2 text-white fw-bold">Signup</a>
</div>
<script src="javaScript/contact.js"></script>
</body>

</html>