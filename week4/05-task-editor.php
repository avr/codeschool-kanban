<?php

/**
 * Gets
 */

function getFormInput() {

}
var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Editor</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css">
    <link rel="stylesheet" href="_assets/style.css">

</head>
<body>

    <header>
        <h1>Task Editor</h1>
    </header>

    <div class="container">

        <h3>This will eventually live in a modal window</h3>

        <div class="modal">
            <a href="#" class="pull-right" title="Close">Close</a>
            <h3>New Task</h3>

            <form action="" method="POST">
                <input type="hidden" name="board_id" value="1">
                <div class="form-item">
                    <label for="name">Name</label>
                    <div class="form-input">
                        <input type="text" name="name">
                    </div>
                </div>

                <div class="form-item">
                    <label for="description">Description</label>
                    <div class="form-input">
                        <textarea name="description" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group cf">
                    <div class="form-item half">
                        <label for="effort">Est. Effort</label>
                        <div class="form-input">
                            <input type="text" name="effort" class="half">
                            <select name="effort-increment" class="half">
                                <option value="minutes">Minutes</option>
                                <option value="hours">Hours</option>
                                <option value="days">Days</option>
                                <option value="weeks">Weeks</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-item half">
                        <label for="assigned">Assigned To</label>
                        <div class="form-input">
                            <select name="assigned">
                                <option value="1">User 1</option>
                                <option value="2">User 2</option>
                                <option value="3">User 3</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-actions">
                    <input type="submit" value="Save">
                    <input type="reset" value="Reset">
                </div>


            </form>
        </div>

    </div>
</body>
</html>
