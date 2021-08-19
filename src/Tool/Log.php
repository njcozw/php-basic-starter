<?php

namespace App\Tool;

use Exception;
use App\Tool\LogCore;

class Log
{
    public static function log($message, $show_exception = false)
    {
        $log = new LogCore();

        $exception  = 'Unhandled Exception. <br />';
        $exception .= $message;
        $exception .= "<br /> You can find the error back in the log.";

        $log->write($message);

        if ($show_exception) {
            throw new Exception($message);
        }

        return "error";
    }
}
