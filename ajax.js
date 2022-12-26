// Jquery used for validation.

$(document).ready(function () {
    $("#submit").click(function () {
        var name = $("#name").val();
        var email = $("#email").val();
        var email_filter = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        var password = $("#password").val();
        var contact = $("#contact").val();
        // This logic is for radio button
        var gender = $(".gender:checked").val();
        // this logic using checkbox.
        var course = [];
        $('.course:checked').each(function () {
            course.push($(this).val());
        });

        // This logic is for dropdown  Single Line Code.
        var edu = document.getElementById('edu').selectedOptions[0].value;
        $(".error").remove();


        // var formData = new FormData();



        var dataString = 'name=' + name + '&email=' + email + '&password=' + password + '&contact=' + contact + '&gender=' + gender + '&course=' + course + '&edu=' + edu;


        if (name == '' && email == '' && password == '' && contact == '' && gender == undefined && course == '' && edu == '') {
            $('#fields').fadeIn();
            $('#fields').html("All fields are required"); // print the message.

        }
        else if (name == '') {
            $('#ajax_name').html('*Username is required');
        }

        else if (email == '') {
            $('#ajax_email').html("*Please Enter Email");
            $('.ajax_email').hide();
            $('#ajax_email').fadeIn();

        }

        else if (!(email_filter.test(email))) {
            $('#ajax_email').html("Please Enter Valid Email");
            $('.ajax_email').hide();

        }
        else if (password == '') {
            // $('#ajax_password') = ("* Please enter the password");   
            $('#ajax_password').html("* Please enter the password");
            // $('#ajax_password').fadeIn();
        }

        else if (contact == '') {
            // $('#ajax_email').hide();
            // $('#ajax_contact').fadeIn();
            $('#ajax_contact').html('*Contact is required');
        }


        else if (gender == undefined) {
            error_gender = "* Please select atleast one";
            // $('#ajax_gender').text(error_gender);
        }

        else if (course == '') {
            error_course = "* Please select the course";
            $('#ajax_checkbox').text(error_course);

        }

        else {
            // console.log(dataString);
            // Ajax starts here.

            $.ajax({
                type: "POST",
                url: "db.php",
                data: dataString,
                cache: false,
                // processData: false,
                // Added loader here.           
                beforeSend: function () {
                    // $('.loading-image').show();
                },
                success: function (result) {

                    $('#fields').hide();

                    if (result == "Email already exists") {    // val for email.
                        $('#ajax_response').html(result);
                        $('#email').focus();
                        $('#msg').html(result);

                    }
                    else {
                        $('#success_response').fadeIn();
                        $('#success_response').html('success');

                        setTimeout(() => {
                            $('#success_response').hide();
                        }, 2000);

                        $('#ajax_response').hide();
                        $('.loading-image').fadeOut(3000);
                        $(".submit").attr("disabled", true);
                        return true;

                    }

                }


            });
        }
        return false;
    });
});