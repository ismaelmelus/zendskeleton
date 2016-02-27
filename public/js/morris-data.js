//This is jQuery........jQuery.getJSON()
$.getJSON("/js/data.php").done(function(json){

    Morris.Line({
	        element: 'morris-line-chart',
	        data: json,
	        parseTime: false,
	        xkey: 'created_at',
	        ykeys: ['temp'],
	        lineColors: ['#090217']  ,   
	        labels: ['Temperature'],
	        pointSize: 4,
	        hideHover: 'auto',
	        resize: true,
	        lineColors: ['#0969A2'],
	        pointFillColors: ['#112222']
    		//colors: ['#112222','#112222','#112222','#112222','#112222'] igual al numero de puntos
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: json,
        xkey: 'created_at',
        ykeys: ['id', 'temp'],
        labels: ['Serie A', 'Serie B'],
        hideHover: 'auto',
        resize: true
    });

});
