var app = angular.module('menuList', []);
app.directive("sideMenu", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "side-menu.html";
    };

    return directive;

});
app.directive("menuVertical", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "menu-vertical.html";
    };

    return directive;
    
});
app.directive("sidemenuHeadings", function() {
    var directive = {};
    directive.scope={
        menus:"=",
        isSubmenu:"="
    };
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "sidemenu-headings.html";
    };
    
    return directive;


});
app.controller('myctrl', ["$scope", "$http", function($scope, $http) {
    $http.get('sidemenuJson.json').then(function(res) { 
        $scope.menus = res.data;
       
});

}]);