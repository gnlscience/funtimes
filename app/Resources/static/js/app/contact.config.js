contactApp.config(config);

/*@ngInject*/
function config(formlyConfigProvider){
    formlyConfigProvider.setType({
        name: 'captcha',
        template: '<div vc-recaptcha size="normal" ng-model="model[options.key]" key="options.templateOptions.googleKey"></div>',
        wrapper: ['bootstrapLabel', 'bootstrapHasError'],
    });
}