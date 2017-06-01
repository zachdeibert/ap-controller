/*
 * Inside the script at /framework/index.js, there is one method defined that
 * allows this code to communicate with the PHP code.
 * 
 * function sendMessage(msg, callback) {
 *     ...
 * }
 * 
 * Any information sent using this function will be immediately sent to the
 * script in `handler.php`.  There is currently no way to communicate back from
 * the PHP script to this script, so make sure your code remembers the state the
 * controller is in after you send a message to the server.  Once the server has
 * finished processing the message, the function in `callback` will be called,
 * if it is not `null`.
 */

var on = false;

function clicked() {
    if (on = !on) {
        document.body.classList.add("active");
        sendMessage("on");
    } else {
        document.body.classList.remove("active");
        sendMessage("off");
    }
}
