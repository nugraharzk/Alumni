<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<div style="width: 600px; background: white; border-radius: 30px;">
		<canvas id="myChart" width="400"></canvas>
		<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
		    type: 'pie',
		    data: {
		        labels: ["Power","Rangers"],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    }
		});
		</script>
	</div>
</body>
</html>