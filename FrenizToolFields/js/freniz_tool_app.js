var app = angular.module('fieldList', ['ui.bootstrap', 'ui.bootstrap.datetimepicker', 'ui.tinymce', 'ngMap', 'checklist-model']);
app.directive("frenizFormField", function() {
    var directive = {};
    directive.restrict = 'E';
    directive.templateUrl = function(element, attributes) {
        return "freniz-form-fields.html";
    };


    return directive;
});
app.controller('myCtrl', ["$scope", "$http", function($scope, $http) {
    $http.get('sample.json').then(function(res) {
        $scope.forms = res.data;
        $scope.myHTML = "<a href='test'>test</a>";
        if ($scope.forms.sections && $scope.forms.sections.length > 0) {
            $scope.forms.selectedTab = $scope.forms.sections[0].id;
        }

    });

    $scope.filechanged = function(elm) {
        $scope.files = elm.files
        $scope.$apply();

    };
    $scope.upload = function() {

        $http.post('upload.ashx', file, {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .success(function(d) {
                console.log(d);
            })
    }

    $scope.submit = function() {
       for (var i in $scope.forms.sections) {
            for (var j in $scope.forms.sections[i].fields) {
                var field = $scope.forms.sections[i].fields[j];
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
            }
            $scope.forms.sections[i].fields[j] = field;
        }
        
    };


    $scope.fileSelected = function(element) {
        console.log(element);
        var sectionIndex = $(element).attr("data-freniz-sectionIndex");
        var fieldIndex = $(element).attr("data-freniz-fieldIndex");

        $scope.forms.sections[sectionIndex].fields[fieldIndex].value = $(element).val();
    }

}]);
app.filter('to_trusted', ['$sce', function($sce) {
    return function(text) {
        return $sce.trustAsHtml(text);
    };
}]);
angular.module('ui.tinymce', [])
    .value('uiTinymceConfig', {})
    .directive('uiTinymce', ['uiTinymceConfig', function(uiTinymceConfig) {
        uiTinymceConfig = uiTinymceConfig || {};
        var generatedIds = 0;
        return {
            require: 'ngModel',
            link: function(scope, elm, attrs, ngModel) {
                var expression, options, tinyInstance;
                // generate an ID if not present
                if (!attrs.id) {
                    attrs.$set('id', 'uiTinymce' + generatedIds++);
                }
                options = {
                    // Update model when calling setContent (such as from the source editor popup)
                    setup: function(ed) {
                        ed.on('init', function(args) {
                            ngModel.$render();
                        });


                        // Update model on button click
                        ed.on('ExecCommand', function(e) {
                            ed.save();
                            ngModel.$setViewValue(elm.val());
                            if (!scope.$$phase) {
                                scope.$apply();
                            }
                        });
                        // Update model on keypress
                        ed.on('KeyUp', function(e) {
                            console.log(ed.isDirty());
                            ed.save();
                            ngModel.$setViewValue(elm.val());
                            if (!scope.$$phase) {
                                scope.$apply();
                            }
                        });
                    },
                    plugins: [
                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                        'searchreplace wordcount visualblocks visualchars code fullscreen',
                        'insertdatetime media nonbreaking save table contextmenu directionality',
                        'emoticons template paste textcolor colorpicker textpattern imagetools'
                    ],
                    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                    toolbar2: 'print preview media | forecolor backcolor emoticons',
                    mode: 'exact',
                    elements: attrs.id
                };
                if (attrs.uiTinymce) {
                    expression = scope.$eval(attrs.uiTinymce);
                } else {
                    expression = {};
                }

                angular.extend(options, uiTinymceConfig, expression);
                setTimeout(function() {
                    tinymce.init(options);
                });


                ngModel.$render = function() {
                    if (!tinyInstance) {
                        tinyInstance = tinymce.get(attrs.id);
                    }
                    if (tinyInstance) {
                        tinyInstance.setContent(ngModel.$viewValue || '');
                    }
                };
            }
        };
    }]);