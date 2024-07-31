<html>

<body>
<link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><img src="sa grey copy.png" alt="sa grey" width="272px">
        <a href="admin Options.php"><h2>
    Admin
    </h2></a></h1>

       <script src="jsFunctionIndex.js"></script>


<form  method="post">
    <label for="Name">New Service Name</label>
    <label for="Service Description"></label><br>
    <input type="text" name="Service Name" id="servName">
    <input type="text" name="Description" id="Description"><br>
    <label for="Service type">Service Type</label><br>
    <input type="text" name="Service Type" id="Service Type"><br>
    <label for="Price">Price</label><br>
    <input type="text" name="Price" id="Price"><br>
    <input type="submit" value="Remove" name="submit">
</form>
<?php

if(isset($_POST["submit"])){
$sqlRemoveService="DELETE FROM  services WHERE ('Service Name=".$_POST["Service Name"]
."','Service Type=".$_POST["Service Type"]."',Price ='".$_POST["Price"]."', Description='".$_POST["Description"]."',)";

if($conn->query($sqlRemoveService)==TRUE){
    $conn->execute_query($sqlRemoveService);
    echo 'Service removed';
    echo '<script type="text/javascript">
    home();
</script>';}
else{
    echo $conn->error;
}}
?>

</body>
</html>