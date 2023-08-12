<?php
require_once('database_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle image upload logic
    $targetDir = "../../portfolio/"; // Change this to your desired upload directory
    $newImage = "";

    if ($_FILES['image']['size'] > 0) {
        $fileName = basename($_FILES['image']['name']);
        $targetPath = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                $newImage = $targetPath;
            }
        }
    }

    // Update project details
    updateProject($id, $title, $description, 'portfolio/'. $fileName);
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
    <title>Edit Project</title>
</head>
<body>
    <h1>Edit Project</h1>
    <form method="POST" action="edit.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $project['Title']; ?>"><br>
        <label>Description:</label>
        <textarea name="description"><?php echo $project['Description']; ?></textarea><br>
        <label>Image:</label>
        <input type="file" name="image"><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
