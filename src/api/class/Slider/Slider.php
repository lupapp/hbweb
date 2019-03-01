<?php
class Slider extends Mysqli
{
    private $id;
    private $bg;
    private $img;
    private $imgDataX;
    private $imgDataY;
    private $imgDataSpeed;
    private $imgDataStart;
    private $imgEfecto;
    private $imgWidth;
    private $imgHeight;
    private $caption;
    private $captionDataX;
    private $captionDataY;
    private $captionDataSpeed;
    Private $captionDataStart;
    private $captionEfecto;
    private $caption2;
    private $caption2DataX;
    private $caption2DataY;
    private $caption2DataSpeed;
    Private $caption2DataStart;
    private $caption2Efecto;
    private $btnTexto;
    private $btnDataX;
    private $btnDataY;
    private $btnDataSpeed;
    Private $btnDataStart;
    private $btnEfecto;
    private $btnTipo;
    private $btnLink;
    private $orden;
    private $estado;


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
    public function getBg()
    {
        return $this->bg;
    }

    /**
     * @param mixed $bg
     */
    public function setBg($bg)
    {
        $this->bg = $bg;
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

    /**
     * @return mixed
     */
    public function getImgDataX()
    {
        return $this->imgDataX;
    }

    /**
     * @param mixed $imgDataX
     */
    public function setImgDataX($imgDataX)
    {
        $this->imgDataX = $imgDataX;
    }

    /**
     * @return mixed
     */
    public function getImgDataY()
    {
        return $this->imgDataY;
    }

    /**
     * @param mixed $imgDataY
     */
    public function setImgDataY($imgDataY)
    {
        $this->imgDataY = $imgDataY;
    }

    /**
     * @return mixed
     */
    public function getImgDataSpeed()
    {
        return $this->imgDataSpeed;
    }

    /**
     * @param mixed $imgDataSpeed
     */
    public function setImgDataSpeed($imgDataSpeed)
    {
        $this->imgDataSpeed = $imgDataSpeed;
    }

    /**
     * @return mixed
     */
    public function getImgDataStart()
    {
        return $this->imgDataStart;
    }

    /**
     * @param mixed $imgDataStart
     */
    public function setImgDataStart($imgDataStart)
    {
        $this->imgDataStart = $imgDataStart;
    }

    /**
     * @return mixed
     */
    public function getImgEfecto()
    {
        return $this->imgEfecto;
    }

    /**
     * @param mixed $imgEfecto
     */
    public function setImgEfecto($imgEfecto)
    {
        $this->imgEfecto = $imgEfecto;
    }

    /**
     * @return mixed
     */
    public function getImgWidth()
    {
        return $this->imgWidth;
    }

    /**
     * @param mixed $imgWidth
     */
    public function setImgWidth($imgWidth)
    {
        $this->imgWidth = $imgWidth;
    }

    /**
     * @return mixed
     */
    public function getImgHeight()
    {
        return $this->imgHeight;
    }

    /**
     * @param mixed $imgHeight
     */
    public function setImgHeight($imgHeight)
    {
        $this->imgHeight = $imgHeight;
    }

    /**
     * @return mixed
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param mixed $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return mixed
     */
    public function getCaptionDataX()
    {
        return $this->captionDataX;
    }

    /**
     * @param mixed $captionDataX
     */
    public function setCaptionDataX($captionDataX)
    {
        $this->captionDataX = $captionDataX;
    }

    /**
     * @return mixed
     */
    public function getCaptionDataY()
    {
        return $this->captionDataY;
    }

    /**
     * @param mixed $captionDataY
     */
    public function setCaptionDataY($captionDataY)
    {
        $this->captionDataY = $captionDataY;
    }

    /**
     * @return mixed
     */
    public function getCaptionDataSpeed()
    {
        return $this->captionDataSpeed;
    }

    /**
     * @param mixed $captionDataSpeed
     */
    public function setCaptionDataSpeed($captionDataSpeed)
    {
        $this->captionDataSpeed = $captionDataSpeed;
    }

    /**
     * @return mixed
     */
    public function getCaptionDataStart()
    {
        return $this->captionDataStart;
    }

    /**
     * @param mixed $captionDataStart
     */
    public function setCaptionDataStart($captionDataStart)
    {
        $this->captionDataStart = $captionDataStart;
    }

    /**
     * @return mixed
     */
    public function getCaptionEfecto()
    {
        return $this->captionEfecto;
    }

    /**
     * @param mixed $captionEfecto
     */
    public function setCaptionEfecto($captionEfecto)
    {
        $this->captionEfecto = $captionEfecto;
    }

    /**
     * @return mixed
     */
    public function getCaption2()
    {
        return $this->caption2;
    }

    /**
     * @param mixed $caption2
     */
    public function setCaption2($caption2)
    {
        $this->caption2 = $caption2;
    }

    /**
     * @return mixed
     */
    public function getCaption2DataX()
    {
        return $this->caption2DataX;
    }

    /**
     * @param mixed $caption2DataX
     */
    public function setCaption2DataX($caption2DataX)
    {
        $this->caption2DataX = $caption2DataX;
    }

    /**
     * @return mixed
     */
    public function getCaption2DataY()
    {
        return $this->caption2DataY;
    }

    /**
     * @param mixed $caption2DataY
     */
    public function setCaption2DataY($caption2DataY)
    {
        $this->caption2DataY = $caption2DataY;
    }

    /**
     * @return mixed
     */
    public function getCaption2DataSpeed()
    {
        return $this->caption2DataSpeed;
    }

    /**
     * @param mixed $caption2DataSpeed
     */
    public function setCaption2DataSpeed($caption2DataSpeed)
    {
        $this->caption2DataSpeed = $caption2DataSpeed;
    }

    /**
     * @return mixed
     */
    public function getCaption2DataStart()
    {
        return $this->caption2DataStart;
    }

    /**
     * @param mixed $caption2DataStart
     */
    public function setCaption2DataStart($caption2DataStart)
    {
        $this->caption2DataStart = $caption2DataStart;
    }

    /**
     * @return mixed
     */
    public function getCaption2Efecto()
    {
        return $this->caption2Efecto;
    }

    /**
     * @param mixed $caption2Efecto
     */
    public function setCaption2Efecto($caption2Efecto)
    {
        $this->caption2Efecto = $caption2Efecto;
    }

    /**
     * @return mixed
     */
    public function getBtnTexto()
    {
        return $this->btnTexto;
    }

    /**
     * @param mixed $btnTexto
     */
    public function setBtnTexto($btnTexto)
    {
        $this->btnTexto = $btnTexto;
    }

    /**
     * @return mixed
     */
    public function getBtnDataX()
    {
        return $this->btnDataX;
    }

    /**
     * @param mixed $btnDataX
     */
    public function setBtnDataX($btnDataX)
    {
        $this->btnDataX = $btnDataX;
    }

    /**
     * @return mixed
     */
    public function getBtnDataY()
    {
        return $this->btnDataY;
    }

    /**
     * @param mixed $btnDataY
     */
    public function setBtnDataY($btnDataY)
    {
        $this->btnDataY = $btnDataY;
    }

    /**
     * @return mixed
     */
    public function getBtnDataSpeed()
    {
        return $this->btnDataSpeed;
    }

    /**
     * @param mixed $btnDataSpeed
     */
    public function setBtnDataSpeed($btnDataSpeed)
    {
        $this->btnDataSpeed = $btnDataSpeed;
    }

    /**
     * @return mixed
     */
    public function getBtnDataStart()
    {
        return $this->btnDataStart;
    }

    /**
     * @param mixed $btnDataStart
     */
    public function setBtnDataStart($btnDataStart)
    {
        $this->btnDataStart = $btnDataStart;
    }

    /**
     * @return mixed
     */
    public function getBtnEfecto()
    {
        return $this->btnEfecto;
    }

    /**
     * @param mixed $btnEfecto
     */
    public function setBtnEfecto($btnEfecto)
    {
        $this->btnEfecto = $btnEfecto;
    }

    /**
     * @return mixed
     */
    public function getBtnTipo()
    {
        return $this->btnTipo;
    }

    /**
     * @param mixed $btnTipo
     */
    public function setBtnTipo($btnTipo)
    {
        $this->btnTipo = $btnTipo;
    }

    /**
     * @return mixed
     */
    public function getBtnLink()
    {
        return $this->btnLink;
    }

    /**
     * @param mixed $btnLink
     */
    public function setBtnLink($btnLink)
    {
        $this->btnLink = $btnLink;
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



    public function save(){
        $query="INSERT INTO sliders (id,bg,img,imgDataX,imgDataY,imgDataSpeed,imgDataStart,imgEfecto,imgWidth,imgHeight,caption,captionDataX,captionDataY,"
        ."captionDataSpeed,captionDataStart,captionEfecto,caption2,caption2DataX,caption2DataY,caption2DataSpeed,caption2DataStart,caption2Efecto,"
        ."btnTexto,btnDataX,btnDataY,btnDataSpeed,btnDataStart,btnEfecto,btnTipo,btnLink,orden,estado)"
        ."VALUES (NULL,'".$this->bg."','".$this->img."','".$this->imgDataX."','".$this->imgDataY."','".$this->imgDataSpeed."',"
                    ."'".$this->imgDataStart."','".$this->imgEfecto."','".$this->imgWidth."','".$this->imgHeight."','".$this->caption."','".$this->captionDataX."',"
                    ."'".$this->captionDataY."','".$this->captionDataSpeed."','".$this->captionDataStart."','".$this->captionEfecto."','".$this->caption2."',"
                    ."'".$this->caption2DataX."','".$this->caption2DataY."','".$this->caption2DataSpeed."','".$this->caption2DataStart."',"
                    ."'".$this->caption2Efecto."','".$this->btnTexto."','".$this->btnDataX."','".$this->btnDataY."','".$this->btnDataSpeed."',"
                    ."'".$this->btnDataStart."','".$this->btnEfecto."','".$this->btnTipo."','".$this->btnLink."','".$this->orden."','".$this->estado."')";
        $save=$this->con->query($query);
        return $save;
    }
    public function getAll(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM sliders ORDER BY orden");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function getAllActivo(){
        $resultset=[];
        $query=$this->con->query("SELECT * FROM sliders WHERE estado='Publicado' ORDER BY orden");
        while($row=$query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
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
        $query=$this->con->query("SELECT * FROM sliders WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        if(isset($resultset)) {
            return $resultset;
        }
    }
    public function update($id){
        $query="UPDATE sliders SET bg='".$this->bg."',img='".$this->img."',imgDataX='".$this->imgDataX."',imgDataY='".$this->imgDataY."',imgDataSpeed='".$this->imgDataSpeed."',"
            ."imgDataStart='".$this->imgDataStart."',imgEfecto='".$this->imgEfecto."',imgWidth='".$this->imgWidth."',imgHeight='".$this->imgHeight."',caption='".$this->caption."',captionDataX='".$this->captionDataX."',"
            ."captionDataY='".$this->captionDataY."',captionDataSpeed='".$this->captionDataSpeed."',captionDataStart='".$this->captionDataStart."',captionEfecto='".$this->captionEfecto."',caption2='".$this->caption2."',"
            ."caption2DataX='".$this->caption2DataX."',caption2DataY='".$this->caption2DataY."',caption2DataSpeed='".$this->caption2DataSpeed."',caption2DataStart='".$this->caption2DataStart."',"
            ."caption2Efecto='".$this->caption2Efecto."',btnTexto='".$this->btnTexto."',btnDataX='".$this->btnDataX."',btnDataY='".$this->btnDataY."',btnDataSpeed='".$this->btnDataSpeed."',"
            ."btnDataStart='".$this->btnDataStart."',btnEfecto='".$this->btnEfecto."',btnTipo='".$this->btnTipo."',btnLink='".$this->btnLink."',orden='".$this->orden."',estado='".$this->estado."' WHERE id=$id";
        $update=$this->con->query($query);
        return $update;
    }
    public function delete($id){
        $query=$this->con->query("DELETE FROM sliders WHERE id=$id");
        return $query;
    }
}