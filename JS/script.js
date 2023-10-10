$(document).ready(function() {
    const wrapper = $('.wrapper');
    const registerLink = $('.register-link');
    const loginLink = $('.login-link');

    registerLink.click(function() {
        wrapper.addClass('active');
    });

    loginLink.click(function() {
        wrapper.removeClass('active');
    });
    $('#loginButton').click(function() {
        window.location.href = 'login.php'; // Redirige a login.php al hacer clic en el botón
    });
    $('#logB').click(function() {
        window.location.href = 'login.php'; // Redirige a login.php al hacer clic en el botón
    });
    $('#signB').click(function() {
        window.location.href = 'login.php'; // Redirige a login.php al hacer clic en el botón
        wrapper.addClass('active');
    });
    $('#btnIniciar').click(function() {
        window.location.href = 'dashboard.php'; // Redirige a login.php al hacer clic en el botón
    });
});

