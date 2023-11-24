<?php
class producto
{
	private $pdo;
    public $idProducto;
    public $nit;
    public $nombre;
    public $marca;
    public $modelo;
	public $color;
    public $almacenamiento;
	public $memoria;
    public $precio;
	public $gama;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idProducto)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM producto WHERE idProducto = ?");
			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idProducto)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM producto WHERE idProducto = ?");

			$stm->execute(array($idProducto));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE producto SET
		    nombre  = ?,
			marca  = ?,
            modelo   = ?,
			color  = ?,
			almacenamiento  = ?,
            memoria   = ?,
			precio  = ?,
            gama   = ?
			WHERE idProducto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->nombre,
						$data->marca,
						$data->modelo,
						$data->color,
						$data->almacenamiento,
						$data->memoria,
						$data->precio,
						$data->gama,
						$data->idProducto
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try
		{
		$sql = "INSERT INTO producto (idProducto,nit,nombre,marca,modelo,color,almacenamiento,memoria,precio,gama)
		        VALUES (?, ?, ?, ?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idProducto,
                    $data->nit,
                    
					$data->nombre,
                    $data->marca,
                    $data->modelo,
					$data->color,
                    $data->almacenamiento,
					$data->memoria,
                    $data->precio,
					$data->gama
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
