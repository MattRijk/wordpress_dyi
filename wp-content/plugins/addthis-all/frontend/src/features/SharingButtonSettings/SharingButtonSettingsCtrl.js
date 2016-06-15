appAddThisWordPress.controller('SharingButtonSettingsCtrl', function ($scope, wordpress) {

  $scope.globalOptions = {};
  $scope.sharingButtons = {};
  wordpress.globalOptions.get().then(function(data) {
    $scope.globalOptions = data;

    wordpress.sharingButtons.get($scope.globalOptions.addthis_plugin_controls).then(function(data) {
      $scope.sharingButtons = data;
    });
  });

  $scope.saving = false;
  $scope.save = function() {
    $scope.saving = true;
    wordpress.sharingButtons.save().then(function(data) {
      $scope.sharingButtons = data;
      $scope.saving = false;
    });
  };
});