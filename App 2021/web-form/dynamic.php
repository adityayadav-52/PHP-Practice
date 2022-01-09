<?php

$data = array(
'name'=>'Aditya',
'class'=>'Btech',
'rollno'=>'101',
);

echo <<<FORM

<h1>STUDENT FORM</h1>
<hr/>
<form>
<p>
Name :<input type="text" value="{$data['name']}">
</p>
<p>
Class :<input type="text" value="${data['class']}">
</p>
<p>
Roll No :<input type="text" value="{$data['rollno']}">
</p>
</form>
FORM;

?>