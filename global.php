<?php
require_once 'classes/config.php';

function carregarClasse($nomeClasse)
{
	if(file_exists('classes/' . $nomeClasse . '.php')){
		require_once ('classes/' . $nomeClasse . '.php');
	}
}

spl_autoload_register('carregarClasse');