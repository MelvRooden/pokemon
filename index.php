<?
include 'Pokemon.php';
include 'Type.php';
include 'Resistance.php';
include 'Weakness.php';
include 'Attack.php';

//making new energy types
$types = [
        new Type("Lightning"),
        new Type("Fire"),
        new Type("Water"),
        new Type("Fighting")
];

//making a new pokemon
$poke0 = new Pokemon(
    'Pikachu',
    $types[0],
    60,
    60,
    new Resistance($types[3], 20),
    new Weakness($types[1], 1.5),
    [
    new Attack('Electric Ring', 50),
    new Attack('Pika Punch', 20)
    ]
);

//making a new pokemon
$poke1 = new Pokemon(
    'Charmeleon',
    $types[1],
    60,
    60,
    new Resistance($types[0], 10),
    new Weakness($types[2], 2),
    [
    new Attack('Head Butt', 10),
    new Attack('Flare', 30)
    ]
);


//displays the stats of the pokemon on screen
echo "Pokemon Stats " . $poke0->name;
var_dump($poke0);

echo "Pokemon Stats " . $poke1->name;
var_dump($poke1);


echo "<br>";
//starts the attackCalc function
$result0 = $poke0->attack($poke0->attacks[0], $poke0, $poke1);

//displays what happens in the pokemon fight on screen
//displays fight on screen
echo $poke0->name . " attacks " . $poke1->name . " with " . $poke0->attacks[0]->name . " and deals " . $result0[0] . " damage. ";
echo "<br>";
echo $poke1->name . " has " . $result0[1] . " hitpoints of the " . $poke1->health . " left.";


echo "<br>";
echo "<br>";
//starts the attackCalc function
$result1 = $poke1->attack($poke1->attacks[1], $poke1, $poke0);

//displays fight two on screen
echo $poke1->name . " attacks " . $poke0->name . " with " . $poke1->attacks[1]->name . " and deals " . $result1[0] . " damage.";
echo "<br>";
echo $poke0->name . " has " . $result1[1] . " hitpoints of the " . $poke1->health . " left.";

echo "<br>";
var_dump($poke0);
var_dump($poke1);