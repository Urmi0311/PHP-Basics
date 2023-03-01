<?php

class cars
{
    public $name;
    public $color;

    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function set_color($color)
    {
        $this->color = $color;
    }
    public function get_color()
    {
        return $this->color;
    }
}

$TataNexon = new cars();
$audi = new cars();
$Maruti = new cars();
$TataNexon->set_name('TataNexon ');
$TataNexon->set_color('Blue');

$audi->set_name('Audi ');
$audi->set_color('White');

$Maruti->set_name('Maurti ');
$Maruti->set_color('Black');

echo $TataNexon->get_name();
echo " --> ";
echo $TataNexon->get_color();
echo "<br>";
echo $audi->get_name();
echo " --> ";
echo $audi->get_color();
echo "<br>";
echo $Maruti->get_name();
echo " --> ";
echo $Maruti->get_color();

//EOF