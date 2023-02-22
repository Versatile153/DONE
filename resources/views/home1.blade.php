
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Primewaretrades is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                                        ">
    <meta name="keywords" content="Primewaretrades, bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                       ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>
    <!-- Bootstrap CSS -->

    

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/icons.css">
    <!-- /font icon Styles -->
    <!-- Load Styles -->
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/chartist.min.css">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/style.min.css">
    <!-- /load styles -->
    <!-- include summernote css/js -->
    <link rel="stylesheet" href="http://translate.google.com/translate?js=n&sl=auto&tl=destination_language&u=http://example.net">
    <link href="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/intlTelInput.css">
    
    
    
   <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<style>
    
body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}
</style>
    <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/jquery.min.js"></script>
    </head>
    <body class="dt-header--fixed theme-dark dt-layout--full-width dt-sidebar--fixed o-auto">
        <!-- Root -->
        <div class="dt-root op-1">
            <div class="dt-root__inner">
                                <!-- Header -->
                <header class="dt-header">
                    <!-- Header container -->
                    <div class="dt-header__container">
                        <!-- Brand -->
                        <div class="dt-brand">
                            <!-- Brand tool -->
                            <div class="dt-brand__tool" data-toggle="main-sidebar">
                                <div class="hamburger-inner"></div>
                            </div>
                            <!-- /brand tool -->

                            <!-- Brand logo -->
                            <span class="dt-brand__logo">
							<a href="/" class="fxt-logo"><img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo"></a>
                            </span>
                            <!-- /brand logo -->

                        </div>
                        <!-- /brand -->

                        <!-- Header toolbar-->
                        <div class="dt-header__toolbar">


                            <div class="search-box d-none d-lg-block">
                                                            <h1 class="dt-page__title mt-4" style="margin-left: -1.5em;">Home <span class="breadcrumb-arrow-right"></span> private page
                                                               
                                                            </h1>
                                                            <strong class="btn btn-primary">
                                                                You are warmly welcome  {{ Auth::user()->name }}
                                                            </strong>
                                                          
                                                           
                                                        </div>

                            <!-- Header Menu Wrapper -->
                            <div class="dt-nav-wrapper">
                                <!-- Header Menu -->
                                <ul class="dt-nav d-lg-none">
                                    <li class="dt-nav__item dt-notification-search dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon icon-search icon-fw icon-lg"></i> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu">

                                            <!-- Search Box -->
                                            <form class="search-box right-side-icon">
                                                <input class="form-control form-control-lg" type="search"
                                                    placeholder="Search in app...">
                                                <button type="submit" class="search-icon"><i
                                                        class="icon icon-search icon-lg"></i></button>
                                            </form>
                                            <!-- /search box -->

                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -->
                                <!-- Header Menu -->
                                <ul class="dt-nav">
                                    <li class="dt-nav__item dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle" id='currentLang' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="flag-icon flag-icon-rounded flag-icon-lg mr-1m" src="https://primestocktrades.com/m_cust/dash/uploads/gb-eng.png">
                                        <span>EN</span> </a>
                                        <input style="background:black;" type="checkbox" id="switch-mode">
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 72px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/English">
<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/gb-eng.png"><span>English</span> </button>
                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Russian">
<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/russia.png"><span>Russian</span> </button>
                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Português">
<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/portuguese.png"><span>Português</span> </button>
                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Español">
<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/spain.png"><span>Español</span> </button>
                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/German">
