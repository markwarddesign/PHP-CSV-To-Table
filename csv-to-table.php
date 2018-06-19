function get_csv_data($csv, $column_name, $all = false){
$file = fopen($csv,"r");
$i = 0;
$dataRow = array();
// Loop Through CSV
while(! feof($file)){
	$theCSV = fgetcsv($file);
	
	if($i >= 3){
	// print_r($theCSV);
		if($all == false && $column_name !== ''){
	
			// Search for Array Key by Column Title
			if($i == 3){	
				$key = array_search ($column_name, $theCSV);
			}
	    
      // Heading Columns
			$dataRow[] = '<tr>';
			$dataRow[] = '<td>'.$theCSV[0].'</td>';
			$dataRow[] = '<td>'.$theCSV[1].'</td>';
			$dataRow[] = '<td>'.$theCSV[2].'</td>';
			// Add Column Data to Array
			$dataRow[] = '<td>'.$theCSV[$key].'</td>';
			$dataRow[] = '</tr>';
	
		} else{
			$dataRow[] = '</tr>';
			foreach($theCSV as $f){
				$dataRow[] = '<td>'.$f.'</td>';
			}
			$dataRow[] = '</tr>';
		
		}
	}

	$i++;
}

fclose($file);
return $dataRow;
}
