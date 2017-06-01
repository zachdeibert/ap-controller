<?php
    /*
     * By the time control enters this portion of the code, there is a variable
     * named `$message` that contains the message the controller sent.  This
     * script should not output anything ever.
     */
    if ($message == "on") {
        // Turn on the LED.
        error_log("Turning on LED");
    } else if ($message == "off") {
        // Turn off the LED.
        error_log("Turning off LED");
    } else {
        // There was an error in the controller code, but we can't do anything
        // about it now except write it to the log.
        error_log("Invalid message");
    }
?>
