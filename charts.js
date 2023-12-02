

// Sample data for the line chart
var expensesData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Monthly Farm Expenses (in $)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2,
        pointRadius: 5,
        data: [1000, 1200, 900, 1100, 800, 950],
    }]
};

// Function to create a line chart for expenses
function createExpensesChart() {
    var ctx = document.getElementById('expensesChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: expensesData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Call the function to create the expenses line chart
createExpensesChart();


 


