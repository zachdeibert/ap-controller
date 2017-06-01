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

    include "controller/handler.php";
    Log::close();
?>
