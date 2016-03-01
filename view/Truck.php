<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta charset="utf-8" />
<!--    <title>Registration form Template | PrepBootstrap</title>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!--<link rel="icon" href="../../favicon.ico">-->


    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
    session_start();
    if(!isset($_SESSION['views'])) {
      echo "<script type='text/javascript'>alert('Please Log in'); location.href = '../view/login.php'</script>";
    }
    ?>

    <div class="container">

      <!-- Static navbar -->
            <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Agarwal Store</a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bills <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./bill.php">Add Bill</a></li>
                  <li><a href="./allbills.php">View Bills</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mills <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./mill.php">Add Mill</a></li>
                  <li><a href="./view_mills.php">View Mills</a></li>
                  <li><a href="./Mill_order.php">Mill Order</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employees <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./employee.php">Add Employee</a></li>
                  <li><a href="./view_employee.php">View Employees</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Retailers <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./retailer.php">Add Retailer</a></li>
                  <li><a href="./view_retailer.php">View Retailers</a></li>
                  <li><a href="./retail_order.php">Retail Order</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Audit <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./Audit_sheet.php">Add Audit Sheet</a></li>
                  <li><a href="./view_audit_sheet.php">View Audit Sheet</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Udhaar <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./credit.php">Add Udhaar  </a></li>
                  <li><a href="view_udhaar.php">View Udhaar</a></li>
                </ul>
                </li>
              <li><a href="./Truck.php">Truck Info</a></li>
              <li><a href="./current_stock.php">Current Stock</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style='padding-top:7px;'>
              <li>
                  <form role="form" action='../controller/logout.php' method='post'>
                    <button type='submit' class="btn btn-info pull-left">Logout</button>
                  </form>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <!-- Main component for a primary marketing message or call to action -->
     <!-- <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>-->

    </div> <!-- /container -->


    <div class="container">

        <div class="page-header">
            <h1>View Trucks </h1>
        </div>

        <!-- Registration form - START -->
        <div class="container">
            <div class="row">

              <table class = 'table'>
                <thead>
                  <tr>
                    <th><b>Truck Number</b></th>
                    <th><b>Id of Driver</b></th>
                    <th><b>Name of Driver</b></th>
                    <th><b>Current Whereabouts</b></th>
                    <td></td>
                  </tr>
                  <tr></tr>
                </thead>
                <?php
                  require_once("../controller/view_truck.php"); 
                ?>
              </table>
          <div class='col-md-5'></div>
          <div class='col-md-5'></div>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="starter-template">

        <div class='col-md-4'></div>
        <div id='form' style='display:none;'>
          <form id='details' class="col-md-4 form-signin" role="form" action='../controller/edit_truck.php' method='post'>
            <h2 class="form-signin-heading">Enter New Details</h2>
            <input class="form-control" id='number' name='number' type='text' required readonly>
            <select type="text" class="form-control" id='driver' name="driver" placeholder="Driver">
            <?php
               require '../controller/config_sql.php';
               $sql = mysql_query("SELECT * FROM Employee");
               while($row = mysql_fetch_array($sql)) {
               if($row['Department'] == 'Truck Driver')
               $str = "<option value=".$row['Id'].">".$row['Name']." - ".$row['Id']."</option>";
               echo $str;
              }
            ?>  
            <input class="form-control" name='current' placeholder='Current Whereabouts' required autofocus="" type='text'>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
      function display(id){
        document.getElementById('form').style.display = "";
        document.getElementById('number').value = id;
      }

</script>

  </body>
</html>