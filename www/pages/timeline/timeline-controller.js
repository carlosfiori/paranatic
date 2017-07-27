app.controller('TimelineController', TimelineController);

function TimelineController($scope, $timeout, ionicMaterialMotion, ionicMaterialInk, TimelineService) {
    $scope.$parent.showHeader();
    $scope.$parent.clearFabs();
    $scope.isExpanded = false;
    $scope.$parent.setExpanded(false);
    $scope.$parent.setHeaderFab('right');
    $scope.posts = TimelineService.getPosts();

    $scope.texto = TimelineService.getTexto();
    $timeout(function () {
        ionicMaterialMotion.fadeSlideIn({
            selector: '.animate-fade-slide-in .item'
        });
    }, 200);

    // Activate ink for controller
    ionicMaterialInk.displayEffect();

}