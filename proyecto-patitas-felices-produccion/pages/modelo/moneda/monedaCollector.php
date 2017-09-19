<?php

include_once('moneda.php');
include_once("../Collector.php");

class monedaCollector extends Collector
{
  
//mostrar mascotas
  function showmoneda() {
    $rows = self::$db->getRows("SELECT * FROM moneda");        
    $arraymoneda= array();        
    foreach ($rows as $c){
      $aux = new moneda($c{'id_ciudad'},$c{'id_moneda'},$c{'nombre'});
      array_push($arraymoneda, $aux);
    }
    return $arraymoneda;        
  }
  
//eliminar mascota
  function deletemoneda($id_moneda) {
    $rows = self::$db->deleteRow("DELETE FROM moneda WHERE id_moneda= ? ", array("{$id_moneda}"));        
  }   

//insertar mascota
  function createmoneda($id_ciudad,$nombre) {
    $rows = self::$db->insertRow("INSERT INTO public.moneda (id_ciudad, nombre) VALUES (?,?) ", array("{$id_ciudad}","{$nombre}"));        
  } 
    
//actualizar mascota
  function updatemoneda($id_ciudad,$id_moneda,$nombre) {
    $rows = self::$db->insertRow("UPDATE moneda SET id_ciudad= ? ,nombre= ?  WHERE id_moneda= ? ", array("{$id_ciudad}","{$nombre}","{$id_moneda}"));        
  }
    

}
?>
