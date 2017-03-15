var app = angular.module('menuList', ['ui.ace', 'ui.sortable']);


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
    directive.scope = {
        sidemenus: "=",
        ismainmenu: "="
    };
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "sidemenu-headings.html";
    };

    return directive;


});
app.directive("menuHeading", function() {
    var directive = {};
    directive.scope = {
        menus: "=",
        isSubmenu: "="
    };
    directive.restrict = 'E';
    directive.replace = true;
    directive.templateUrl = function(element, attributes) {
        return "menu-heading.html";
    };
    directive.link = function(scope, element, attrs) {
        scope.open = function(menu) {
            for (var i in scope.menus) {
                if (scope.menus[i] === menu) {

                    if (menu.isOpened) {
                        recurCloseMenu(scope.menus[i]);
                    } else {
                        menu.isOpened = true;
                    }
                } else {
                    recurCloseMenu(scope.menus[i]);
                }
            }
        }

        function recurCloseMenu(menu) {
            if (menu.isOpened) {
                menu.isOpened = false;
                if (menu.hasOwnProperty("subMenus")) {
                    for (var i in menu.subMenus) {
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

    $scope.tabs = ["Home", "Faqs", "News"];

    // set up sortable options
    $scope.sortableOptions = {
        'ui-floating': true,
        stop: function(e, ui) {
            // do something here
        }
    };

    $scope.aceLoaded = function(_editor) {
        // Options
        _editor.setReadOnly(true);
    };

    $scope.aceChanged = function(e) {
        //
    };



}]);