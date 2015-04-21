<!DOCTYPE html>
<html>
<head>
    <title>Board Settings Editor</title>

    <?php include('_inc/stylesheets.php'); ?>

</head>
<body>
    <header>
        <h1>Board Settings Editor</h1>
    </header>

    <div class="container">

        <h3>This will eventually live in a modal window</h3>

        <div class="modal">
            <a href="#" class="pull-right" title="Close">Close</a>
            <h3>Board Settings</h3>

            <form action="">
                <div class="form-item">
                    <label for="name">Name</label>
                    <div class="form-input">
                        <input type="text" name="name">
                    </div>
                </div>

                <div class="form-group cf">
                    <div class="form-item half">
                        <label for="assigned">Columns <a href="#" title="Add Column">Add</a></label>
                        <div class="form-input">
                            <select name="assigned" multiple="true">
                                <option value="1">Backlog</option>
                                <option value="2">Development</option>
                                <option value="3">Test</option>
                                <option value="4">Done</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-item half">
                        <label for="assigned">Users <a href="#" title="Add Users">Add</a></label>
                        <div class="form-input">
                            <select name="assigned" multiple="true">
                                <option value="1">User 1</option>
                                <option value="2">User 2</option>
                                <option value="3">User 3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-actions cf">
                    <input type="submit" class="btn btn-action btn-half" value="Save">
                    <div class="separator"></div>
                    <input type="reset" class="btn btn-action btn-half" value="Reset">
                </div>

            </form>
        </div>
</body>
</html>
