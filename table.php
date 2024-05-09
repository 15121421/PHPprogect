<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>name</td>
            <td>per</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        <tr>
            <?php
                $con = mysqli_connect("localhost", "root","" , "hh" );
                $cmd = "SELECT * FROM `tab` WHERE 1";
                $re = mysqli_query($con, $cmd);
                while ($row = mysqli_fetch_array($re)){
                    echo 
                    "<tr><td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["per"]."</td>
                    <td><a href='edit.php?eid=".$row["id"]."'>edit pr</a></td>
                    <td><a href='table.php?did=".$row["id"]."'>delete</a></td>
                    </tr>";
                }
                if (isset($_GET["did"])) {
                    $cmdd ="DELETE FROM `tab` WHERE id=".$_GET["did"];
                    if(mysqli_query($con, $cmdd)){
                        header("location: table.php");
 
                    }
                }
                
            ?>
        </tr>
    </table>
    <a href="t.php"> insert </a>
</body>
</html>