<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php
			$connect = mysqli_connect("MySQL-8.2", "root", "", "Blog");
			if ($connect==false) {
				echo "не подключен";
			} else {
				echo "подключен";
			}

			$text_query = 'SELECT * FROM posts';

			mysqli_query($connect, $text_query);

			$query = mysqli_query($connect, $text_query);
			if ($query==false) {
				echo "запрос не работает";
			} else {
				echo "запрос работает";
			}

			$result = $query->fetch_assoc();

			$result2 = $query->fetch_assoc();

			$result3 = $query->fetch_assoc();

			$result4 = $query->fetch_assoc();

			$result5 = $query->fetch_assoc();
		?>

	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>

		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<h1 class="bg-success">
				<?php 
					echo $result["title"];
				 ?>
			</h1>
			<p>
				<?php 
					echo $result["shortText"];
				 ?>
			</p>
			<img class="w-100" src="<?php echo $result["img"]; ?>">
			<p>
				<?php 
					echo $result["users"];
				 ?>
			</p>
		</div>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<h1 class="bg-success">
				<?php 
					echo $result2["title"];
				 ?>
			</h1>
			<p>
				<?php 
					echo $result2["shortText"];
				 ?>
			</p>
			<img class="w-100" src="<?php echo $result2["img"]; ?>">
			<p>
				<?php 
					echo $result2["users"];
				 ?>
			</p>
		</div>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<h1 class="bg-success">
				<?php 
					echo $result3["title"];
				 ?>
			</h1>
			<p>
				<?php 
					echo $result3["shortText"];
				 ?>
			</p>
			<img class="w-100" src="<?php echo $result3["img"]; ?>">
			<p>
				<?php 
					echo $result3["users"];
				 ?>
			</p>
		</div>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<h1 class="bg-success">
				<?php 
					echo $result4["title"];
				 ?>
			</h1>
			<p>
				<?php 
					echo $result4["shortText"];
				 ?>
			</p>
			<img class="w-100" src="<?php echo $result4["img"]; ?>">
			<p>
				<?php 
					echo $result4["users"];
				 ?>
			</p>
		</div>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<h1 class="bg-success">
				<?php 
					echo $result5["title"];
				 ?>
			</h1>
			<p>
				<?php 
					echo $result5["shortText"];
				 ?>
			</p>
			<img class="w-100" src="<?php echo $result5["img"]; ?>">
			<p>
				<?php 
					echo $result5["users"];
				 ?>
			</p>
		</div>
	</div>
	</div>
</body>
</html>