/**
 * Created by Dani on 22/06/2016.
 */
$(function () {
    var $contextMenu = $("#contextMenu");
    var $computerClicked;
    $("body").on("contextmenu", ".computer", function (e) {
        $computerClicked = $(this).attr('data-id');
        var pageWidth = $(window).width();
        var menuWidth = $contextMenu.width();
        var leftPosition = e.pageX + menuWidth > pageWidth ? e.pageX - menuWidth : e.pageX;

        $('.headerMenu').html($computerClicked + ' - Situacion Actual');
        $contextMenu.css({
            display: "block",
            left: leftPosition,
            top: e.pageY
        });
        return false;
    });

    $(document).click(function () {
        $contextMenu.hide();
    });
});