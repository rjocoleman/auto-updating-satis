<?php
    $output = shell_exec("php bin/satis build satis.json web --no-interaction;");
    var_export($output, TRUE);
?>