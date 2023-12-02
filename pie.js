   // JavaScript code to toggle sections
   function showSection(sectionId) {
    // Hide all sections
    var sections = document.getElementsByClassName("dashboard-section");
    for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove("active");
    }

    // Show the selected section
    var selectedSection = document.getElementById(sectionId);
    selectedSection.classList.add("active");

    // If the selected section is Livestock, create the pie chart
    if (sectionId === 'livestock') {
        createLivestockChart();
    }
}

// Function to create a pie chart for Livestock
function createLivestockChart() {
    var ctx = document.getElementById('livestockChart').getContext('2d');
    var livestockData = {
        labels: ['Cows', 'Pigs', 'Sheep', 'Chickens'],
        datasets: [{
            data: [20, 15, 10, 25],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50'],
        }],
    };

    var livestockChart = new Chart(ctx, {
        
        type: 'pie',
        data: livestockData,
    });
}