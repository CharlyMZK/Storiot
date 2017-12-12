(function($) {
    $(function() {
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            hover: true, // Activate on hover
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'right' // Displays dropdown with edge aligned to the left of button
        });

       /* $('.search').on("keypress", function(e) {
            if (e.keyCode == 13) {
                $.post('/index.php?module=mainItem', {
                    filter: $(this).val()
                });
            }
        });*/
    }); // End Document Ready
})(jQuery); // End of jQuery name space

$('.button-collapse').sideNav();

$('#cancel').click(function() {
    window.location.replace('/index.php?module=home');
});