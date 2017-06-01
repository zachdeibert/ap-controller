<?php
    /*
     * By the time control enters this portion of the code, there is a variable
     * named `$message` that contains the message the controller sent.  This
     * script should not output anything ever.
     */
    $gpio = new Gpio(Direction.Out, 21);
    if ($message == "on") {
        // Turn on the LED.
        $gpio->setValue(255);
    } else if ($message == "off") {
        // Turn off the LED.
        $gpio->setValue(0);
    } else {
        // There was an error in the controller code, but we can't do anything
        // about it now except write it to the log.
        Log::write("Invalid message");
    }
?>
