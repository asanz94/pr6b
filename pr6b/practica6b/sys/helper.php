<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	define('APP',ROOT.'app'.DS);
	define('APP_W',basename($_SERVER['SCRIPT_NAME']));
	spl_autoload_register(null, false);
	spl_autoload_register('KAutoloader::Sysloader');
	
	class KAutoloader{
		static function SysLoader($clase){
			$nomfitx = strtolower($clase) . '.php';
			$fitxer =ROOT.'sys/' . $nomfitx;
			
			if (!fitxer_exists($fitxer)){
				return false;
			}
			include $fitxer;
		}
		
		static function AppLoader($clase){
		}
	}
	class Coder{

		static function code($var){
			echo '<pre>'.$var.'</pre>';
		}

		static function code_var($var){
			echo '<pre>'.var_dump($var).'</pre>';
		}

	
		
		
	}
