<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>

    <link rel="stylesheet" href="result.css">
    <link rel="Stylesheet" href="https://fonts.googleapis.com/css2?family=Courgette">

</head>
<body>

    <?php

        include "NavBar.html";

        echo "<div class='res'>";

        $total = $_SESSION['ans'];
        $use = $_SESSION['user'];
        $test = $_SESSION['test'];
        $score = 0;
        for ($i = 0; $i < 5; $i++) {
            $an = strtolower($_POST["ques$i"]);
            $ans = str_replace(" ", "", $an);
            if ($ans == strtolower(str_replace(" ", "", $total[$i]))) {
                $score += 20;
            } else {
                $score += 0;
            }
        }

        $conn = mysqli_connect("localhost", "nkozak1", "ndkz3222006", "Q和A");


        if ($score > 70) {
            $qs = "UPDATE user_data SET cont='n' WHERE username='" . $use . "'";
            $conn->query($qs);
            $sql = "SELECT * FROM user_data WHERE username='" . $use . "'";
            $res = $conn->query($sql);
            $result = $res->fetch_assoc();
            if ($result["score1"] == "N/A") {
                $inscore = "UPDATE user_data SET score1='" . $score . "' WHERE username='" . $use . "'";
            } else if ($result["score2"] == "N/A") {
                $inscore = "UPDATE user_data SET score2='" . $score . "' WHERE username='" . $use . "'";
            } else if ($result["score3"] == "N/A") {
                $inscore = "UPDATE user_data SET score3='" . $score . "' WHERE username='" . $use . "'";
            } else {
                return;
            }
            $conn->query($inscore);
            $sql = "SELECT * FROM user_data WHERE username='" . $use . "'";
            $res = $conn->query($sql);
            $result = $res->fetch_assoc();
            $name = $result['FLname'];
            if ($test == "taylor") {
                echo "<h2>You scored $score% $name. Congratulations!<br>Click <a target='_blank' href='taylorcertif.pdf'>here</a> for your certificate!</h2>";
            } else if ($test == "conan") {
                echo "<h2>You scored $score%. Congratulations!<br>Click <a target='_blank' href='conancertif.pdf'>here</a> for your certificate!</h2>";
            } else if ($test == "billie") {
                echo "<h2>You scored $score%. Congratulations!<br>Click <a target='_blank' href='billiecertif.pdf'>here</a> for your certificate!</h2>";
            }
        } else if ($score <= 70) {
            $sql = "SELECT * FROM user_data WHERE username='" . $use . "'";
            $res = $conn->query($sql);
            $result = $res->fetch_assoc();
            if ($result["score1"] == "N/A") {
                $inscore = "UPDATE user_data SET score1='" . $score . "' WHERE username='" . $use . "'";
            } else if ($result["score2"] == "N/A") {
                $inscore = "UPDATE user_data SET score2='" . $score . "' WHERE username='" . $use . "'";
            } else if ($result["score3"] == "N/A") {
                $inscore = "UPDATE user_data SET score3='" . $score . "' WHERE username='" . $use . "'";
            } else {
                return;
            }
            $conn->query($inscore);
            echo "<h2>You have failed the test with a $score%! You have used " . $result['attempt'];
            if ($result["attempt"] == "1") {
                echo " attempt. Try visiting some of the links below for information then try again <a href='home.php'>here</a>.</h2>";
            } else {
                echo " attempts. Try visiting some of the links below for information then try again <a href='home.php'>here</a>.</h2>";
            }
            if ($test == "taylor") {
                echo "<a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjZg-qE4977AhVNl2oFHTqzDk8QFnoECEkQAQ&url=https%3A%2F%2Fwww.thefactsite.com%2Ftaylor-swift-facts%2F&usg=AOvVaw172JPTOZyZT9-PFk9mFP0S'>50 Taylor Swift Fun Facts</a>
                <br>
                <a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjZg-qE4977AhVNl2oFHTqzDk8QFnoECEcQAQ&url=https%3A%2F%2Fwww.distractify.com%2Fp%2Ffun-facts-about-taylor-swift&usg=AOvVaw37NarG9gX9NNkFCL9gUr5c'>30 Taylor Swift Fun Facts</a>
                <br>
                <a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjZg-qE4977AhVNl2oFHTqzDk8QFnoECEYQAQ&url=https%3A%2F%2Fwww.telltalesonline.com%2F32978%2Ftaylor-swift-facts%2F&usg=AOvVaw2xrjRpkAIiQmX-40OuCC2o'>40 Taylor Swift Fun Facts</a>";
            } else if ($test == "conan") {
                echo "<a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjigc-24977AhWFl2oFHVhSC-0QFnoECAkQAQ&url=https%3A%2F%2Fwww.popbuzz.com%2Fmusic%2Ffeatures%2Fconan-gray%2F&usg=AOvVaw1q2c_aWEP95D1fFHmMTZXB'>19 Conan Gray Fun Facts</a>
                <br>
                <a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjigc-24977AhWFl2oFHVhSC-0QFnoECDAQAQ&url=https%3A%2F%2Fwww.uselessdaily.com%2Fworld%2Fconan-gray-trivia-30-facts-about-the-famous-singer%2F&usg=AOvVaw0gxtHG7ttguiWA8vsh9eSp'>30 Conan Gray Facts</a>
                <br>
                <a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjK-ZLT4977AhUKnGoFHVeCDKsQFnoECBIQAQ&url=https%3A%2F%2Fwww.conangray.com%2F&usg=AOvVaw16vNHgx8fSFke2vCz9GUsO'>Conan Gray Website</a>";
            } else if ($test == "billie") {
                echo "<a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwipyd6j4t77AhVamGoFHUecAwIQFnoECAkQAw&url=https%3A%2F%2Fwww.funkidslive.com%2Flearn%2Ftop-10-facts%2Ftop-10-facts-about-billie-eilish%2F&usg=AOvVaw0pI_PxuVyXxcdpc_rzIUvX'>10 Billie Eilish Fun Facts</a>
                <br>
                <a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwipyd6j4t77AhVamGoFHUecAwIQFnoECCoQAQ&url=https%3A%2F%2Fwww.seventeen.com%2Fcelebrity%2Fmusic%2Fa27543206%2Fbillie-eilish-facts%2F&usg=AOvVaw1TXfhSTISVr-COpfC7A5AZ'>15 Billie Eilish Fun Facs</a>
                <br>
                <a href='https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwipyd6j4t77AhVamGoFHUecAwIQFnoECGIQAQ&url=https%3A%2F%2Fwww.thefactsite.com%2Fbillie-eilish-facts%2F&usg=AOvVaw1oLF5ur-AaUzbSMg2tVenQ'>30 Billie Eilish Fun Facts</a>";
            }
        }

        $conn->close();
    ?>

    </div>

</body>
</html>