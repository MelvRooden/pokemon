<?php

//template for making a pokemon
class Pokemon
{
    public $name; //the name of the pokemon
    public $type; //the Type of the pokemon
    public $health; //the amount of health the pokemon has
    Public $hitPoints; //the amount of hitPoints the pokemon has
    public $resistance; //the Strength of the pokemon
    public $weakness; //the Weakness of the pokemon
    public $attacks = []; //the Attacks of the pokemon


    public function __construct($_name, $_type, $_health, $_hitPoints, $_resistance, $_weakness, $_attacks)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->health = $_health;
        $this->hitPoints = $_hitPoints;
        $this->resistance = $_resistance;
        $this->weakness = $_weakness;
        $this->attacks = $_attacks;
    }

    //calculates the fight between 2 pokemon
    public function attack($attack, $attacker, $defender)
    {
        //compares the pokemon and calculates the fight
        //compares the type of the attacker with the resistance of the defender and makes a calculation
        if ($attacker->type === $defender->weakness->name) {
            echo "The attack was very effective!";
            echo "<br>";
            $attack_damage = $attack->damage * $defender->weakness->multiplier;

        //compares the attacker type with the defender weakness and makes a calculation
        } else if ($attacker->type === $defender->resistance->name) {
            echo "The attack was very ineffective!";
            echo "<br>";
            $attack_damage = $attack->damage - $defender->resistance->blockPoints;

        //if none of the above are the comparable this calculation will be made
        } else {
            echo "The attack hit them.";
            echo "<br>";
            $attack_damage = $attack->damage;
        }

        //takes the amount of damage off the attacked pokemon's hitPoints
        $attack_result = $defender->hitPoints - $attack_damage;

        //puts all the results to $result
        $result = [$attack_damage, $attack_result];

        //saves the result in the pokemon
        $defender->hitPoints = $attack_result;

        //returns the $result to the index.php
        return $result;
    }
}