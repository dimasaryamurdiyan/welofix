<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #777;
            min-width: 160px;
            margin-left:250px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role ="navigation">
    		<div class="container-fluid head">
    			<div class="navbar-header">
    				<a class="navbar-brand logo font-italic" href="/dashboard">WELO</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <a href="/profile"><img src=""></a>
                </div>
    		</div>
</nav>

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            <li>
                <a class="menu" href="/base"><img class="chart-menu" src="/dash.png" height="50" width="50">&#160 &#160 &#160 Dashboard</a>
            </li>
            <li>
                <a class="menu dropbtn" onclick="drop()" href="#"><img class="chart-menu" src="/order.png" height="50" width="50">&#160 &#160 &#160 Pesanan Laundry &#160<i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content" id="dropdown-menu">
                        <a href="#">Tambah Pesanan</a>
                        <a href="#">Status Pesanaan</a>
                        <a href="#">Pesanan Selesai</a>
                    </div>
                    
            </li>
            <li>
                 <a class="menu" id="dropdown-menu"><img class="chart-menu" src="/order.png" height="50" width="50">&#160 &#160 &#160 Paket Laundry &#160<i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-container">
                        <a href="#">Tambah Paket</a>
                        <a href="#">Status Paket</a>
                    </div>
            </li>
            <li>
                <a class="menu" href="/customer"><img class="chart-menu" src="/customer.png" height="50" width="50">&#160 &#160 &#160 Customer</a>
            </li>
            <li>
                <a class="menu" href="/"><img class="chart-menu" src="/logout.png" height="50" width="50">&#160 &#160 &#160 Logout</a>
            </li>

        </ul>
    </aside>
</div>
</body>

<script>
function drop() {
    document.getElementById("dropdown-menu").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</html>