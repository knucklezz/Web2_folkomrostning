$(document).ready(function () {
    $("button").click(function () {
        $.post("form.php", $("form").serialize());
    });
});