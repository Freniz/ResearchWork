var app = angular.module('menuList', []);


app.directive("menuHead", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "menu-head.html";
    };

    return directive;

});
app.directive("sideMenu", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "side-menu.html";
    };

    return directive;

});
app.directive("sidemenuHeadings", function() {
    var directive = {};
    directive.replace = true;
    directive.scope={
        sidemenus:"=",
        ismainmenu:"="
    };
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "sidemenu-headings.html";
    };
    
    return directive;


});
app.directive("menuHeading", function() {
    var directive = {};
    directive.scope={
        menus:"=",
        isSubmenu:"="
    };
    directive.restrict = 'E';
    directive.replace = true;
    directive.templateUrl = function(element, attributes) {
        return "menu-heading.html";
    };
        directive.link=function(scope, element, attrs){
        scope.open = function(menu){
            for(var i in scope.menus){
                if(scope.menus[i] === menu){
                   
                    if(menu.isOpened){
                        recurCloseMenu(scope.menus[i]);
                    } else {
                         menu.isOpened = true;
                    }
                }
                else{
                    recurCloseMenu(scope.menus[i]);
                }
            }
        }
        function recurCloseMenu(menu){
            if(menu.isOpened){
                menu.isOpened = false;
                if(menu.hasOwnProperty("subMenus")){
                    for(var i in menu.subMenus){
                        recurCloseMenu(menu.subMenus[i]);
                    }
                }
            }
        }
    }
    return directive;


});
app.controller('myctrl', ["$scope", "$http", function($scope, $http) {
    $http.get('menuJson.json').then(function(res) { 
        $scope.menus = res.data;
       
});
    $http.get('sidemenuJson.json').then(function(res) { 
    $scope.sidemenus = res.data;
       
});
    $http.get('widgetsJson.json').then(function(res) { 
    $scope.widgets = res.data;
        
});
    $http.get('appJson.json').then(function(res) { 
    $scope.apps = res.data;
        
});

}]);

$(function() {
      $('.dropdown').on({
          "click": function(event) {
            if ($(event.target).closest('.dropdown-toggle').length) {
              $(this).data('closable', true);
            } else {
              $(this).data('closable', false);
            }
          },
          "hide.bs.dropdown": function(event) {
            hide = $(this).data('closable');
            $(this).data('closable', true);
            return hide;
          }
      });
  });

app.controller('sortCtrl', ['$scope', function($scope) {

 // people array
 $scope.people = ["Home","Faqs","News"];

 // set up sortable options
 $scope.sortableOptions = {
   stop: function(e, ui) {
     // do something here
   }
 };
}]);
