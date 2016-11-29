<?php 
	/************FRIDAY SCHEDULE************/
	echo "<link rel='stylesheet' type='text/css' href='../AppleFestWebsite/styles/styles.css' />";

	function get_FridayData() { 
        $file = fopen(__DIR__."/../data/EventsScheduleFriday.csv","r") or die("Unable to connect to open file");
        $time = [];
        $events = [];
        $location = [];
		while(!feof($file)) { 
			$content = fgetcsv($file); 
	        array_push($time, $content[0]);
	       	array_push($events, $content[1]);
	       	array_push($location, $content[2]);
		}
		fclose($file); //closes csv file
	    return array($time, $events, $location); //return an array (i.e. element 0 references $time array, element 1 references $events array, etc)
	}

	function display_FridayTable($time, $events, $location) {
		echo "<table class='tg'>";
		for($i = 0; $i < count($time); $i++) {
			echo "<tr>\n";
			if ($i == 0){ //create table header cell
				echo "<th>" . $time[$i];
				echo "</th>\n";
				echo "<th>" . $events[$i];
				echo "</th>\n";
			}
			else {
				echo "<td class='cell-time'>".$time[$i];
				echo "</td>\n";
				echo "<td class='cell-descript'>".$events[$i];
				echo "<br class = 'space'>";
				echo "<div class = 'table_description'>";
				echo "Location: ".$location[$i];
				echo "</div></td>\n";
			}
			echo "</tr>\n";
	    }
      	echo "\n</table>"; 
	}

	list($time, $events, $location) = get_FridayData(); //each element of array is assigned to variable of list
	display_FridayTable($time, $events, $location);
	

?>