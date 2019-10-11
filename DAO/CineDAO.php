<?php
	/**
	 * @author Guille
	 * @version 1.0
	 * @created 06-oct.-2019 19:06:02
	 */
	namespace DAO;

	use Models\Cine as Cine;

	class CineDAO
	{
		private $cineList = array();

		/**
		 * 
		 * @param cine
		 */
		public function add(Cine $cine)
		{
			$this->retrieveData();

			array_push($this->cineList, $cine);
				
			$this->saveData();
		}

		public function getAll()
		{
			$this->Retrievedata();

			return $this->cineList;
		}

		public function saveData()
		{
			$arrayToEncode = array();

			foreach($this->cineList as $cine)
			{
				$valuesArray["id"] = $cine->getId();
				$valuesArray["nombre"]= $cine->getNombre();
				$valuesArray["direccion"]= $cine->getDireccion();
				$valuesArray["capacidad"]=$cine->getCapacidad();
				$valuesArray["precio"]=$cine->getPrecio();
			
				array_push($arrayToEncode, $valuesArray);
			}

			$jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

			$jsonPath = $this->GetJsonFilePath(); //Get correct json path

			file_put_contents($jsonPath, $jsonContent);
		}

		public function retrieveData()
		{
			$this->cineList = array();

			$jsonPath = $this->GetJsonFilePath(); //Get correct json path

			if(file_exists($jsonPath));
			{
				$jsonContent = file_get_contents($jsonPath);

				$arrayToDecode = ($jsonContent) ? json_decode ($jsonContent, true) : array();
				
				foreach($arrayToDecode as $valuesArray)
				{
					$cine = new Cine();
					$cine->setId($valuesArray["id"]);
					$cine->setNombre($valuesArray["nombre"]);
					$cine->setDireccion($valuesArray["direccion"]);
					$cine->setCapacidad($valuesArray["capacidad"]);
					$cine->setPrecio($valuesArray["precio"]);

					array_push($this->cineList, $cine);
				}
			}
		}

		/**
		 * retorna 0 si no existe, la id si existe
		 * @param cineAbuscar debe tener al menos el parametro "id" o el "nombre"
		 */
		public function cineExiste(Cine $cineAbuscar)
		{
			$this->cineList = array();

			$jsonPath = $this->GetJsonFilePath(); //Get correct json path

			if(file_exists($jsonPath));
			{
				$jsonContent = file_get_contents($jsonPath);

				$arrayToDecode = ($jsonContent) ? json_decode ($jsonContent, true) : array();
				
				foreach($arrayToDecode as $valuesArray)
				{
					$cine = new Cine();
					$cine->setId($valuesArray["id"]);
					$cine->setNombre($valuesArray["nombre"]);
					$cine->setDireccion($valuesArray["direccion"]);
					$cine->setCapacidad($valuesArray["capacidad"]);
					$cine->setPrecio($valuesArray["precio"]);

					if($cineAbuscar->getId() === $cine->getId())
					{
						return $cine->getId();
					}
					if($cineAbuscar->getNombre() === $cine->getNombre())
					{
						return $cine->getId();
					}
				}
			}
			return 0;
		}

		/**
		 * 
		 * @param id
		 */
		public function eliminarCine(int $id)
		{
			$this->cineList = array();
			
			$jsonPath = $this->GetJsonFilePath(); //Get correct json path

			if(file_exists($jsonPath))
			{
				$jsonContent = file_get_contents($jsonPath);

				$arrayToDencode = ($jsonContent) ? json_decode ($jsonContent, true) : array();
				
				foreach($arrayToDecode as $valuesArray)
				{
					$cine = new Cine();
					$cine->setId($valuesArray["id"]);
					$cine->setNombre($valuesArray["nombre"]);
					$cine->setDireccion($valuesArray["direccion"]);
					$cine->setCapacidad($valuesArray["capacidad"]);
					$cine->setPrecio($valuesArray["precio"]);

					if($id != $cine->getId())
					{
						array_push($this->cineList, $cine);
					}
				}
				$this->SaveData();
			}
		}

		public function cineXid($id)
		{
			$this->cineList = array();

			$jsonPath = $this->GetJsonFilePath(); //Get correct json path

			if(file_exists($jsonPath));
			{
				$jsonContent = file_get_contents($jsonPath);

				$arrayToDecode = ($jsonContent) ? json_decode ($jsonContent, true) : array();
				
				foreach($arrayToDecode as $valuesArray)
				{
					$cine = new Cine();
					$cine->setId($valuesArray["id"]);
					$cine->setNombre($valuesArray["nombre"]);
					$cine->setDireccion($valuesArray["direccion"]);
					$cine->setCapacidad($valuesArray["capacidad"]);
					$cine->setPrecio($valuesArray["precio"]);

					if($id === $cine->getId())
					{
						return $cine;
					}

				}
			}
			return null;
		}

		//Need this function to return correct file json path
		function GetJsonFilePath(){

			$initialPath = "Data\cines.json";
			
			if(file_exists($initialPath)){
				$jsonFilePath = $initialPath;
			}else{
				$jsonFilePath = ROOT.$initialPath;
			}
			
			return $jsonFilePath;
		}
	}
?>