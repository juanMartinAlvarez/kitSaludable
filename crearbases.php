<?php

  //aca van las sentencias para crear bases para hacer pruebas

  $command = "mysql --user={$vals['db_user']} --password='{$vals['db_pass']}' "
 . "-h {$vals['db_host']} -D {$vals['db_name']} < {$script_path}";

  $output = shell_exec($command . '/shellexec.sql');

  echo $output;

?>