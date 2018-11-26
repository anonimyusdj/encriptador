var app=angular.module("encriptador",[]);

app.controller("encriptar",function($scope,$http){
  $scope.cifrar=function(palabra){
    $http.get("encriptador.php",{params:{
      "opcion":"cifrar",
      "palabra":palabra
    }}).then(function(response){
      $scope.resultado=response.data;
    });
  }
  $scope.descifrar=function(palabra){
    $http.get("encriptador.php",{params:{
      "opcion":"descifrar",
      "palabra":palabra
    }}).then(function(response){
      $scope.resultado2=response.data;
    });
  }
});
