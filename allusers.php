<!DOCTYPE html>
<html>

<head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4c5aaf;
      color: white;
    }
  </style>
</head>

<body>

  <table id="customers">
    <tr>
      <th>ID</th>
      <th>firstname</th>
      <th>lastname</th>
      <th>email</th>
      <th>password</th>
      <th>Delete</th>
      <th>Update</th>

    </tr>

    <?php

        require_once("database.php");

         try {

          $conn=new database();
          // $conn=$conn->getDBConnection();

            if($conn){

                // $data= $conn->query("select * from std");
                // $result=$data->fetchAll();

                $result = $conn->getAllData("std");

                $arrayLength = count($result);
                $i = 0;
                while ($i < $arrayLength)
                {
                    echo "</tr>";
                    echo "<td>{$result[$i]['id']}</td>";
                    echo "<td>{$result[$i]['firstname']}</td>";
                    echo "<td>{$result[$i]['lastname']}</td>";
                    echo "<td>{$result[$i]['email']}</td>";
                    echo "<td>{$result[$i]['password']}</td>";
                    echo "<td><a href='./delete.php?id={$result[$i]['id']}'>Delete</a></td>";
                    echo "<td><a href='./update.php?id={$result[$i]['id']}'>Update</a></td>";
                    echo "</tr>";
                    $i++;
                }

            }else{
                echo " Something went Wrong ...";
            }
        } catch(PDOException $e) {
                 echo "Connection failed: " . $e->getMessage();
     }


    ?>

  </table>

</body>

</html>