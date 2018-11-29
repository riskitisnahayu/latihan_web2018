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

// Output message
echo "Lorem ipsum <br/>";
?>
