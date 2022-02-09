<?php



#Execute the query
$resul_set = mysqli_query($conn, $sql);
if (mysqli_num_rows($resul_set)>0){
	$data = [];
	while($row = mysqli_fetch_object($result_set)){
		$data[] = $row;
	}
}
else if(mysqli_num_rows($result_set)==0){
	echo "No record found";
}
else{
	echo "error" . mysqli_error($conn);
}

$i = 1;
foreach($data as $row){
	$table->addRow()
		$table->addColumn($i)
		$table->addColumn($row->id)
		$table->addColumn($row->name)
		$table->addColumn($row->email);
		
	$i++;
}

$table->display();
?>