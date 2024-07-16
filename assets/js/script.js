ScrollOut({
    targets: '.fade-d1, .fade-d2, .slide-left, .slide-right, .slide-up, .slide-up-d2, .slide-up-d3, .slide-up-d4, .slide-up-d5, .incerase-length'
});

ScrollOut();

$('#detailDaerah').owlCarousel({
    stagePadding: 0,
    loop:false,
    margin:50,
    merge:true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('#detailSayuran').owlCarousel({
    stagePadding: 0,
    loop:false,
    margin:50,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$('#myCarousel').owlCarousel({
    stagePadding: 0,
    loop:false,
    margin:30,
    nav:true,
    navText:['','<img src="../assets/img/arrow-carousel.png" alt="">'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        datasets: [{
            data: [4, 4, 4, 4],
            backgroundColor: [
                'rgba(182, 225, 82, 1)',
                'rgba(115, 164, 188, 1)',
                'rgba(255, 96, 41, 1)',
                'rgba(255, 188, 0, 1)'
            ]
        }]
    },
    
});