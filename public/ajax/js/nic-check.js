$(document).ready(function () {


    $('#check_nic').click(function (event) {
        event.preventDefault();
        var nic = $('#nic').val();

        if (!$('#nic').val() || $('#nic').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your nic number..!",
                type: 'error',
                timer: 1500,
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
                            text: "This nic number is avsilable..!",
                            type: 'error',
                            timer: 1500,
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
