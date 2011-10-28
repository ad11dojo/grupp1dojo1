
<html>
<head>
	<title>AD11 koddojo</title>
	<meta charset="UTF8" />

</head>
<body>
<?php

	function right_answer($in)
	{
		return $in;
	};

	function answerX2 ($in1, $in2)
	{
		if( $in1 == $in2 )
		{
			echo "bra!<br/>";
		}
		else
		{
			echo "öva mer!<br/>";
		}

	};

	// Vi vill kolla att svaret på inputsträngen "**.\n…\n…" blir "**1\n221\n000" -- då är vi hemma


	$input = "**.|…|…";
	$correct_answer = "**1|221|000";

	// vi vill faktiskt skriva om input-strängen till en svarssträng, & se om svaret är detsamma som det rätta svaret

	
	$answer1 = right_answer( $correct_answer );
	$answer2 = right_answer( $input );
	

	// om strängarna är lika skriver vi ut "bra", annars "öva mer!"
	answerX2 ($answer1, $correct_answer);
	answerX2 ($answer2, $correct_answer);

	

?>
</body>
</html>