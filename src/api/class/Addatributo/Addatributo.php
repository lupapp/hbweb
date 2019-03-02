<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/04/2018
 * Time: 8:15
 */

class Addatributo extends Mysqli
{
    private $id;
    private $producto;
    private $atributo;
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
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * @param mixed $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    /**
     * @return mixed
     */
    public function getAtributo()
    {
        return $this->atributo;
    }

    /**
     * @param mixed $atributo
     */
    public function setAtributo($atributo)
    {
        $this->atributo = $atributo;
    }


    public function save(){

        $query="INSERT INTO addatributos (id,producto, atributo)"
            ."VALUES (NULL,  '".$this->producto."', '".$this->atributo."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAll(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM addatributos ORDER BY id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getByIdProducto($id){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM addatributos WHERE producto=$id ORDER BY id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getUltimoRegistro(){
        $query=$this->con->query("SELECT * FROM addatributos ORDER BY id DESC LIMIT 1");
        if($row=$query->fetch_array(MYSQLI_ASSOC)){
            $resultset=$row;
        }
        return $resultset;
    }
    public function getById($id){
        $query=$this->con->query("SELECT * FROM addatributos WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }
    public function deleteByAtributoAndProducto($ida,$idp){
        $query=$this->con->query("DELETE FROM addatributos WHERE atributo=$ida AND producto=$idp");
        return $query;
    }
    public function update($id){
        $query="UPDATE addatributos SET name='".$this->name."' ,orden='".$this->orden."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
}