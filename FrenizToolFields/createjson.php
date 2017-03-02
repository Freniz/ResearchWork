<!doctype html>
<html ng-app="myApp">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"></link>
    <link rel="stylesheet" type="text/css" href="/css_root/flaticon.css"> 
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/jsoncreator.js"></script>

</head>
<body>
    <div id="fb-root"></div>
    <div id="overlay"></div>
    <div id="left" class="col-lg-12">
        <div class="panel panel-info filterable add_bottom_45 table-responsive-wrap ">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Json Creation</b></h3>     
            </div>
            <div ng-app="myApp" ng-init="showhide=true" ng-controller="myCtrl">
            <div id="buttonsList">
                <div class="left"> 
                    <div>
                        <input type="button"  class="btn btn-info" value="Create new form" ng-click="createform()">

                    </div></br>
                    <span>
                        <div>
                            <input type="button"  class="btn btn-info {{section}}" value="Create new section" ng-click="showAll3()">
                        </div> 
                    </span></br>
                    <span class="icon property-builder-field-icon form-builder-field-icon-text"></span>
                    <div class="property-builder-field-label">Text</div>
                    <span class="icon property-builder-field-icon form-builder-field-icon-textarea"></span> 
                    <div class="property-builder-field-label">Textarea</div>
                    <span class="icon property-builder-field-icon form-builder-field-icon-checkbox"></span>
                    <div class="property-builder-field-label">Checkbox</div>
                    <span class="icon property-builder-field-icon form-builder-field-icon-button"></span>
                    <div class="property-builder-field-label">Button</div>
                    <span ng-show="fieldsJSON3.visible" class="glyphicon glyphicon-text-width">   
                            <input type="button" value="text" class="btn btn-info {{fieldsJSON3}}" ng-click="addctrl('text')">           
                     </br></br>
                     <span class="glyphicon glyphicon-sort-by-order">
                            <input type="button" value="number" class="btn btn-info" ng-click="addctrl('number')">
                    </span></br>
                         </br>
                        <div>
                            <input type="button" value="select" class="form-control" ng-click="addctrl('select')">
                        </div> </br>
                        <div>
                            <input type="button" value="textarea" class="form-control" ng-click="addctrl('textarea')">
                        </div> </br>
                        <div>
                            <input type="button" value="checkbox" class="form-control" ng-click="addctrl('checkbox')">
                        </div> </br>
                        <div>
                            <input type="button" value="radio" class="form-control" ng-click="addctrl('radio')">
                        </div> </br>
                        <div>
                            <input type="button" value="range" class="form-control" ng-click="addctrl('range')">
                        </div> </br>
                         <input type="button" value="static text" class="form-control" ng-click="addctrl('statictext')"> </br>
                         <input type="button" value="date" class="form-control" ng-click="addctrl('date')"> </br>
                         <input type="button" value="time" class="form-control" ng-click="addctrl('time')"> </br>
                         
                         <input type="button" value="date and time" class="form-control" ng-click="addctrl('datetime')"> </br>
                         
                         <input type="button" value="HTML" class="form-control" ng-click="addctrl('html')"> </br>
                         
                         <input type="button" value="Line" class="form-control" ng-click="addctrl('line')"> </br>
                         
                         <input type="button" value="Spacer" class="form-control" ng-click="addctrl('spacer')"> </br>

                         <input type="button" value="button" class="form-control" ng-click="addctrl('button')"> </br>

                         <input type="button" value="upload" class="form-control" ng-click="addctrl('upload')"> </br>

                         <input type="button" value="richtext" class="form-control" ng-click="addctrl('richtext')"> </br>
                         
                         <input type="button" value="Autolookup" class="form-control" ng-click="addctrl('autolookup')"> </br>
                    </span>                                          
                </div>
            </div>
        </div>
    </body>
</html>