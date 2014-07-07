$(document).ready(function() {
    $('#barBottomContainer').after($('.messagebox'));
    setTimeout(STUDIP.MessageBoxDetacher, 5000);
});

STUDIP.MessageBoxDetacher = function() {
    $('.messagebox').find('a.close').click();
};