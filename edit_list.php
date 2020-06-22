<?php
	include "header.php";
	require "function.php";
    $data = getListById($_GET["id"]);
?>

<div id="container-edit">
    <form method="post" id="edit-form" action="modules/edit_list_function.php">
        <input class="form-control" type="hidden" name="id" value="<?php echo $data["list_id"]; ?>">
        <h1 class="h2 text-white mb-4">Wijzig uw lijst</h1>
        <label class="text-white">Naam:</label>
        <input class="form-control" type="text" name="name" required value="<?php echo $data["list_name"]; ?>">
        <button class="btn btn-light mt-4" name="submit"><i class="fa fa-user"></i> Wijzigen</button>
    </form>
</div>

<?php include "footer.php";?>
