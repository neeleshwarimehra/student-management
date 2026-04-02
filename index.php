<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student List</h2>

<form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>
    <button type="submit">Add Student</button>
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['course']}</td>
        <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
    </tr>";
}
?>

</table>

</body>
</html>