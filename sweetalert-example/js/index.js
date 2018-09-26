(function() {
  // Declare App
  var app = angular.module('app', []);

  // Create Controller
  app.controller('AppCtrl', function($scope) {
    var vm = this;
    vm.showAlert = function() {
      swal({
        title: "Success!",
        text: "Successfully clicked stuff!",
        type: "success"
      }, function() {
        //alert('yo');
      });
    };

  });

  // End App  
})();