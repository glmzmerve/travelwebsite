 <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "db2023");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $ad =  $_REQUEST['ad'];
        $soyad = $_REQUEST['soyad'];
        $email = $_REQUEST['email'];
        $password =  $_REQUEST['password'];
        $tel = $_REQUEST['tel'];
        $inputdate = $_REQUEST['inputdate'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO rezervasyon  VALUES ('$ad',
            '$soyad','$email','$password','$tel','$inputdate')";
         
        if(mysqli_query($conn, $sql)){
         //  echo "<h3>data stored in a database successfully.</h3>";
          }
               /* . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$ad\n $soyad\n "
                . "$email\n $password\n $tel\n $date");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }*/
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>