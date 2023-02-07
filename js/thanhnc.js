//js tuy chinh

//check sđt
function validatePhoneNumber(input_str) {
    var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
    return re.test(input_str);
}

function validateForm(event) {
    var name        = document.getElementById('myform_name').value;
    var phone       = document.getElementById('myform_phone').value;
    var status      = document.getElementById('myform_status').value;
    if (!validatePhoneNumber(phone)) {
        document.getElementById('phone_error').classList.remove('hidden');
    } else {
        document.getElementById('phone_error').classList.add('hidden');
        console.log('form success');
        //cho chạy form
        //alert("validation success");
        //var redirect_url = '?name=' + name + '&phone=' + phone + '&status=' + status;
        //window.open(redirect_url);

        //action nháp cho form chạy
        window.assign(redirect_url);
    }
    event.preventDefault();
  }
  
  document.getElementById('myform').addEventListener('submit', validateForm);