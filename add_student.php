<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Add New Student</h2>
        <form action="add_student.php" method="post">
            <label>Name:</label>
            <input type="text" name="name" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <label>Course:</label>
            <input type="text" name="course" required>
            
            <label>Date of Birth:</label>
            <input type="date" name="dob" required>
            
            <input type="submit" name="submit" value="Add Student">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $course = $_POST['course'];
            $dob = $_POST['dob'];

            $sql = "INSERT INTO students (name, email, course, dob) VALUES ('$name', '$email', '$course', '$dob')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Student added successfully!</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
        ?>
        
        <a href="view_students.php" class="btn">View All Students</a>
    </div>
</body>
</html>