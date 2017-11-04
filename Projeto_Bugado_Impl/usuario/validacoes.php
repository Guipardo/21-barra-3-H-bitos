<?php

function nomeValido($nome){
	for ($i=0; $i < strlen($nome); $i++) { 
		if (is_numeric($nome[$i])) {
			return false;
		}
	}
	return true;
}

function emailValido($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		return true;
    } else {
		return false;
    }
}
?>