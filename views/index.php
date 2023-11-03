<!DOCTYPE html>
<html>
<head>
    <title>My To-Do List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">My To-Do List</h1>
        
        <!-- To-Do Form -->
        <form method="post" action="add_task.php" class="mt-3">
            <div class="form-group">
                <input type="text" name="task" class="form-control" placeholder="Add a task" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        <h2 class="mt-4">Tasks:</h2>
        <ul class="list-group mt-3">
            <!-- Use PHP to generate task list items here -->
            <?php foreach ($tasks as $task): ?>
                <li class="list-group-item"><?php echo $task; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/public/js/script.js"></script>
</body>
</html>
