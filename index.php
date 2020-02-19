<?php include "header.php";?>
<?php require "function.php";?>

<Div class="container">
    <h2>Content</h2>
    <?php
    $result = GetAllCheck();
    foreach($result as $results){      
    ?>
    <div id="container-fluid" class="homepage-container" style="background-color:crimson; padding:50px ;">
        <div class="left">
            <h2 class="title"><?php echo $results['Name']; ?></h2><i class="fas fa-user"></i>
            <p class="text"><?php echo $results['Description']; ?></p>
            <p class="status" ><?php echo $results['Status']?></p>
        </div>
        <div class="right">
            <p class="time"><?php echo $results['Time'];?></p>
            <a class="button-index" href="edit.php?ID=<?php echo $results['ID'];?>">Edit<i class="fas fa-pencil-alt"></i></a>
            <a class="button-index-del" href="delete.php?ID=<?php echo $results['ID'];?>">Delete<i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
    <?php 
    }
    ?>
</Div>
<?php include "footer.php";?>