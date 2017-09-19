<<?php
class moneda
{
    private $id_ciudad;
    private $id_moneda;
    private $nombre;
   
    
     function __construct($id_ciudad, $id_moneda,$nombre) {
        $this->id_ciudad = $id_ciudad;
        $this->id_moneda = $id_moneda;
 	$this->nombre = $nombre;
 	
     }
function setId_ciudad($id_ciudad){
       $this->id_ciudad = $id_ciudad;
     } 
     function getId_ciudad(){
       return $this->id_ciudad;
     } 
    
     function setId_moneda($id_moneda){
       $this->id_moneda = $id_moneda;
     } 
     function getId_moneda(){
       return $this->id_moneda;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

}
?> 
