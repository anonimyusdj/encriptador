<!DOCTYPE html>
<html lang="es" dir="ltr" ng-app="encriptador">
  <head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encriptador</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/material-icons.css">
  </head>
  <body>
    <div class="row" ng-controller="encriptar">
      <header class="center">
        <h3>Cifrado por Gramatica</h3><hr>
      </header>
      <div class="col s12 m1"></div>
        <div class="col s12 m5 card">
          <h4>Cifrar Palabra</h4>
          <div class="row">
            <div class="input-field col s12 m12">
              <i class="material-icons prefix">border_color</i>
              <input type="text" name="" value="" id="palabra" class="validate" ng-model="palabra" ng-change="cifrar(palabra)">
              <label for="palabra">Ingrese una Palabra</label>
            </div>
          </div>
        </div>

        <div class="col s12 m5 card" style="margin-left:20px;">
          <h4>Descifrar Palabra</h4>
          <div class="row">
            <div class="input-field col s12 m12">
              <i class="material-icons prefix">border_color</i>
              <input type="text" name="" value="" id="palabra2" class="validate" ng-model="palabra2" ng-change="descifrar(palabra2)">
              <label for="palabra2">Ingrese una Palabra</label>
            </div>
          </div>
        </div>
        <div class="col s12 m12"></div>
        <div class="col s12 m1"></div>
          <div class="col s12 m5 card center">
            <h4>Resultado</h4>
            <h5>{{resultado}}</h5>
          </div>
          <div class="col s12 m5 card center" style="margin-left:20px;">
            <h4>Resultado</h4>
            <h5>{{resultado2}}</h5>
          </div>
          <div class="col s12 m12 center red-text"><h5><b>Por el momento solo se permiten letras</b></h5></div>
    </div>
    <script src="js/angular.min.js" charset="utf-8"></script>
    <script src="js/materialize.min.js" charset="utf-8"></script>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
