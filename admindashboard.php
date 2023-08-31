

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="admin.css">





  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>
<body>

	<header  class="header">

			<a  href="">Admin dashboard</a>
		
          <div class="logout">
			<a href="logout.php" class="btn btn-primary">Logout</a>
		</div>
	</header>




	<aside>
			
         <ul>
         	
        <li>
        	
           <a href="">Admissions</a>
      
        </li>

          <li> 
        	
           <a href="">Add Student</a>
      
        </li>

          <li>
        	
           <a href="">View Student</a>
      
        </li>

          <li> 
        	
           <a href="">Add Teacher</a>
      
        </li>

         <li> 
        	
           <a href="">View Teacher</a>
      
        </li>
        <li> 
        	
           <a href="">Add courses</a>
      
        </li>


         <li> 
        	
           <a href="">View courses</a>
      
        </li>


         </ul>

		</aside>

		<div class="textcontent">

         <h1>Sidebar Accordion</h1>
         <p>In this example, we have added an accordion and a drop down menu inside the side navigatiom.</p>
           <p>Click on both to understand how they differ from each other.</p>
           <p>The accordion will push down the content while the drop down lays over the content</p>
		</div>

</body>
</html>


<style>

*
{

	margin: 0px;
	padding: 0px;
}



.header{

background-color: deepskyblue;
line-height: 70px;
padding-left: 30px;

}

a, a:hover{
	text-decoration: none !important ;

}




.logout{


	float: right;
	padding-right: 30px;

}

ul
{

	background-color: #424a5b;

	width: 16%;
	height: 100%;
	position: fixed ;
	padding-top: 5%;
	text-align: center;
}

ul li

{

list-style: none;
padding-bottom: 30px;
font-size: 15px;

}

ul li a

{

	color: white;
	font-weight: bold;
}


ul li a:hover

{

	color: skyblue;
	text-decoration: none;
}

.textcontent

{

margin-left: 20%;
margin-top: 5%;

}

p{


	font-size: 20px;
	font-family: Times New Roman;
}

</style>