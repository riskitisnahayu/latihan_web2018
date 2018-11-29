<?php
class MyClass
{
    // Constructor
    public function __construct(){
        echo 'Class "' . __CLASS__ . '" diinisiasi!<br>';
    }

    // Destructor
    public function __destruct(){
        echo 'Class "' . __CLASS__ . '" dihancurkan.<br>';
    }
}

$obj = new MyClass;

// Destroy object = dihancurkan objek nya dulu baru menjalankan syntax nya.
unset($obj);

// Output message
echo "Lorem ipsum <br/>";
?>
