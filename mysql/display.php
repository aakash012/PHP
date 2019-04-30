<?php
  include("student1.php");
  $query="SELECT * FROM student_info"; //means all columns of table
  //$query="SELECT * FROM student_info WHERE Name='Manoj'";
  $data=mysqli_query($connection,$query);
  $total=mysqli_num_rows($data); //to fetch no of reords from the table
  echo "$total";

  // $result=mysqli_fetch_assoc($data); //to display records
  // echo $result['roll']." ".$result['Name']." ".$result['class'];

if($total!=0)
{
  ?>
  <table>
    <tr>
      <th>Roll No</th>
      <th>Name</th>
      <th>Class</th>
    </tr>
    <?php
    echo "Table has record";
    while($result=mysqli_fetch_assoc($data)) //to show all records
    {
      echo "<tr>
        <td>".$result['roll']."</td>
        <td>".$result['Name']."</td>
        <td>".$result['class']."</td>
      </tr>";
    }
  }
  else {
    echo "No record found";
  }
  ?>
  </table>
