<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>

    <link rel="stylesheet" href="about.css">

    <link rel="Stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette">

    <script src="about.js"></script>

</head>

<body>

    <?php include "NavBar.html"; ?>

    <h1>Please select your feedback option:</h1>

    <input type="radio" onclick="med();" name="sel" id="media">
    <label for="media">Media (i.e. phone, email, etc.) </label>

    <input type="radio" onclick="fed();" name="sel" id="feedback">
    <label for="feedback">Feedback form </label>

    <div id="med">

        <h2>

            Email: nkozak1@imsa.edu<br>
            Phone: +1 (708)-954-6535<br>
            IMSA Business Office Email: busofc@imsa.edu<br>
            IMSA President Email: eglazer@imsa.edu<br>
            IMSA Principal Email: cakwajianderson@imsa.edu<br>
            IMSA Street Address: 1500 Sullivan Road Aurora, IL 60506-1067 USA<br>

            <button onclick="document.getElementById('med').style = 'animation: inthis 1s ease-out 0s 1 forwards';">Return</button>

        </h2>

    </div>

    <div id="dis">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required><br>

            <label for="feed">Feedback:</label><br>
            <textarea id="feed" name="txt" required></textarea><br>

            <input type="submit" name="submit" name="submit">

        </form>
    </div>

    <?php

    if (isset($_POST["submit"])) {
        $conn = mysqli_connect("localhost", "root", "", "q和a");
        
        $sql = "INSERT INTO feedback (email, feedback) VALUES (
            '" . $_POST['email'] . "',
            '" . $_POST['txt'] . "'
        )";

        $conn->query($sql);
    }

    ?>

</body>

</html>