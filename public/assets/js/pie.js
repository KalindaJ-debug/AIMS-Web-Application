var ctx = document.getElementById("myChart2");

var farmers = 10000;
var users = 780;
var guests = 1000;

var myChart = new Chart(ctx, {
  type: 'doughnut',
    data: {
      labels: ["Green", "Blue", "Gray", "Purple", "Yellow", "Red", "Black"],
      datasets: [{
        backgroundColor: [
          "#2ecc71",
          "#3498db",
          "#95a5a6",
          "#9b59b6",
          "#f1c40f",
          "#e74c3c",
          "#34495e"
        ],
        data: [12, 19, 3, 17, 28, 24, 7]
      }]
    }
});
