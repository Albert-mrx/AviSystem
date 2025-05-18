document.addEventListener('DOMContentLoaded', () => {
    //dashboard Admin chartjs dona
    const chartRecurrencia = document.getElementById('recurrenciactr').getContext('2d');
    const adminchartRecurrencia = new Chart(chartRecurrencia, {
      type: 'doughnut',
      data: {
        labels: ['Integrantes Frecuentes', 'Integrantes Regulares', 'Integrantes Inusuales'],
        datasets: [{
          data: [30, 25, 35], // Puedes cambiar estos valores
          backgroundColor: [
            '#00B5F1', // I frecuentes
            '#F44336', // I regulares
            '#F4B266', // I inusuales
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
    
    const chartSexo = document.getElementById('sexoctr').getContext('2d');
    const adminchartSexo = new Chart(chartSexo, {
      type: 'doughnut',
      data: {
        labels: ['Total Hombres', 'Total Mujeres'],
        datasets: [{
          data: [30, 25], // Puedes cambiar estos valores
          backgroundColor: [
            '#00B5F1', // T hombres
            '#F44336', // T mujeres
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
    
    
    const chartIntegrantes = document.getElementById('integrantesctr').getContext('2d');
    const adminchartIntergantes = new Chart(chartIntegrantes, {
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
    });