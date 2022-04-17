<?php
session_start();
$list1 = "<a href='index.php'>Home</a>";
$list2 = "<a href='contacts.php'>Contacts</a>";
include 'components/head.php';
include 'components/header.php';
?>
<p class="h1 m-5 text-center">Welcome, <span><?php echo $_SESSION['name'] ?></span></p>
<div class="d-flex flex-column flex-md-row-reverse justify-content-around align-items-center">
    <img class="col-7 col-md-5" src="components/images/profile.svg" alt="">
    <div class="d-flex flex-column align-items-center gap-4 gap-md-5 mt-5 m-4 col-md-6 col-11">
        <a class="btn btn-info col-10 col-md-5 rounded-pill" href="contacts.php">List contacts</a>
        <div class="btn btn-info col-10 col-md-5 Details rounded-pill">Details</div>
        <div class="btn btn-info col-10 col-md-5 Profile rounded-pill">Update</div>
    </div>
</div>
<div class="modelEditP">
    <form class="modal" method="POST" onsubmit="return validateInputProfile()">
        <p class="h2">Update profile</p>
        <i class="fas fa-times closeEditP btn position-absolute end-0 fs-3"></i>
        <div>
            <input class="rounded-pill p-2 w-100" type="text" id="name" value="<?php echo $_SESSION['name'] ?>" name="name">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" type="password" id="pass" value="<?php echo $_SESSION['password']?>" name="pass">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" type="password" id="passC" value="<?php echo $_SESSION['password']?>" name="passC">
            <div class="error text-danger"></div>
        </div>

        <input class="rounded-pill p-2 bg-info" type="submit" value="Update">
    </form>
</div>
<div class="modelDetails">
    <div class="modal">
        <p class="h2">Your profile</p>
        <i class="fas fa-times closeDetails btn position-absolute end-0 fs-3"></i>
        <p class="fw-bold mt-5">Username : <span class="fw-normal"><?php echo $_SESSION['name'] ?></span></p>
        <p class="fw-bold">signup date : <span class="fw-normal"> <?php echo $_SESSION['signUpDate'] ?></span></p>
        <p class="fw-bold">last login : <span class="fw-normal"><?php echo $_SESSION['lastLoginDate'] ?></span></p>
    </div>
</div>
<script src="javaScript/profile.js"></script>
</body>

</html>