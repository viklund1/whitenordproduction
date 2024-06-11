var phoneInput = document.getElementById('phone');
var myForm = document.forms.myForm;

phoneInput.addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

myForm.addEventListener('submit', function(e) {
    phoneInput.value = phoneInput.value.replace(/\D/g, '');

    e.preventDefault();
});
