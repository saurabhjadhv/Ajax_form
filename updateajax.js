// Jquery used for validation.

$(document).ready(function () {
    $("#update").click(function () {
        var id = $("#id").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var contact = $("#contact").val();
        // This logic is for radio button
        var gender = $(".gender:checked").val();
        // this logic using checkbox.
        var course = [];
        $('.course:checked').each(function () {
            course.push($(this).val());   // This is in array format. 
        });
        course = course.toString();   // convert array too string.

        // This logic is for dropdown  Single Line Code.
        var edu = document.getElementById('edu').selectedOptions[0].value;
        $(".error").remove();



        $.ajax({
            type: "POST",
            url: "updatedb.php",
            data: { id1: id, name1: name, email1: email, password1: password, contact1: contact, gender1: gender, course1: course, edu1: edu },
            cache: false,

            success: function (result) {
                if (result == 1) { window.location.href = "form.php"; }// This is what we put location to go another page.
            }

        });

        return false;
    });
});