<?php include('_inc/head.php'); ?>

<body>
    <header class="page-header dark-bg">
        <a href="#" title="Settings" class="pull-right">Settings</a>
        <h1 class="board-icon">PHP Backend for the Kanban system</h1>
    </header>

    <div class="lists">
        <div class="list column">
            <div class="list header title">
                <h2>Backlog</h2>
            </div>
            <div class="list tasks">

                <div class="task">
                    <p>Create the style guide</p>
                </div>
                <div class="task">
                    <p>Turn the homepage.psd into html</p>
                </div>
            </div>

            <div class="list actions footer">
                <a href="#" class="add-task">Add task</a>
            </div>
        </div><!-- /.list.column -->

        <div class="list column">
            <div class="list header title">
                <h2>Development <span class="pill">3</span></h2>
            </div>
            <div class="list tasks">
                <div class="task has--actions">
                    <p>Set up the apache server</p>
                    <div class="actions">
                        <ul class="reset-list">
                            <li>Joseph Tzeng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="list actions footer">
                <a href="#" class="add-task">Add task</a>
            </div>
        </div><!-- /.list.column -->

        <div class="list column">
            <div class="list header title">
                <h2>Test <span class="pill">1</span></h2>
            </div>
            <div class="list tasks">
            </div>
            <div class="list actions footer">
                <a href="#" class="add-task">Add task</a>
            </div>
        </div><!-- /.list.column -->

        <div class="list column">
            <div class="list header title">
                <h2>Done</h2>
            </div>
            <div class="list tasks">
            </div>
            <div class="list actions footer">
                <a href="#" class="add-task" title="Add Task">Add task</a>
            </div>
        </div><!-- /.list.column -->
    </div>
</body>
</html>
