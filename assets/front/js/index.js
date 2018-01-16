$(document).ready(
    function () {
        var img_full_div_top_position = $(".col-md-12").position.top;
        var img_full_div_left_position = $(".col-md-12").position.left;

        $("#crop_tool").css("top", img_full_div_top_position + 50).css("left", img_full_div_left_position + 50);

    }
)