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
    <link href="/base.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    <aside class="sidenav">
          <a class="menu" href="/dashboard">
                <img class="chart-menu" src="/dash.png" height="40" width="40">&#160 &#160 &#160 Dashboard
          </a>
          <button class="dropdown-btn">
                <img class="chart-menu" src="/order.png" height="40" width="40">&#160 &#160 &#160 Pesanan Laundry &#160
                <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
                <a href="#"><img class="chart-menu" src="/adds.png" height="40" width="40">&#160 &#160 Tambah Pesanan</a>
                <a href="#"><img class="chart-menu" src="/load.png" height="40" width="40">&#160 &#160 Status Pesanan</a>
                <a href="#"><img class="chart-menu" src="/done.png" height="40" width="40">&#160 &#160 Pesanan Selesai</a>
          </div>
          <button class="dropdown-btn">
                <img class="chart-menu" src="/packet.png" height="40" width="40">&#160 &#160 &#160 Paket Laundry &#160
                <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
                <a href="#">&#160 &#160 List Paket</a>
                <a href="#">&#160 &#160 Tambah Paket</a>
          </div>
          <a class="menu" href="/customer">
            <img class="chart-menu" src="/customer.png" height="40" width="40">&#160 &#160 &#160 Customer
          </a>
          <a class="menu" href="/">
            <img class="chart-menu" src="/logout.png" height="40" width="40">&#160 &#160 &#160 Logout
          </a>
    </aside>
    @yield('content')

</div>
</body>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</html>