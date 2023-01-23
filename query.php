<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Look-Up</title>

    <link rel="stylesheet" href="querystyle.css">
    <link rel="Stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette">

    <script src="queryscript.js"></script>

</head>

<body>
    
    <?php include "NavBar.html"; ?>

    <div id="formdiv">
    <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='post'>
            <h1>Quiz Lookup<h1>
                    <label for="user">Username: </label>
                    <input type="text" id="user" name="user" required>
                    <br>
                    <label for="pass">Password: </label>
                    <input type="password" id="pass" name="pass" required>
                    <br>
                    <input type="button" value="Submit" name="submitbutton" onclick="logincheck();">

    <input type="button" onclick="location.href='home.php';" value="Return to Test">

    <?php

    if (empty($_POST['user']) == false && empty($_POST['pass']) == false) {
        $use = $_POST["user"];
        $pas = $_POST["pass"];
        $conn = mysqli_connect("localhost", "nkozak1", "ndkz3222006", "Q和A");

        $qs = "SELECT * FROM user_data WHERE username = '" . $use . "'";
        $result = $conn->query($qs);
        $rowingss = $result->fetch_assoc();
        if ($result->num_rows > 0 && isset($rowingss)) {
            $ps = "SELECT DECODE(pass, 'ndkz3222006') FROM user_data WHERE username = '" . $use . "'";
            $re = $conn->query($ps);
            $res = $re->fetch_assoc();
            $passw = $res["DECODE(pass, 'ndkz3222006')"];
        }

        if ($result->num_rows > 0 && $pas == $passw) {
            if ($rowingss["score1"] == "N/A") {
                echo "Sorry, but there is no recorded test data for that account";
            } else {
                echo "<table>";
                if ($rowingss["score2"] == "N/A") {
                    echo "<tr>";
                    echo "<th>Attempt</th>";
                    echo "<th>Score</th>";
                    echo "<th>Topic</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>" . $rowingss['score1'] . "</td>";
                    if ($rowingss['score1test'] == "taylor") {
                        $testname = "Taylor Swift";
                    } else if ($rowingss['score1test'] == "conan") {
                        $testname = "Conan Gray";
                    } else if ($rowingss['score1test'] == "billie") {
                        $testname = "Billie Eilish";
                    }
                    echo "<td>" . $testname . "</td>";
                    echo "</tr>";
                } else if ($rowingss["score3"] == "N/A") {
                    echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Score</th>";
                    echo "<th>Topic</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>" . $rowingss['score1'] . "</td>";
                    if ($rowingss['score1test'] == "taylor") {
                        $testname = "Taylor Swift";
                    } else if ($rowingss['score1test'] == "conan") {
                        $testname = "Conan Gray";
                    } else if ($rowingss['score1test'] == "billie") {
                        $testname = "Billie Eilish";
                    }
                    echo "<td>" . $testname . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>2</td>";
                    echo "<td>" . $rowingss['score2'] . "</td>";
                    if ($rowingss['score2test'] == "taylor") {
                        $testname = "Taylor Swift";
                    } else if ($rowingss['score2test'] == "conan") {
                        $testname = "Conan Gray";
                    } else if ($rowingss['score2test'] == "billie") {
                        $testname = "Billie Eilish";
                    }
                    echo "<td>" . $testname . "</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Score</th>";
                    echo "<th>Topic</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>" . $rowingss['score1'] . "</td>";
                    if ($rowingss['score1test'] == "taylor") {
                        $testname = "Taylor Swift";
                    } else if ($rowingss['score1test'] == "conan") {
                        $testname = "Conan Gray";
                    } else if ($rowingss['score1test'] == "billie") {
                        $testname = "Billie Eilish";
                    }
                    echo "<td>" . $testname . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>2</td>";
                    echo "<td>" . $rowingss['score2'] . "</td>";
                    if ($rowingss['score2test'] == "taylor") {
                        $testname = "Taylor Swift";
                    } else if ($rowingss['score2test'] == "conan") {
                        $testname = "Conan Gray";
                    } else if ($rowingss['score2test'] == "billie") {
                        $testname = "Billie Eilish";
                    }
                    echo "<td>" . $testname . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>3</td>";
                    echo "<td>" . $rowingss['score3'] . "</td>";
                    if ($rowingss['score3test'] == "taylor") {
                        $testname = "Taylor Swift";
                    } else if ($rowingss['score3test'] == "conan") {
                        $testname = "Conan Gray";
                    } else if ($rowingss['score3test'] == "billie") {
                        $testname = "Billie Eilish";
                    }
                    echo "<td>" . $testname . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        } else if ($result->num_rows > 0 && $pas != $passw){
            echo "<h3>Sorry, but that password is incorrect! Please try again!</h3>";
        } else {
            echo "<h3>Sorry, but that account doesn't exist, please go <a href='create.html'>here</a> to create one</h3>";
        }
    }

    ?>

    </form></div>

</body>

</html>