<?php

Class Erro 
{
	public static function trataErro(Exception $e)
	{
			if(DEBUG){
	        echo '<pre>';
	        print_r($e);
	        echo '</pre>';
	        exit;
	    } else {
	        echo $e->getMessage();
	        exit;
	    }
	}
}