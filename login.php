<?php
$list1 = "<a href='index.php'>Home</a>";
$list2 = "<a href='singUp.php'>Signup</a>";
include 'components/head.php';
include 'components/header.php';
include 'Class/User.php';
?>
<div class="d-flex flex-column flex-md-row-reverse w-100 align-items-center justify-content-md-around col-10 col-sm-8 col-md-12">
    <img class="col-md-4 col-7 mt-2" src="components/images/login.svg" alt="">
    <form id="form" class="col-md-4 col-11" method="POST">
        <p class="text-center fw-bold h2 mt-2">SING IN</p>
        <p class="text-center">Entre your credentials to access your account</p>
        <?php if (isset($_GET['error'])) { ?>
            <p class="alert alert-danger"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="form-group p-1">
            <label>User Name</label>
            <input class="form-control rounded-pill" name="username" type="text" placeholder="user name">
        </div>
        <div class="form-group p-1">
            <label>Password</label>
            <input class="form-control rounded-pill" name="pass" type="password" placeholder="password">
        </div>
        <input type="submit" class="btn bg-info mt-2 form-control rounded-pill" name="signin" value=" SING IN">
    </form>
</div>
<?php
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $user = new User($_SESSION['id_u'], $username, $password, date('Y/m/d H:i:s'));
    $user->login($username, $password);
}
?>
</body>

</html>