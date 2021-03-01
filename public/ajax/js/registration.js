$(document).ready(function () {

//check how to know
    $('input:radio[name="about_us"]').change(
            function () {
                if ($(this).val() == 'other') {
                    $("#other_val ").css("display", "block");
                }
                else {
                    $("#other_val ").css("display", "none");
                }
            });


//next step to personal data
    $('#next').click(function (event) {
        event.preventDefault();

        if (!$('input[name=about_us]:checked').val()) {

            if ($(this).val() == 'other') {
                if (!$('#other_method').val() || $('#other_method').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter your property type..!",
                        type: 'info',
                        timer: 1500,
                        showConfirmButton: false
                    });
                }
            } else {
                swal({
                    title: "Error!",
                    text: "Please enter your property type..!",
                    type: 'error',
                    timer: 1500,
                    showConfirmButton: false
                });
            }
        } else {
            $("#personal_data_form ").css("display", "block");
            $("#first_form ").css("display", "none");
        }
    });

//back personal data to form one
    $('#back').click(function (event) {
        event.preventDefault();
        $("#personal_data_form ").css("display", "none");
        $("#first_form ").css("display", "block");
    });


//next step to personal data occupation
    $('#next_step_2').click(function (event) {
        event.preventDefault();

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (!$('#first_name').val() || $('#first_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your first name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#last_name').val() || $('#last_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your last name name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your email..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!emailReg.test($('#email').val())) {
            swal({
                title: "Error!",
                text: "please enter a valid email",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#mobile_phone').val() || $('#mobile_phone').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your mobile phone number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#date_of_birth').val() || $('#date_of_birth').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Date of Birth..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#gender').val() || $('#gender').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Select your gender..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address_street ').val() || $('#address_street').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your street line..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#province').val() || $('#province').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Select your province..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#distric-bar').val() || $('#distric-bar').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your distric..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="is_differently_abled"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter your consider yourself diffrently abled..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if ($('input:radio[name="is_student"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter Student Status..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="student_status"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter provide details..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="employee_status"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter  employee_status..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="reason_for_unemployee"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter reasons for unemployed..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            $("#personal_data_form ").css("display", "none");
            $("#last_data_form ").css("display", "block");
        }

    });

//back last form to personal data 
    $('#back_2').click(function (event) {
        event.preventDefault();
        $("#personal_data_form ").css("display", "block");
        $("#last_data_form ").css("display", "none");
    });


//last step send form data
    $('#submit').click(function (event) {
        event.preventDefault();


        if (!$('#current_occupation').val() || $('#current_occupation').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your current occupation..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#education').val() || $('#education').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your education..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#field_of_study').val() || $('#field_of_study').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your field of study..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
     
        } else if ($('input:radio[name="english_language_proficiency"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter your english language proficiency..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
     
        } else if ($('input:radio[name="have_internet"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter your connectivity..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="how_access_course"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter  how do you access the course?",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="computer_lab"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter  plan to use the Computer",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="scholarship"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter your indicate the scholarship",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if ($('input:radio[name="is_consent"]:checked').length == 0) {
            swal({
                title: "Error!",
                text: "Please enter your Consent",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            $("#personal_data_form ").css("display", "none");
            $("#last_data_form ").css("display", "block");
        }

    });
});

