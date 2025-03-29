<!DOCTYPE html>
<html  lang="en">
    <head>
        <title>student </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="<link rel="preconnect href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Delius&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">">
        
    <style>
        body{
            background-color:whitesmoke ;
            font-family: "Delius", cursive;
        
        }
#mother{
    width:100%;
    font-size: 20px;
}
main{

    float:right; 
    border:1px solid gray;
    padding: 5px;
}
input{
    padding: 4px;
   border: 2px solid black ;
   text-align: center;
   font-size: 17px;
   font-family: "Delius", cursive;
}
aside{
    text-align: center;
   width: 300px;
   float: left;
   border: 1px solid black ;
   background-color:silver ;
   color:black;
}
#tab{
    width: 890px;
   font-size: 20px;
}
#tab th{
    background-color: silver;
    font-size :20px; ;
    padding: 10px;
}
aside button{
width:190px;
padding: 8px;
margin-top: 7px;
font-family: "Delius", cursive;
font-weight: bold;
}
    </style>
    </head>
     <body dir ="rtl">
<?php
#tatabase conect 
$host='localhost';
$user='root';
$db='student1';
$pass='';
$conn=mysqli_connect($host, $user,$pass,$db );
$res=mysqli_query($conn,"select *from student" );

#button 
$id='';
$name='';
$address='';
if(isset($_POST['id'])) $id=$_POST['id'];
if(isset($_POST['name'])) $name=$_POST['name'];
if(isset($_POST['address'])) $address=$_POST['address'];


#add


$sql='';
if(isset($_POST['add'])){
    $sql="insert into student (id, name, address) values( '$id','$name','$address')";
    mysqli_query($conn,$sql);
    header("location: php.php");
}

#del

if(isset($_POST['del'])){
    $sql="DELETE FROM student WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("location: php.php");
}

?>


     <div id='mother'>  
       <form method='POST'>
       <aside>
    <div id='div'>
    <img src=' https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTEyL3Jhd3BpeGVsX29mZmljZV8zNl9waG90b19vZl95b3VuZ19pbmRpYW5fZ2lybF9ob2xkaW5nX3N0dWRlbnRfYl81ZmVkNmMzMy01ZWU0LTRjY2MtYmNiZS1kZWVlOWQyNTBmMWYtbTRzODZ3b2gucG5n.png' alt="logo" width="200">
    <h2>manager</h2>
     <label>num</label><br>
    <input type="text" name="id" id="id" ><br>
    <label>name</label><br>
    <input type="text" name="name" id="name" ><br>
    <label>address</label><br>
    <input type="text" name="address" id="address" ><br>
    <button name="add">add</button>
    <button name="del">del</button>
</div>
</aside>

   <main>
<table id="tab">
<tr>
<th> num ttt</th>
<th> name</th>
<th> address</th>
</tr>
<?php
 while($row=mysqli_fetch_array($res)){
    echo"<tr>";
    echo"<td>" .$row['id']."</td>";
    echo"<td>" .$row['name']."</td>";
    echo"<td>" .$row['address']."</td>";
    echo"</tr>"; 
}


?>


</table>
    </main>
    </form>
    </div>
    </body>
</html>