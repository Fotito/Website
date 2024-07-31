<html>
<head>Add Service</head>
<body>
<link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><img src="sa grey copy.png" alt="sa grey" width="272px">
        <a href="admin Options.php"><h2>
    Admin
    </h2></a></h1>
<script src="jsFunctionIndex.js"></script>
<br>
<form method="post">

<label for="Name" style="display: inline;">New Service Name</label>
<label style=" display: inline; right: 15%; position: absolute;" for="Service Description">Description (please keep it as short if you can)</label><br>
<input type="text" name="Service Name" id="servName" style="display: inline;">
<input type="text" name="Description" id="Description" style="display: inline;position: absolute; right: 15%;"><br>


<label for="Price">Price</label><br>

<input type="text" name="Price" id="Price" ><br>


<label for="Service type">Service Type</label><br>
<select name="ServiceType" id="ServiceType">

<?php

include 'index.php';

$servicesTypeList=$conn->execute_query('SELECT * from `servicetypes`;');


if ($servicesTypeList->num_rows>0){
    while($row=$servicesTypesList->fetch_assoc()){

       echo '<option value="'.$row["typeOfServ"].'" style="font-size: 32pt;">'.$row["typeOfServ"].'</option>';
    }
}
?>
</select> <br>

<input type="submit" name="submit" value="Add Service">

</form>

<?php


if(isset($_POST["submit"])){
    
    $sqlAddService="INSERT INTO `service` (`serviceName`, `serviceType`, `Price`, `ServDescription`) VALUES ('".$_POST['Service Name']."','".$_POST['Description']."','".$_POST['Service Type']."','".$_POST['Price']."')";

if($conn->query($sqlAddService)==TRUE){
    $conn->execute_query($sqlAddService);
    echo 'Service removed';
    
echo '<script type="text/javascript">
home();
</script>';
}
else{
    echo $conn->error;
}}

?>

</body>
</html>