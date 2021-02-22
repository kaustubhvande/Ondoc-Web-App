<?php
 
	$db         = mysqli_connect('localhost', 'root', '', 'ondocdb');
 
	$symptom    = $_GET['symptom'];
 
	$sql        = "SELECT symptom FROM disease WHERE symptom like '$symptom%' ORDER BY symptom";
 
	$res        = $db->query($sql);
 
	if(!$res)
		echo mysqli_error($db);
	else
		while( $row = $res->fetch_object() )
			echo "<option value='".$row->symptom."'>";
 
?>
</option>