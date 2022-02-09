<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/collection.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Sr.')
    ->addHeader('Roll')
    ->addHeader('Name')
    ->addHeader('Marks');
	
$i=1;

foreach($students as $student){
    $table->addRow()
        ->addColumn($i)
        ->addColumn($student['rollno'])
        ->addColumn($student['name'])
        ->addColumn($student['marks']);
$i++;		
}
$table->display();

?>