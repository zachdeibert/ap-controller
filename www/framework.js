function sendMessage(msg, callback) {
    var img = document.createElement("img");
    img.src = "/framework/" + new Date().getTime() + "/" + encodeURIComponent(msg) + ".png";
    img.style.display = "none";
    img.addEventListener("load", function() {
        document.body.removeChild(img);
        if (callback) {
            callback();
        }
    });
    document.body.appendChild(img);
}
