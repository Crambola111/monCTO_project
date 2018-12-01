var box = document.getElementById("sidebar")
var btn = document.getElementById("btn")
btn.onclick = function() {
    if (box.offsetLeft == 0) {
        box.style['margin-left'] = -300 + "px"
    } else {
        box.style['margin-left'] = 0 + "px"
    }
}

