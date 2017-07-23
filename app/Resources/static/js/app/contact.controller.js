import app from './app';

app.controller("ContactController", ContactController);

/*@ngInject*/
function ContactController(contactFormFields, contactService, toastr) {
    var vm = this;
    vm.contactFormModel = {};
    vm.contactFormFields = contactFormFields;
    vm.send = send;

    function send(){
        contactService.sendContactForm(vm.contactFormModel).then((data) => {
            vm.contactFormModel = {};
            toastr.success(data.message);
        }, (data) => {
            toastr.error(data.data.message);
        });
    }
}