<?php $link = mysql_connect('localhost', 'root'); ?>
<html>
<head>
        <title>Hello world!</title>
        <style>
        body {
                background-color: white;
                text-align: center;
                padding: 50px;
                font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
        }

        #logo {
                margin-bottom: 40px;
        }
        </style>
</head>
<body>
<img id="logo" src="logo.png" />
        <h1><?php echo "Hello world!"; ?></h1>
        <?php if(!$link) { ?>
                <h2>Can't connect to local MySQL Server!</h2>
        <?php } else { ?>
                <h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
        <?php } ?>

<?php
 echo "********** Egco313 Test database connection***********<br>";
$dbconn = pg_connect("host =ec2-107-21-99-176.compute-1.amazonaws.com
   port=5432 dbname=d73dt3chu1s0u9 user=jqcuqzchigagqf
   password=163471eec19643867a4fe2027111a6bba8fae2cbde1590756edb7e0b5686726b
   ");

   if($dbconn){
       echo "-- Database connected -- <br>";
   }else{
    echo "-- Database Disconnected -- <br>";
   }
$student = pg_query($dbconn,"SELECT * FROM meandme");
  if(pg_num_rows($student)==0){
      echo "NO data in table <br>";
  } else {
      
      while($row = pg_fetch_row($student)){
          echo "
          <tr>
          <td> $row[0]</td>
          <td> $row[1] </td>
    <td> $row[2] </td> </tr>";
          
      }
  } 

?>

</body>
</html>

