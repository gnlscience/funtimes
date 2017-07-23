import app from './app';

app.factory('loaderService', loaderService);

/*@ngInject*/
function loaderService(){
    var service = {
        data: { isLoading: false},
        start: start,
        stop: stop,
        showLoader: showLoader
    };
    return service;

    function start(){
        service.data.isLoading = true;
    }
    function stop(){
        service.data.isLoading = false;
    }
    function showLoader(){
        return service.data.isLoading;
    }

}