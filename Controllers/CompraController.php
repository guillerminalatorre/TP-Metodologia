<?php
	/**
	 * @author Guille
	 * @version 1.0
	 * @created 06-oct.-2019 19:05:37
	 */
	namespace Controllers;

	use DAO\CompraDAO as CompraDAO;
	use Models\Compra as Compra;	
	
	class CompraController
	{
		private $compraDAO;

		function __construct()
		{
			$this->compraDAO = new CompraDAO();
		}

		public function Add(int $id, date $fecha, int $cantEntradas, int $descuento, float $total, Usuario $usuario)
		{
			$compra = new Compra($id,$fecha,$cantEntradas,$descuento,$total,$usuario);

			$this->compraDAO->add($compra);

			$homeController = new HomeController();
			$homeController->Index();
		}
	}
?>