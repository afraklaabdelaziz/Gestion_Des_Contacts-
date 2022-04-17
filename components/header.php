<?php
$list1;
$list2;
$list3;
?>
<header class="d-flex justify-content-between p-2 ContainerHeader position-sticky top-0">
    <p class="mx-2 h4">Contact list</p>
    <i class="far fa-bars btn d-inline d-md-none"></i>
    <li class="d-none d-md-inline list">
        <?php
        echo $list1;
        echo $list2;
        ?>
    </li>
    <script>
        const menu = document.querySelector(".fa-bars");
        const list = document.querySelector(".list");
        const header = document.querySelector(".ContainerHeader");
        menu.addEventListener("click", function() {
            list.classList.toggle("d-none");
            list.classList.toggle("list1");
            header.classList.toggle("header");
        })
    </script>
</header>