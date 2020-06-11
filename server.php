<?php
	$db = mysqli_connect('localhost', 'root', 'toor9812', 'dev');
	$sql = "select * from `Air_Quality_Data` where `Location` = '".$_POST['SelectedValue']."' ";
	$averageRating = "SELECT round(AVG(`Data-Rating`),0) as 'data-rating' FROM `Air_Quality_Data` where Location='".$_POST['SelectedValue']."'";
        $query = mysqli_query($db, $sql);	
        $averageQuery = mysqli_query($db, $averageRating);	
	
	echo "<div class ='rating'>";
	while ($rows = mysqli_fetch_array($averageQuery)) {
		//1=verygood 2=good 3=fair 4=poor 5=verypoor
		if($rows['data-rating'] == "1"){
			echo "<img src='res/good.png'/>";
			echo "<h1>This Location Is Safe!</h1>";
			echo "<p>Based on The Provided Station Information This Location Should Be Safe to Visit!</p>";
		}else if($rows['data-rating'] == "2"){
			echo "<img src='res/good.png'/>";
			echo "<h1>This Location Is Safe!</h1>";
			echo "<p>Based on The Provided Station Information This Location Should Be Safe to Visit!</p>";
		}else if($rows['data-rating'] == "3"){
			echo "<img src='res/fair.png'/>";
			echo "<h1>This Location May Be Unsafe!</h1>";
			echo "<p>Based on The Provided Station Information This Location May Not be Considered Safe to Visit For High Risk Individuals</p>";
		}else if($rows['data-rating'] == "4"){
			echo "<img src='res/warning.png'/>";
			echo "<h1>This Location Is Not Safe!</h1>";
			echo "<p>Based on The Provided Station Information This Location Should Be Avoided By High Risk Individuals</p>";
		}else if($rows['data-rating'] == "5"){
			echo "<img src='res/warning.png'/>";
			echo "<h1>This Location Should Be Avoided!</h1>";
			echo "<p>Based on The Provided Station Information It Is Highly Recommended That This Location is Avoided By At Risk Individuals</p>";
		}else{
			echo "No Data For This Selected Location! Try Again Later.";
		}
	}
	echo "</div>"; 

	echo '<table>';
	echo '<tr>';
	echo '<th>Location</th>';
	echo '<th>Pollutant</th>';
	echo '<th>Air Quality Index</th>';
	echo '<th>Rating</th>';

	while ($rows = mysqli_fetch_array($query)) {
		echo '<tr><td>'.$rows['Location'].'</td>';
		echo '<td>'.$rows['Pollutant'].'</td>';
		echo '<td>'.$rows['Air_Quality_Index'].'</td>';
		echo '<td>'.$rows['Rating'].'</td></tr>';
	}
	echo '</table>';
?>
