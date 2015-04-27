<?php include('_inc/bootstrap.php'); ?>

<?php include('_inc/head.php'); ?>

<body class="home dark-bg">
    <div class="container text-center narrow dark">
        <header>
            <h2 class="board-icon">BCS Kanban Board</h2>
            <p><a href="http://kanban.bloomingtoncodeschool.com" title="BCS Kanban Board">http://kanban.bloomingtoncodeschool.com</a></p>
        </header>

        <form action="01-homepage.php">
            <input class="btn" type="text" placeholder="Your Awesome Board Name">
            <input class="btn btn-action" type="submit" value="Create!">
        </form>
    </div>

    <footer class="fixed">
        <a href="01-board-list.php" title="Browse Existing Boards">or browse the existing boards</a>
    </footer>
</body>
</html>
