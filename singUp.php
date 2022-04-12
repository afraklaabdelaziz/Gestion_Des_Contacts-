<?php
$list1 = "<a href='index.php'>Home</a>";
$list2 = "<a href='login.php'>Login</a>";
include 'components/head.php';
include 'components/header.php';
?>
<div class="d-flex flex-column flex-md-row-reverse w-100 align-items-center justify-content-md-around col-10 col-sm-8 col-md-12 container_signp">
    <img class="col-md-4 col-7 mt-2" src="components/images/singup.svg" alt="">
    <form action="login.php" class="col-md-4 col-11 mt-3" id="form" method="POST">
        <p class="text-center fw-bold h2">SING UP</p>
        <p class="text-center">Create your account to generate your contacts</p>
        <div class="form-group p-1">
            <label for="name">User Name</label>
            <input class="form-control rounded-pill" name="username" id="name" type="text" placeholder="user name">
            <div class="error text-danger"></div>
        </div>
        <div class="form-group p-1">
            <label for="pass">Password</label>
            <input class="form-control rounded-pill" name="pass" id="pass" type="password" placeholder="password">
            <div class="error text-danger"></div>
        </div>
        <div class="form-group p-2">
            <label for="passC">Confirm Password</label>
            <input class="form-control rounded-pill" name="passC" id="passC" type="password" placeholder="confirm password">
            <div class="error text-danger"></div>
        </div>
        <input type="submit" class="btn bg-info mt-2 form-control rounded-pill" name="signup" value=" SING UP">
    </form>
</div>
<script src="javaScript/formValidation.js"></script>
</body>
</html>