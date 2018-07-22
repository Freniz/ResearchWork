

var app = angular.module('fieldList', []);
app.directive("integrationDesignForm", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"=",
        form:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "integration-design-form.html";
    };

    return directive;
});
app.controller('myctrl', ["$scope", "$http", function($scope, $http) {
    $http.get('content.json').then(function(res) {  console.log("test");
        $scope.forms = res.data;
       
});

}]);