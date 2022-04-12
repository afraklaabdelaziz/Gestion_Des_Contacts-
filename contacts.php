<?php
$list1 = "<a href='profile.php'>Profile</a>";
$list2 = "<a href='login.php'>Logout</a>";
include 'components/head.php';
include 'components/header.php';
?>
<div class="d-flex justify-content-between p-2 addContactFixed">
    <p class="fw-bold">List contacts</p>
    <div class="btn btn-info d-md-block addContact"><i class="fas fa-user-plus"></i><span class="d-none d-md-inline">Add new contact</span></div>
</div>
<!-- form to add contact -->
<div class="modelAddC">
    <form class="modal" id="form" method="POST">
        <p class="h2">Add contact</p>
        <i class="fas fa-times closeAddC btn position-absolute end-0 fs-3"></i>
        <div>
            <input class="rounded-pill p-2 w-100" id="name" type="text" placeholder="enter name contact" name="name">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="email" type="email" placeholder="enter email contact" name="email">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="phone" type="text" placeholder="enter phone contact" name="phone">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="adresse" type="text" placeholder="enter adresse contact" name="adresse">
            <div class="error text-danger"></div>
        </div>

        <input class="rounded-pill p-2 bg-info" type="submit" value="Save" name="save">
    </form>
</div>
<!-- form to update contact -->
<div class="modelEditC">
    <form class="modal" id="form" method="POST" action="">
        <p class="h2">Update profile</p>
        <i class="fas fa-times closeEditC btn position-absolute end-0 fs-3"></i>
        <div>
            <input class="rounded-pill p-2 w-100" id="name" type="text" value="afrakla abdelaziz" name="name">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="email" type="email" value="afraklabdelaziz@gmail.com" name="email">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="phone" type="text" value="0639616681" name="phone">
            <div class="error text-danger"></div>
        </div>

        <div>
            <input class="rounded-pill p-2 w-100" id="adresse" type="text" value="Mezguita, agdz, zagora" name="adresse">
            <div class="error text-danger"></div>
        </div>
        <input class="rounded-pill p-2 bg-info" type="submit" value="Update" name="edit">
    </form>
</div>
<div class="table-responsive d-md-flex justify-content-center">
    <table class="table table-striped align-middle text-center">
        <thead>
            <tr>
                <?php
                $thead = ["img" => "", "name" => "Name", "email" => "Email", "phone" => "Phone", "adress" => "Adresse", "crud" => ""];
                foreach ($thead as $key => $value) {

                    echo "<th class='head'>$value</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td> <img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mezguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mezguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
            <tr>
                <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script src="javascript/contact.js"></script>

</body>

</html>