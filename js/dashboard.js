
// Load Google Charts
google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawCharts);

function drawCharts() {
    drawSalesReport();
    drawProductDetails();
    drawCategorySales();
    drawCategoryQuotations();
}

// Sales Report Chart
function drawSalesReport() {
    var data = google.visualization.arrayToDataTable([
        ['Product', 'Remaining Quantity', 'Sold Quantity'],
        ['Product 1', 100, 80],
        ['Product 2', 120, 95],
        ['Product 3', 80, 60],
        ['Product 4', 140, 130],
        ['Product 5', 200, 190]
    ]);

    var options = {
        colors: ['#4285F4', '#34A853'],
        hAxis: { title: 'Products' },
        vAxis: { title: 'Quantity' },
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('sales_chart'));
    chart.draw(data, options);
}

// Product Details Chart
function drawProductDetails() {
    var data = google.visualization.arrayToDataTable([
        ['Product', 'Percentage'],
        ['Product 1', 25],
        ['Product 2', 20],
        ['Product 3', 15],
        ['Product 4', 30],
        ['Product 5', 10]
    ]);

    var options = {
        pieHole: 0.4,
        colors: ['#4285F4', '#EA4335', '#FBBC05', '#34A853', '#AB47BC'],
    };

    var chart = new google.visualization.PieChart(document.getElementById('product_chart'));
    chart.draw(data, options);
}

// Category Sales Chart
function drawCategorySales() {
    var data = google.visualization.arrayToDataTable([
        ['Category', 'Percentage'],
        ['Category 1', 35],
        ['Category 2', 25],
        ['Category 3', 15],
        ['Category 4', 20],
        ['Category 5', 5]
    ]);

    var options = { pieHole: 0.4 };

    var chart = new google.visualization.PieChart(document.getElementById('category_chart'));
    chart.draw(data, options);
}

// Category Quotations Chart
function drawCategoryQuotations() {
    var data = google.visualization.arrayToDataTable([
        ['Category', 'Quotation'],
        ['Category 1', 159],
        ['Category 2', 33],
        ['Category 3', 12],
        ['Category 4', 14],
        ['Category 5', 2]
    ]);

    var options = { colors: ['#4285F4'] };

    var chart = new google.visualization.ColumnChart(document.getElementById('quotations_chart'));
    chart.draw(data, options);
}