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
    if(isset($_SESSION['views'])) 
    {
      if($_SESSION['type'] != 'Owner'){
        echo "<script type='text/javascript'>alert('You are not authorized to view this page.'); location.href = '../view/current_stock.php'</script>";
      }
    }
    else{
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
		    <h1>Mill Order</h1>
		</div>

		<!-- Registration form - START -->
		<div class="container">
		    <div class="row">
		        <form role="form" action = "../controller/mill_order.php" method='post'>
		            <div class="col-lg-6">
		                <!--<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
		                <div class="form-group">
		                    <div class="input-group">
		                    <select type="text" class="form-control" placeholder="Retailer Number" name="mill_number" required>
	                              <?php
	                                 require '../controller/config_sql.php';
	                                 $sql = mysql_query("SELECT * FROM Mills");
	                                 while($row = mysql_fetch_array($sql)) {
	                                 $str = "<option value=".$row['Id'].">".$row['Name']." - ".$row['Id']."</option>";
	                                 echo $str;
	                                }
	                              ?>  
                            	</select>
		                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="input-group">
		                        <input type="text" class="form-control"  placeholder="Date due" name="duedate" required>
		                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		                    </div>
		                </div>
		                <input type = "hidden" value = '1' id='number' name = 'number'>
		                <div id='items'>
                      <div class="form-group">
                          <div class="input-group">
                              <select type="text" class="form-control" id='id1' name="id1" placeholder="Item">
                              <?php
                                 require '../controller/config_sql.php';
                                 $sql = mysql_query("SELECT * FROM Current_Stock");
                                 while($row = mysql_fetch_array($sql)) {
                                 $str = "<option value=".$row['Id'].">".$row['Name']." - ".$row['Id']."</option>";
                                 echo $str;
                                }
                              ?>  
                            </select>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                              <input type="text" class="form-control" id='quantity1' name="quantity1" placeholder="Quantity" required>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                    </div>
		                <button id='add' class = "form-control" type='button'> Add more </button><br />
		    			<div class="form-group">
		                	<div class="input-group">
				                <select class='form-control' name="status" placeholder="Status" required>
				                	<option>Due</option>
									<option>Delivered</option>
				                </select>
			                  	<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

			                </div>
			            </div>
		                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-left">
		            </div>
		        </form>
		    </div>
		</div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
    <script>
    document.getElementById('add').addEventListener('click',addfield);
    var counter = 1;

    function addfield()
    {
      var ids = new Array(counter);
      var quantities  = new Array(counter);
      for (var i = 1; i <= counter; i++) {
        var id = 'id' + i;
        var quantity = 'quantity' + i;
        //console.log(id)
        ids[i] = document.getElementById(id).value;
        quantities[i] = document.getElementById(quantity).value;
      };
      counter++;
      document.getElementById('number').value = counter;
      var items = document.getElementById('items');
 var str = '<div class="form-group"> <div class="input-group"><select type="text" class="form-control" id="id'+counter+'" name="id'+counter+'" placeholder="Item"><?php require "../controller/config_sql.php"; $sql = mysql_query("SELECT * FROM Current_Stock");  while($row = mysql_fetch_array($sql)) { $str = "<option value=\"".$row["Id"]."\">".$row["Name"]." - ".$row["Id"]."</option>"; echo $str;}?> </select> <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>  </div></div> <div class="form-group"><div class="input-group"><input type="text" class="form-control" id="quantity'+counter+'" name="quantity'+counter+'" placeholder="Quantity" required><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></div></div>';

  //    var str = '<div class="form-group"><div class="input-group"><input type="text" class="form-control" id="id'+counter+'" name="id'+counter+'" placeholder="Item" required><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span></div></div><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="quantity'+counter+'" name="quantity'+counter+'" placeholder="Quantity" required><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span></div></div>';
  //    var str = '<input type="text" placeholder="Item Id" class = "form-control" name="id'+counter+'" id="id'+counter+'" required><br /> <input type="text" placeholder="Quantity" class = "form-control" name="quantity'+counter+'" id="quantity'+counter+'"required><br />';
      
      items.innerHTML += str;
      for (var i = 1; i <= counter-1; i++) {
        var id = 'id' + i;
        var quantity = 'quantity' + i;

        document.getElementById(id).value = ids[i];
        document.getElementById(quantity).value = quantities[i];
      };
    }
    </script>
  </body>
</html>
