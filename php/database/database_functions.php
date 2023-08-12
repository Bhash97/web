<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function insertProject($title, $description, $image) {
    global $conn;
    $sql = "INSERT INTO projects (Title, Description, Image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $description, $image);
    $stmt->execute();
    $stmt->close();
}

function getProjects() {
    global $conn;
    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    $projects = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }
    return $projects;
}
function get_projects1() {
    global $conn;

    // Get the 9th and 1st row data
    $sql = "SELECT * FROM projects LIMIT 1 OFFSET 5";
    $result = $conn->query($sql);

    $projects = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }

    // Get the rest of the 9th row data
    $sql = "SELECT * FROM projects LIMIT 6, 18446744073709551615"; // A very large number to get the remaining rows
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }

    $conn->close();

    return $projects;

}
// Add the following function to retrieve a project by its ID
function getProjectById($id) {
    global $conn;
    $sql = "SELECT * FROM projects WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $project = $result->fetch_assoc();
    $stmt->close();
    return $project;
}

function getProjects1() {
    global $conn;
    $sql = "SELECT * FROM projects LIMIT 4, 18"; // A very large number to get the remaining rows
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }

    $conn->close();

    return $projects;
}
function updateProject($id, $title, $description, $image) {
    global $conn;
    $sql = "UPDATE projects SET Title = ?, Description = ?, Image = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $description, $image, $id);
    $stmt->execute();
    $stmt->close();
}

function deleteProject($id) {
    global $conn;
    $sql = "DELETE FROM projects WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
?>
