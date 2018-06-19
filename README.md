# PHP-CSV-To-Table
```php
Import CSV and Output to Table

// Function Parameters
get_csv_data($csv,$column_name,$all);

$csv - This will have the path to your csv file.
$column_name - The column you want to return data for.
$all - Return all results
```

# USAGE

```php
// Path to CSV
$csv = "your-path-to-csv-here";

$all_data = get_csv_data($csv, '', true);

echo '<table>';
foreach($all_data as $row){
	echo $row;
}
echo '</table>';

$specific_column_data = get_csv_data($csv, 'column-title-here', false);

echo '<table>';
foreach($all_data as $row){
	echo $row;
}
echo '</table>';
```
