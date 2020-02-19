<?php include "header.php";?>
<?php require "function.php";?>

<?php
    $data = Getcheck($_GET["ID"]);
?>
<div id="container-Delete">
    <div class="left">
            <h2 class="title-delete"><?php echo $data['Name']; ?></h2><i class="fas fa-user"></i>
            <p class="desc"><?php echo $data['Description']; ?></p><br>
            <p class="inline-block-box" ><?php echo $data['Status']?></p>
            <p class="inline-block-box"><?php echo $data['Time'];?></p>
    </div>
    <div class="right-delete">
            <p>Are you sure you want to delete this item? <a class="button-index-del" href="delete_function.php">Delete<i class="fas fa-trash-alt"></i></a></p>
            <a href="index.php">Go back<i class="fas fa-angle-double-left"></i></a>
    </div>
</Div>
<?php include "footer.php";?>