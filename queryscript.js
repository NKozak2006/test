function logincheck() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
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
    else {
        document.getElementById("login").submit();
    }
}