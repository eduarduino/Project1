<html>
<head>
<title>is218 Project(1)</title>
</head>

<body>
<p align="center"><b>Educational Data System</b></p>
	<?php
		class csvFile{
			public $csv;
			public $columns;
			public function readcsv($csv, $columns){
			ini_set('auto_detect_line_endings', TRUE);
			if(($open = fopen($csv, "r")) !== FALSE){
				while (($row = fgetcsv($open, ",")) !== FALSE){
				if ($columns == TRUE){
					$column = $row;
					$columns = FALSE;
				}
				else{
					$field = array_combine($column, $row);
					$fields[] = $field;
					$name[] = $row[1];					
				}
			}
			fclose($open);
			}
		if(empty($_GET)){
			foreach($fields as $field){
				$i++;
				$recs = $i -1;
				echo '<center><a href='.'"https://web.njit.edu/~ens3/is218Pro/index.php?records='.$recs.'"'.'>'.$name[$recs].'</a></center>';
				echo '</p>';
				}
		}
		$field = $fields[$_GET['records']];
		echo"<table border='1' cellpadding='2' align='center'>";
		foreach($field as $csvName => $actName){
			echo"<tr>";
			echo"<th>$csvName</th><td>$actName</td>";
			echo"</tr>";
		}
		echo "</table>";
		}
	}
	$newfile = new csvFile();
	$newfile->readcsv("hd2013.csv", TRUE);
	?>
</body>
</html>