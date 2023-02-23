<?php

function processForm():void
{
    // tester la soumission du formulaire
    if(isSubmitted() && isValid ()){
        echo 'formulaire soumis et valide';
    }
}

function isValid():bool
{
    /* la clé est le name des champs de saisie
    chaque champ de saisie est relié à une fonction 
    de validation et un message d'erreur*/
    
    $constraints=[
        // la clé après la flèche
        'name' => /* la valeur*/[
            'isValidate' => isNotBlank(getValues()['name']), // fonction de validation
            'message' =>'Prénom incorrect',
        ],'email' => /* la valeur*/[
            'isValidate' => isNotBlank(getValues()['email']), // fonction de validation
            'message' =>'email incorrect',
        ],'message' => /* la valeur*/[
            'isValidate' => isNotBlank(getValues()['message']), // fonction de validation
            'message' =>'message incorrect',
        ]

    ];    
    // vérifier les contraintes de validation
    return checkConstraints($constraints);    

}
// verifier les contraintes de validation
function checkConstraints(array $constraints):bool
{
    $GLOBALS['errors'] = [];
    
    // formulaire est considéré valide
    $validation = true;
    // parcourir tous les contraintes de validation
    foreach($constraints as $key => $value){
        if(!$value['isValidate']){ // si la validation est bonne ou
            array_push($GLOBALS['errors'],$value['message']);
            $validation = false; // si la validation est faux
        }
    }
    
    // résultat final de la validation
    return $validation;
}

//récupérer les erreurs du formulaire
function getErrors()
{
    return $GLOBALS['errors'] ?? null;

} 
function isNotBlank($field):bool
{
    //!=note  
    return !empty($field);
}

// teste la soumission du formulaire
function isSubmitted() :bool
{
    // récupérer le name du bouton submit
    return isset ($_POST['submit']);
}
//récupation de la saisie envoyée en POST
function getValues():array
{
    return $_POST;
}