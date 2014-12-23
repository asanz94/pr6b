<?php

require "sys/request.php";

class Core{
	static function init(){
		//echo 'El core se inicio';
			echo var_dump(Request::retrieve())."</br>";;
			
            echo('Controller: ');            
            print_r(Request::getCount()); 
            echo"</br>";

            echo('Paramaters: ');
            print_r(Request::getParams());
		echo"</br>";

            echo('Action: ');
            print_r(Request::getAction());


	}
}