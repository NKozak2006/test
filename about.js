var x = 0;
var y = 0;

function med() {
    document.getElementById("med").style = "animation: outthis 1s ease-out 0s 1 forwards";
    x = 1;
    if (y == 1) {
        y = 0;
        document.getElementById("dis").style = "animation: inthis 1s ease-out 0s 1 forwards";
    }
    else {
        return;
    }
}

function fed() {
    document.getElementById("dis").style = "animation: outthis 1s ease-out 0s 1 forwards";
    y = 1;
    if (x == 1) {
        x = 0;
        document.getElementById("med").style = "animation: inthis 1s ease-out 0s 1 forwards";
    } else {
        return;
    }
}