<!DOCTYPE html>
<html>
    <body>

    <script src="jsFunctionIndex.js" type="text/JavaScript"></script>

        <?php
        if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();}

        $hostname='root';
        $password='Suckleduck1!';
        $server='localhost:3306';

        $conn = new mysqli($server,$hostname,$password,'esitedb');
        if($conn-> connect_error){
            die("Connection Failed: ". $conn->connect_error);
        }

        
if(!(class_exists('Users'))){
        class Users{
            public $ID;
            public $surname;
            public $name;
            public $dateOfBirth;

             public function construct($ID,$surname,$name,$dateOfBirth) {
                $this->$ID=$ID;
                $this->$name=$name;
                $this->$surname=$surname;
                $this->$dateOfBirth=$dateOfBirth;
            }
        }
    }
        
    if(!(class_exists('ServiceTypes'))){
        class ServiceTypes{
            public $typeName;

            public function construct($typeName) {
                $this->$typeName=$typeName;
            }

            function get_Type(){
                return $this->typeName;
            }            
        } }

        if((class_exists('Services'))==false){
        class Services{
            public $serviceName;
            public $ServiceTypes;
            public $price;
            public $description;

            public function construct($serviceName,$ServiceTypes,$price,$description) {
                $this->$serviceName=$serviceName;
                $this->$ServiceTypes=$ServiceTypes;
                $this->$price=$price;
                $this->$description=$description;
            }

            function get_Name(){return $this->serviceName;}

            function get_Type(){return $this->ServiceTypes;}
            
            function get_Price(){return $this->price;}
            
            function get_Description(){return $this->description;}
        } }
        
        
            class Booking{
                public $bookingID;
                public $bookingDate;
                public $username;
                public $Services;
    
                public function construct($bookingID,$bookingDate,$username,$Services) {
                    $this->$bookingID=$bookingID;
                    $this->$username=$username;
                    $this->$bookingDate=$bookingDate;
                    $this->$Services=$Services;
                }
            }
        

     
     
      
    
        ?>


    </body>
</html>