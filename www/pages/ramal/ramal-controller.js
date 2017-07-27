app.controller('RamalController', RamalController);

function RamalController($scope, $timeout, ionicMaterialMotion, ionicMaterialInk, RamalService) {
    // Set Header
    $scope.$parent.showHeader();
    $scope.$parent.clearFabs();

    $scope.ramais = RamalService.getRamais();
    $timeout(function() {
        $scope.isExpanded = false;
        $scope.$parent.setExpanded(false);
    }, 300);

    // Set Motion
    ionicMaterialMotion.fadeSlideInRight();

    // Set Ink
    ionicMaterialInk.displayEffect();

}