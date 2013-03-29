<?php

namespace Mikulas;


class Git
{

    public static function getCommit()
    {
        $hash = @shell_exec('git rev-parse HEAD');
        return trim($hash);
    }



    public static function getBranch()
    {
        $branch = @shell_exec('echo $(git branch | grep "*" | sed "s/* //")');
        return trim($branch);
    }



    public static function getTime()
    {
        $time = @shell_exec('git log -1 --format="%cd"');
        return strToTime(trim($time));
    }

}
