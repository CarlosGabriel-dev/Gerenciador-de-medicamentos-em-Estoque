/* public/js/relatorio.js */

document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('relatorioChart');

    if (canvas) {
        // Leitura dos dados passados pelo PHP na View
        const labels = JSON.parse(canvas.dataset.labels);
        const dataValues = JSON.parse(canvas.dataset.values);

        const ctx = canvas.getContext('2d');

        // Gradiente
        let gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.4)');
        gradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)');

        // Chart
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Movimentação',
                    data: dataValues,
                    borderColor: '#3b82f6',
                    backgroundColor: gradient,
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#3b82f6',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#1f2937',
                        padding: 10,
                        displayColors: false,
                        callbacks: {
                            label: function(context) { return context.parsed.y; }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 200,
                        border: { display: false },
                        grid: { borderDash: [5, 5], color: '#e5e7eb' },
                        ticks: { stepSize: 50, color: '#9ca3af', padding: 10 }
                    },
                    x: {
                        border: { display: false },
                        grid: { display: false },
                        ticks: { color: '#9ca3af', padding: 10 }
                    }
                }
            }
        });
    }
});