<?php
include('session.php');
if (isset($_SESSION['userID'])) {
}else {
    header("location: entry.php");
}
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
    <form action="form-userdb.php" method="post">

        <label>
            <h2>Title</h2>
        </label><br>
        <input type="text" id="title" name="title" maxlength="100" required placeholder="Error Name..."><br>

        <label for="question1">
            <h2>Name of the Computer:</h2>
        </label><br>
        <input type="text" id="question1" name="Q1" maxlength="100" required placeholder="Computer Name..."><br>

        <label for="question2">
            <h2>Name of the lab:</h2>
        </label><br>
        <input type="text" id="question1" name="Q2" maxlength="100" required placeholder="Lab Name..."><br>

        <label for="question3">
            <h2>Describe the problem / error:</h2>
        </label><br>
        <textarea id="question2" name="Q3" rows="5" column="100" required placeholder="  Describe The Problem..."></textarea><br>

        <label for="question4">
            <h2>Where does the problem occur?</h2>
        </label><br>
        <input type="text" id="question3" name="Q4" maxlength="100" required><br>

        <label for="question5">
            <h2>When did the problem occur?</h2>
        </label><br>
        <input type="date" id="question4" name="Q5" required><br>

        <label for="question6">
            <h2>Under which conditions does the problem occur?</h2>
        </label><br>
        <input type="text" id="question5" name="Q6" maxlength="100" required><br>

        <input type="submit" value="Submit" id="button">
    </form>
</body>

</html>