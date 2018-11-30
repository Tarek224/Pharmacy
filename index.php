<DOCTYPE HTML><html>
    <head>
        <title>Online Pharmacy</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css">  
    </head>
    <body>
        <h1>Online Pharmacy</h1>
        <?php
include "Config/database.php";
$stmt = $pdo->query("SELECT * FROM medcine");
while ($row = $stmt->fetch()) { 
         echo "<div class='flowingdown'>"
           ."<div class='hvrbox'>"
          ."<img src='IMAGES/$row[2]' >" ;  ?>      
         <?php echo "<div class='hvrbox-layer_top'><div class='hvrbox-text'> "
            ."<p>$row[1]</p>".
              "<p>$row[3]</p>".
              "<p>$row[4]$</p>"
              ."<form action='payment.php' method='post'><button type='submit' name='buy' value='$row[0]'>Buy</button></form>"
         ."</div> </div>
            </div>
        </div>";} ?>

        </body>
    </html>
</DOCTYPE>