<?php
    // Data for students
    $students = [
        "Sadiq" => ["course" => "BIP", "age" => 22],
        "Ali" => ["course" => "BIS", "age" => 19],
        "Aisha" => ["course" => "BIW", "age" => 22]
    ];

    // Function to generate and display the table
    function displayStudentsTable($students) {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Course</th>';
        echo '<th>Age</th>';
        echo '</tr>';

        foreach ($students as $name => $details) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($name) . '</td>';
            echo '<td>' . htmlspecialchars($details['course']) . '</td>';
            echo '<td>' . htmlspecialchars($details['age']) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2 with Function</title>
</head>
<body>
    <h1>Student Details</h1>
    <?php
        // Call the function to display the table
        displayStudentsTable($students);
    ?>
</body>
</html>
