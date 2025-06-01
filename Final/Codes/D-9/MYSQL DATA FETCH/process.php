
<?php 
// INSERT
//     $uname = $_POST['uname'];
//     $age = $_POST['age'];
//     // Connection String
//     $con = mysqli_connect("localhost", "root", "", "sampledb"); 

//     $sql = "INSERT INTO mytable (name, age) VALUES ('$uname', '$age')";

//    if (mysqli_query($con, $sql)) {
//     echo "Inserted....";
//    }

// MODIFY

//     $con = mysqli_connect("localhost", "root", "", "sampledb"); 

//     $sql = "UPDATE mytable SET age = 18 WHERE name ='SAM'";

//        if (mysqli_query($con, $sql)) {
//         echo "Updated....";
//    }
//  READ

    // $con = mysqli_connect("localhost", "root", "", "sampledb"); 
    // $sql = "SELECT name, age FROM mytable";

    // $obj = mysqli_query($con, $sql);

    // $entry = mysqli_fetch_assoc($obj); // Creating associative array
    // echo  mysqli_num_rows($obj)."<br>";
    //     if (mysqli_num_rows($obj) == 1) {
    // echo $entry['name'];
    // echo "<br>";
    // echo $entry['age'];
    //     }

// DELETE


     $con = mysqli_connect("localhost", "root", "", "sampledb"); 
     $sql = "DELETE FROM mytable WHERE name=\"SAM\"";

    if(mysqli_query($con, $sql)) {
        echo "Deleted....";
    }

?>
