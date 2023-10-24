<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Employee Dashboard</title>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
          body {
               color: #404E67;
               background: #F5F7FA;
               font-family: 'Open Sans', sans-serif;
          }

          .table-wrapper {
               width: 700px;
               margin: 30px auto;
               background: #fff;
               padding: 20px;
               box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          }

          .table-title {
               padding-bottom: 10px;
               margin: 0 0 10px;
          }

          .table-title h2 {
               margin: 6px 0 0;
               font-size: 22px;
          }

          .table-title .add-new {
               float: right;
               height: 30px;
               font-weight: bold;
               font-size: 12px;
               text-shadow: none;
               min-width: 100px;
               border-radius: 50px;
               line-height: 13px;
          }

          .table-title .add-new i {
               margin-right: 4px;
          }

          table.table {
               table-layout: fixed;
          }

          table.table tr th,
          table.table tr td {
               border-color: #e9e9e9;
          }

          table.table th i {
               font-size: 13px;
               margin: 0 5px;
               cursor: pointer;
          }

          table.table th:last-child {
               width: 100px;
          }

          table.table td a {
               cursor: pointer;
               display: inline-block;
               margin: 0 5px;
               min-width: 24px;
          }

          table.table td a.add {
               color: #27C46B;
          }

          table.table td a.edit {
               color: #FFC107;
          }

          table.table td a.delete {
               color: #E34724;
          }

          table.table td i {
               font-size: 19px;
          }

          table.table td a.add i {
               font-size: 24px;
               margin-right: -1px;
               position: relative;
               top: 3px;
          }

          table.table .form-control {
               height: 32px;
               line-height: 32px;
               box-shadow: none;
               border-radius: 2px;
          }

          table.table .form-control.error {
               border-color: #f50000;
          }

          table.table td .add {
               display: none;
          }
     </style>

</head>
<body>
     <div class="container">
          <div class="table-wrapper">
               <div class="table-title">
                    <div class="row">
                         <div class="col-sm-8">
                              <h2>Employee <b>Details</b></h2>
                         </div>
                    </div>
               </div>
               <table class="table table-bordered">
                    <form id="myForm" action="upload.php" method="post">
                         <div class="form-group">
                              <label for="firstname">First Name:</label>
                              <input type="text" class="form-control" id="firstname" name="firstname" required>
                         </div>
                         <div class="form-group">
                              <label for="lastname">Last Name:</label>
                              <input type="text" class="form-control" id="lastname" name="lastname" required>
                         </div>
                         <div class="form-group">
                              <label for="phone">Phone Number:</label>
                              <input type="text" class="form-control" id="phone" name="phone" required>
                         </div>
                         <div class="form-group">
                              <label for="address">Address:</label>
                              <input type="text" class="form-control" id="address" name="address" required>
                         </div>
                         <div class="form-group">
                              <label for="age">Age:</label>
                              <input type="number" class="form-control" id="age" name="age" required>
                         </div>

                         <div class="form-group">
                              <button type="submit" class="btn btn-info add-new">Add</button>
                         </div>
                    </form>

                    <!-- Table for displaying data -->
                    <table class="table">
                         <tbody>
                              <table class="table table-bordered">
                                   <thead>
                                        <tr>
                                             <th>Firstname</th>
                                             <th>lastname</th>
                                             <th>Phone</th>
                                             <th>Address</th>
                                             <th>Age</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                        <?php
                                        // Fetch data from the database and populate the table rows
                                        $servername = "localhost"; // Change this to your MySQL server hostname
                                        $username = "root"; // Change this to your MySQL username
                                        $password = ""; // Change this to your MySQL password
                                        $database = "employee"; // Change this to your MySQL database name

                                        // Create a new connection
                                        $conn = new mysqli($servername, $username, $password, $database);

                                        // Check the connection
                                        if ($conn->connect_error) {
                                             die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Fetch data from the database
                                        $sql = "SELECT * FROM employee_details";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                             // Output data of each row
                                             while ($row = $result->fetch_assoc()) {
                                                  echo "<tr>
                                                  <td>{$row['firstname']}</td>
                                                  <td>{$row['lastname']}</td>
                                                  <td>{$row['phone']}</td>
                                                  <td>{$row['address']}</td>
                                                  <td>{$row['age']}</td>
                                                  </tr>";
                                             }
                                        } else {
                                             echo "<tr><td colspan='5'>No data available</td></tr>";
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>
                                   </tr>
                              </div>
                         </div>
                    </table>
               <p class="signin"><a class="btn btn-info add-new" href="index.php">Log out</a> </p>
          </div>
     </div>
</body>

</html>