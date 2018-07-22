var app = angular.module('fieldList', []);
app.directive("frenizDesignHead", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-head.html";
    };

    return directive;
});
app.directive("frenizDesignMenu", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-menu.html";
    };

    return directive;
});
app.directive("frenizDesignAboutus", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-aboutus.html";
    };

    return directive;
});
app.directive("frenizDesignContact", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-contact.html";
    };

    return directive;
});
app.controller("myctrl", function($scope, $http) {
    $http.get('content.json').then(function(res) {
    	$scope.forms = res.data;
        
    	console.log("test");

    })
});
