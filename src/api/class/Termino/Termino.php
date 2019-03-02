<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/04/2018
 * Time: 8:15
 */

class Termino extends Mysqli
{
    private $id;
    private $atributo;
    private $name;
    private $tipo;
    private $orden;
    private $tipovalor;
    private $valor;
    private $max;
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



    public function save(){

        $query="INSERT INTO terminos (id,atributo, name, tipo, orden)"
            ."VALUES (NULL,  '".$this->atributo."', '".$this->name."', '".$this->tipo."', '".$this->orden."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAll(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM terminos ORDER BY id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getAtri($tipo, $terminos){
        switch ($tipo){
            case 1:
                $form='<select>';
                foreach ($terminos as $t){
                    $form.='<option value="'.$t->id.'">'.$t->name.'</option>';
                }
                $form.='</select>';
                break;
        }
        return $form;

    }

    public function getByIdAtributo($id){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM terminos WHERE atributo=$id ORDER BY id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getUltimoRegistro(){
        $query=$this->con->query("SELECT * FROM terminos ORDER BY id DESC LIMIT 1");
        if($row=$query->fetch_array(MYSQLI_ASSOC)){
            $resultset=$row;
        }
        return $resultset;
    }
    public function getById($id){
        $query=$this->con->query("SELECT * FROM terminos WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }
    public function delete($id){
        $query=$this->con->query("DELETE FROM terminos WHERE id=$id");
        return $query;
    }
    public function update($id){
        $query="UPDATE terminos SET name='".$this->name."' ,orden='".$this->orden."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
}