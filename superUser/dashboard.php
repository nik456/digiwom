<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  

  require_once 'init/top.php';
?>

<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php  
  require_once 'init/nav.php';
?>
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Dashboard</span></li></ul></div> <div></div></div></div> <div class="m-content"><div class="m-portlet"><div class="m-portlet__body"><div class="m-form m-form--state"><span class="h1">
        User ID:
        <span class="m--font-success">
            <?php echo $_SESSION['username']; ?>
        </span></span></div></div></div> <div class="row">
        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Marketers</h3></div></div></div> <div class="m-portlet__body">
        <div class="table-responsive">
                                    <canvas id="myChart3" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Total', 'Men', 'Woman'],
        datasets: [{
            label: '# of Peoples',
            data: [<?php echo marketerTotalCheck(); ?>,<?php echo marketerMaleCheck(); ?> ,<?php echo marketerFemaleCheck(); ?> ,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
            
                                    <canvas class="mt-5" id="myChart2" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        
        datasets: [{
            label: '# of Countries',
            <?php echo subscribercountryCheck(); ?>
            borderWidth: 1
        }],
        <?php echo subscribercountryNameCheck(); ?>,
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

                                    <canvas class="mt-5" id="myChart6" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart6').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        
        datasets: [{
            label: '# of Segments',
            <?php echo marketersegmentCheck(); ?>
            borderWidth: 1
        }],
        <?php echo marketersegmentNameCheck(); ?>
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

            
        </div>
        </div></div>
       

        </div>

        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Subscribers</h3></div></div></div> <div class="m-portlet__body">
        <div class="table-responsive">
                        <canvas id="myChart" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Total', 'Men', 'Woman'],
        datasets: [{
            label: '# of Peoples',
            data: [<?php echo subscriberTotalCheck(); ?>,<?php echo subscriberMaleCheck(); ?> ,<?php echo subscriberFemaleCheck(); ?> ,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
                        <canvas class="mt-5" id="myChart1" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        
        datasets: [{
            label: '# of Countries',
            <?php echo subscribercountryCheck(); ?>
            borderWidth: 1
        }],
        <?php echo subscribercountryNameCheck(); ?>,
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

        </div>
        </div></div>
       

        </div>
        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Campaigns</h3></div></div></div> <div class="m-portlet__body">
        <div class="row">
            
                      <table class="table table-striped" >
                <thead class="thead-dark">
                  <tr>
                    <th scope="col text-center"  >#</th>
                    <th scope="col text-center"  >Campaign Name</th>
                    <th scope="col text-center"  >Go To Survey</th>
                    <th scope="col text-center"  >Approve</th>
                  </tr>
                </thead>
                <tbody>
                      <?php listcampaign1(); ?>
                </tbody>
          </table>
        </div>
        </div></div>
       

        </div>

        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Ads</h3></div></div></div> <div class="m-portlet__body">
        <div class="row">
            <table class="table table-striped" >
                <thead class="thead-dark">
                  <tr>
                    <th scope="col text-center"  >#</th>
                    <th scope="col text-center"  >Name</th>
                    <th scope="col text-center"  >Campaign Name</th>
                    <th scope="col text-center"  >Daily Budget</th>
                    <th scope="col text-center"  >Approve</th>
                    <th scope="col text-center"  >Video</th>
                  </tr>
                </thead>
                <tbody>
                     <?php loadAdsForSubscribers1(); ?>
                </tbody>
            </table>
        </div>
        </div></div>
       

        </div>

                <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Surveys</h3></div></div></div> <div class="m-portlet__body">
                    <table class="table table-striped" >
              <thead class="thead-dark">
                <tr>
                  <th scope="col"  >#</th>
                  <th scope="col"  >Name</th>
                  <th scope="col"  >Campaign </th>
                  <th scope="col"  >Go To Survey</th>
                    <th scope="col text-center"  >Approve</th>
                </tr>
              </thead>
              <tbody>
                    <?php listSurvey1(); ?>
              </tbody>
        </table>
        </div></div>
       

        </div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<?php  
  require_once 'init/bot.php';
?>