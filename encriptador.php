<?php
class CifradoCesar{

  public function cifrar(){
    $cadena=$_REQUEST['palabra'];
    $alfabeto=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $resultado="";
    for($i=0;$i < strlen($cadena);$i++){
      for($j=0;$j < count($alfabeto);$j++){
        if($cadena[$i]==$alfabeto[$j]){
            $p=$j+3;
            $alt= count($alfabeto);
            if($p < $alt ){
              $resultado.= $alfabeto[$p];

            }elseif($p >= $alt){
              $k=$p - $alt;
              $resultado.= $alfabeto[$k];
            }
        }
      }
    }
    echo $resultado;
  }

  public function descifrar(){
    $cadena=$_REQUEST['palabra'];
    $alfabeto=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $resultado="";
    for($i=0;$i < strlen($cadena);$i++){
      for($j=0;$j < count($alfabeto);$j++){
        if($cadena[$i]==$alfabeto[$j]){
            $p=$j-3;
            $alt= count($alfabeto);
            if($p < $alt ){
              $resultado.= $alfabeto[$p];

            }
            if($p < 0 ){
              $k= $alt - ($p * -1);
              $resultado.= $alfabeto[$k];
            }
        }
      }
    }
    echo $resultado;
  }
}

switch($_REQUEST['opcion']){
  case "cifrar":
    CifradoCesar::cifrar();
    break;
    case "descifrar":
      CifradoCesar::descifrar();
      break;
}
?>
