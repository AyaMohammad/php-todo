<?php 
    include "header.php";
    require "function.php";
    $data = getTaskById($_GET["id"]);
    $allStatus = getAllStatus();
?>

<div class="text-white" id="container-edit">
    <form method="post" id="edit-form" action="modules/edit_task_function.php">
        <h1 class="h2">Wijzig uw taak</h1>
        <input class="form-control" type="hidden" name="id" value="<?php echo $data["task_id"] ?>">
        <label>Beschrijving:</label>
        <input class="form-control" type="text" name="description" required value="<?php echo $data["task_description"];?>">

        <label>Status:</label>
        <select class="form-control" name="status_id" id="select" required>
            <?php
                foreach ($allStatus as $status) {
                    $selected = "";

                    if ($status['status_id'] == $data['task_status_id']) {
                        $selected = "selected";
                    }

                    echo "<option $selected value=\"" . $status['status_id'] . "\">" . $status['status_name'] . "</option>";
                }
            ?>
        </select>

        <label>Duur:</label>
        <input class="form-control" type="text" name="duration" required value="<?php echo $data["task_duration"];?>">
        <button class="btn btn-light mt-4" name="submit">Wijzigen</button>
    </form>
</div>

<?php include "footer.php";?>
