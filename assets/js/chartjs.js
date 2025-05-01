
const ctx = document.getElementById('miDoughnutChart').getContext('2d');
const miDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Total niños', 'Total Jóvenes', 'Total Adultos', 'Total Adultos Mayores'],
    datasets: [{
      data: [30, 25, 35, 10], // Puedes cambiar estos valores
      backgroundColor: [
        '#00B5F1', // Azul niños
        '#F44336', // Rojo jóvenes
        '#F4B266', // Amarillo adultos
        '#15776B'  // Verde adultos mayores
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: false,
    plugins: {
      legend: {
        position: 'bottom',
        labels: {
          font: {
            size: 14
          }
        }
      }
    }
  }
});