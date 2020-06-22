<?php include "header.php";?>
<?php require "function.php";?>

<?php
    $data = getTaskById($_GET["id"]);
?>
<div id="container-Delete">
    <form method="post" id="edit-form" action="modules/delete_task_function.php">
        <h1 class="h2">Taak verwijderen</h1>
        <input class="form-control" type="hidden" name="id" value="<?php echo $data["task_id"]?>">
        <label>Beschrijving:</label>
        <input class="form-control" type="text" name="description" disabled value="<?php echo $data["task_description"];?>">
        <button class="btn btn-light mt-4" name="submit">Verwijderen</button>
    </form>
</div>

<?php include "footer.php";?>

