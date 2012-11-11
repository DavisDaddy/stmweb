<?php
/*
Template Name: displayMinistriesAndLeaders
*/
?>

<?php

  // require_once 'login.php';

  get_header();

  $db_hostname = 'localhost';
  $db_username = 'stmuser';
  $db_password = 'Rmmbr/Mn98';

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

  ////// echo "<div class='entry-content'>";
  ///////////////////////////////////////echo "<div id='mhcontent'>";
  ////// echo "<div id='post-63'>";
  ////// echo "<div id='people'>";
  ////// echo "<h1>Ministries and Leaders</h1>";
      echo "<p>";

      ////// echo "<div id='people'>";
          echo "<table border='1', id='people'>";
              echo "<tr>
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

      ////// echo "</div>";    /* end people */

      echo "<div id='mhsidebar'>";
          get_sidebar();
      echo "</div>";    /* end mhsidebar */

  ///////////////////////////////////echo "</div>";    /* end mhcontent */

  echo "<div id='footer'>";
  get_footer();
  echo "</div>";    /* end footer */

  mysql_close($con);

?>

