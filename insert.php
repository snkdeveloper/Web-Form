<?php
$server = "localhost";
$username="root";
$password="";
$dbname="supp";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['profession']) && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['contact']) && !empty($_POST['remarks'])){
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $contact = $_POST['contact'];
        $remarks = $_POST['remarks'];


        $query = "insert into supp(name,profession,city,country,contact,remarks) values('$name','$profession','$city','$country','$contact','$remarks')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "Form submitted successfully";
        }else{
            echo "Form not submitted";
        }


    }

else{
        echo "all fields required";
    }
}

?>

<br><button><a href = "show.php"><b><font color="#0000ff">View the Chain-for-Children's-Cheer</font></b></a></button>