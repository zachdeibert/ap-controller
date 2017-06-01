<?php
    header("Content-Type: image/png");
    header("Content-Length: 67");
    readfile("image.png");

    $message = $_GET["message"];

    class Log {
        private static $fd;

        public static function write($msg) {
            if (self::$fd == NULL) {
                self::$fd = fopen("/var/log/ap-controller.log", "a");
            }
            fwrite(self::$fd, $msg . "\n");
            fflush(self::$fd);
        }

        public static function close() {
            if (self::$fd != NULL) {
                fclose(self::$fd);
                self::$fd = NULL;
            }
        }
    };

    abstract class Direction {
        const In = "in";
        const Out = "out";
    };

    class Gpio {
        private $file;

        public function getValue() {
            return file_get_contents($this->file);
        }

        public function setValue($value) {
            file_put_contents($this->file, "$value");
        }

        function __construct($direction, $number) {
            if (!file_exists("/sys/class/gpio/gpio$number/")) {
                file_put_contents("/sys/class/gpio/export", "$number");
            }
            file_put_contents("/sys/class/gpio/gpio$number/direction", $direction);
            $this->file = "/sys/class/gpio/gpio$number/value";
        }
    };

    include "controller/handler.php";
    Log::close();
?>
