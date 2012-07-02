<?php
	//Edit record
	if(isset($_GET['editing'])) {
		$editingID = $_GET['editing'];
	}
	
	//Delete record
	if(isset($_GET['delete'])) {
		//mysql_query("DELETE FROM competitors WHERE id = '".$_GET['delete']."'");
	}

	//Echo functions
	function echoOptions($id) {
		echo "<td><a href='?editing=$id'>Edit</a>&nbsp<a href='?delete=$id'>Delete</a></td>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Olympics DB Frontend</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<header>
			<h1>Olympics DB Frontend</h1>
		</header>
		<article>
			<section id="modify">
				<h2>Modify</h2>
				
				<?php if(isset($editingID)) { ?>
					<em>Editing record <?php echo $editingID; ?></em>
				<?php } else { ?>
					<em>Adding new record</em>
				<?php } ?>
				
				<form>
					<p>
						<label for="forename">Forename</label>
						<input id="forename" name="forename" type="text" />
					</p>
					<p>
						<label for="surname">Surname</label>
						<input id="surname" name="surname" type="text" />
					</p>
					<p>
						<label for="gender">Gender</label>
						<select id="gender" name="gender">  
							<option value="m" selected>Male</option>
							<option value="f">Female</option>
						</select>  
					</p>
				</form>
			</section>
			
			<section id="browse">
				<h2>Browse</h2>
				<table cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>Forename</th>
							<th>Surname</th>
							<th>Gender</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jane</td>
							<td>Smith</td>
							<td>Female</td>
							<?php echoOptions(1); ?>
						</tr>
						<tr>
							<td>John</td>
							<td>Smith</td>
							<td>Male</td>
							<?php echoOptions(2); ?>
						</tr>
					</tbody>
				</table>
			</section>
		</article>
	</body>
</html>