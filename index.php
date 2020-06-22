<?php 
    include "header.php";
    require "function.php";
?>

<div class="container">
    <?php
    $lists = getAllLists();

foreach($lists as $list) {
    ?>
    <div class="list">
        <h2 class="h3 text-white"><?php echo $list['list_name']?></h2>
        <a href="delete_list.php?id=<?php echo $list['list_id'];?>" class="btn btn-danger mb-2">Delete list</a>
        <a href="edit_list.php?id=<?php echo $list['list_id'];?>" class="btn btn-success mb-2">Edit list</a>

    <?php
        $tasks = getTasksByListId($list['list_id']);
        foreach($tasks as $task) {
    ?>
            <div id="container-fluid" class="homepage-container px-5 py-4" style="background-color:crimson;">
                <div class="left">
                    <h2 class="title h5"><?php echo $task['task_description']; ?></h2>
                    <span class="badge badge-light mr-2"><?php echo $task['task_duration'];?> minuten</span>
                    <small class="mb-0 text-white"><i class="fas fa-clipboard-list"></i> <?php echo $task['status_name']; ?></small>
                </div>
                <div class="right">
                    <a class="button-index mr-2" href="edit_task.php?id=<?php echo $task['task_id'];?>"><i class="fas fa-pencil-alt"></i> edit</a>
                    <a class="button-index-del" href="delete_task.php?id=<?php echo $task['task_id'];?>"><i class="fas fa-trash-alt"></i> delete</a>
                </div>
            </div>
    <?php
        }
        echo "</div>";
    }

    echo "</div>";

    include "footer.php";
