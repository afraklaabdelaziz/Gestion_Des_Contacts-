<?php
session_start();
if (isset($_SESSION['name'])) {
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
            <a href="logout.php" class="btn btn-info col-10 col-md-5 Profile rounded-pill">logout</a>
        </div>
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
<?php
} else {
    header('location:index.php');
}
?>