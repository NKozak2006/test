<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="homeStyle.css">
    <link rel="Stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette">

    <script src="formscript.js"></script>

</head>

<body>

    <?php

    include "NavBar.html";

    $conn = mysqli_init();
    $conn->ssl_set("Nzc3YzQzYTZmYWFjNjc5YWZlODQyNTIxZWI3ZjI4MTdmNjU4MGEwOQ==", "https://www.cleardb.com/service/1.0/api", null, null, null);
    $conn->real_connect("heroku_711a6f970c6f4f4", "b6536ab746a7ea", "4d6096b2");

    $dbname = "Q和A";

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    $conn->query($sql);

    $conn->close();
    $conn = mysqli_init();
    $conn->ssl_set("Nzc3YzQzYTZmYWFjNjc5YWZlODQyNTIxZWI3ZjI4MTdmNjU4MGEwOQ==", "https://www.cleardb.com/service/1.0/api", null, null, null);
    $conn->real_connect("heroku_711a6f970c6f4f4", "b6536ab746a7ea", "4d6096b2", "Q和A");

    $tname = "user_data";

    $sql = "CREATE TABLE IF NOT EXISTS $tname(
        username VARCHAR(65535),
        pass LONGBLOB,
        attempt INT(3),
        cont VARCHAR(65535),
        FLname VARCHAR(65535),
        score1 VARCHAR(65535),
        score2 VARCHAR(65535),
        score3 VARCHAR(65535),
        score1test VARCHAR(65535),
        score2test VARCHAR(65535),
        score3test VARCHAR(65535)
    )";

    $conn->query($sql);

    $tname = "feedback";

    $sql = "CREATE TABLE IF NOT EXISTS $tname(
        email VARCHAR(65535),
        feedback VARCHAR(65535)
    )";

    $conn->query($sql);

    $sql = "SHOW TABLES LIKE 'taylorqs'";

    $re = $conn->query($sql);
    $res = $re->fetch_assoc();
    if (isset($res) == false) {
        $filename = 'taylorqs.sql';

        $tempLine = '';
        $lines = file($filename);
        foreach ($lines as $line) {
            $tempLine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysqli_query($conn, $tempLine) or print("Error in " . $tempLine . ":");
                $tempLine = '';
            }
        }
    }

    $sql = "SHOW TABLES LIKE 'conanqs'";

    $re = $conn->query($sql);
    $res = $re->fetch_assoc();
    if (isset($res) == false) {
        $filename = 'conanqs.sql';

        $tempLine = '';
        $lines = file($filename);
        foreach ($lines as $line) {
            $tempLine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysqli_query($conn, $tempLine) or print("Error in " . $tempLine . ":");
                $tempLine = '';
            }
        }
    }

    $sql = "SHOW TABLES LIKE 'billieqs'";

    $re = $conn->query($sql);
    $res = $re->fetch_assoc();
    if (isset($res) == false) {
        $filename = 'billieqs.sql';

        $tempLine = '';
        $lines = file($filename);
        foreach ($lines as $line) {
            $tempLine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysqli_query($conn, $tempLine) or print("Error in " . $tempLine . ":");
                $tempLine = '';
            }
        }
    }

    if (isset($_POST["usern"]) == true && isset($_POST["passn"]) == true) {

        $nam = $_POST["name"];
        $use = $_POST["usern"];
        $pas = $_POST["passn"];

        $conn = mysqli_init();
        $conn->ssl_set("Nzc3YzQzYTZmYWFjNjc5YWZlODQyNTIxZWI3ZjI4MTdmNjU4MGEwOQ==", "https://www.cleardb.com/service/1.0/api", null, null, null);
        $conn->real_connect("heroku_711a6f970c6f4f4", "b6536ab746a7ea", "4d6096b2", "Q和A");

        $sql = "USE user_data";
        $qs = "SELECT * FROM user_data WHERE username = '" . $use . "'";
        $result = $conn->query($qs);
        $res = $result->fetch_assoc();

        if (isset($res) == true) {
            echo "<script>alert('That username already exists, please try again!'); location.href='create.html';</script>";
        } else if (isset($res) == false) {
            $all = "SELECT * FROM user_data";
            $sql = "INSERT INTO user_data (username, pass, attempt, cont, FLname, score1, score2, score3, score1test, score2test, score3test) VALUES ('" . $use . "', ENCODE('" . $pas . "', 'ndkz3222006'), 0, 'y', '" . $nam . "', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A');";
            if ($conn->query($sql) === true) {
                echo "<script>document.getElementById('text').innerHTML = 'You have successfully registered your account!';</script>";
            } else {
                echo "Error: " . $all . "<br>" . $conn->error;
            }
        } else {
            echo "Uh oh!";
        }
        $conn->close();
    }

    ?>

    <div class="test" id="test">
        <form id="questionaire" action="result.php" method="post">

            <?php

            $conn = mysqli_init();
            $conn->ssl_set("Nzc3YzQzYTZmYWFjNjc5YWZlODQyNTIxZWI3ZjI4MTdmNjU4MGEwOQ==", "https://www.cleardb.com/service/1.0/api", null, null, null);
            $conn->real_connect("heroku_711a6f970c6f4f4", "b6536ab746a7ea", "4d6096b2", "Q和A");

            if ($_POST["quizsel"] == "taylor") {
                $qs = "SELECT 问题, DECODE(答案, 'ndkz3222006') FROM TaylorQs";
                $result = $conn->query($qs);

                if ($result->num_rows > 0) {
                    $qes = array();
                    $ans = array();
                    $stoans = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($qes, $row["问题"]);
                        array_push($ans, $row["DECODE(答案, 'ndkz3222006')"]);
                    }
                    $stored = array();
                    $randsto = array();
                    $numb = range(0, 19);
                    shuffle($numb);
                    for ($i = 0; $i < 5; $i++) {
                        array_push($stoans, $ans[$numb[$i]]);
                        echo $qes[$numb[$i]];
                        echo " <input type='text' name='ques" . $i . "' id='ques" . $i . "' required><br>";
                    }
                    $_SESSION['ans'] = $stoans;
                    echo "<input type='button' value='Submit' name='qsub' onclick='questioncheck();'>";
                }
            } else if ($_POST["quizsel"] == "conan") {
                $qs = "SELECT 问题, DECODE(答案, 'ndkz3222006') FROM ConanQs";
                $result = $conn->query($qs);

                if ($result->num_rows > 0) {
                    $qes = array();
                    $ans = array();
                    $stoans = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($qes, $row["问题"]);
                        array_push($ans, $row["DECODE(答案, 'ndkz3222006')"]);
                    }
                    $stored = array();
                    $randsto = array();
                    $numb = range(0, 19);
                    shuffle($numb);
                    for ($i = 0; $i < 5; $i++) {
                        array_push($stoans, $ans[$numb[$i]]);
                        echo $qes[$numb[$i]];
                        echo " <input type='text' name='ques" . $i . "' id='ques" . $i . "' required><br>";
                    }
                    $_SESSION['ans'] = $stoans;
                    echo "<input type='button' value='Submit' name='qsub' onclick='questioncheck();'>";
                }
            } else if ($_POST['quizsel'] == "billie") {
                $qs = "SELECT 问题, DECODE(答案, 'ndkz3222006') FROM BillieQs";
                $result = $conn->query($qs);

                if ($result->num_rows > 0) {
                    $qes = array();
                    $ans = array();
                    $stoans = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($qes, $row["问题"]);
                        array_push($ans, $row["DECODE(答案, 'ndkz3222006')"]);
                    }
                    $stored = array();
                    $randsto = array();
                    $numb = range(0, 19);
                    shuffle($numb);
                    for ($i = 0; $i < 5; $i++) {
                        array_push($stoans, $ans[$numb[$i]]);
                        echo $qes[$numb[$i]];
                        echo " <input type='text' name='ques" . $i . "' id='ques" . $i . "' required><br>";
                    }
                    $_SESSION['ans'] = $stoans;
                    echo "<input type='button' value='Submit' name='qsub' onclick='questioncheck();'>";
                }
            }

            $conn->close();

            echo "</form></div>";

            ?>

            <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='post'>
                <div id="formdiv">
                    <h1>Login<h1>
                            <label for="user">Username: </label>
                            <input type="text" id="user" name="user" required>
                            <br>
                            <label for="pass">Password: </label>
                            <input type="password" id="pass" name="pass" required>
                            <br>
                            <label for="art">Select your Topic:</label>
                            <select id="art" name="quizsel">
                                <option disabled selected hidden value="NaN">
                                    <-- Artist -->
                                </option>
                                <option value="taylor">Taylor Swift</option>
                                <option value="conan">Conan Gray</option>
                                <option value="billie">Billie Eilish</option>
                            </select>
                            <br>
                            <input type="button" value="Submit" name="submitbutton" onclick="logincheck();">
                            <p id='text'>To create an account, please go <a href='create.html'>here</a>.</p>
                </div>
            </form>

            <?php

            if (empty($_POST['user']) == false && empty($_POST['pass']) == false) {

                $use = $_POST['user'];
                $pas = $_POST['pass'];

                $_SESSION['user'] = $use;
                $_SESSION['test'] = $_POST['quizsel'];

                $conn = mysqli_init();
                $conn->ssl_set("Nzc3YzQzYTZmYWFjNjc5YWZlODQyNTIxZWI3ZjI4MTdmNjU4MGEwOQ==", "https://www.cleardb.com/service/1.0/api", null, null, null);
                $conn->real_connect("heroku_711a6f970c6f4f4", "nkozak1", "ndkz3222006", "Q和A");

                $qs = "SELECT * FROM user_data WHERE username = '" . $use . "'";
                $ps = "SELECT DECODE(pass, 'ndkz3222006') FROM user_data WHERE username='" . $use . "'";
                $result = $conn->query($qs);
                $re = $conn->query($ps);
                $rowingss = $result->fetch_assoc();
                $res = $re->fetch_assoc();
                if (isset($res)) {
                    $passw = $res["DECODE(pass, 'ndkz3222006')"];
                } else {
                    exit("<script>text();</script>");
                }

                if ($result->num_rows > 0 && $pas == $passw) {
                    if ($rowingss["attempt"] < 3 && $rowingss["cont"] != "n") {
                        $attemptnum = $rowingss["attempt"] + 1;
                        $att = "UPDATE user_data SET attempt='" . $attemptnum . "' WHERE username='" . $use . "'";
                        if ($rowingss["score1test"] == "N/A") {
                            $top = "UPDATE user_data SET score1test='" . $_POST['quizsel'] . "' WHERE username='" . $use . "'";
                        } else if ($rowingss["score2test"] == "N/A") {
                            $top = "UPDATE user_data SET score2test='" . $_POST['quizsel'] . "' WHERE username='" . $use . "'";
                        } else if ($rowingss["score3test"] == "N/A") {
                            $top = "UPDATE user_data SET score3test='" . $_POST['quizsel'] . "' WHERE username='" . $use . "'";
                        } else {
                            exit();
                        }
                        $conn->query($att);
                        $conn->query($top);
                        echo "<script>document.getElementById('text').innerHTML = 'You have been logged in!';";
                        echo "document.getElementById('test').style = 'animation: downanim 1s 1 normal ease-out forwards;';</script>";
                    } else {
                        if ($rowingss["attempt"] >= 3) {
                            echo "<script>document.getElementById('text').innerHTML = 'Sorry, but you have ran out of attempts!';</script>";
                        } else if ($rowingss["cont"] == "n") {
                            $scored;
                            if ($rowingss["score1"] == "N/A") {
                                return;
                            } else if ($rowingss["score2"] == "N/A") {
                                $scored = $rowingss["score1"];
                            } else if ($rowingss["score3"] == "N/A") {
                                $scored = $rowingss["score2"];
                            } else {
                                $scored = $rowingss["score3"];
                            }
                            echo "<script>document.getElementById('text').innerHTML = 'Sorry, but you can only qualify for one topic! You scored a '+" . $scored . "+'% on one of the topics.';</script>";
                        }
                    }
                } else if ($result->num_rows > 0 && $pas != $passw) {
                    echo "<script>document.getElementById('text').innerHTML = 'That password is incorrect, please try again';</script>";
                } else {
                    echo "<script>text()</script>";
                }
            } else {
                exit();
            }
            $conn->close();

            ?>

</body>

</html>