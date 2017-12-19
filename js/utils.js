$('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    hover: true, // Activate on hover
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'right' // Displays dropdown with edge aligned to the left of button
});

$(document).ready(function() {


    $('.button-collapse').sideNav();
});

$('#cancel').click(function() {
    window.location.replace('/index.php?module=home');
});