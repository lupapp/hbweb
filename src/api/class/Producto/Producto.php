<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 04/04/2018
 * Time: 16:11
 */

class Producto extends Mysqli
{
    private $id;
    private $ref;
    private $categoria;
    private $cantidad;
    private $clasificacion;
    private $name;
    private $valor;
    private $esp;
    private $file;
    private $descripcion;
    private $detalle;
    private $stock;
    private $estado;
    private $mostrar;
    public function __construct(Conexion $con)
    {
        $this->con=$con;
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
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * @param mixed $clasificacion
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;
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
    public function getEsp()
    {
        return $this->esp;
    }

    /**
     * @param mixed $esp
     */
    public function setEsp($esp)
    {
        $this->esp = $esp;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * @param mixed $detalle
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getMostrar()
    {
        return $this->mostrar;
    }

    /**
     * @param mixed $mostrar
     */
    public function setMostrar($mostrar)
    {
        $this->mostrar = $mostrar;
    }

    public function save(){

        $query="INSERT INTO productos (id, ref, categoria, cantidad, clasificacion, name, valor, esp, file, descripcion, detalle, stock, estado, mostrar)"
        ."VALUES (NULL, '".$this->ref."', '".$this->categoria."','".$this->cantidad."', '".$this->clasificacion."', '".$this->name."', '".$this->valor."',"
        ." '".$this->esp."','".$this->file."','".$this->descripcion."', '".$this->detalle."', '".$this->stock."', '".$this->estado."', '".$this->mostrar."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAll(){
        $query=$this->con->query("SELECT * FROM productos");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getByVisi($v){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM productos WHERE file=$v");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getNumRow(){
        $query=$this->con->query("SELECT * FROM productos");
        $row=$query->num_rows;
        return $row;
    }

    public function getNumRowbyCat($id){
        $query=$this->con->query("SELECT * FROM productos WHERE categoria=$id");
        $row=$query->num_rows;
        return $row;
    }
    public function getFilter($filter){
        $query=$this->con->query("SELECT * FROM productos $filter");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getAllNot($id){
        $query=$this->con->query("SELECT * FROM productos WHERE NOT categoria=$id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getUltimoRegistro(){
        $query=$this->con->query("SELECT * FROM productos ORDER BY id DESC LIMIT 1");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }
    public function getById($id){
        $query=$this->con->query("SELECT * FROM productos WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }else{
            $resultset=0;
        }
        return $resultset;
    }
    public function getByIdCat($id){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM productos WHERE categoria=$id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getByIdCategoria($id){
        $resultset=0;
        $query=$this->con->query("SELECT * FROM productos WHERE categoria=$id");
        while($row=$query->fetch_object()){
            $resultset++;
        }
        return $resultset;

    }
    public function comproByCantidad($id){
        $resultset=0;
        $query=$this->con->query("SELECT * FROM productos WHERE cantidad=$id");
        while($row=$query->fetch_object()){
            $resultset++;
        }
        return $resultset;

    }
    public function getByIdCatIn($ids){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM productos WHERE categoria IN ($ids)");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getByCantidad($id){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM productos WHERE cantidad=$id");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getSearch($criterio){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM productos WHERE name LIKE '%$criterio%' OR descripcion LIKE'%$criterio%' OR detalle LIKE '%$criterio%' OR valor LIKE '%$criterio%'");
        while($row=$query->fetch_object()) {
            $resultset[] = $row;
        }
        return $resultset;
    }
    public function update($id){
        $query="UPDATE productos SET name='".$this->name."',ref='".$this->ref."', categoria='".$this->categoria."',"
            ."cantidad='".$this->cantidad."',clasificacion='".$this->clasificacion."',valor='".$this->valor."',esp='".$this->esp."',"
            ."file='".$this->file."',descripcion='".$this->descripcion."', detalle='".$this->detalle."', stock='".$this->stock."', estado='".$this->estado."', mostrar='".$this->mostrar."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
    public function delete($id){
        $query=$this->con->query("DELETE FROM productos WHERE id=$id");
        return $query;
    }
}