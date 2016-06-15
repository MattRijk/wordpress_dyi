appAddThisWordPress.directive('toolRadioButtonsYesNo', function() {
  return {
    scope: {
      ngModel: '=ngModel', // bi-directional
      featureName: '@featureName',
      toolPco: '@toolPco',
      fieldName: '@fieldName'
    },
    templateUrl: '/directives/toolRadioButtonsYesNo/toolRadioButtonsYesNo.html'
  };
});