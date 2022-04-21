<?php
// session_start();
include 'Class/User.php';
if (isset($_SESSION['name'])) {
    $list1 = "<a href='profile.php'>Profile</a>";
    $list2 = "<a href='logout.php'>Logout</a>";
    include 'components/head.php';
    include 'components/header.php';
    // include 'Class/Contact.php';
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
        $user = new User($_SESSION['id_u'], $_SESSION['name'], $_SESSION['password'], $_SESSION['signUpDate']);
        $user->addContact($nameC, $emailC, $phoneC, $addressC, $_SESSION['id_u']);
        echo "<script> toastr.success('Ajoute contact avec success')</script>";
    }
    ?>
    <!-- form to update contact -->
    <div class="modelEditC">
        <form class="modal" method="POST" onsubmit="return validInputEditContact()">
            <p class="h2">Update profile</p>
            <i class="fas fa-times closeEditC btn position-absolute end-0 fs-3"></i>
            <div>
                <input class="rounded-pill p-2 w-100 " id="nameEdit" type="text" value="" name="name">
                <div class="error text-danger"></div>
            </div>
            <div>
                <input class="rounded-pill p-2 w-100 email" id="emailEdit" type="email" value="" name="email">
                <div class="error text-danger"></div>
            </div>
            <div>
                <input class="rounded-pill p-2 w-100 phone" id="phoneEdit" type="text" value="" name="phone">
                <div class="error text-danger"></div>
            </div>

            <div>
                <input class="rounded-pill p-2 w-100 adresse" id="adresseEdit" type="text" value="" name="adresse">
                <div class="error text-danger"></div>
                <input type="hidden" id="idC" name="editC" value="">
            </div>
            <input class="rounded-pill p-2 bg-info" type="submit" id="edit" value="Update" name="edit">
        </form>
    </div>
    <?php
    if (isset($_POST['edit'])) {
        $id_editC = $_POST['editC'];
        $nameC = $_POST['name'];
        $emailC = $_POST['email'];
        $phoneC = $_POST['phone'];
        $addressC = $_POST['adresse'];
        $contact = new Contact($nameC, $emailC, $phoneC, $addressC);
        $contact->update('contacts', ['name' => $nameC, 'email' => $emailC, 'phone' => $phoneC, 'address' => $addressC], $id_editC);
        echo "<script> toastr.success('Modification avec success')</script>";
    }
    ?>
    <!-- modal delete -->
    <div class="modelDeleteC">
        <form class="modal" method="POST">
            <input type="hidden" id="delete" name="deleteC">
            <button class="closeDeleteC">Cannel</button>
            <input class="rounded-pill p-2 bg-danger" type="submit" id="delete" value="Confirm" name="confirm">
        </form>
    </div>
    <?php
    if (isset($_POST['confirm'])) {
        $idC = $_POST['deleteC'];
        $contact = new Contact(null, null, null, null);
        $contact->delete('contacts', $idC);
        echo "<script> toastr.success('Contact supprimer avec success')</script>";
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
                $contact = new Contact(null, null, null, null);
                $contact->select('contacts', '*', $_SESSION['id_u']);
                for ($i = 0; $i < count($contact->result) - 1; $i++) {
                ?>
                    <tr>
                        <td><img class="rounded-circle" src="components/images/abdelaziz.jpg" height="60px" alt=""></td>
                        <td data-target="name"><?php echo $contact->result[$i]['name'] ?></td>
                        <td data-target="email"><?php echo $contact->result[$i]['email'] ?></td>
                        <td data-target="phone"><?php echo $contact->result[$i]['phone'] ?></td>
                        <td data-target="adresse"><?php echo $contact->result[$i]['address'] ?></td>
                        <td>
                            <i class="fal btn fa-edit text-info fw-bold fs-3 updateContact" data="<?php echo $contact->result[$i]['id_c'] . "/" . $contact->result[$i]['name'] . "/" . $contact->result[$i]['email'] . "/" . $contact->result[$i]['phone'] . "/" . $contact->result[$i]['address'] ?>"></i>
                            <i class="fas btn fa-trash-alt text-info fw-bold fs-3 deleteContact" data="<?php echo $contact->result[$i]['id_c'] ?>"></i>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <script src="javascript/js.js"></script>
    </body>

    </html>
<?php
} else {
    header('location:index.php');
}
?>