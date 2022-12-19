<?php
   $info = [
       [1, 'John', 'CSE', 22, 'Sylhet'],
       [2, 'David', 'CSE', 23, 'Dhaka'],
       [3, 'Wick', 'CSE', 21, 'Khulna'],
       [4, 'Mike', 'CSE', 24, 'Rajshahi'],
       [5, 'Sarah', 'CSE', 23, 'Barisal'],
   
   
   
   ];
    echo '<table border="1">
        <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Department</th>
              <th>Age</th>
              <th>Divison</th>
        </tr>
   
   
   ';

   foreach($info as list($id, $name, $Dept, $Age, $District)){
      echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$Dept.'</td><td>'.$Age.'</td><td>'.$District.'</td></tr>';
   }
   echo '</table>';


?>