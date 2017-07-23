contactApp.component('loader', {
    bindings: { },
    template: require('./loader.component.html'),
    controller: LoaderController
});

/*@ngInject*/
function LoaderController($scope, loaderService) {
    var vm = this;
    vm.show = false;

    $scope.$watch(
        function () {
            return loaderService.data.isLoading;
        },
        function(newVal){
            vm.show = newVal;
        }
    );
}