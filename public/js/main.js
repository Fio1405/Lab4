// Script para manejar el cierre de sesión
$(document).ready(function() {
    $('#logoutBtn').click(function(e) {
        e.preventDefault();
        $(this).closest('form').submit();
    });
});

function showSection(section) {
    const contentArea = document.getElementById('content-area');
    let route = '';

    if (section === 'pacientes') {
        route = '/pacientes';
    }

    fetch(route)
        .then(response => response.text())
        .then(html => {
            contentArea.innerHTML = html;
        })
        .catch(error => {
            console.error('Error loading section:', error);
        });
}