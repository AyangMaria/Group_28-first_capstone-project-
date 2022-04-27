<?php
$result_str = $result = '';
if (isset($_POST['unit-sub'])) { //isset basically checks if the value has been declared so this line of code checks if any inputs have any input has been given
    $units = $_POST['units']; //then you assign a post variable to the name of the input then you assign this to a variable in this case units
    if (!empty($units)) { //so i ran a condition if it's not empty i.e if it is given please kindly proceed
        $result = calculate($units); //then i created a new variable result and i ran it inside this function calculate 
        $result_str = $units . ' units '.' - ' . 'N'.$result; // created another variable to actually output a string like result y'know lol small ux
    }
}



    function calculate($units) {
     $firstcost = 3.50; //for the first 50 units
     $secondcost = 4.00; //for the next 100 units
     $thirdcost = 5.20; //for the next 100
     $fourthcost = 6.50; // for units above 250
     if($units <= 50) {
        $bill = $units * $firstcost;
        
 }
 else if($units > 50 && $units <= 100 ) {
    $counter = 50 * $firstcost;
    $remainingUnits = $units - 50;
    $bill = $counter + ($remainingUnits * $secondcost);
    
 }
 else if($units > 100 && $units <=200) {
     $counter = (50 * 3.5) + (100 * $secondcost);
     $remainingUnits = $units - 150;
     $bill = $counter + ($remainingUnits * $thirdcost);
 }
 else {
     $counter = (50 *3.5) + (100 * $secondcost) + (100 * $thirdcost);
     $remainingUnits = $units - 250;
     $bill = $counter + ($remainingUnits * $fourthcost);
 }
 return $bill;





}
?>


<!DOCTYPE html>
<html>
<head>
    <style>

        </style>
</head>
<body>
    <h1>Electric Bill Calculator</h1>
    <form action="" method="post">
        <label> Please input units </label>
    <input type="text" name="units">
    <button type="submit" name="unit-sub" >SUBMIT</button>
    <div>
   <?php echo $result_str; ?>
    </div>
    </form>
</body>


</html>
