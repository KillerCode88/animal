<?php
$fauna = array(
    'Africa' => array('Loxodonta cyclotis', 'Equus quagga', 'Acinonyx jubatus'),
    'Europe' => array('Bison bonasus', 'Capreolus', 'Vormela peregusna'),
    'Asia' => array('Dicerorhinus binagadensis', 'Lepus tanaiticus', 'Tupaia tana'),
    'Australia' => array('Tachyglossidae', 'Macropus eugenii', 'Sarcophilus harrisii'),
);

foreach ($fauna as $continent => $animalStrings) {
    foreach ($animalStrings as $index => $animal) {
        $animalArray = explode(" ", $animal);
        if (count($animalArray) == 2) {
            $animals[$continent][$index] = $animalArray;
        }
    }
}

foreach ($animals as $continent) {
    foreach ($continent as $animal) {
        $secondParts[] = $animal[1];
    }
}
shuffle($secondParts);

$i = 0;
foreach ($animals as $continent => &$animalList) {
    echo "<h2>" . $continent . "</h2>";
    foreach ($animalList as &$animalArray) {
        $animalArray[1] = $secondParts[$i];
        $i++;
        $animalArray = implode(" ", $animalArray);
    }
    $animalList = implode(", ", $animalList);
    echo $animalList;
}
