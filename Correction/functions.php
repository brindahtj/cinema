<?php 

function checkData($data) {

    $fname = $data['fname'];
    $lname = $data['lname'];
    $age = $data['age'];

    if (!empty($fname) && !empty($lname) && is_numeric($age) && $age > 0) {

        return array('fname' => $fname, 'lname' => $lname, 'age' => $age);
    
    } elseif ((!is_numeric($age) || $age <= 0) && $age != NULL)  {

        return "L'age doit etre un chiffre positif";

    } else {

        return "Veuillez remplir tous les champs";
    }
}


function calcRate($a) {

    if ($a <= 10) {
        $tarif = "Enfant";
        $prix = '4 euros';
    } elseif ($a <= 16) {
        $tarif = "Junior";
        $prix = '6 euros';
    } elseif ($a <= 25) {
        $tarif = "Étudiant";
        $prix = '7 euros';
    } elseif ($a >= 60) {
        $tarif = "Senior";
        $prix = '6 euros';
    } else {
        $tarif = "Pas de tarif spécial";
        $prix = '9 euros';
    }  

    
    return array('tarif' => $tarif, 'prix' => $prix);
}

