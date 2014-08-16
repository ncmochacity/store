<?php

$doc_root=$_SERVER['DOCUMENT_ROOT'];
$uri=$_SERVER['REQUEST_URI'];
$dirs=explode('/', $uri);
$app_path='/' . $dirs[1] . '/';
set_include_path($doc_root . $app_path);
?>