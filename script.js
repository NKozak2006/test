$(document).ready( function() {
    $("#confirm").on('input', function() {
        if ($("#pass").val().length <= 6) {
            $("#passcheck").text("Password muct be longer than 6 characters!");
        }
        else if ($("#pass").val().length > 20) {
            $("#passcheck").text("Password must be shorter than 20 characters")
        }
        else if ($("#pass").val() == $("#confirm").val()) {
            $("#passcheck").text("Thank you!");
        }
        else {
            $("#passcheck").text("Passwords do not match!");
        }
    });
    $("#pass").on('input', function() {
        if ($("#pass").val().length <= 6) {
            $("#passcheck").text("Password muct be longer than 6 characters!");
        }
        else if ($("#pass").val().length > 20) {
            $("#passcheck").text("Password must be shorter than 20 characters");
        }
        else if ($("#pass").val() == $("#confirm").val()) {
            $("#passcheck").text("Thank You!");
        } else {
            $("#passcheck").text("Passwords do not match!");
        }
    });
});

function checksubmit() {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var check = document.getElementById("confirm").value;
    if (user.length <= 0) {
        alert("Please input a username!");
    }
    else if (pass.length <= 0) {
        alert("Please input a password!");
    }
    else if (check.length <= 0) {
        alert("Please confirm password!");
    }
    else if (pass != check) {
        alert("Please make sure passwords match!");
    }
    else if (pass.length <= 6) {
        alert("Please make sure password is greater than 6 characters!");
    }
    else if (pass.length > 20) {
        alert("Please make sure password is less than 20 characters");
    }
    else {
        document.getElementById("myForm").submit();
    }
}