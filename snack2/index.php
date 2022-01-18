<?php 

if(isset($_GET["name"])) {
    if(isset($_GET["mail"])) {
        if(isset($_GET["age"])) {
            if(strlen($_GET["name"]) > 3 && (strpos($_GET["mail"], ".") != false) && (strpos($_GET["mail"], "@") != false) && is_numeric($_GET["age"])) {
                echo "<h2>Accesso consentito</h2>";
            } else {
                echo "<h2>Accesso negato</h2>";
            }
        } else {
            echo "<h2>Inserisci la tua età nella barra di ricerca</h2>";
        }
    } else {
        echo "<h2>Inserisci la tua email nella barra di ricerca</h2>";
    }
} else {
    echo "<h2>Inserisci il tuo nome nella barra di ricerca</h2>";
}

?>