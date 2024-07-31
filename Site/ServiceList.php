<!DOCTYPE html>
<html>
    <head><title>List of Services</title>
    
    <style>
        TypeSelect {display: inline-block;
            width:auto;
             height: auto;
             
font-family: CenturyGothic;
       }

    ServiceName{display: inline-block;
             width: auto;
             height: auto;
        
font-family: CenturyGothic;
margin-left: auto;}
    

    descriptionOfService{
                        display: inline-block;
                        
font-family: CenturyGothic;
                        margin-left: 75%;;
                    }
    </style>
    </head>
<body>
<link rel="stylesheet" type="text/css" href="LogonName.CSS">
        <h1><a onclick="home()"><img src="sa grey copy.png" alt="sa grey" width="272px" ></a>
        <h2>
            <input type="button" value="Home" onclick="home()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="About" onclick="about()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Services" onclick="services()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Clients" onclick="client()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Contact Details" onclick="ContactDetail()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Payment" onclick="payment()" style="font-size: 30pt; background: none; border:none; padding: none;">
            <input type="button" value="Account" onclick="account()" style="font-size: 30pt; background: none; border:none; padding: none;">
        </h2></h1>

       <script src="jsFunctionIndex.js"></script>

    <?php
    include 'index.php';
    
        $sqlServe="SELECT typeOfServ from `serviceTypes` ORDER BY typeOfServ;";
    $servicesTypeList=$conn->execute_query($sqlServe);
        
    $sqlServeNameGet="SELECT * from `service`;";
        $servicesList=$conn->execute_query($sqlServeNameGet);
        
    
    $serviceTypeArr=array();
    $serviceNameArr=array();
    $Description="";
    $Price="";

    if ($servicesTypeList->num_rows>0){

      while($row=$servicesTypeList->fetch_assoc()){

        array_push($serviceTypeArr,$row["typeOfServ"]);
      }
      echo '<typeSelect>';
      foreach($serviceTypeArr as $Servtype){


      $formstyle='<form method="post"><input type="submit" style="font-size: 30pt; background: none; border:none; padding: none;"';

   echo $formstyle." name=ServiceType value=".$Servtype."></form><br>";
   
      }
      echo'</typeSelect>';          
    }


    //same but for services
    if(isset($_POST["ServiceType"]))
    {
      
    if ($servicesList->num_rows>0){        

      while($row=$servicesList->fetch_assoc()){ 

        if($row["serviceType"]==$_POST["ServiceType"]){
        array_push($serviceNameArr,$row["serviceName"]);

      }
    }
      echo '<ServiceName style="margin-left:25%"; display:inline>';
      foreach($serviceNameArr as $ServName){

   echo'<form method="post"><input type="submit" style="font-size: 30pt; background: none; border:none; padding: none;" name=Services value='.$ServName.'></form> <br> ';
   
      }
      echo '</ServiceName>';     
    }
    
  }
    //descriptions
    if(isset($_POST["Services"]))
    {
      $_SESSION["Service"]=$_POST["Services"];
    if ($servicesList->num_rows>0){        

      while($row=$servicesList->fetch_assoc()){   

        if ($row["serviceName"]==$_POST["Services"])
        {
          
        $Description=$row["ServDescription"];
        $Price=$row["Price"];
      }
           }
           echo '<descriptionOfService style="margin-left:50%">';
        echo  $Description."<br>R".$Price;
        
        echo '</descriptionOfService>';
            
         }
        
        }
 if (isset($_SESSION["ID"])){
 echo' <input type="submit" value="Proceed" onclick="payment()" style="right: 75%;">';
 }
    ?>

     
</body>
    </html>