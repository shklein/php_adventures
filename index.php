<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>

    <?php
    //Do-While loop
    $roll = 0;
    do {
      $roll = rand(1, 6);
          echo $roll;
      }
      while ($roll != 6);

      echo "It's a six!";
    //Functions!
    <?php
	$loves = array("Andrew", "Lyra", "Hannes", "Ben", "Jennifer", "Adrienne", "Antonia", "Matt", "Kat");
	array_push($loves, "Sarah");
  array_push($loves, "Oscar");

sort($loves);

$num = rand(0, count($loves));

print strtoupper($loves[$num]);



	?>

    ?>
    </body>
</html>
