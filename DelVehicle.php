<?php    
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'vts');
    $vno=$_POST['vno'];
    if(mysqli_query($con,"DELETE FROM vehicle WHERE vehicle_no='$vno'"))
    	echo "Deleted Succesfully";
    else
	echo "Unable to Delete";
    mysqli_close($con);
    echo "<br><a href='welcome.html'>Go to home</a>";
?>  