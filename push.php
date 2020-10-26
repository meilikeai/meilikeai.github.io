<?php

$res = PHP_EOL . "auto pull start ---------------------------------------------" . PHP_EOL;
$path = '/www/wwwroot/truefalse/github';
shell_exec('cd ' . $path);
shell_exec('git add -A');
shell_exec('git commit -m ' . date('Y-m-d'));
shell_exec('git push');
