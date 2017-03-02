var app = angular.module('fieldList', []);
app.directive("frenizDesignHead", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-head.html";
    };

    return directive;
});
app.directive("frenizDesignHome", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-home.html";
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
app.directive("frenizDesignCareer", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-career.html";
    };

    return directive;
});
app.directive("frenizContactForm", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        form:"="
       
    }
    
    directive.templateUrl = function(element, attributes) {
        return "freniz-contact-form.html";
    };
     directive.link = function(scope, elements, attrs){
      scope.submit = function(){
         for (var i in scope.form.fields) {
            var field = scope.form.fields[i];
            if (field.validation.validationRequired) {
                field.validation.validationErrorFlag = false;
                for (var k in field.validation.rules) {
                    if (k == "mandatory" && (field.value == "" || (field.type == "checkbox" && field.value.length == 0))) {
                        field.validation.validationErrorFlag = true;
                        field.validation.validationErrorMsg = field.validation.rules[k];
                    } else if (k == "regex" && field.validation.rules.regex && field.validation.rules.regex.regexPattern) {
                        if (!field.validation.validationErrorFlag) {
                            var pat = new RegExp(field.validation.rules.regex.regexPattern);
                            var val = field.value;
                            if (!pat.test(val)) {
                                field.validation.validationErrorFlag = true;
                                field.validation.validationErrorMsg = field.validation.rules.regex.regexErrorMsg;
                            }
                            else{
                                field.validation.validationErrorFlag = false;
                                field.validation.validationErrorMsg = null;
                            }
                        }
                    } else {
                        field.validation.validationErrorFlag = false;
                        field.validation.validationErrorMsg = null;
                    }
                }
             }
            scope.form.fields[i] = field;
        }
      };
    }
    return directive;
});
app.directive("frenizDesignAddress", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-address.html";
    };

    return directive;
});
app.directive("frenizDesignMap", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.scope = {
        section:"="
    }
    directive.templateUrl = function(element, attributes) {
        return "freniz-design-map.html";
    };

    return directive;
});
app.controller('myctrl', ["$scope", "$http", function($scope, $http) {
    $http.get('content.json').then(function(res) {
        $scope.forms = res.data;
       
});

}]);