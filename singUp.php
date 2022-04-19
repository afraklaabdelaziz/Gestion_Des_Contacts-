<?php
include 'Class/User.php';
$list1 = "<a href='index.php'>Home</a>";
$list2 = "<a href='login.php'>Login</a>";
include 'components/head.php';
include 'components/header.php';
?>
<div class="d-flex flex-column flex-md-row-reverse w-100 align-items-center justify-content-md-around col-10 col-sm-8 col-md-12 container_signup">
    <img class="col-md-4 col-7 mt-2" src="components/images/singup.svg" alt="">
    <form class="col-md-4 col-11 mt-3" id="formSigUp" method="POST" onsubmit="return validateInput()">
        <p class="text-center fw-bold h2">SING UP</p>
        <p class="text-center">Create your account to generate your contacts</p>
        <?php
        if (isset($_GET['error'])) {
        ?>
            <p class="alert alert-danger"><?php echo $_GET['error'] ?></p>
        <?php } ?>
        <div class="form-group p-1">
            <label for="name">User Name</label>
            <input class="form-control rounded-pill" name="username" id="nameS" type="text" placeholder="user name">
            <div class="error text-danger"></div>
        </div>
        <div class="form-group p-1">
            <label for="pass">Password</label>
            <input class="form-control rounded-pill" name="pass" id="passS" type="password" placeholder="password">
            <div class="error text-danger"></div>
        </div>
        <div class="form-group p-2">
            <label for="passC">Confirm Password</label>
            <input class="form-control rounded-pill" name="passC" id="passCS" type="password" placeholder="confirm password">
            <div class="error text-danger"></div>
        </div>
        <input type="submit" class="btn bg-info mt-2 form-control rounded-pill" name="signup" value=" SING UP">
    </form>
</div>
<script src="javaScript/js.js"></script>
</body>
<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $passwordC = $_POST['passC'];
    $user = new User(2, $username, $password, date('Y/m/d H,i,s'));
    $user->signUp($username, $password, $passwordC);
}
?>

</html>