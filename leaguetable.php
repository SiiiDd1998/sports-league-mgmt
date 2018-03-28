<?php 
session_start();
$_SESSION['onpage'] = 'leaguetable';

$mysqli=mysqli_connect("localhost","root","","ipldb");

$sql=array();	

for($i=1;$i<9;$i++){
	$sql[$i]="select * from leaguetable where id = $i ";
}

$result=array();

for($i=1;$i<9;$i++){
	$result[$i]=mysqli_query($mysqli,$sql[$i]);
}

$values=array();

for($i=1;$i<9;$i++){
	$values[$i]=mysqli_fetch_array($result[$i],MYSQLI_NUM);
}

?>

<!DOCTYPE html>

<html>

<head>
	<meta name=viewport content="width=device-width, initial-scale=1"> 

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/mynavigation.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/leaguetable.css">

	<title>IPL</title>
</head>

<body>

	<!-- always include two </div> elements before </body> -->
	<?php include 'mynavigation.php';?>

		    <div class="col-md-10 main">

				<div class="table-responsive">

					<table class="table table-bordered table-striped table-hover table-container">

						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>MatchesPlayed</th>
							<th>Wins</th>
							<th>Losses</th>
							<th>Draws</th>
							<th>Points</th>
						</tr>

						<tr >
							<td>1</td>
							<td><img src="css/images/mi.png" class="miimage"><span class="tab"><?= $values[1][1]?></span></img></td>
							<td><?= $values[1][2] ?></td>
							<td><?= $values[1][3] ?></td>
							<td><?= $values[1][4] ?></td>
							<td><?= $values[1][5] ?></td>
							<td><?= $values[1][6] ?></td>
						</tr>

						<tr >
							<td>2</td>
							<td><img src="css/images/csk.png" class="miimage"><span class="tab"><?= $values[2][1] ?></span></img></td>
							<td><?= $values[2][2] ?></td>
							<td><?= $values[2][3] ?></td>
							<td><?= $values[2][4] ?></td>
							<td><?= $values[2][5] ?></td>
							<td><?= $values[2][6] ?></td>
						</tr>

						<tr >
							<td>3</td>
							<td><img src="css/images/rcb.png" class="miimage"><span class="tab"><?= $values[3][1] ?></span></img></td><
							<td><?= $values[3][2] ?></td>
							<td><?= $values[3][3] ?></td>
							<td><?= $values[3][4] ?></td>
							<td><?= $values[3][5] ?></td>
							<td><?= $values[3][6] ?></td>
						</tr>

						<tr >
							<td>4</td>
							<td><img src="css/images/srh.png" class="miimage"><span class="tab"><?= $values[4][1] ?></span></img></td>
							<td><?= $values[4][2] ?></td>
							<td><?= $values[4][3] ?></td>
							<td><?= $values[4][4] ?></td>
							<td><?= $values[4][5] ?></td>
							<td><?= $values[4][6] ?></td>
						</tr>

						<tr >
							<td>5</td>
							<td><img src="css/images/dd.png" class="miimage"><span class="tab"><?= $values[5][1] ?></span></img></td>
							<td><?= $values[5][2] ?></td>
							<td><?= $values[5][3] ?></td>
							<td><?= $values[5][4] ?></td>
							<td><?= $values[5][5] ?></td>
							<td><?= $values[5][6] ?></td>
						</tr>

						<tr >
							<td>6</td>
							<td><img src="css/images/kkr.png" class="miimage"><span class="tab"><?= $values[6][1] ?></span></img></td>
							<td><?= $values[6][2] ?></td>
							<td><?= $values[6][3] ?></td>
							<td><?= $values[6][4] ?></td>
							<td><?= $values[6][5] ?></td>
							<td><?= $values[6][6] ?></td>
						</tr>

						<tr >
							<td>7</td>
							<td><img src="css/images/kxip.png" class="miimage"><span class="tab"><?= $values[7][1] ?></span></img></td>
							<td><?= $values[7][2] ?></td>
							<td><?= $values[7][3] ?></td>
							<td><?= $values[7][4] ?></td>
							<td><?= $values[7][5] ?></td>
							<td><?= $values[7][6] ?></td>
						</tr>

						<tr >
							<td>8</td>
							<td><img src="css/images/rr.png" class="miimage"><span class="tab"><?= $values[8][1] ?></span></img></td>
							<td><?= $values[8][2] ?></td>
							<td><?= $values[8][3] ?></td>
							<td><?= $values[8][4] ?></td>
							<td><?= $values[8][5] ?></td>
							<td><?= $values[8][6] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>


</body>

</html>