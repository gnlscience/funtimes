contactApp.factory('contactService', contactService);

/*@ngInject*/
function contactService($http, loaderService) {
    var service = {
        "sendContactForm" : sendContactForm
    };

    function httpExecute(url, method, data) {
        loaderService.start();
        var headers = {
            'Content-Type': 'application/x-www-form-urlencoded'
        };
        var request = {
            url: url,
            method: method,
        };
        if (data != undefined) {
            request.data = data;
            request.headers = headers;
        }
        return $http(request).then(function (response) {
            return response.data;
        }).finally(function () {
            loaderService.stop();
        });
    }

    function sendContactForm(data){
        var url = '/api/contact/';
        return httpExecute(url, 'POST', data);
    }

    return service;
}