<?php
    /*
     * By the time control enters this portion of the code, there is a variable
     * named `$message` that contains the message the controller sent.  This
     * script should not output anything ever.
     */
    if ($message == "on") {
        // Turn on the LED.
        Log::write("Turning on LED");
    } else if ($message == "off") {
        // Turn off the LED.
        Log::write("Turning off LED");
    } else {
        // There was an error in the controller code, but we can't do anything
        // about it now except write it to the log.
        Log::write("Invalid message");
    }
?>
