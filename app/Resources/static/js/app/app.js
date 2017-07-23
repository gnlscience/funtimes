const contactApp = angular.module('contactApp', ['formly', 'formlyBootstrap', 'vcRecaptcha','ngAnimate', 'toastr']);
window.contactApp = contactApp; //this is a hack for backwards compatibility for any angular controllers, services, etc that arent importing app into their own module

export default contactApp;
