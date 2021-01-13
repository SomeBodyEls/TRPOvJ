<?php

namespace poepnko;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{

    public function _log($str)
    {
        $this->log[] = $str;
    }

    public static function log($str)
    {
        self::Instance()->_log($str);
    }

    public function _write()
    {
        $d = new DateTime();
        $filename = "Log/" . $d->format('d.m.Y_T_H.i.s.u') . ".log";

        $dirname = "Log";

        if (!(is_dir($dirname))) {
            mkdir($dirname, 0777, true);
        }

        $logfile = "";
        foreach ($this->log as $value) {
            echo $value . "\n";

            $logfile .= $value . "\r\n";
        }
        file_put_contents($filename, $logfile);
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}

?>