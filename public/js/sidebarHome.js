document.addEventListener('DOMContentLoaded', function () {
  // Get the section from the URL query parameters
  const urlParams = new URLSearchParams(window.location.search);
  const section = urlParams.get('section');

  // Hide all sections
  document.querySelectorAll('.section').forEach(function (element) {
      element.style.display = 'none';
  });

  // Show the selected section
  if (section) {
      const activeSection = document.getElementById(section);
      if (activeSection) {
          activeSection.style.display = 'block';
      }
  } else {
      // Default to showing the accueil section if no section is specified
      document.getElementById('accueil').style.display = 'block';
  }
});

window.addEventListener('resize', closeSidebarOnResize);

  document.addEventListener('DOMContentLoaded', function () {
    var admissionChartCtx = document.getElementById('admissionChart').getContext('2d');
    var treatmentChartCtx = document.getElementById('treatmentChart').getContext('2d');
    var costChartCtx = document.getElementById('costChart').getContext('2d');
  
    var admissionChart = new Chart(admissionChartCtx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'Admissions',
          data: [30, 25, 40, 45, 35, 50, 60],
          backgroundColor: '#3498db'
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  
    var treatmentChart = new Chart(treatmentChartCtx, {
      type: 'line',
      data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
          label: 'Treatment Success Rate',
          data: [70, 80, 75, 90],
          borderColor: '#2ecc71',
          fill: false
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  
    var costChart = new Chart(costChartCtx, {
      type: 'pie',
      data: {
        labels: ['Personnel', 'Matériel', 'Infrastructure', 'Autres'],
        datasets: [{
          label: 'Operational Costs',
          data: [40, 30, 20, 10],
          backgroundColor: ['#3498db', '#e74c3c', '#f1c40f', '#2ecc71']
        }]
      },
      options: {
        responsive: true
      }
    });
  });