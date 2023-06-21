<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title> Client Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;500;600&display=swap');

:root {
    --main-color: #22BAA0;
    --color-dark: #34425A;
    --text-grey: #B0B0B0;
}

* {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
    box-sizing: border-box;
    font-family: 'Merriweather', sans-serif;
}

#menu-toggle {
    display: none;
}

.sidebar {
    position: fixed;
    height: 100%;
    width: 165px;
    left: 0;
    bottom: 0;
    top: 0;
    z-index: 100;
    background: var(--color-dark);
    transition: left 300ms;
}

.side-header {
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 /10%);
    background: var(--main-color);
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.side-header h3, side-head span {
    color: #fff;
    font-weight: 400;
}

.side-content {
    height: calc(100vh - 60px);
    overflow: auto;
}

/* width */
.side-content::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.side-content::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.side-content::-webkit-scrollbar-thumb {
  background: #b0b0b0; 
  border-radius: 10px;
}

/* Handle on hover */
.side-content::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}

.profile {
    text-align: center;
    padding: 2rem 0rem;
}

.bg-img {
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 50%;
    background-size: cover;
}

.profile-img {
    height: 80px;
    width: 80px;
    display: inline-block;
    margin: 0 auto .5rem auto;
    border: 3px solid #899DC1;
}

.profile h4 {
    color: #fff;
    font-weight: 500;
}

.profile small {
    color: #899DC1;
    font-weight: 600;
}

.sidebar {
    /*overflow-y: auto;*/
}

.side-menu ul {
    text-align: center;
}

.side-menu a {
    display: block;
    padding: 1.2rem 0rem;
}

.side-menu a.active {
    background: #2B384E;
}

.side-menu a.active span, .side-menu a.active small {
    color: #fff;
}

.side-menu a span {
    display: block;
    text-align: center;
    font-size: 1.7rem;
}

.side-menu a span, .side-menu a small {
    color: #899DC1;
}

#menu-toggle:checked ~ .sidebar {
    width: 60px;
}

#menu-toggle:checked ~ .sidebar .side-header span {
    display: none;
}

#menu-toggle:checked ~ .main-content {
    margin-left: 60px;
    width: calc(100% - 60px);
}

#menu-toggle:checked ~ .main-content header {
    left: 60px;
}

#menu-toggle:checked ~ .sidebar .profile,
#menu-toggle:checked ~ .sidebar .side-menu a small {
    display: none;
}

#menu-toggle:checked ~ .sidebar .side-menu a span {
    font-size: 1.3rem;
}


.main-content {
    margin-left: 165px;
    width: calc(100% - 165px);
    transition: margin-left 300ms;
}

header {
    position: fixed;
    right: 0;
    top: 0;
    left: 165px;
    z-index: 100;
    height: 60px;
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 /10%);
    background: #fff;
    transition: left 300ms;
}

.header-content, .header-menu {
    display: flex;
    align-items: center;
}

.header-content {
    justify-content: space-between;
    padding: 0rem 1rem;
}

.header-content label:first-child span {
    font-size: 1.3rem;
}

.header-content label {
    cursor: pointer;
}

.header-menu {
    justify-content: flex-end;
    padding-top: .5rem;
}

.header-menu label,
.header-menu .notify-icon {
    margin-right: 2rem;
    position: relative;
}

.header-menu label span,
.notify-icon span:first-child {
    font-size: 1.3rem;
}

.notify-icon span:last-child {
    position: absolute;
    background: var(--main-color);
    height: 16px;
    width: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    right: -5px;
    top: -5px;
    color: #fff;
    font-size: .8rem;
    font-weight: 500;
}

.user {
    display: flex;
    align-items: center;
}

.user div, .client-img {
    height: 40px;
    width: 40px;
    margin-right: 1rem;
}

.user span:last-child {
    display: inline-block;
    margin-left: .3rem;
    font-size: .8rem;
}

main {
    margin-top: 60px;
}

.page-header {
    padding: 1.3rem 1rem;
    background: #E9edf2;
    border-bottom: 1px solid #dee2e8;
}

.page-header h1, .page-header small {
    color: #74767d;
}

.page-content {
    padding: 1.3rem 1rem;
    background: #f1f4f9;
}

.analytics {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
    margin-top: .5rem;
    margin-bottom: 2rem;
}

.card {
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 10%);
    background: #fff;
    padding: 1rem;
    border-radius: 3px;
}

.card-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-head h2 {
    color: #333;
    font-size: 1.8rem;
    font-weight: 500;
}

.card-head span {
    font-size: 3.2rem;
    color: var(--text-grey);
}

.card-progress small {
    color: #777;
    font-size: .8rem;
    font-weight: 600;
}

