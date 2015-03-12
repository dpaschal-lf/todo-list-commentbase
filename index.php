<?php 
//include functions.php file
?>
<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>

    <link rel="stylesheet" href="assets/external/bootstrap/css/bootstrap.min.css">
    <script src="assets/external/jquery.min.js"></script>
    <script src="assets/external/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/main.js"></script>
</head>
<body>

<?php 
//include header.php
?>
    <main id="main-content">
        <section id="todo-display">
            <button id="display_refresh" type="button" class="glyphicon glyphicon-refresh"></button>
            <div class="display_container"></div>
        </section>
        <section id="todo-add">
            <form>
                <input type="text" name="title" placeholder="Task Title">
                <input type="text" name="date" placeholder="Task Due">
                <textarea name="details" placeholder="Task"></textarea>
                <button type="button" id="save_task" class="glyphicon glyphicon-plus"></button>
            </form>
        </section>
        
    </main>
<?php 
//include footer.php
?>
</body>
</html>