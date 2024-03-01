<?php
function addActiveUser(&$users, $row) {

    $found = false;
    // cerco tra gli utenti già inseriti se l'ho già visto. altrimenti lo inserisco. 
    foreach($users as $us) {
        if($us["id"] == $row["id"]) {
            $found = true;
        }
    }
    if(!$found) {
        $users[] = $row;
    }
}
?>