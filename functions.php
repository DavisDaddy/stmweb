<?php

	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 980 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 134 ) );



?>

<?php

  function displayMinistriesAndLeaders() {
  require_once 'login.php';

  $con = mysql_connect($db_hostname, $db_username, $db_password);
  if (!$con) {
    die('Could not connect: ' . mysql_error());
   }

  mysql_select_db("stmdb", $con);

  $result = mysql_query(
       "SELECT xstm_ministries.name, xstm_persons.firstName, xstm_persons.lastName FROM
       xstm_ministries, xstm_persons, xstm_relateMinistriesToLeaders as rmtl WHERE
       xstm_ministries.ministryID = rmtl.ministryID AND
       xstm_persons.personID = rmtl.leaderID ORDER BY
       xstm_ministries.name");

 
  echo "<table border='1'>
  <tr>
    <th>Ministry</th>
    <th>Leader Name</th>
  </tr>";
 
  while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name']      . "</td>";
    echo "<td>" . $row['firstName'] . " " .
                  $row['lastName']  ."</td>";
    echo "</tr>";
  }
  echo "</table>";
 
  mysql_close($con);

  }
  ?>

