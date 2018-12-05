<?php 
	require("getdata.php");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>List University</title>
 	<link rel="stylesheet" href="">
 	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-gJWVjz180MvwCrGGkC4xE5FjhWkTxHIR/+GgT8j2B3KKMgh6waEjPgzzh7lL7JZT" crossorigin="anonymous">  
 </head>
 <body>
 	<table class="table table-hover">
 		<h3>List University In Ha Noi</h3>
 		<thead>
 			<tr>
 				<td>ID</td>
 				<td>Name</td>
 				<td>Address</td>
 				<td>Lat</td>
 				<td>Lng</td>
 			</tr>
 		</thead>
 		<tbody>
 			<?php while ($row = $q->fetch()): ?>
        	<tr>
        		<td><?= $row['id']?></td>
        		<td><?= $row['name']?></td>
        		<td><?= $row['address']?></td>
        		<td><?= $row['lat']?></td>
        		<td><?= $row['lng']?></td>
        	</tr>
                            
      		<?php endwhile; ?>
 		</tbody>
 	</table>
 </body>
 </html>