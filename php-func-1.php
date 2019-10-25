<?php
function cuentaLetraA($cadena){
	echo "Tiene " . substr_count(strtolower($cadena), 'a') . " letra/s A";
}

cuentaLetraA("Upgrade Hub");
?>