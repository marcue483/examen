<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "audioshop";
$conn = new mysqli($server, $username, $password, $dbname);

if (isset($_POST['add'])) {
    $filename = $conn->real_escape_string($_POST['filename']);
    $conn->query("INSERT INTO images (filename) VALUES ('$filename')");
    header("Location: admin.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM images WHERE id=$id");
    header("Location: admin.php");
    exit;
}

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $filename = $conn->real_escape_string($_POST['filename']);
    $conn->query("UPDATE images SET filename='$filename' WHERE id=$id");
    header("Location: admin.php");
    exit;
}

$edit = null;
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $result = $conn->query("SELECT * FROM images WHERE id=$id");
    $edit = $result->fetch_assoc();
}

$images = $conn->query("SELECT * FROM images");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin page</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>Admin page</h2>
    <h3><a href="audioshop.php">Back to the website</a></h3>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $edit ? $edit['id'] : ''; ?>">
        <input type="text" name="filename" placeholder="Image filename" required value="<?php echo $edit ? htmlspecialchars($edit['filename']) : ''; ?>">
        <?php if ($edit): ?>
            <button type="submit" name="update">Update</button>
            <a href="admin.php">Cancel</a>
        <?php else: ?>
            <button type="submit" name="add">Add</button>
        <?php endif; ?>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Filename</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $images->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['filename']); ?></td>
            <td>
                <a href="admin.php?edit=<?php echo $row['id']; ?>">Edit</a>
                <a href="admin.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this image?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>