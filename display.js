$(function () {
    $('#displaydata').click(function () {
        $.ajax({
            url: "dataFetch.php",
            type: "POST",
            success: function (responsedata) {
                $('#response').html(responsedata);

            }

        });
    });
});