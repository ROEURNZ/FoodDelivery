<?php 
$resId = $_SESSION['res_own']['restaurant_id'];
$categories = getCateInres($resId);
$numberOfFood = 0;
foreach ($categories as $key => $value) {
  $cateid = $value['category_id'];
  $statement = $connection->prepare("SELECT * FROM foods where category_id = $cateid");
  $statement->execute();
  $foods = $statement->fetchAll();
  $numberOfFood += count($foods); 
}

$orderedFood = getFoodOrdered($resId, 5);

?>

<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="../../assets/images/user/<?= $resOwner['user_img'] ?>" type="image/webp"><img src="../../assets/images/user/<?= $resOwner['user_img'] ?>" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="/edite_res">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Edit Restaurant</span>
            </a></li>
          <li><a class="danger" href="controllers/signout/signout.controller.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main --->

    <main class="main users chart-page" id="skip-target">
    <div class="container">
      <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon primary">
              <img src="../../assets/images/icons/cutlery.png" alt="categories">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= count($categories); ?>
              </p>
              <p class="stat-cards-info__title">All Categories</p>
            </div>
          </article>
        </div>


        

        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
              <img src="../../assets/images/icons/bibimbap.png" alt="foods">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= $numberOfFood; ?>
              </p>
              <p class="stat-cards-info__title">All Foods</p>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon purple">
              <img src="../../assets/images/icons/return-of-investment.png" alt="profit">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">$
                <?= sumMoney($resId)['sum(total_price)'] ?>.00
              </p>
              <p class="stat-cards-info__title">Revenue</p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon success">
              <img src="../../assets/images/icons/online-order.png" alt="orders">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?php if(isset(sumOrder($resId)['count(user_id)'])): ?> 
                  <?= sumOrder($resId)['count(user_id)'] ?> people
                <?php else: ?>
                  0 people
                <?php endif; ?>
              </p>
              <p class="stat-cards-info__title">All Orders</p>
            </div>
          </article>
        </div>
      </div>
    </div>




    <div class="container chart-summary mb-3 ">


<div class="shadow-sm card w-100 bg-white p-0 m-0" style="border: none; box-sizing: box">

  <div class="card-header bg-white border-0" style="height: 50px">
    <div class=" bg-body-secondary d-flex justify-content-between w-100">
      <h1>Header</h1>
      <button class="btn btn-primary shadow-none" style="width:100px;" id="change-chart">Classic</button>
    </div>
  </div>


  <div class="card-body border-none rounded-0 p-0 bg-white">
    <div class="d-flex justify-content-between align-items-center">

      <div class="shadow-sm col-5 rounded border mx-2">
        <aside class="" id="donutchart" style="height: 340px;">

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:["corechart"]});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                let data = google.visualization.arrayToDataTable([
                  ['Task', 'Hours per Day'],
                  ['Revenue',     <?= sumMoney($resId)['sum(total_price)'] ?>],
                  ['Cancel',     <?= sumCancelOrder()['count(user_id)'] ?>],
                  ['Orders',  <?= sumOrder($resId)['count(user_id)'] ?>],
                ]);

                let options = {
                  title: 'My Daily ',
                  pieHole: 0.4,
                };

                let chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
              }
            </script>



        </aside>
      </div>


        <div class="shadow-sm col rounded mx-2 border border-light-subtle" style="background-color: rgba(0, 0, 0, 0) !important;">
          <aside class="p-1" id="chart_div" style="height: 340px; background-color: transparent !important;">


            <script type="text/javascript">
                google.charts.load('current', {'packages':['bar']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var date = new Date();
                  var currentYear = date.getFullYear();

                  var data = google.visualization.arrayToDataTable([
                    ['Month', 'Sales', 'Expenses', 'Profit'],
                    ['January ' + currentYear, 1000, 400, 200],
                    ['February ' + currentYear, 1170, 460, 250],
                    ['March ' + currentYear, 660, 1120, 300],
                    ['April ' + currentYear, 1030, 540, 350],
                    ['May ' + currentYear, 1030, 540, 350],
                    ['June ' + currentYear, 1030, 540, 350],
                    ['July ' + currentYear, 1030, 540, 350],
                    ['August ' + currentYear, 1030, 540, 350],
                    ['September ' + currentYear, 1030, 540, 350],
                    ['October ' + currentYear, 1030, 540, 350],
                    ['November ' + currentYear, 1030, 540, 350],
                    ['December ' + currentYear, 1030, 540, 350]
                  ]);

                  var options = {
                    chart: {
                      title: 'Company Performance',
                      subtitle: 'Sales, Expenses, and Profit: ' + currentYear + ' (Current Year)',
                    },
                    bars: 'horizontal',
                    vAxis: {format: 'decimal'},
                    height: 300,
                    bar: { groupWidth: '20px' }, // Set the width of the bars to 20px
                    colors: ['#1b9e77', '#d95f02', '#7570b3'],
                    legend: {
                      position: 'top', // Position the legend at the top
                    },
                    backgroundColor: {
                      fill: 'transparent', // Set the background color of the chart area to transparent
                    },
                  };

                  var classicChart;
                  var materialChart;

                  // Draw the material chart initially
                  materialChart = new google.charts.Bar(document.getElementById('chart_div'));
                  materialChart.draw(data, google.charts.Bar.convertOptions(options));

                  var button = document.getElementById('change-chart');

                  button.onclick = function () {
                    if (button.innerText === 'Classic') {
                      // Draw the classic chart
                      classicChart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                      classicChart.draw(data, options);
                      button.innerText = 'Material';
                    } else {
                      // Draw the material chart
                      materialChart = new google.charts.Bar(document.getElementById('chart_div'));
                      materialChart.draw(data, google.charts.Bar.convertOptions(options));
                      button.innerText = 'Classic';
                    }
                  };
                }
              </script>
        </aside>
      </div>
    </div>

  </div>


  <div class="card-footer bg-white border-0" style="height: 50px">

  </div>


</div>

</div>




    <!-- Recently selling and the most popular products -->
    <div class="container top-sale ">

      <div class="shadow-sm card w-100 bg-white" style="border: none  ;">

        <table class="table border-light-subtle table-bordered">
          <thead class="">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Amount</th>
              <th scope="col">Time</th>
            </tr>
          </thead>
          <tbody>

            <!-- for loop to add the items more -->
            <?php
            foreach ($orderedFood as $key => $value):
            ?>
            <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value['foodname'] ?></td>
              <td><?= $value['sum(quantity)'] ?></td>
              <td><?= $value['sum(total_price)'] ?>$</td>
              <td><?= $value['time'] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>


    </div>

  </main>
</div>






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../vendor/plugins/chart.min.js"></script>
<script src="../../vendor/plugins/feather.min.js.map"></script>