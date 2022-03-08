$(function(e){
  'use strict'
  

 /* chartjs (#sales-status) */
 
 var ctx = $('#sales-status');
	ctx.height(310);
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["MON (15 June)","TUE (16 June)","WED (17 June)","THU (18 June)","FRI (19 June)","SAT (20 June)","SUN (21 June)"],
			type: 'line',
			datasets: [{
				label: "Total Visitors 22k",
				data: [35,4,24,38,35,60,40,50],
				backgroundColor: 'rgb(22, 80, 226,0.1)',
				borderColor: 'rgb(22, 80, 226) ',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgb(22, 80, 226)',
			}, {
				label: "New Visitors 10k",
				data: [26,17,28,30,25,40,23,15],
				backgroundColor: 'transparent',
				borderColor: 'rgb(110, 81, 236)',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgb(110, 81, 236)',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: true,
				labels: {
					usePointStyle: false,
				},
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#605e7e",
					 },
					display: true,
					gridLines: {
						display: true,
						color:'rgba(96, 94, 126, 0.1)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#605e7e",
					 },
					display: true,
					gridLines: {
						display: true,
						color:'rgba(96, 94, 126, 0.1)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: 'transparent'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/* chartjs (#sales-status) closed */

  });
