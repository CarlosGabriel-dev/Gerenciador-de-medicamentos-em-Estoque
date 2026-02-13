document.addEventListener("DOMContentLoaded", function () {
    // Pegamos o elemento canvas
    const canvas = document.getElementById('activityChart');

    // Verificação de segurança: Só roda o código se o gráfico existir na tela
    if (canvas) {
        const ctx = canvas.getContext('2d');
        
        // Cria um degradê azul para o fundo do gráfico
        let gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)'); // Azul forte no topo
        gradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)'); // Transparente embaixo

        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                // Rótulos do eixo X (Datas)
                labels: ['1 Dec', '5 Dec', '8 Dec', '12 Dec', '16 Dec', '20 Dec', '25 Dec', '31 Dec'],
                datasets: [{
                    label: 'Movimentação',
                    // Dados do gráfico (Números)
                    data: [50, 95, 90, 160, 80, 60, 140, 150],
                    borderColor: '#3B82F6', // Cor da linha (Azul Tailwind)
                    backgroundColor: gradient, // O degradê que criamos
                    borderWidth: 2,
                    tension: 0.4, // Curvatura da linha (0.4 deixa ondulado igual a foto)
                    fill: true,   // Preencher embaixo da linha
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#3B82F6',
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Esconde a legenda
                    },
                    tooltip: {
                        backgroundColor: '#555',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 200, // Limite máximo
                        grid: {
                            borderDash: [5, 5], // Linhas pontilhadas
                            color: '#f0f0f0'
                        }
                    },
                    x: {
                        grid: {
                            display: false // Remove as grades verticais
                        }
                    }
                }
            }
        });
    }
});