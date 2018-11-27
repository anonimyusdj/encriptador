<?php
 function cifrar(){
    $cadena=strtolower($_REQUEST['palabra']);
    $alfabeto=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' '];


    $producciones=['!@#','!~€¬','!1/8','!&%','!%+5','!po','!Ew54','!?5¿','!^ç','!78','!Tgh','!$@@','!AxcA','!·-:','!R_-d','!%tYH','!UI','!PlJ','![;}','!{nX}','!XxX','!=?','!&/u','!VBm','!Io=','!Rj45','!sp'];
    $resultado="";
    for($i=0;$i < strlen($cadena);$i++){
      for($j=0;$j < count($alfabeto);$j++){
        if($cadena[$i]==$alfabeto[$j]){
          $resultado.=$producciones[$j];
        }
      }
    }
    /*for($i=0;$i < strlen($cadena);$i++){
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
    }*/
    echo $resultado;
  }

function descifrar(){
  //  $cadena=array();
    $cadena=separarPalabras($_REQUEST['palabra']);
    $alfabeto=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' '];
    $producciones=['@#','~€¬','1/8','&%','%+5','po','Ew54','?5¿','^ç','78','Tgh','$@@','AxcA','·-:','R_-d','%tYH','UI','PlJ','[;}','{nX}','XxX','=?','&/u','VBm','Io=','Rj45','sp'];
    $resultado="";

    for($i=0;$i < strlen($cadena);$i++){
      for($j=0;$j < count($alfabeto);$j++){
        if($cadena[$i]==$alfabeto[$j]){
          $resultado.=$producciones[$j];
        }
      }
    }
    /*for($i=0;$i < strlen($cadena);$i++){
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
    }*/
    echo $resultado;
  }
function separarPalabras($palabra){
      $res=array();
      $cadena = $palabra;
      $token = strtok($cadena, "!"); // Primer token
      while($token !== false) {
      // En los tokens subsecuentes no se include el string $cadena
          array_push($res, $token);
          $token = strtok("!");

      }
      return $res;
  }

switch($_REQUEST['opcion']){
  case "cifrar":
    cifrar();
    break;
    case "descifrar":
      descifrar();
      break;
}
?>