.card-indicator {
    margin: .7rem 0rem;
    height: 10px;
    border-radius: 4px;
    background: #e9edf2;
    overflow: hidden;
}

.indicator {
    height: 10px;
    border-radius: 4px;
}

.indicator.one {
    background: #22baa0;
}

.indicator.two {
    background: #11a8c3;
}

.indicator.three {
    background: #f6d433;
}

.indicator.four {
    background: #f25656;
}

.records {
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 10%);
    background: #fff;
    border-radius: 3px;
}

.record-header {
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.add, .browse {
    display: flex;
    align-items: center;
}

.add span {
    display: inline-block;
    margin-right: .6rem;
    font-size: .9rem;
    color: #666;
}

input, button, select {
    outline: none;
}

.add select, .browse input, .browse select {
    height: 35px;
    border: 1px solid #b0b0b0;
    border-radius: 3px;
    display: inline-block;
    width: 75px;
    padding: 0rem .5rem;
    margin-right: .8rem;
    color: #666;
}

.add button {
    background: var(--main-color);
    color: #fff;
    height: 37px;
    border-radius: 4px;
    padding: 0rem 1rem;
    border: none;
    font-weight: 600;
}

.browse input {
    width: 150px;
}

.browse select {
    width: 100px;
}

.table-responsive {
    width: 100%;
    overflow: auto;
}

table {
    border-collapse: collapse;
}

table thead tr {
    background: #e9edf2;
}

table thead th {
    padding: 1rem 0rem;
    text-align: left;
    color: #444;
    font-size: .9rem;
}

table thead th:first-child {
    padding-left: 1rem;
}

table tbody td {
    padding: 1rem 0rem;
    color: #444;
}

table tbody td:first-child {
    padding-left: 1rem;
    color: var(--main-color);
    font-weight: 600;
    font-size: .9rem;
}

table tbody tr {
    border-bottom: 1px solid #dee2e8;
}

.client {
    display: flex;
    align-items: center;
}

.client-img {
    margin-right: .5rem;
    border: 2px solid #b0b0b0;
    height: 45px;
    width: 45px;
}

.client-info h4 {
    color: #555;
    font-size: .95rem;
}

.client-info small {
    color: #777;
}

.actions span {
    display: inline-block;
    font-size: 1.5rem;
    margin-right: .5rem;
}

.paid {
    display: inline-block;
    text-align: center;
    font-weight: 600;
    color: var(--main-color);
    background: #e5f8ed;
    padding: .5rem 1rem;
    border-radius: 20px;
    font-size: .8rem;
}

@media only screen and (max-width: 1200px) {
    .analytics {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media only screen and (max-width: 768px) {
    .analytics {
        grid-template-columns: 100%;
    }
    
    .sidebar {
        left: -165px;
        z-index: 90;
    }
    
    header {
        left: 0;
        width: 100%;
    }
    
    .main-content {
        margin-left: 0;
        width: 100%;
    }
    
    #menu-toggle:checked ~ .sidebar {
        left: 0;
    }
    
    #menu-toggle:checked ~ .sidebar {
        width: 165px;
    }

    #menu-toggle:checked ~ .sidebar .side-header span {
        display: inline-block;
    }

    #menu-toggle:checked ~ .sidebar .profile,
    #menu-toggle:checked ~ .sidebar .side-menu a small {
        display: block;
    }

    #menu-toggle:checked ~ .sidebar .side-menu a span {
        font-size: 1.7rem;
    }
    
    #menu-toggle:checked ~ .main-content header {
        left: 0px;
    }
    
    table {
        width: 900px;
    }
}










    </style>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>P<span>rimewaretrades</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <h4>User</h4>
                <small>{{ Auth::user()->name }}</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="/home" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="/deposit">
                            <span class="las la-user-alt"></span>
                            <small>Deposit</small>
                        </a>
                    </li>
                    <li>
                       <a href="/view_deposit">
                            <span class="las la-envelope"></span>
                            <small>Deposit Details</small>
                        </a>
                    </li>
                    <li>
                       <a href="/withdraw">
                            <span class="las la-clipboard-list"></span>
                            <small>Withdraw</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-shopping-cart"></span>
                            <small>View Withdrawals</small>
                        </a>
                    </li>
                    @if(Auth::user()->access == "admin")
                    <li><a style="color:red;font-weight:bolder; margin-left:1rem;" class="dropdown-item" href="/admin">Admin</a></li>
                    @endif
                                  <li
                    <li>
                       <a href="/earn">
                            <span class="las la-tasks"></span>
                            <small>Earnings</small>
                        </a>
                    </li>
                    <li>
                        <a href="/ref">
                             <span class="las la-tasks"></span>
                             <small>Refferals</small>
                         </a>
                     </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>
                    
                    
                    
                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">55</span>
                    </div>
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>

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
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Confirm Deposits</h1>
                <small>Deposits / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            @if($user)
                            <h2>{{$user->reffered_by}}</h2>
                            @else
                            <h2>none</h2>
                            @endif
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>Name Of refferal</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                             @if($deposit1)
                            <h2>${{$deposit1}}</h2>
                            @else
                            <h2>$0</h2>
                            @endif
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Active Deposits</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            @if($deposit11)
                            <h2>${{$deposit11}}</h2>
                            @else
                            <h2>$0</h2>
                            @endif
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Inactive Deposits</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            @if($earn)
                            <h2>${{$earn}}</h2>
                            @else
                            <h2>$0</h2>
                            @endif
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>Profit (withdrawable)</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>


                <div style="margin-right:1rem; ">                                                 
                                               
                    <!-- Add a data-address attribute to the button, and set it to the address you want to copy -->
