<?php include "header.php";?>
<?php require "function.php";?>

<?php
    $results = getAllLists();
    $allStatus = getAllStatus();
?>

<div class="form-create">
    <h1>Maak een taak aan</h1>
    <form method="post" action="modules/create_task_function.php" name="create_form">
        <div class="form-group">
            <label>Beschrijving</label>
            <input class="form-control" type="text-area" name="description" required>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status_id" id="status" required>
                <?php
                    foreach ($allStatus as $status) {
                        echo "<option value=\"" . $status['status_id'] . "\">" . $status['status_name'] . "</option>";
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Lijst</label>
            <select class="form-control" name="list_id" id="list">
                <?php
                    foreach($results as $result) {
                        echo "<option value=\"" . $result['list_id'] . "\">" . $result['list_name'] . "</option>";
                    }
                ?>
            </select>
        </div>
       
        <div class="form-group">
            <label>Duur (in minuten)</label>
            <input class="form-control" type="duration" name="duration">
        </div>

        <button class="btn btn-light" name="submit">Maak taak aan</button>
    </form>
</div>
<?php include "footer.php";?>
