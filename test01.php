<?php
  	echo"<table width=300>";
  	echo"<tr bgcolor=#cccccc><td>i</td><td>i**2</td><td>i**3</td></tr>";
	for($i=1; $i<=9; $i++) { //數字1~9 
	   /* if($i%2)
	    	echo"<tr bgcolor=#E60000>";
	    
	    else
	    	echo"<tr bgcolor=#FFA500>"; */
	  
	    
		echo "<td>$i</td><td>". $i**2 .
		     "</td><td>".$i**3 .
		     "</td>";
		echo "</tr>";
	}
	echo"</table>"
?>