<button id="copy-button" style="background-color: #0072C6; padding: 8px 16px;color: white;border: none;border-radius: 4px; cursor: pointer;transition: background-color 0.3s ease;" data-address="bc1qu80lfkeunf99lwn5epdplu3tk060s55cv3pekk">copy btc address</button>

<!-- Include the ClipboardJS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
// Initialize ClipboardJS on the copy button
new ClipboardJS('#copy-button', {
text: function() {
return document.getElementById('copy-button').getAttribute('data-address');
}
});

// Add an event listener to show a success message when the copy operation is complete
document.getElementById('copy-button').addEventListener('click', function() {
alert('btc address copied!');
});
</script>













               <!-- Add a data-address attribute to the button, and set it to the address you want to copy -->
               <button id="copy-button1" style="background-color: #0072C6; padding: 8px 16px;color: white;border: none;border-radius: 4px; cursor: pointer;transition: background-color 0.3s ease;" data-address="0xF5528ae8D0F1988a9Ea171505F94b37E94308dd4">copy eth address</button>

               <!-- Include the ClipboardJS library -->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
               
               <script>
               // Initialize ClipboardJS on the copy button
               new ClipboardJS('#copy-button1', {
               text: function() {
               return document.getElementById('copy-button').getAttribute('data-address');
               }
               });
               
               // Add an event listener to show a success message when the copy operation is complete
               document.getElementById('copy-button1').addEventListener('click', function() {
               alert('eth address copied!');
               });
               </script>




               <!-- Add a data-address attribute to the button, and set it to the address you want to copy -->
               <button id="copy-button2" style="background-color: #0072C6; padding: 8px 16px;color: white;border: none;border-radius: 4px; cursor: pointer;transition: background-color 0.3s ease;" data-address="0xF5528ae8D0F1988a9Ea171505F94b37E94308dd4">copy usdt address</button>

               <!-- Include the ClipboardJS library -->
               <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
               
               <script>
               // Initialize ClipboardJS on the copy button
               new ClipboardJS('#copy-button2', {
               text: function() {
               return document.getElementById('copy-button2').getAttribute('data-address');
               }
               });
               
               // Add an event listener to show a success message when the copy operation is complete
               document.getElementById('copy-button2').addEventListener('click', function() {
               alert('usdt address copied!');
               });
               </script>

</div> 



                </div>
            
            </div>
            









            <style>
                /* Form styling */
                form {
                    max-width: 500px;
                    margin: 0 auto;
                }
            
                label {
                    display: block;
                    font-weight: bold;
                    color: black;
                    margin-bottom: 10px;
                }
            
                input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    font-size: 16px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    margin-bottom: 20px;
                }
            
                button[type="submit"] {
                    background-color: #007bff;
                    color: #fff;
                    font-size: 16px;
                    border: none;
                    border-radius: 4px;
                    padding: 12px 20px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }
            
                button[type="submit"]:hover {
                    background-color: #0069d9;
                }
            </style>
            
            <!-- HTML form code with Blade syntax -->
            <form action="/proof" id="submitForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <input type="hidden" name="csrf_test_name" value="{{ csrf_token() }}" />
                @csrf
                <div class="form-group">
                    <label for="accountId">Enter transaction id you've sent the deposit from</label>
                    <input type="text" required class="form-control" id="accountId" name="trx_id">
                </div>
                <div class="form-group mb-0 mt-5">
                    <button type="submit" class="btn btn-primary text-uppercase w-100 mt-2">Confirm Deposit and Proceed</button>
                </div>
            </form>
            
               




        </main>
        
    </div>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64418e7c31ebfa0fe7f98391/1gug196ep';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>