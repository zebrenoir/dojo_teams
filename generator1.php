<?php

$members = [
    "Damien Baudet",
    "Laure Bluzet",
    "Luca Carubia",
    "Laurent Colomb",
    "Christian Coley",
    "Sofiane Daouzli",
    "Côme De Mauroy",
    "Marion Emeric Bourgogne",
    "Arthur Engels",
    "Walid Hamimed",
    "Thierry Kuntzer",
    "Julien Lardant",
    "Pierre-Alain Monney",
    "Philippe Perrin",
    "Gaetan Rouseyrol",
    "Laurent Segura"
];


$randomMembers = $members;
shuffle($randomMembers);
var_dump($randomMembers);


function generateTeams(int $nbOfTeams, array $members)
{
    $aloneMembers = count($members) % $nbOfTeams;
    if ($aloneMembers === 0) {

        $teams = [];
        $step = 0;
        /*foreach ($members as $member) {
            $teams[] = $member;
        }*/


        for ($i = 0; $i < $nbOfTeams; $i++) {

            for ($j = $step; $j < (count($members) / $nbOfTeams) + $step; $j++) {
                $teams[$i][] = $members[$j];
                echo $j . '<br>';

            }
            $step += floor(count($members) / $nbOfTeams);

//        var_dump($i);

        }

        /*
            for ($i = 5; $i < (count($members) / 3) * 2; $i++) {
                $teams['Team 2'][] = $members[$i];
            }

            for ($i = 10; $i < (count($members) / 3) * 3; $i++) {
                $teams['Team 3'][] = $members[$i];
            }*/

//    $teams['Team 3'][] = $members[-1];

        return $teams;
    } else {
        echo "Please choose another number of teams";
        return false;
    }
}

var_dump(generateTeams(4, $randomMembers));
