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
			ini_set('auto_detect_line_endings', true);
			if(($open = fopen($csv, "r")) !== false){
				while (($row = fgetcsv($open, ",")) !== false){
				if ($columns == true){
					$column = $row;
					$columns = false;
				}
				else{
					$record = array_combine($column, $row);
					$vals[] = $val;
					$name[] = $row[1];					
				}
			}
			fclose($open);
			}
		if(empty($_GET)){
			foreach($vals as $val){
				$i++;
				$records = $i -1;
				echo '<center><a href='.'"http://web.njit.edu/~ens3/is218Pro/index.php?record='.$records.'"'.'>'.$name[$records].'</a></center>';
				echo '</p>';
				}
		}
		$val = $vals[$_GET['records']];
		echo"<table border='1' align='center'>";
		foreach($val as $csvName => $actName){
			echo"<tr>";
			echo"<th>$csvName</th><td>$actName</td>";
			echo"</tr>";
		}
		echo "</table>";
		}
	}
	$newfile = new csvFile();
	$newfile->readcsv("hd2013.csv", true);
	?>
</body>
</html>