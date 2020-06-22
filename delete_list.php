<?php 
	include "header.php";
	require "function.php";
    $data = getListById($_GET["id"]);
?>

<div id="container-Delete">
    <form method="post" id="edit-form" action="modules/delete_list_function.php">
        <input class="form-control" type="hidden" name="id" value="<?php echo $data["list_id"]?>">
        <label class="mb-4">Lijst verwijderen</label>
        <input class="form-control" type="text" name="name" disabled value="<?php echo $data["list_name"]; ?>">
        <button class="btn btn-light mt-4" name="submit">verwijderen</button>
    </form>
</div>

<?php include "footer.php";?>
