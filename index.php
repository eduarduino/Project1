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
					$name[] = $row[1];
					$vals[] = $val;
				}
			}
			fclose($open);
			}
		}
		
	$newfile = new csvFile();
	$newfile->readcsv("hd2013.csv", true);
	?>
</body>
</html>