<?php 

if(isset($_POST['buy'])){
    $sd=$_POST['buy'];
} 
?>
<DOCTYPE HTML>
    <html>
        <head>
            <title>Online Pharmacy</title>
            <link rel="stylesheet" type="text/css" href="CSS/payment.css">
        </head>                             
        <body>
            <form action="mybuy.php" method="post" enctype="multipart/form-data">
                <table>    
                    <div><tr><th><label for="name">Name</label></th>
                    <th><input type="text" name="name" required></th></tr></div>
                <div><tr><th><label for="card">Card Number</label></th>
                   <th> <input type="text" name="card" required></th></tr></div>
                <div><tr><th><label for="add">Address</label></th>
                   <th> <input type="text" name="add" required></th></tr></div>
                <div><tr><th><label for="ticket">Number You Want</label></th>
                   <th> <input type="text" name="ticket" required></th></tr></div>
                </table>
                <input type="hidden" name="id" value="<?php echo $sd ; ?>">
                <button type="submit" name="submit">Submit</button>
            </form>
        </body>
    </html>
</DOCTYPE>