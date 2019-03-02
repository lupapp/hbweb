<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 16/04/2018
 * Time: 8:15
 */

class Variacion extends Mysqli
{
    private $id;
    private $producto;
    private $atributo;
    private $termino;
    private $tipovalor;
    private $valora;
    private $valor;
    private $min;
    private $max;
    private $base;
    private $dependencia;
    private $codDependiente;
    private $operacion;
    private $unidad;
    private $orden;

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

    /**
     * @return mixed
     */
    public function getTermino()
    {
        return $this->termino;
    }

    /**
     * @param mixed $termino
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;
    }

    /**
     * @return mixed
     */
    public function getTipovalor()
    {
        return $this->tipovalor;
    }

    /**
     * @param mixed $tipovalor
     */
    public function setTipovalor($tipovalor)
    {
        $this->tipovalor = $tipovalor;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param mixed $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getValora()
    {
        return $this->valora;
    }

    /**
     * @param mixed $valora
     */
    public function setValora($valora)
    {
        $this->valora = $valora;
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

    /**
     * @return mixed
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * @param mixed $dependencia
     */
    public function setDependencia($dependencia)
    {
        $this->dependencia = $dependencia;
    }

    /**
     * @return mixed
     */
    public function getCodDependiente()
    {
        return $this->codDependiente;
    }

    /**
     * @param mixed $codDependiente
     */
    public function setCodDependiente($codDependiente)
    {
        $this->codDependiente = $codDependiente;
    }

    /**
     * @return mixed
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * @param mixed $operacion
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
    }

    /**
     * @return mixed
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * @param mixed $unidad
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;
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

        $query="INSERT INTO variaciones (id, producto, atributo, termino, tipovalor, valora, valor, min, max, base, dependencia, codDependiente,operacion, unidad, orden)"
            ."VALUES (NULL, '".$this->producto."', '".$this->atributo."', '".$this->termino."', '".$this->tipovalor."', '".$this->valora."'"
        .", '".$this->valor."', '".$this->min."', '".$this->max."', '".$this->base."', '".$this->dependencia."','".$this->codDependiente."', '".$this->operacion."', '".$this->unidad."', '".$this->orden."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAtributoByProducto($id){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM variaciones WHERE termino=0 AND producto=$id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getTerminosByProducto($id){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM variaciones WHERE NOT termino=0 AND producto=$id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getTerminosByAtributo($id, $idp){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM variaciones WHERE NOT termino=0 AND atributo=$id AND producto=$idp ORDER BY orden ");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function verificarAtributo($id, $idp){
        $query=$this->con->query("SELECT * FROM variaciones WHERE atributo=$id AND producto=$idp AND termino=0");
        if($row=$query->fetch_object()){
            $resultset=1;
        }else{
            $resultset=0;
        }
        return $resultset;
    }
    public function verificarTermino($id, $idp){
        $query=$this->con->query("SELECT * FROM variaciones WHERE termino=$id AND producto=$idp");
        if($row=$query->fetch_object()){
            $resultset=1;
        }else{
            $resultset=0;
        }
        return $resultset;
    }
    public function verificarVariacion($id){
        $query=$this->con->query("SELECT * FROM variaciones WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=1;
        }else{
            $resultset=0;
        }
        return $resultset;
    }
    public function getUltimoRegistro(){
        $query=$this->con->query("SELECT * FROM variaciones ORDER BY id DESC LIMIT 1");
        if($row=$query->fetch_array(MYSQLI_ASSOC)){
            $resultset=$row;
        }
        return $resultset;
    }
    public function getById($id){
        $query=$this->con->query("SELECT * FROM variaciones WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }
    public function deleteByAtributoAndProducto($ida,$idp){
        $query=$this->con->query("DELETE FROM variaciones WHERE atributo=$ida AND producto=$idp");
        return $query;
    }
    public function update($id){
        $query="UPDATE variaciones SET tipovalor='".$this->tipovalor."',valora='".$this->valora."',valor='".$this->valor."',"
        ."min='".$this->min."',max='".$this->max."',base='".$this->base."',dependencia='".$this->dependencia."',codDependiente='".$this->codDependiente."',"
        ."operacion='".$this->operacion."',unidad='".$this->unidad."',orden='".$this->orden."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
}