<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

    public function __construct($phpFile, $phpFileTmp)
    {
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }

    public function displayTable()
{
    $destination = "upload/" . basename($this->phpFile);
    if (move_uploaded_file($this->phpFile, $destination)) {
        $this->phpFileTmp = $destination;
        echo "<h1>"."UPDATED CSV FILE"."</h1>";
        echo '<table>';
        if (($csv_file = fopen($this->phpFileTmp, "r")) !== FALSE) {
            while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                $column_count = count($read_data);
                echo '<tr>';
                for ($c = 0; $c < $column_count; $c++) {
                    echo "<td>".$read_data[$c] . "</td>";
                }
                echo '</tr>';
            }
            fclose($csv_file);
        }
        echo '</table>';
    } 
}


    public function updateCsv()
    {
        if (($handle = fopen($this->phpFileTmp, "r")) !== FALSE) {
            $updatedRows = array();

            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                array_unshift($row, "1");
                $updatedRows[] = $row;
            }
            array_pop($updatedRows);
            fclose($handle);
            if (($handle = fopen($this->phpFileTmp, "w")) !== FALSE) {
                // array_unshift($updatedRows, "1");
                foreach ($updatedRows as $row) {
                    fputcsv($handle, $row);
                }
                fclose($handle);
            } else {
                echo "Error opening CSV file for writing!";
            }
        } else {
            echo "Error opening CSV file for reading!";
        }
    }


public function downloadCsv()
{
    $url = $this->phpFileTmp;
    $file_name = basename($this->phpFile);

    $info = pathinfo($file_name);
    if ($info['extension'] == 'csv') {

        header("Content-Description: File Transfer");
        header("Content-Type: text/csv");
        header("Content-Disposition: attachment; filename=\"". $file_name . "\"");

        readfile($url);
    } else {
        echo "Sorry, that's not a CSV file!!!";
    }

}
}

// }

if (isset($_POST['submit'])) {
    $phpFile = $_FILES['php-file']['name'];
    $phpFileTmp = $_FILES['php-file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->updateCsv();

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->downloadCsv();
}