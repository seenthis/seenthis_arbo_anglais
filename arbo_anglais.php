<?php

function arbo_anglais_traduire($var) {
	$var['data'] = preg_replace(',^auteur,', 'people', $var['data']);
	$var['data'] = preg_replace(',^mot,', 'tags', $var['data']);

	return $var;
}
