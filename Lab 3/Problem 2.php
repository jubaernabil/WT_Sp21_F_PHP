<?php
		$marks = 84 ;
        echo "Your marks: " . $marks . "<br/><br/>";

		if($marks>=90) 
		{
		 	echo "A+";
		}
		else if(($marks>=80) and ($marks<=90)) 
		{
		 	echo "A";
		}
		else if(($marks>=70) and ($marks<=80)) 
		{
		 	echo "B";
		}
		else if(($marks>=60) and ($marks<=70)) 
		{
		 	echo "C";
		}
		else 
		{
			echo "F";
		}

	?>