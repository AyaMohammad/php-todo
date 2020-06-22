<?php
    include "header.php";
	require "function.php";
?>

<div class="form-create">
    <h1>Maak een lijst aan</h1>
    <form method="post" action="modules/create_list_function.php" name="create_list_form">
        <label>Naam:</label>
        <input class="form-control" type="text" name="name" required="required" />
        <button type="submit" class="btn btn-light mt-4" name="submit">Maak een list aan</button>
    </form>
</div>

<?php include "footer.php"; ?>
