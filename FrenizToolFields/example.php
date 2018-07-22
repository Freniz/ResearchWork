<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sample Template</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/freniz_tool_style.css">
    

    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/angular.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script src="https://maps.google.com/maps/api/js?libraries=placeses,visualization,drawing,geometry,places"></script>
    <script src="https://rawgit.com/allenhwkim/angularjs-google-maps/master/build/scripts/ng-map.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.2.0/ui-bootstrap-tpls.js"></script>
    <script src="js/datetime-picker.js"></script>

    <script type="text/javascript"></script>
    <script type="text/javascript" src="js/freniz_tool_app.js"></script>
    <script type="text/javascript" src="js/checklist-model.js"></script>

</head>

<body ng-app="fieldList" ng-cloak>

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
    <!--  -->
    <!-- navigation menu -->
    <ul class="nav navbar-nav">
        <li ng-repeat="nav in sitemap" ng-if="nav.navigation">
            <a ng-href="{{ nav.path }}">{{ nav.name }}</a>
        </li>
    </ul>

    <!-- main section dividing -->
    <div class="container" ng-controller="myCtrl">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" ng-class="(forms.selectedTab==section.id)?'active':''" ng-repeat="section in forms.sections">
                <a href="#{{section.id}}" role="tab" ng-click="forms.selectedTab=section.id"  data-toggle="tab" >{{section.name}} <span class="fa fa-pencil-square-o pull-left"></span><span class="fa fa-trash-o pull-left"></span></a>                   
            </li>
        </ul>

        <!-- ng-repeat -->
        <div class="starter-template">
            <form class="form-horizontal" role="form" name="fillForm" ng-submit="submit()">
                <div class="row tab-content">
                    <div class="col-md-12 tab-pane" role="tabpanel" ng-class="(forms.selectedTab==section.id)?'active':''" ng-repeat="section in forms.sections" ng-init="sectionIndex = $index">
                        <h2>{{section.name}}</h2>
                        <div class="form-group" ng-repeat="field in section.fields" ng-init="fieldIndex = $index">
                            <freniz-form-field />
                        </div>
                        <!-- form-group -->
                        <hr/>
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- row -->
            </form>
        </div>
        <!-- starter-template -->
    </div>
    <!-- container -->
</body>
</html>