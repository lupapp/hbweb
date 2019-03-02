<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/04/2018
 * Time: 8:15
 */

class Atributo extends Mysqli
{
    private $id;
    private $name;
    private $slug;
    private $tipo;
    private $orden;
    private $base;
    private $valor;

    public function __construct(Conexion $con)
    {
        $this->con = $con;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }



    /**
     * @return mixed
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * @param mixed $orden
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }



    public function save(){

        $query="INSERT INTO atributos (id, name, tipo, orden)"
            ."VALUES (NULL, '".$this->name."', '".$this->tipo."', '".$this->orden."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAll(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM atributos ORDER BY orden");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getUltimoRegistro(){
        $query=$this->con->query("SELECT * FROM usuarios ORDER BY id DESC LIMIT 1");
        if($row=$query->fetch_array(MYSQLI_ASSOC)){
            $resultset=$row;
        }
        return $resultset;
    }
    public function getById($id){
        $query=$this->con->query("SELECT * FROM atributos WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }
    public function delete($id){
        $query=$this->con->query("DELETE FROM atributos WHERE id=$id");
        return $query;
    }
    public function update($id){
        $query="UPDATE atributos SET name='".$this->name."',tipo='".$this->tipo."',orden='".$this->orden."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
}