$(document).ready(function () {
    $("button").click(function () {
        $.post("result.php", $("form").serialize());
    });
});