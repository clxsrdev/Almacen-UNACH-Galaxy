$(document).ready(function() {
    const wrapper = $('.wrapper');
    const registerLink = $('.register-link');
    const loginLink = $('.login-link');

    const section = $(".addnew"),
        overlay = $(".overlay"),
        showBtn = $(".show-modal"),
        closeBtn = $(".close-btn"),
        addBtn = $(".add-btn");

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
    $('#searchInput').on('input', function() {
        const searchText = parseFloat($(this).val()); // Convertir a número
    
        $('#productTable tbody tr').each(function() {
            const priceCell = parseFloat($(this).find('td:nth-child(2)').text()); // Obtener el precio y convertir a número
    
            const shouldHide = isNaN(searchText) || priceCell < searchText; // Mostrar solo si el precio es mayor
            $(this).toggle(!shouldHide);
        });
    });
    // $('#searchInput').on('input', function() {
    //     const searchText = $(this).val().toLowerCase();
    //     $('#productTable tbody tr').each(function() {
    //         const priceCell = $(this).find('td:nth-child(2)'); // La segunda columna es la de precios
    //         const shouldHide = !priceCell.text().toLowerCase().includes(searchText);
    //         $(this).toggle(!shouldHide);
    //     });
    // });

    showBtn.on("click", function() {
        section.addClass("active");
    });

    overlay.on("click", function() {
        section.removeClass("active");
    });

    closeBtn.on("click", function() {
        section.removeClass("active");
    });
});

