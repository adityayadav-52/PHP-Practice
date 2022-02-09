<?php

require __DIR__ . '/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('Ravi')
        ->addColumn('ravi@gmail.com')
    ->addRow()
        ->addColumn('1002')
        ->addColumn('Jay')
        ->addColumn('jay@gmail.com')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('Golu')
        ->addColumn('golu@gmail.com')
    ->display()
;

?>