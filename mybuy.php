<?php 
?>
<DOCTYPE HTML>
    <html>
        <head>
            <title>Online Pharmacy</title>
            <link rel="stylesheet" type="text/css" href="CSS/payment.css">
        </head>                             
        <body>
            <?php
            include "Config/database.php";
            if(isset($_POST['submit'])){
            $sd=$_POST['id'];
          $name=$_POST['name'];
          $address=$_POST['add'];        
         $num=$_POST['ticket'];
        $stmt = $pdo->query("SELECT * FROM medcine WHERE medcine_id=$sd");
         while ($row = $stmt->fetch()) { 
         echo "<p> your name $name</p>";
         if($row[3]>$num){
             $newavli=$row[3]-$num;
             $price=$num*$row[4];
             $update= $pdo->query("UPDATE medcine SET avli='$newavli' WHERE medcine_id='$sd'");
             echo " <p> your medcine is : $row[1]" ."
             <p>Your address : $address</p>
             <p>price :$price</p>
             <p>It will arrive within one hour</p>" ;
             
         }
             else{
                 echo "<p> Sorry Only $row[3] avliable</p>";
             }
              
         }}
            ?>      
        </body>
    </html>
</DOCTYPE>