<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
			
		<h2>

			<?php
					$books= ['b1','b2','b3','b4'];
					foreach ($books as $book) {
						echo 'Hello';
						
					}
			?>


			<ul>
				<?php foreach ($books as $book): ?>
					<li>
						<?= 'test'?>
					</li>
				<?php endforeach ;?>
			</ul>


		</h2>
		<div>
			<?php
				$fruits = ['Apple' ,'Banana' , 'Cherry']; //or  array('Apple' ,'Banana' , 'Cherry');

				var_dump($fruits); // ['Apple' ,'Banana' , 'Cherry'];

				echo $fruits[0] ; //Apple

				$fruits[0] = "Orange"; // ['Orange' ,'Banana' , 'Cherry'];

				$fruits[]="Avocados";  // ['Orange' ,'Banana' , 'Cherry' , 'Avocados'];
				$fruits[]=["mangoes" , "lemons" ];  // ['Orange' ,'Banana' , 'Cherry' , 'Avocados', ["mangoes" , "lemons" ] ];

				echo $fruits[4][0]; //mangoes

				array_push($fruits, "Kiwi", "peaches");   // ['Orange' ,'Banana' , 'Cherry' , 'Avocados', ["mangoes" , "lemons" ] , "Kiwi", "peaches" ];

				// the index (where to start) and how many items you want to delete.
				array_splice($fruits, 1, 1); // ['Banana' , 'Cherry' , 'Avocados', ["mangoes" , "lemons" ] , "Kiwi", "peaches" ];

				sort($fruits)  ;// sort arrays in ascending order
				rsort($fruits) ;  //sort arrays in descending order

			?>

			<?php 
					$person = [ "name" => "John",
								"age" => 30,
								"city" => "New York" 
							]; // array( "name" => "John",  "age" => 30,  "city" => "New York" );

					var_dump($person ); // [ "name" => "John",  "age" => 30,  "city" => "New York" ]

					echo $person["name"] ;  //John

					foreach($person  as $key => $value){
						echo $key .":". $value . "<br>";
					}			
			?>
			
		</div>
</body>
</html>