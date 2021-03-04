<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>staff info</title>
    <style type="text/css">
    	section{
    		min-height: 75rem;
    		padding-top: 4.5rem;
    	}
    	body{background-color:rgb(204, 204, 204);}
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
		</div>
</nav>
    <section>
        <div class="container">
		   <table class="table" id="mytable">
		  <thead>

		      <th scope="col">#</th>
		      <th scope="col">Id</th>
		      <th scope="col">Name</th>
		      <th scope="col">Age</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Phone_number</th>
		      <th scope="col">Emergency-number</th>
		    
		  </thead>
		  <tbody>
		    <tr>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		  </tbody>
		</table>
        </div>
    </section>
    <!--Jquery & Bootstrap Js-->
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <!--/Jquery & Bootstrap Js-->
    <script>
    	$('#mytable').DataTable();
    </script>
</body>
</html>