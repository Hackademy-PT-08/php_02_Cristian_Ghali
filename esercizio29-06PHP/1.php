<!-- 

- Traccia 1:

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array: -->
<?php
    $users = [
     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'Maschio'],
     ['name' => 'Maria', 'surname' => 'Chiara', 'gender' => 'Femmina'],
     ['name' => 'Cristian', 'surname' => 'Ghali', 'gender' => 'Maschio']
    ];

    foreach($users as $user){
        if ($user["gender"] == "Maschio") {
            echo "Buongiorno Sig. $user[name] $user[surname]\n";
        }else{
            echo "Buongiorno Sig.ra $user[name] $user[surname]\n";
        }
    }



// - Traccia 2:

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numeri = [1,4,5,6,42,10,29,15,28];
$contaPari = 0;

foreach($numeri as $numero){
    if ($numero % 2 == 0) {
        $somma = 0;
        $risultato = $somma + $numero;
        $contaPari++;

    }
}
echo " i numeri pari sono $contaPari \n";
echo " il totale è $risultato \n il risultato è ";
echo $risultato / $contaPari;





// - Traccia 3:

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


for ($indice = 1; $indice <= 100; $indice++) {
    if ($indice % 3 === 0 && $indice % 5 === 0) {
        echo "Hackademy \n";
    } elseif ($indice % 3 === 0) {
        echo "Phhp \n ";
    } elseif ($indice % 5 === 0) {
        echo "javascript \n";
    } else {
        echo $indice . " \n" ;
    }
}
