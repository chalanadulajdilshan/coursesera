$(document).ready(function () {

    var regExp = /[a-zA-Z]/g;
    
    $('#check_nic').click(function (event) {
        event.preventDefault();
        var nic = $('#nic').val();

        if (!$('#nic').val() || $('#nic').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your nic number..!",
                type: 'error',
                timer: 2500,
                showConfirmButton: false
            });
        } else if (regExp.test(nic))
        {
            swal({
                title: "Error!",
                text: "Please remove letter V or any other letter",
                type: 'error',
                timer: 2500,
                showConfirmButton: false
            });
        } else if (($('#nic').val().length != 9) && ($('#nic').val().length != 12)) {
            swal({
                title: "Error!",
                text: "Invalid NIC Number.Please check your nic number again..!",
                type: 'error',
                timer: 2500,
                showConfirmButton: false
            });
        } else {
            $.ajax({
                url: url + "public/ajax/php/nic-check.php",
                type: "POST",
                data: {
                    nic: nic,
                    action: 'check_nic_number',
                },
                dataType: "JSON",
                success: function (jsonStr) {
                    if (jsonStr) {
                        swal({
                            title: "Error!",
                            text: "This nic number is already registed..! Please contact our help desk agent",
                            type: 'error',
                            timer: 2500,
                            showConfirmButton: false
                        });
                    } else {
                        $("#nic_form ").css("display", "none");
                        $("#first_form").css("display", "block");
                    }

                }
            });


        }
    });
});
