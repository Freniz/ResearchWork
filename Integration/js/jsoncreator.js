var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  var idCount ={};
  idCount['form'] = 0;
  idCount["sections"] = 0;
  formIdPrefix = "Fre-Form-";
  secIdPrefix = "Fre-Sec-";

var defaultFieldJSON={
  "type":"",
  "value":"",
  "props":{
      "label":"",
      "dataName":"",
      "readOnly":"",
      "hidden":""
  },
  "validation":{
      "rules":{},
      "validationRequired":false,
      "validationErrorFlag":false,
      "ValidationErrorMsg":""
  }

};
var defaultFieldTypeJSON = {};
defaultFieldTypeJSON.text={
  "type":"text",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.textarea={
  "type":"textarea",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.password={
  "type":"password",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.number={
  "type":"number",
  "props":{
    "placeholder":""
  },
  "validation":{
    "rules":{
      "regex":{
        "regexPattern":"^([0-9 ]*)$",
        "regexErrorMsg" :"Please fill according to the requested pattern"
      }
  },
  "validationRequired":true
}
};
defaultFieldTypeJSON.select={
  "type": "select",
  "props": {
    "placeholder": "",
    "listOfValues": [
  ],
  },
  "validation": {
    "rules": {
      "regex": {
        "regexPattern": "^([0-9 ]*)$",
        "regexErrorMsg": "Please fill according to the requested pattern"
      }
    },
    "validationRequired": true
  }
};
defaultFieldTypeJSON.textarea={
  "type":"textarea",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.checkbox={
  "type": "checkbox",
  "props": {
    "placeholder": "",
      "listOfValues": [
    
  ],
},

};
defaultFieldTypeJSON.radio={
  "type": "radio",
  "props": {
    "placeholder": "",
    "listOfValues": [

  ],
  },
};
defaultFieldTypeJSON.range={
  "type":"range",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.date={
  "type":"date",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.time={
  "type":"time",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.datetime={
  "type":"datetime",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.html={
  "type":"html",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.line={
  "type":"line",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.spacer={
  "type":"spacer",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.button={
  "type":"button",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.upload={
  "type":"upload",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.richText={
  "type":"richText",
  "props":{
    "placeholder":""
  }
};
defaultFieldTypeJSON.autoLookup={
  "type":"autoLookup",
  "props":{
    "placeholder":""
  }
};

    var formField = {
        "formName": "sample json",
        "formDescription": "",
        "props": {
            "id": "",
            "category": "",
            "saveSubmissionData": true,
            "usePHPIntregration": false,
            "tags": "",
            "navigateAwayWarning": "Are you sure you want to navigate away? All progress in this form will be lost.",
            "navigateAwayWarn": true,
            "validateOnInit": true,
            "stopOnFailure": false,
            "stickyError": false,
            "showFormReference": false,
            "mustBeValid": true,
            "hideHeader": false,
            "isPublished": false,
            "isSubform": false,
            "integrations": [

            ],
            "notes": false,
            "submission": {
                "message": "<p>Your reference number is {summary_ref}.</p><p>Thank you for submitting {form_name}</p><p>{visiblesummary}</p>",
                "api": "/form/submit/",
                "download": "Download PDF",
                "cancel_redirect": null,
                "continue": "Continue",
                "conditionInputs": "",
                "showDownload": true,
                "showMessage": true,
                "serverSubmit": false,
                "redirect": null,
                "condition": "",
                "visible":false
            },
            "save": {
                "lim": "3f07ecf4-0dfa-11e2-b0b9-12313b03ed59",
                "displayCondition": "",
                "conditionInputs": "",
                "redirect": null,
                "allow": false,
                "fromName": "",
                "message": "",
                "subject": "",
                "mail": false,
                "from": ""
            }
        },
        "sections": [

        ]
    }
    var sectionField = {
        "url": "Section-1.html",
        "id": "",
        "props": {
            "hideCancel": false,
            "conditionInputs": "",
            "displayCondition": "",
            "validationInputs": "",
            "validation": "",
            "validationMessage": "This Section is Invalid",
            "validationLookup": {
                "enableLookup": false,
                "lookupID": "",
                "lookupName": "",
                "lookupValidation": "",
                "lookupOperator": "",
                "visible":false
            }
        },
        "name": "Section 1",
        "fields": []

    }
    $scope.formJSON = [];
    $scope.section = 'disabled';
    $scope.createform = function() {
        $scope.selectedTab = "sample Json";
        $scope.dataName = "Json";
        var newFieldJSON = angular.extend({}, formField);        
        newFieldJSON.formName = "sample1 json";
        $scope.formJSON = formField;
        //console.log($scope.fieldsJSON2);
        console.log(JSON.stringify($scope.formJSON));
        $scope.section = '';
           
    };
    
    $scope.createField = function(type) {       
        var newFieldJSON = angular.merge({}, defaultFieldJSON, defaultFieldTypeJSON[type]);
        newFieldJSON.type = type;
        $scope.formJSON.sections[0].fields.push(newFieldJSON);
        console.log($scope.formJSON);
        
    };
    $scope.formFieldVisibility = [];
    $scope.createSection = function() {
        var newSection = angular.extend({},sectionField);
        idCount["sections"]++;
         newSection.id = secIdPrefix + idCount["sections"];
        $scope.formJSON.sections.push(newSection);
         console.log(JSON.stringify( $scope.formJSON));
          $scope.formFieldVisibility.visible = true;            
        }
});     