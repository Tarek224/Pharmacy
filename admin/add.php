<?php 
include "../Config/database.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $avli=$_POST['avli'];
    $imagename=$_FILES["image"]["name"]; 
    $insert="insert into medcine(name,image ,avli, price) values 
    ('$name','$imagename','$avli','$price') ";
    if($pdo->exec($insert)){
        echo "Medcine is added";
    }else
    {
     echo "Medcine can't added";   
    }
    

}
?>
<DOCTYPE HTML>
    <html>
        <head>
            <title>CINEMA BEEOR</title>
            <link rel="stylesheet" type="text/css" href="CSS/add.css">
        </head>
        <body>
            <form action="add.php" method="post" enctype="multipart/form-data">
                <table>    
                    <div><tr><th><label for="name">Medcine Name</label></th>
                    <th><input type="text" name="name" required></th></tr></div>
                <div><tr><th><label for="avli">Avaliable Number</label></th>
                   <th> <input type="text" name="avli" required></th></tr></div>
                <div><tr><th><label for="image">Medcine Image</label></th>
                   <th> <input type="file" name="image" required></th></tr></div>
                <div><tr><th><label for="price">Medcine Price</label></th>
                   <th> <input type="text" name="price" required></th></tr></div>
                </table>
                <button type="submit" name="submit">ADD</button>
            </form>
        </body>
    </html>
</DOCTYPE>