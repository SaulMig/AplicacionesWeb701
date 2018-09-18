<?php namespace AppData\Config;

	class Enrutador
	{

		public static function run(Request $request)
		{
			$controlador = $request->getControlador() . "Controller";
			$ruta = ROOT ."AppData" . DS . "Controllers" . DS . $controlador . ".php";
			$metodo = $request->getMetodo();
			$argumento = $request->getArgumento();
			if (is_readable($ruta)) 
			{
				$mostrar = "AppData\\Controllers\\" . $controlador;
				$controlador = new $mostrar;
				if (!isset($argumento)) 
				{
					$datos=call_user_func(array($controlador, $metodo));
				}
				else
				{
					if(is_callable(array($controlador,$metodo)))
					{
						$datos=call_user_func_array(array($controlador, $metodo), $argumento);
					}
				}
			}
			$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo().".php";
			if(is_readable($ruta))
				require_once ($ruta);
			else
				echo "no se puede cargar la vista";
		} 
	}
	
?>