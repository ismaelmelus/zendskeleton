$(function() {

    Morris.Line({
        element: 'morris-line-chart',
        //data: JSON.parse('<?php echo json_encode($data) ?>'),
        data: [{
        	x: '2013-03-30 22:00:00',
            today: 26,
            yesterday: null,
            before_yesterday: 27
        }, {
        	x: '2013-03-30 22:10:00',
            today: 27,
            yesterday: 22,
            before_yesterday: 24
        }, {
        	x: '2013-03-30 22:20:00',
            today: 22,
            yesterday: 19,
            before_yesterday: 25
        }, {
        	x: '2013-03-30 22:30:00',
            today: 37,
            yesterday: 35,
            before_yesterday: 29
        }, {
        	x: '2013-03-30 22:40:00',
            today: 20,
            yesterday: 19,
            before_yesterday: 22
        }, {
        	x: '2013-03-30 22:50:00',
            today: 20,
            yesterday: 23,
            before_yesterday: 18
        }, {
        	x: '2013-03-30 23:00:00',
            today: 28,
            yesterday: 35,
            before_yesterday: 28
        }, {
        	x: '2013-03-30 23:10:00',
            today: 13,
            yesterday: 27,
            before_yesterday: 25
        }, {
        	x: '2013-03-30 23:20:00',
            today: 07,
            yesterday: 20,
            before_yesterday: 28
        }, {
        	x: '2013-03-30 23:30:00',
            today: 22,
            yesterday: 13,
            before_yesterday: 11
        }],
        xkey: 'x',
        ykeys: ['today', 'yesterday', 'before_yesterday'],
        labels: ['today', 'yesterday', 'before_yesterday'],
        pointSize: 4,
        hideHover: 'auto',
        resize: true
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
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
