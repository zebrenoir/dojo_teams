<?php

$members = [
    "Damien Baudet",
    "Laure Bluzet",
    "Luca Carubia",
    "Laurent Colomb",
    "Christian Coley",
    "Sofiane Daouzli",
    "Côme de Mauroy",
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

function generateThreeTeams(array $members): array
{
    $teams = [];
    $step = 0;
    foreach ($members as $member) {
        if ($step < 5) {
            $teams['Team #1'][] = $member;
        } elseif ($step >= 5 && $step <= 10) {
            $teams['Team #2'][] = $member;
        } elseif ($step > 10 && $step <= 15) {
            $teams['Team #3'][] = $member;
        }
        $step += 1;
    }

    return $teams;
}
























