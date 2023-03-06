
<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

    public function FileUploader($phpFile, $phpFileTmp)
    {
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }

    public function displayTable()
    {
        echo '<table border="1">';
        $start_row = 1;
        if (($csv_file = fopen($this->phpFileTmp, "r")) !== FALSE) {
            while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                $column_count = count($read_data);
                echo '<tr>';
                $start_row++;
                for ($c = 0; $c < $column_count; $c++) {
                    echo "<td>".$read_data[$c] . "</td>";
                }
                echo '</tr>';
            }
            fclose($csv_file);
        }
        echo '</table>';
    }

    public function updateCsv($newData)
    {
        $fp = fopen($this->phpFileTmp, 'a');
        fputcsv($fp, $newData);
        fclose($fp);
    }
}

if (isset($_POST['submit'])) {
    $phpFile = $_FILES['php-file']['name'];
    $phpFileTmp = $_FILES['php-file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

    $newData = array(4, 4, 4, 'Y', 1, 1, 1, 'M', 'AddedText');
    $fileUploader->updateCsv($newData);

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();



// header('Content-Type: text/csv');
// header('Content-Disposition: attachment; filename="updated_file.csv"');
// readfile('/var/www/html/PHP_BASICS/PHP_ASSIGNMENT9/airtravel.csv');
// readfile('/var/www/html/PHP_BASICS/PHP_ASSIGNMENT9/biostats.csv');
// // readfile('/PHP_BASICS/PHP_ASSIGNMENT9/biostats(1).csv');

// exit;
}
 
?>