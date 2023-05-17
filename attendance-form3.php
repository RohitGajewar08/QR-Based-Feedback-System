<?php
$db_conn = mysqli_connect('localhost', 'root', '', 'teacher_db');
// Check if the ids match
$result = mysqli_query($db_conn, "SELECT * FROM links t1 INNER JOIN qrcode_teacher t2 ON t1.id = t2.linkID WHERE t1.id = 3");
if (mysqli_num_rows($result) == 0) {
  echo 'Error: This link is not accessible';
  exit;
}

// Close the database connection
mysqli_close($db_conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Feedback</title>
    <link rel="stylesheet" href="assets/css/style_f.css">
</head>

<body>
    <h1>
        <center><em>Computer Feedback Form</em></center>
    </h1>
    <form action="attendance-db.php" method="post">


        <label for="question1">
            <h2>Name of Student:</h2>
        </label><br>
        <input type="text" id="question1" name="name" maxlength="50" required placeholder="Student Name...">
        <label for="question2">
            <h2>Class Roll No:</h2>
        </label><br>
        <input type="text" id="question1" name="roll" maxlength="3" required placeholder="Class Roll No...">
        <label for="question3">
            <h2>PRN:</h2>
        </label><br>
        <input id="question2" type="text" name="prn" maxlength="13" required placeholder="  PRN..."></input>
        <input type="submit" value="Submit" id="button">
    </form>
</body>

</html>