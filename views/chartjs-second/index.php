<?php
	$this->title = 'Мой первый график';

$script = <<< JS
	var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Отчислено',
  data: [329, 308, 206, 149, 137, 285, 4442, 544, 166, 101, 126, 128],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-density"
};

var gravityData = {
  label: 'Обучается',
  data: [20522,20398, 20283, 20191, 20085, 19812, 15596, 18858, 19755, 20747, 20695, 20581],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderWidth: 0,
  yAxisID: "y-axis-gravity"
};

var planetData = {
  labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
  datasets: [densityData, gravityData]
};

var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});
    
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>

<div id="my-chart">
	<h1><?= $this->title ?></h1>

	<canvas id="densityChart" width="600" height="400"></canvas>

</div>

