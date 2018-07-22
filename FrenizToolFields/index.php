<?php
require_once "renderer_controller.php";

$Data = new RendererController();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProjectD</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    body {
      padding-top: 50px;
    }
    .starter-template {
      padding: 40px 15px;
      text-align: center;
    }
    .freniz-navbar{
      background-color : #0E2A12;
      border-bottom:none;
    }
     .freniz-navbar .container{
      margin-left:0px;
      width:100%!important;
      padding-left:0px;
    }

    .freniz-navbar .navbar-header{
      padding-left:15px;
      background-color:#D1D2D4;
      min-width:250px;
      background-image:url('images/Freniz-Logo.png');
      background-repeat:no-repeat;
      background-position: center;
      
    }
    @media (min-width:768px){
      .freniz-navbar .navbar-header:after{
          content: "";
          display: block;
          width: 0; 
          height: 0; 
          border-top: 50px solid transparent;
          border-bottom: 50px solid transparent;
          border-left: 50px solid #D1D2D4;
          position: fixed;
          z-index:1031;
          top: -50px;
          left: 250px;
      }
    }
    </style>
  </head>

<script>
var app = angular.module('fieldList', []);
app.controller('myCtrl', function($scope, $http) { 

  $http.get('sample.json').then(function(res){
   console.log(res.data.props.dataName);
  });
});
</script>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top freniz-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">

          <!-- input -->
           <div class="form-group" ng-app="fieldList" ng-controller="myCtrl" ng-repeat="field in formFields.fields" ng-click="loadPeople()">
            <label class="col-sm-2 control-label">{{field.props}}</label>
            <div class="col-sm-10">
              <input class="form-control" id="Input" type="text" value="Click to focus...">
            </div>
          </div> 


          <!-- <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="usr">
          </div> -->
          <!-- text area -->
          <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Textarea</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="textarea"></textarea>
            </div>
          </div> -->
          <!-- password -->
           <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input class="form-control" id="Input" type="password">
            </div>
          </div> -->

           <!-- select -->
           <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Select</label>
            <div class="col-sm-10">
              <select class="form-control" id="sell">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div> -->

           <!-- radio -->
           <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Select</label>
            <div class="col-sm-10">
              <label class="radio-inline"><input name="optradio" type="radio" value="">Option 1</label>
              <label class="radio-inline"><input type="radio" value="">Option 2</label>
              <label class="radio-inline"><input type="radio" value="">Option 3</label>
            </div>
          </div> -->

            <!-- checkbox -->
           <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Checkbox</label>
            <div class="col-sm-10">
              <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
              <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
              <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
            </div>
          </div> -->





        </form>


      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