<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/germany.png"><span>German</span> </button>
                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -->

                                <!-- Header Menu -->
                                <ul class="dt-nav">
                                    <li class="dt-nav__item dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="dt-avatar size-30"
                                                src="https://primestocktrades.com/m_cust/dash/assets/dist/img/avatar.png"
                                                alt="eze cecc">
                                            <span class="dt-avatar-info d-none d-sm-block">
                                                <span
                                                    class="dt-avatar-name">{{ Auth::user()->name }}</span>

                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/profile">
                                                {{ __('my profile') }}
                                            </a>
        
                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                
                                
                                  <div id="google_translate_element" class="btn btn-primary" ></div> 
                                <!-- /header menu -->
                            </div>
                            <!-- Header Menu Wrapper -->

                        </div>
                        <!-- /header toolbar -->

                    </div>
                    <!-- /header container -->

                </header>
                <!-- /header -->

                <!-- Site Main -->
                <main class="dt-main" style="background-color: rgba(0, 0, 22, 0.714);">
                    <!-- Sidebar -->
                    <aside id="main-sidebar" class="dt-sidebar ps ps--active-y">
                                                <div class="dt-sidebar__container mt-10">

                            <!-- Sidebar Navigation -->
                            <ul class="dt-side-nav">
                                                                <li
                                    class="dt-side-nav__item selected">
                                    <a href="/home"
                                        class="dt-side-nav__link dt-active"
                                        title="Dashboard">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
									<span class="dt-side-nav__text " style="color:white">Main Dashboard
                                      
                                    </span>
                                    
                                        
                                
                                    </a>
                                   
                                </li>
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow"
                                        title="Dashboard">
                                        <i class="icon icon-revenue2 icon-fw icon-lg"></i> <span
                                            class="dt-side-nav__text">Deposits</span> </a>

                                    <!-- Sub-menu -->
                                    <ul class="dt-side-nav__sub-menu display-n">
                                        <li
                                            class="dt-side-nav__item open ">
                                            <a href="/payment_account"
                                                class="dt-side-nav__link "
                                                title="Traffic">
                                                <span class="dt-side-nav__text">Deposit funds</span> </a>
                                        </li>

                                        <li class="dt-side-nav__item">
                                            <a href="/view_deposit"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View deposits</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="#" class="dt-side-nav__link dt-side-nav__arrow"
                                        title="Dashboard">
                                        <i class="icon icon-revenue-new icon-fw icon-lg"></i><span
                                            class="dt-side-nav__text">Withdrawals</span> </a>

                                    <!-- Sub-menu -->
                                    <ul class="dt-side-nav__sub-menu display-n">
                                        <li
                                            class="dt-side-nav__item open ">
                                            <a href="/withdraw"
                                                class="dt-side-nav__link "
                                                title="Traffic">
                                                <span class="dt-side-nav__text">Withdraw funds</span> </a>
                                        </li>

                                        <li class="dt-side-nav__item">
								<a href="/view_deposit"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View withdrawals</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                  @if(Auth::user()->access == "admin")
                  <li><a style="color:red;font-weight:bolder; margin-left:3.6rem;" class="dropdown-item" href="/admin">Admin</a></li>
                  @endif
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="/earn"
                                        class="dt-side-nav__link "
                                        title="Earnings">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Earnings</span>
                                    </a>
                                </li>
                                
                                 <li
                                    class="dt-side-nav__item ">
                                    <a href="/ref"
                                        class="dt-side-nav__link "
                                        title="My Referrals">
                                        <i class="icon icon-users icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">My Referrals</span>
                                    </a>
                                </li>
                                
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="/help" class="dt-side-nav__link"
                                        title="Support">
                                        <i class="icon icon-mail icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Help Desk</span>
                                    </a>
                                </li>
                                
                                
                                	<li style="margin-left:3.8rem;">
			 
                                            <a style="color:red" class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        
			</li>
                                
                                
                                
                                
                                
                                
                                <!-- Menu Header -->

                                <!-- /menu item -->

                            </ul>
                            <!-- /sidebar navigation -->

                        </div>
                                            </aside>
                    <!-- /sidebar -->
                         <!-- Site Content Wrapper -->
