// $("[href='#']").click(function () {
//     $("html, body").animate({ scrollTop: 0 }, 600);
//     return false
// });
$("[href='#overview']").click(function () {
    var anchorPos = $("#overview").offset().top;
    $("html, body").animate({ scrollTop: anchorPos}, 600);
    return false
});
$("[href='#intro']").click(function () {
    var anchorPos = $("#intro").offset().top;
    $("html, body").animate({ scrollTop: anchorPos}, 600);
    return false
});
$("[href='#members']").click(function () {
    var anchorPos = $("#members").offset().top;
    $("html, body").animate({ scrollTop: anchorPos}, 600);
    return false
});
$("[href='#connect']").click(function () {
    var anchorPos = $("#connect").offset().top;
    $("html, body").animate({ scrollTop: anchorPos}, 600);
    return false
});
