<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/6
 * Time: 14:36
 */

function shell_exec_cmd($cmd) {
    $cmd = $cmd . ' 2>&1';
    // 执行命令
    exec ( $cmd, $output, $rc );
    if ($rc == 0) {
        return array(true, implode(PHP_EOL, $output));
    } else {
        return array(false, implode(PHP_EOL, $output));
    }
}



?>