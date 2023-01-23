function logincheck() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var sel = document.getElementById("art").value;
    if (user.length <= 0) {
        alert("Please input a username!");
    }
    else if (pass.length <= 0) {
        alert("Please input a password!");
    }
    else if (pass.length <= 6) {
        alert("Please make sure password is greater than 6 characters!");
    }
    else if (pass.length > 20) {
        alert("Please make sure password is less than 20 characters");
    }
    else if (sel == null || sel == false || sel == "" || sel == "NaN") {
        alert("Please select a topic");
    }
    else {
        document.getElementById("login").submit();
    }
}

function questioncheck() {
    for (i = 0; i < 5; i++) {
        var val = document.getElementById("ques" + i).value;
        if (val.length <= 0) {
            alert("Please answer all questions!");
            return;
        }
    }
    document.getElementById("questionaire").submit();
}

function text() {
    document.getElementById('text').innerHTML = "That account doesn't exist. Please go <a href='create.html'>here</a> to create one.";
}