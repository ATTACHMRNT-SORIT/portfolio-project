<?php

    $con=mysqli_connect("localhost","my_user","my_password","my_db");
    if (mysqli_connect_errno())
     {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
    $sql = "SELECT * FROM clubs";
    $result = mysqli_query($con, $sql);
?>

        <select id="club" name="club">
          <option value = ""></option>
        <?php
          while($row = mysqli_fetch_array($result)) {
            echo '<option value='.$row['id'].'>'.$row['field'].'</option>';
          }
        ?> 
        </select>