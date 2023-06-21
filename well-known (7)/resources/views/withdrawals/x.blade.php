<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  background-color: #e6e8ed;
  color: #666666;
  font-family: "Montserrat", sans-serif;
}

.material-icons-outlined {
  vertical-align: middle;
  line-height: 1px;
}

.text-primary {
  color: #666666;
}

.text-blue {
  color: #246dec;
}

.text-red {
  color: #cc3c43;
}

.text-green {
  color: #367952;
}

.text-orange {
  color: #f5b74f;
}

.font-weight-bold {
  font-weight: 600;
}

.grid-container {
  display: grid;
  grid-template-columns: 260px 1fr 1fr 1fr;
  grid-template-rows: 0.2fr 3fr;
  grid-template-areas:
    "sidebar header header header"
    "sidebar main main main";
  height: 100vh;
}


/* ---------- HEADER ---------- */

.header {
  grid-area: header;
  height: 70px;
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 30px 0 30px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.menu-icon {
  display: none;
}


/* ---------- SIDEBAR ---------- */

#sidebar {
  grid-area: sidebar;
  height: 100%;
  background-color: #21232d;
  color: #9799ab;
  overflow-y: auto;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

.sidebar-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 20px 20px 20px;
  margin-bottom: 30px;
}

.sidebar-title > span {
  display: none;
}

.sidebar-brand {
  margin-top: 15px;
  font-size: 20px;
  font-weight: 700;
}

.sidebar-list {
  padding: 0;
  margin-top: 15px;
  list-style-type: none;
}

.sidebar-list-item {
  padding: 20px 20px 20px 20px;
}

.sidebar-list-item:hover {
  background-color: rgba(255, 255, 255, 0.2);
  cursor: pointer;
}

.sidebar-list-item > a {
  text-decoration: none;
  color: #9799ab;
}

.sidebar-responsive {
  display: inline !important;
  position: absolute;
  /*
    the z-index of the ApexCharts is 11
    we want the z-index of the sidebar higher so that
    the charts are not showing over the sidebar 
    on small screens
  */
  z-index: 12 !important;
}


/* ---------- MAIN ---------- */

.main-container {
  grid-area: main;
  overflow-y: auto;
  padding: 20px 20px;
}

.main-title {
  display: flex;
  justify-content: space-between;
}

.main-title > p {
  font-size: 20px;
}

.main-cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 20px;
  margin: 20px 0;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 25px;
  background-color: #ffffff;
  box-sizing: border-box;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card:first-child {
  border-left: 7px solid #246dec;
}

.card:nth-child(2) {
  border-left: 7px solid #f5b74f;
}

.card:nth-child(3) {
  border-left: 7px solid #367952;
}

.card:nth-child(4) {
  border-left: 7px solid #cc3c43;
}

.card > span {
  font-size: 20px;
  font-weight: 600;
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-inner > p {
  font-size: 18px;
}

.card-inner > span {
  font-size: 35px;
}

.charts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.charts-card {
  background-color: #ffffff;
  margin-bottom: 20px;
  padding: 25px;
  box-sizing: border-box;
  -webkit-column-break-inside: avoid;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.chart-title {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  font-weight: 600;
}


/* ---------- SCROLLBARS ---------- */

::-webkit-scrollbar {
  width: 5px;
  height: 6px;
}

::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px #a5aaad;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background-color: #4f35a1;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #a5aaad;
}


/* ---------- MEDIA QUERIES ---------- */


/* Medium <= 992px */
@media screen and (max-width: 992px) {
  .grid-container {
    grid-template-columns: 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      "header"
      "main";
  }

  #sidebar {
    display: none;
  }

  .menu-icon {
    display: inline;
  }

  .sidebar-title > span {
    display: inline;
  }
}

/* Small <= 768px */
@media screen and (max-width: 768px) {
  .main-cards {
    grid-template-columns: 1fr;
    gap: 10px;
    margin-bottom: 0;
  }

  .charts {
    grid-template-columns: 1fr;
    margin-top: 30px;
  }
}

/* Extra Small <= 576px */
@media screen and (max-width: 576px) {
  .header-left {
    display: none;
  }
}

    </style>
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span>User
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="/home" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="/deposit" target="_blank">
              <span class="material-icons-outlined">inventory_2</span>Deposit
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="view_deposit" target="_blank">
              <span class="material-icons-outlined">fact_check</span>View Deposits
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">add_shopping_cart</span> Withdraw
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="/view" target="_blank">
              <span class="material-icons-outlined">shopping_cart</span>View Withdrawals
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="/earn" target="_blank">
              <span class="material-icons-outlined">poll</span>Earns
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="/ref" target="_blank">
              <span class="material-icons-outlined">settings</span> Refferals
            </a>
          </li>

          
          <li style="margin-left:2.5rem;">
			 
            <a style="color:red" class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        
</li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">EARNS</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary"> Active Deposits</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">${{ $deposit1 }}</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Earnings</p>
              <span class="material-icons-outlined text-orange">add_shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">${{ $earn }}</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Refferal earns</p>
              <span class="material-icons-outlined text-green">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">$0</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Withdrawals received</p>
              <span class="material-icons-outlined text-red">notification_important</span>
            </div>
            <span class="text-primary font-weight-bold"> {{  $withdrawals}}</span>
          </div>

        </div>

        








        <div>
            <table width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        
                        <th><span class="las la-sort"></span> DEPOSITS</th>
                        <th><span class="las la-sort"></span>DEPOSITS DATE</th>
                        <th><span class="las la-sort"></span>APPROVE DATE</th>
                        <th><span class="las la-sort"></span>EARNS</th>
                        <th><span class="las la-sort"></span> STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deposit4 as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>
                            {{ $transaction->amount}}
                        </td>
                       
                        <td>
                            {{ $transaction->created_at }}
                        </td>
                        <td>
                            {{ $transaction->updated_at }}
                        </td>
                        <td>
                            <div class="actions">
                                <span class=""> {{ $transaction->earnings }}</span>
                               
                            </div>
                        </td>


                        <td>
                            <div class="h6">
                                <span class=""> {{ $transaction->status }}</span>
                               
                            </div>
                        </td>
                    </tr>
                    @endforeach
                   
        </div>
        </div>
        
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script>
        // SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}



// ---------- CHARTS ----------

// BAR CHART
var barChartOptions = {
  series: [{
    data: [10, 8, 6, 4, 2]
  }],
  chart: {
    type: 'bar',
    height: 350,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#246dec",
    "#cc3c43",
    "#367952",
    "#f5b74f",
    "#4f35a1"
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '40%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["Laptop", "Phone", "Monitor", "Headphones", "Camera"],
  },
  yaxis: {
    title: {
      text: "Count"
    }
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();


// AREA CHART
var areaChartOptions = {
  series: [{
    name: 'Purchase Orders',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: 'Sales Orders',
    data: [11, 32, 45, 32, 34, 52, 41]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  colors: ["#4f35a1", "#246dec"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Purchase Orders',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Sales Orders',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
areaChart.render();
    </script>
    
    <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15370905;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15370905/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

  </body>
</html>