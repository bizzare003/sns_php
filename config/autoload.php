<?php
	spl_autoload_register(function($class) {
		$prifix = 'MyApp\\';
		$pos = strpos($class,$prifix);

		if($pos === 0) {
			$className = substr($class,strlen($prifix));
			$classFilePath = __DIR__.'/../lib/'.str_replace('\\','/',$className).'.php';
			if(file_exists($classFilePath)) {
				require $classFilePath;
			}
		}
	});
