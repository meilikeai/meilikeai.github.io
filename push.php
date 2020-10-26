<?php

echo '----------------------start---------------------------------' . PHP_EOL;
$param_arr = getopt('m:');
$msg = isset($param_arr['m']) ? $param_arr['m'] : date('Y-m-d,H:i:s');
echo 'commit msg ：' . $msg . PHP_EOL;
$path = '/www/wwwroot/truefalse/github';
shell_exec('cd ' . $path);
shell_exec('git add -A');
shell_exec('git commit -m ' . $msg);
shell_exec('git push');
