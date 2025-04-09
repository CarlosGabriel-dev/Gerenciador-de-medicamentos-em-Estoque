function updateDateTime() {
    const now = new Date();

    // Atualizar data
    const day = now.getDate().toString().padStart(2, '0');
    const monthNames = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];
    const month = monthNames[now.getMonth()];
    const year = now.getFullYear();

    document.getElementById('current-date').textContent = `${day} ${month} ${year}`;

    // Atualizar hora
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');

    document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds}`;

    // Atualizar cumprimento e ícone dinâmico
    const greetingText = document.getElementById('greeting-text');
    const greetingIcon = document.getElementById('greeting-icon');

    if (hours >= 5 && hours < 12) {
        greetingText.textContent = 'Bom dia';
        greetingIcon.textContent = '☀️';
    } else if (hours >= 12 && hours < 18) {
        greetingText.textContent = 'Boa tarde';
        greetingIcon.textContent = '🌤️';
    } else {
        greetingText.textContent = 'Boa noite';
        greetingIcon.textContent = '🌙';
    }
}

// Atualizar imediatamente e depois a cada segundo
updateDateTime();
setInterval(updateDateTime, 1000);
