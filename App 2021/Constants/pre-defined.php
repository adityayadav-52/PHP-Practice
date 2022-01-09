<?php

//wap in php show total pre-defined constants in php

$count =count(get_defined_constants());
printf("The total constants = %d",$count);

print_r(get_defined_constants());



?>