<div class="dt-content-wrapper">
    <!-- Site Content -->
    <div class="dt-content">
        <!-- Page Header -->
        <div class="dt-page__header">
             <strong style="width:100px; cursor:pointer;color:white;" id="copyBtn" data-text="{{$user->refferal_code}}">Copy refferal code</strong>

                <script>
                 const copyBtn = document.querySelector('#copyBtn');
                 copyBtn.addEventListener('click', e => {
                  const input = document.createElement('input');
                     input.value = copyBtn.dataset.text;
                    document.body.appendChild(input);
                 input.select();
                 if(document.execCommand('copy')) {
                   alert('refferal code copied');
                  document.body.removeChild(input);
                     }
                     });
                    </script> 
            <h1 class="dt-page__title text-capitalize">Dashboard</h1>
            
            <div class="dt-entry__header">
                <!-- Entry Heading -->
                <div class="dt-entry__heading">
                </div>
                <!-- /entry heading -->
            </div>
        </div>
        <!-- /page header -->

        <!-- Grid -->
        <div class="row mt-3-2m">
            <!-- Grid Item -->
            <div class="col-xl-12 col-12 col-md-12">
                                <!-- Grid Item -->
                                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container mb-1-5m">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [{
                                "proName": "OANDA:SPX500USD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "OANDA:NAS100USD",
                                "title": "Nasdaq 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "BTC/USD"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "ETH/USD"
                            }
                        ],
                        "colorTheme": "light",
                        "isTransparent": false,
                        "displayMode": "regular",
                        "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
                            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
					<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card  text-dark"style="background-color: rgba(3, 3, 55, 0.714); color:white;
                    ">
                                <span class="badge badge-secondary badge-top-right">Earnings</span>
                                <!-- Media -->
                                <div class="media">
                                    <i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
                                    <!-- Media Body -->
                                    <div class="media-body">
                                        @if (count($deposits)>0)
                                        <p class="mb-1 h1 text-light">
											{{ DB::table('deposits')->where('user_id',$user->id)->sum('amount') }} USD
			                                 </p>
                                             @else
                                             <h2>00</h2>
                                             @endif
                                        <span class="d-block">Total Deposit</span>
                                    </div>
                                    <!-- /media body -->
                                </div>
                                <!-- /media -->
                            </div>
                            <!-- /card body -->
                        </div>
                        <!-- /card -->
                    </div>
                    <div class="col-md-6"style="background: blue;">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
                            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4 dt-card bg-primary text-white">
                                <span class="badge badge-secondary badge-top-right">Active deposits</span>
                                <!-- Media -->
                                <div class="media">
                                    <i class="icon icon-revenue-new icon-5x mr-xl-5 mr-3 align-self-center"></i>
                                    <!-- Media Body -->
                                    <div class="media-body">
                                       @if (count($deposits)>0)
                                       <p class="mb-1 h1 text-light">
                                        {{ DB::table('deposits')->where('status','approved')->where('user_id',$user->id)->sum('amount') }} USD
                                                  </p>
                                                  @else
                                                  <h2>00</h2>
                                     @endif
                                           
                                      
                                    
                                        
                                        <span class="d-block">Active Deposits</span>
                                    </div>
                                    <!-- /media body -->
                                </div>
                                <!-- /media -->
                            </div>
                            <!-- /card body -->
                        </div>
                        <!-- /card -->
                    </div>
                    <div class="col-md-12">
                        <!-- Card -->
                        <div class="dt-card dt-card__full-height">
                            <!-- Card Header -->
                            <div class="dt-card__header">
                                <!-- Card Heading -->
                                <div class="dt-card__heading">
                                    <h3 class="dt-card__title">Overall portfolio</h3>
                                </div>
                                <!-- /card heading -->
                            </div>
                            <!-- /card header -->
                            <!-- Card Body -->
                            <div class="dt-card__body d-flex justify-content-center align-items-center">
                                <!-- Chart -->
                                <canvas id="pie-chart" class="m--30p display-b" data-fill="27" height="130" width="130"></canvas>
                                <!-- /chart -->
                            </div>
                            <!-- /card body -->
                        </div>
                        <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/Chart.min.js"></script>
                        <script>
                        var activedeposits = 0;
                        var inactivedeposits = 100.00;
                        var withdrawals = 101.03;
                        new Chart(document.getElementById("pie-chart"), {
                            type: 'pie',
                            data: {
                                labels: ["Active", "Inactive", "Earnings"],
                                datasets: [{
                                    label: "Transactions",
                                    backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
                                    data: [activedeposits, inactivedeposits, withdrawals]
                                }]
                            }
                        });
                        </script>
                        <!-- /card -->
                    </div>
                </div>


            </div>
            <div class="col-md-5 col-sm-6 col-12" >
                <div class="row">
                    <div class="col-md-12">
                                                <div class="card bg-gradient-blue text-white">
                            <!-- Card Body -->
                            <div class="card-body p-6">
                                <p class="display-4 mb-1">Total Withdrawals</p>
                                <p class="f-14">
                                Paid    @if (count($deposits)>0)
                                        
											{{ DB::table('withdrawals')->where("user_id",$user->id)->where('status','paid')->sum('amount') }} USD
			                               
                                             @else
                                             <h2>00</h2>
                                             @endif                           </p>
                                                                <a class="btn btn-default btn-sm text-dark"
                                    href="/view_deposit">Verify</a>
                                                                </div>
                            <!-- /card body -->
                        </div>


                        <div
                            class="dt-card dt-card bg-image-v6 bg-overlay overlay-opacity-0_8 bg-gradient-blue--after text-white">

                            <!-- Overlay Content -->
                            <div class="bg-overlay__inner mt-auto">

                                <!-- Card Body -->
                                <div class="dt-card__body">

                                    <h3 class="text-white mb-2">Refer & earn                                        5% From your referral's deposits.</h3>
