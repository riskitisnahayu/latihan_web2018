<?php
//closure
$double = function($var1){

  return $var1 * 2;

};

//range number
$rangenomor = range(1, 5);
$nomorbaru = array_map($double, $rangenomor);
print implode(' ', $nomorbaru);

// output :2 4 6 8 10

?>
