<?php include('_inc/bootstrap.php'); ?>

<?php include('_inc/head.php'); ?>

<body class="dark-bg">

    <header class="page-header margin-big">
        <h1 class="board-icon">BCS Kanban Board</h1>
    </header>

    <div class="container narrow dark">
        <h2 class="margin-big">Board List</h2>

        <ul class="reset-list board-list">

            <?php

            $boards = new BoardList($db);

            $result = $boards->getBoards();

            foreach($result as $board) {

                $list_item = '<li>';
                $list_item .= "<a href='/board/{$board['id']}'>{$board['name']}</a>";
                $list_item .= '</li>';

                echo $list_item;

            }

            ?>
        </ul>
    </div>
</body>
</html>
