$(document).ready(function () {

    $('#search-key').on('keyup', function () {

        var word = $('#search-key').val();
        $("#alb .col").filter(function () {
            $(this).toggle($(this).text().indexOf(word) > -1);
        });
    })

    $('#state').on('change', function () {

        var word = $("#state").val();
        if ($("#state").val() == "road") {
            $("#alb .col").toggle(false);
            $("#alb #road").toggle(true);

        }
        else if ($("#state").val() == "microsoft") {
            $("#alb .col").toggle(false);
            $("#alb #microsoft").toggle(true);

        }
     else if ($("#state").val() == "microsoft") {
            $("#alb .col").toggle(false);
            $("#alb #microsoft").toggle(true);

        }
         else if ($("#state").val() == "git") {
            $("#alb .col").toggle(false);
            $("#alb #github").toggle(true);

        }
             else if ($("#state").val() == "google") {
            $("#alb .col").toggle(false);
            $("#alb #google").toggle(true);

        }
        else if ($("#state").val() == "pharma") {
            $("#alb .col").toggle(false);
            $("#alb #pharma").toggle(true);

        }

    })




});
