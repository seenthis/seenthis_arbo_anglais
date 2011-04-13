<?php

function arbo_anglais_traduire($var) {

	$var["data"] = ereg_replace("^auteur", "people", $var["data"]);
	$var["data"] = ereg_replace("^mot", "tags", $var["data"]);

	return $var;

}

/*

(
    [data] => auteur/arno
    [objet] => Array
        (
            [url] => 
            [date] => 
            [titre] => ARNO*
            [type_parent] => 
            [type] => auteur
            [id_objet] => 1
        )

)
*/
?>