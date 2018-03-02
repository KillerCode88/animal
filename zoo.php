<?php
$fauna = array(
    'Africa' => array('Loxodonta cyclotis', 'Equus quagga', 'Acinonyx jubatus'),
    'Europe' => array('Bison bonasus', 'Capreolus', 'Vormela peregusna'),
    'Asia' => array('Dicerorhinus binagadensis', 'Lepus tanaiticus', 'Tupaia tana'),
    'Australia' => array('Tachyglossidae', 'Macropus eugenii ', 'Sarcophilus harrisii'),
);
$double = array();
foreach ($fauna as $continent => $animal) {
    foreach ($animal as $animalName) {
        if (strpos($animalName, ' ') !== false) {
            array_push($double, $animalName);
        }
    }
}
echo '<pre>';
print_r($double);

$firstName = $middleName = [];

foreach ($double as $value)
    list($firstName[], $middleName[]) = explode(' ', $value);
shuffle($firstName);

foreach ($firstName as $key => $middle)
    echo "{$middle} {$middleName[$key]}" .
        PHP_EOL;
