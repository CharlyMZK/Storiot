$('#ok').click(function() {
    window.location.replace('/index.php?module=home');
});

$(function() {
  Materialize.toast('Vous êtes à présent inscrit !', 2000, 'green');
});