<?php
require_once('database_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    deleteProject($id);
    header("Location: ../../index1.php"); // Redirect back to the main page
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $project = getProjectById($id);
    } else {
        header("Location: ../../index1.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Project</title>
</head>
<body>
    <h1>Delete Project</h1>
    <p>Are you sure you want to delete the project "<?php echo $project['Title']; ?>"?</p>
    <form method="POST" action="delete.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit">Delete</button>
        <a href="../../index1.php">Cancel</a>
    </form>
</body>
</html>
