<?php
$list1 = "<a href='index.php'>Home</a>";
$list2 = "<a href='contacts.php'>Contacts</a>";
include 'components/head.php';
include 'components/header.php';
?>
<p class="h1 m-5 text-center">Welcome, abdelaziz</p>
<div class="d-flex flex-column flex-md-row-reverse justify-content-around align-items-center">
    <img class="col-7 col-md-5" src="components/images/profile.svg" alt="">
    <div class="d-flex flex-column align-items-center gap-4 gap-md-5 mt-5 m-4 col-md-6 col-11">
        <a class="btn btn-info col-10 col-md-5 rounded-pill" href="contacts.php">List contacts</a>
        <div class="btn btn-info col-10 col-md-5 Details rounded-pill">Details</div>
        <div class="btn btn-info col-10 col-md-5 Profile rounded-pill">Update</div>
    </div>
</div>
<div class="modelEditP">
    <form class="modal" method="POST">
        <p class="h2">Update profile</p>
        <i class="fas fa-times closeEditP btn position-absolute end-0 fs-3"></i>
        <input class="rounded-pill p-2" type="text" value="afrakla abdelaziz" name="name">
        <input class="rounded-pill p-2" type="email" value="afraklabdelaziz@gmail.com" name="email">
        <input class="rounded-pill p-2" type="password" placeholder="change password" name="pass">
        <input class="rounded-pill p-2" type="password" placeholder="confirm password" name="passC">
        <input class="rounded-pill p-2 bg-info" type="submit" value="Update">
    </form>
</div>
<div class="modelDetails">
    <div class="modal">
        <p class="h2">Your profile</p>
        <i class="fas fa-times closeDetails btn position-absolute end-0 fs-3"></i>
        <p class="fw-bold mt-5">Username : <span class="fw-normal">afrakla abdelaziz</span></p>
        <p class="fw-bold">Email : <span class="fw-normal">afraklaabdelaziz@gmail.com</span></p>
        <p class="fw-bold">signup date : <span class="fw-normal">10/04/2022</span></p>
        <p class="fw-bold">last login : <span class="fw-normal">10/04/2022</span></p>
    </div>
</div>
<script src="javaScript/profile.js"></script>
</body>
</html>