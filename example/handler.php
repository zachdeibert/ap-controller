<?php
    /*
     * By the time control enters this portion of the code, there is a variable
     * named `$message` that contains the message the controller sent.  This
     * script should not output anything ever.  Here are some functions that are
     * already defined for you:
     *
     * Log::write($message) - Writes a message to the application log
     *                        (/var/log/ap-controller.log)
     *
     * new Gpio($direction, $number) - Creates a new GPIO pin controller on pin
     *                                 `$number` with the specified
     *                                 `$direction`.  The `$direction` may be
     *                                 either `Direction::In` or
     *                                 `Direction::Out`.  The `$number` of each
     *                                 pin can be found at:
     * https://www.element14.com/community/docs/DOC-73950/l/raspberry-pi-2-model-b-gpio-40-pin-block-pinout
     *
     * $gpio->setValue($value) - Sets the output voltage of a pin (0 = 0V, 255 =
     *                           3.3V)
     *
     * $gpio->getValue() - Gets the input voltage of a pin (0 = 0V, 255 = 3.3V)
     */
    $gpio = new Gpio(Direction::Out, 21);
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
