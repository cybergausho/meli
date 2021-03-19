<?php
define("web", "https://api.mercadolibre.com/sites/");

//abstraccion de datos y parametros de url
class Data{
    public $site_id;
    public $seller_id;


    public function __construct($site_id, $seller_id){
        $this->site_id = $site_id;
        $this->seller_id = $seller_id;
        $this->url= web.$this->getSite()."/search?seller_id=".$this->getSeller();
        
    }

    public function setSite($site_id){
        $this->site_id = $site_id;

    }
    public function setSeller($seller_id){
        $this->seller_id = $seller_id;

    }

    public function getSite(){
        return $this->site_id;

    }
    public function getSeller(){
        return $this->seller_id;
    }

    function getUrl(){
        return $this->url;
    }

}

//conecta a la api, filtra datos y crea log
class Api{
    public $url;
    public $resp;
    public $msj;
    public function __construct($url){
        $this->url=$url;
    } 
   
    public function requestApi(){
        //conexion a api y trae data
            $data= json_decode(file_get_contents("$this->url"), true);
            $filtro= $this->limpiezaDatos($data);
            $this->createLog($filtro);
    }

    public function limpiezaDatos($data){
        //filtro los datos que necesitamos
        $this->msj = "
        ID Seller: ". $data['seller']['id']."
        ";
        foreach ($data['results'] as $valor){
            $this->msj = $this->msj. "
            ID Item: ". $valor['id']."
            Titulo del Item: ". $valor['title']."
            Categoria ID: ". $valor['category_id']."
            ";
            //where tf is name of category
        }
        $this->msj = $this->msj . "
        
        ";
    return $this->msj;
    }
    //guarda datos en log
    public function createLog($log){
        $logFile = fopen("log.txt", 'a') or die("Error al crear archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")."$log") or die("Error al escribir el archivo");
        fclose($logFile);
        }    

    }