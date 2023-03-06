<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <style>
    body{
      margin: 0px 50px 0px 50px;
      text-align: center;
    }

    table {
    width: 100%;
    margin-top: 3% 0% 0% 0%;
    }

    table{
    border: 1px solid;
    text-align: center;
    }

    th{
    border: 1px solid;
    text-align: center;
    }

    td{
    border: 1px solid;
    text-align: center;
    }

    h2{
    margin-top: 2%;
    background-color:#ccff99;
    padding: 2%;
    }
  
    tr:nth-child(even) {background-color:#aff0c0;}
    </style>
</body>
</html>
<?php

class File_upload
{
    private $phpFile;
    private $phpFileTmp;

    public function File_upload($phpFile, $phpFileTmp)
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

    $File_upload = new File_upload($phpFile, $phpFileTmp);
    echo "<h2>Uploaded CSV File</h2>";
    $File_upload->displayTable();

    $newData = array(1, 1, 1,1,1, 'test');
    $File_upload->updateCsv($newData);

    $File_upload = new File_upload($phpFile, $phpFileTmp);
    echo "<h2>Updated CSV File</h2>";
    $File_upload->displayTable();

}
?>


