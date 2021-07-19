<?php 
    include('koneksi2.php');
 
    $SQL = mysqli_query($conn, "SELECT * FROM VIP ORDER BY Ciri DESC");
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style2.css">
	<head>
		<title>Demo with jQuery</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project with jQuery">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
		<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
	</head>
	<body>
		<table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Negara</th>
                <th>Waktu</th>
                <th>Ciri</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Negara</th>
                <th>Waktu</th>
                <th>Ciri</th>
            </tr>
        </tfoot>
        <tbody>
            <?php while($data = mysqli_fetch_array($SQL)){ ?>
                <tr>
                    <td><?= $data['Nama'] ?></td>
                    <td><?= $data['Negara'] ?></td>
                    <td><?= $data['Waktu'] ?></td>
                    <td><?= $data['Ciri'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#example').DataTable();
			} );
		</script>

<center><button class="button-flat"><a href='dashboard1.php'>kembali</button></center> 
	</body>
</html>
