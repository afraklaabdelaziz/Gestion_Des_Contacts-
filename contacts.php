<?php
$list1 = "<a href='profile.php'>Profile</a>";
$list2 = "<a href='login.php'>Logout</a>";
include 'components/head.php';
include 'components/header.php';
// include 'Class/Contact.php';
require 'Class/User.php'
?>
<div class="d-flex justify-content-between p-2 addContactFixed">
    <p class="fw-bold">List contacts</p>
    <div class="btn btn-info d-md-block addContact"><i class="fas fa-user-plus"></i><span class="d-none d-md-inline">Add new contact</span></div>
</div>
<!-- form to add contact -->
<div class="modelAddC">
    <form class="modal" id="formAdd" method="POST" onsubmit="return validInputAddContact()">
        <p class="h2">Add contact</p>
        <i class="fas fa-times closeAddC btn position-absolute end-0 fs-3"></i>
        <div>
            <input class="rounded-pill p-2 w-100" id="nameAdd" type="text" placeholder="enter name contact" name="name">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="emailAdd" type="email" placeholder="enter email contact" name="email">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="phoneAdd" type="text" placeholder="enter phone contact" name="phone">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100" id="adresseAdd" type="text" placeholder="enter adresse contact" name="adresse">
            <div class="error text-danger"></div>
        </div>

        <input class="rounded-pill p-2 bg-info" type="submit" value="Save" name="save">
    </form>
</div>
<?php
if (isset($_POST['save'])) {
    $nameC = $_POST['name'];
    $emailC = $_POST['email'];
    $phoneC = $_POST['phone'];
    $addressC = $_POST['adresse'];
    $contact = new Contact($nameC, $emailC, $phoneC, $addressC);
    $contact->insert('contacts', ['name' => "$nameC", 'email' => "$emailC", 'phone' => "$phoneC", 'address' => "$addressC"]);
}
?>
<!-- form to update contact -->
<div class="modelEditC">
    <form class="modal" method="POST" action="" onsubmit="return validInputEditContact()">
        <p class="h2">Update profile</p>
        <i class="fas fa-times closeEditC btn position-absolute end-0 fs-3"></i>
        <div>
            <input class="rounded-pill p-2 w-100 " id="nameEdit" type="text" value="afrakla abdelaziz" name="name">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100 email" id="emailEdit" type="email" value="afraklabdelaziz@gmail.com" name="email">
            <div class="error text-danger"></div>
        </div>
        <div>
            <input class="rounded-pill p-2 w-100 phone" id="phoneEdit" type="text" value="0639616681" name="phone">
            <div class="error text-danger"></div>
        </div>

        <div>
            <input class="rounded-pill p-2 w-100 adresse" id="adresseEdit" type="text" value="Mezguita, agdz, zagora" name="adresse">
            <div class="error text-danger"></div>
        </div>
        <input class="rounded-pill p-2 bg-info" type="submit" value="Update" name="edit">
    </form>
</div>
<?php
if (isset($_POST['Update'])) {
    $nameC = $_POST['name'];
    $emailC = $_POST['email'];
    $phoneC = $_POST['phone'];
    $addressC = $_POST['adresse'];
    $contact = new Contact($nameC, $emailC, $phoneC, $addressC);
    $contact->select('contact', 'id_c');
    $contact->update('contacts', ['name' => $nameC, 'email' => $emailC, 'phone' => $phoneC, 'address' => $addressC], 'id=id_C');
}
?>



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
            <?php
            $contact = new Contact('afrakla', 'abdelaziz', '4444', 'jjkfhkdhksd');
            $contact->select('contacts', '*');
            for ($i = 0; $i < count($contact->result) - 1; $i++) {
            ?>
                <tr>
                    <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                    <td><?php echo $contact->result[$i]['name'] ?></td>
                    <td><?php echo $contact->result[$i]['email'] ?></td>
                    <td><?php echo $contact->result[$i]['phone'] ?></td>
                    <td><?php echo $contact->result[$i]['address'] ?></td>
                    <td>
                        <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                        <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                    </td>
                </tr>

            <?php } ?>
















            <!-- <tr>
                <td> <img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                <td>afrakla abdelaziz</td>
                <td>afraklaabdelaziz@gamil.com</td>
                <td>0639616681</td>
                <td> Mewguita, agdz, zagora</td>
                <td>
                    <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact"></i>
                    <i class="fas btn fa-trash-alt text-info fw-bold fs-3"></i>
                </td>
            </tr> -->
            <!-- <tr>
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
            </tr> -->
        </tbody>
    </table>
</div>
<script src="javascript/js.js"></script>
</body>

</html>