<p>Referral code   {{$user->refferal_code}}:                                  </p>
                                       <div>
                             
                        </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <!--<form action="" method="post" id="joinForm"-->
                                    <!--    name="joinForm">-->
                                    <!--    <form action="" id="joinForm" method="post" accept-charset="utf-8">-->
                                    <!--                                                   <input type="hidden" name="csrf_test_name" value="a0014ecfb7a7d53f2f0c190bb0d24887" />-->
                                    <!--    <input class="btn btn-outline-light btn-block" name="email"-->
                                    <!--        placeholder="Enter Email Address">-->
                                    <!--    <button type="submit" id="invite" class="btn btn-info btn-block">Invite friends</button>-->
                                    <!--    </form>-->
                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /overlay content -->

                        </div>
                        <!-- /card -->
                    </div>
                    <div class="col-md-12">
                        <div class="dt-card">

                            <!-- Card Header -->
                            <div class="dt-card__header mb-4">



                            </div>
                            <!-- /card header -->

                            <!-- Card Body -->
                            <div class="table-responsive ps-custom-scrollbar ps">
                                
                                
                                
                                <h3 class="ml-2">Recent deposits</h3>
                                    <table class="table table-ordered table-bordered-0 mb-0 ml-2">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase">TXN Code</th>
                                                <th class="text-uppercase text-right" scope="col">Amount (USD)
                                                </th>
                                                <th class="text-uppercase text-center" scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                 
                                                @if(count($deposits)>0) 
                                                                                           @foreach($deposits as $depo)   
                                                                                       <tr>
                                                                                         
                                                <td>{{$depo->id}}</td>
                                          
                                                <td>USD {{$depo->amount}}</td>
                                                <td> {{$depo->created_at}}                                               </td>
                                              
                                            </tr>
                                                                                         @endforeach
                                                
                                                @endif
                                                                                    </tbody>
                                    </table>
                                </div>
                            <!-- /card body -->

                        </div>
                    </div>
                </div>


            </div>
            <!-- /grid item -->

        </div>
        <!-- /grid -->
    </div>
    <!-- /site content -->
    <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/functions.js"></script><!-- Footer -->
<footer class="dt-footer">
<a href="/" class="fxt-logo"><img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo"></a>
    Copyright Primewaretrades © 2023</footer>
<!-- /footer -->

</div>
<!-- /site content wrapper -->
</main>
</div>
</div>
<script>
    $(".sitelangChange").click(function(e){
    var actionurl = $(this).attr("data-id");
    $.get(actionurl, function(data){
        var content = JSON.parse(data);
        setTimeout(
            function() {
                location.reload();
            }, 1000);
    });
});

$('.close').on('click', function(e){
    $('.drawer').removeClass('open');
})

$('.customizer-toggle').on('click', function(e){
    $('.drawer').addClass('open');
})

$('.choose-option__icon').on('click', function(e){
    var actionurl = $(this).attr("data-url");
    $.get(actionurl, function(data){
        var content = JSON.parse(data);

        setTimeout(
            function() {
                window.location.replace("./home");
            }, 1000);
    });
})
</script>
<script type="text/javascript">// <![CDATA[
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    // ]]></script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
      
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/summernote-bs4.js"></script>
{{-- <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/lang.js"></script> --}}
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/editor-summernote.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/moment/moment.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/contact.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/perfect-scrollbar.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/masonry.pkgd.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/sweetalert2.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/customizer.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/Chart.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/chartist.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/script.js"></script>

<script>
$(".sitelangChange").click(function(e){
    var actionurl = $(this).attr("data-id");
    $.get(actionurl, function(data){
        var content = JSON.parse(data);
        setTimeout(
            function() {
                location.reload();
            }, 1000);
    });
});

$('.close').on('click', function(e){
    $('.drawer').removeClass('open');
})

$('.customizer-toggle').on('click', function(e){
    $('.drawer').addClass('open');
})

$('.choose-option__icon').on('click', function(e){
    var actionurl = $(this).attr("data-url");
    $.get(actionurl, function(data){
        var content = JSON.parse(data);

        setTimeout(
            function() {
                window.location.replace("./home");
            }, 1000);
    });
})
</script>



})
</script>
</body>
</html>
