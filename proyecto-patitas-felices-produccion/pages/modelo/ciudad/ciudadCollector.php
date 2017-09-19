<?php

include_once('ciudad.php');
include_once('../Collector.php');

class ciudadCollector extends Collector
{
  
  function showciudades() {
    $rows = self::$db->getRows("SELECT * FROM ciudad ");        
    $arrayciudad= array();        
    foreach ($rows as $c){
      $aux = new ciudad($c{'id_ciudad'},$c{'nombre'});
      array_push($id_ciudad, $nombre);
    }
    return $arrayciudad;        
  }

 function showciudad($id_ciudad) {
   $row = self::$db->getRows("SELECT * FROM ciudad where id_ciudad= ?", array("{$id_ciudad}"));        
   $ObjRol = new Rol($row[0]{'id_ciudad'},$row[0]{'nombre'});
   return $Objciudad;   
 }

function updateciudad($id_ciudad,$nombre) {
   $insertrow = self::$db->updateRow("UPDATE public.ciudad SET nombre = ? WHERE id_ciudad= ? ", array("{$nombre}","$id_ciudad"));        
 }

function deleteciudad($id_ciudad) {
   $insertrow = self::$db->deleteRow("DELETE FROM ciudad WHERE id_ciudad= ? ", array("{$id_ciudad}"));        
 }


function createciudad($nombre) {
   $insertrow = self::$db->insertRow("INSERT INTO public.ciudad (nombre) VALUES (?) ", array("{$nombre}"));        
 }
}
?>

