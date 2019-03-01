<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 04/04/2018
 * Time: 16:11
 */

class Categoria extends Mysqli
{
    private $id;
    private $parent;
    private $nombre;
    private $tag;
    private $posicion;
    private $img;

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
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * @param mixed $posicion
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }


    public function save(){

        $query="INSERT INTO categorias (id, parent, nombre, tag, posicion, img)"
        ."VALUES (NULL, '".$this->parent."','".$this->nombre."', '".$this->tag."', '".$this->posicion."', '".$this->img."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAll(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM categorias ORDER BY posicion");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getBySuperior(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM categorias WHERE parent=0");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getByTag($tag){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM categorias WHERE tag IN($tag)");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }

    public function getByParent($parent){
        $resultset=array();
        $query=$this->con->query("SELECT * FROM categorias WHERE parent=$parent ORDER BY id ASC");
        while($row=$query->fetch_array()){
           $arreglo=array(
               'id'=>$row['id'],
               'nombre'=>$row['nombre'],
               'sub'=>$this->getByParent($row['id'])
           );
           array_push($resultset,$arreglo);
        }
        if(isset($resultset)) {
            return $resultset;

        }else{
            return $resultset;
        }
        print_r($resutset);
    }
    public function comprobarByParent($id){
        $resultset=0;
        $query=$this->con->query("SELECT * FROM categorias WHERE parent=$id");
        while($row=$query->fetch_object()){
            $resultset++;
        }
        return $resultset;

    }
    public function escribir($array){
        echo '<ul class="catdes">';
        for($i=0;$i<count($array);$i++){
            echo '<li><label class="checkbox-inline"><input type="radio" class="hidden" name="categoria" data-nombre="'.$array[$i]['nombre'].'" value="'.$array[$i]['id'].'">'.$array[$i]['nombre'].'</label> ';

            echo '</li>';
            if(count($array[$i]['sub'])>0) {
                $this->escribir($array[$i]['sub']);
            }
        }
        echo '</ul>';
    }
    public function escribirString($array,$ids){
        for($i=0;$i<count($array);$i++){
            $ids=$ids.','.$array[$i]['id'];
            if(count($array[$i]['sub'])>0) {
                $ids=$this->escribirString($array[$i]['sub'],$ids);
            }
        }
        return $ids;
    }
    public function escribirMenu($array){
        echo '<ul class="nav flex-column catdes ">';
        for($i=0;$i<count($array);$i++){
            echo '<li class="nav-item"><a class="nav-link " href="MS-shop_listing_full_width.php?id='.$array[$i]['id'].'"><i class="fa fa-angle-right"></i>'.$array[$i]['nombre'].'</a></li>';

            echo '</li>';
            if(count($array[$i]['sub'])>0) {
                $this->escribirMenu($array[$i]['sub']);
            }
        }
        echo '</ul>';

    }
    public function escribirSubmenu($array){
        for($i=0;$i<count($array);$i++){
            echo $array[$i]['nombre'];

            if(count($array[$i]['sub'])>0) {
                $this->escribirMenu($array[$i]['sub']);
            }
        }

    }
    public function getUltimoRegistro(){
        $resultset='';
        $query=$this->con->query("SELECT * FROM categorias ORDER BY id DESC LIMIT 1");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }
    public function getById($id){
        $query=$this->con->query("SELECT * FROM categorias WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        if(isset($resultset)) {
            return $resultset;
        }
    }
    public function update($id){
        $query="UPDATE categorias SET parent='".$this->parent."', nombre='".$this->nombre."',  tag='".$this->tag."', posicion='".$this->posicion."',img='".$this->img."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
    public function delete($id){
        $query=$this->con->query("DELETE FROM categorias WHERE id=$id");
        return $query;
    }
}