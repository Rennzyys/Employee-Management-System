<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Dashboard</title>
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
                              <h2>Admin <b>Dashboard</b></h2>
                         </div>
                         <div class="col-sm-4">
                         </div>
                    </div>
               </div>
               <table class="table table-bordered">
                    <thead>
                         <tr>
                              <th>No.</th>
                              <th>Firstname</th>
                              <th>lastname</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Age</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
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
                                   <td>{$row['id']}</td>
                                   <td class='firstname'>{$row['firstname']}</td>
                                   <td class='lastname'>{$row['lastname']}</td>
                                   <td class='phone'>{$row['phone']}</td>
                                   <td class='address'>{$row['address']}</td>
                                   <td class='age'>{$row['age']}</td>
                                   <td>
                                        <button class='btn btn-info add' data-toggle='tooltip' title='Add'>
                                             <i class='fas fa-plus'></i>
                                        </button>
                                        <button class='btn btn-secondary edit' data-toggle='tooltip' title='Edit' >
                                             <i class='fas fa-edit'></i>
                                        </button>
                                        <button class='btn btn-danger delete' data-toggle='tooltip' title='Delete' data-id='{$row['id']}'>
                                             <i class='fas fa-trash'></i>
                                        </button>
                                        <button class='btn btn-success save' data-toggle='tooltip' title='Save' data-id='{$row['firstname']} , {$row['lastname']} , {$row['phone']} , {$row['address']} , {$row['age']}'>
                                             <i class='fas fa-save'></i>
                                        </button>
                                   </td>
                              </tr>";
                              }
                         } else {
                              echo "<tr><td colspan='6'>No data available</td></tr>";
                         }

                         // Close the database connection
                         $conn->close();
                         ?>

                    </tbody>
               </table>
               <p class="signin"><a class="btn btn-info add-new" href="index.php">Log out</a> </p>
          </div>
     </div>
     <script>
          $(document).ready(function() {
               // Function to handle edit button click
               $(document).on("click", ".edit", function() {
                    var row = $(this).closest("tr");
                    var id = row.find(".id").text(); // Get the ID of the record
                    var firstname = row.find(".firstname").text();
                    var lastname = row.find(".lastname").text();
                    var phone = row.find(".phone").text();
                    var address = row.find(".address").text();
                    var age = row.find(".age").text();

                    $("#edit-id").val(id);
                    $("#edit-firstname").val(firstname);
                    $("#edit-lastname").val(lastname);
                    $("#edit-phone").val(phone);
                    $("#edit-address").val(address);
                    $("#edit-age").val(age);
               });

               // Function to handle save button click
               $(document).on("click", "#save-btn", function() {
                    var id = $("#edit-id").val();
                    var firstname = $("#edit-firstname").val();
                    var lastname = $("#edit-lastname").val();
                    var phone = $("#edit-phone").val();
                    var address = $("#edit-address").val();
                    var age = $("#edit-age").val();

                    $.ajax({
                         url: 'save.php',
                         type: 'POST',
                         data: {
                              id: id,
                              firstname: firstname,
                              lastname: lastname,
                              phone: phone,
                              address: address,
                              age: age
                         },
                         success: function(response) {
                              console.log(response);
                         },
                         error: function(xhr, status, error) {
                              console.error(error);
                         }
                    });
               });

               // Function to handle delete button click
               $(document).on("click", ".delete", function() {
                    var id = $(this).data('id');
                    var row = $(this).closest("tr");

                    $.ajax({
                         url: 'delete.php',
                         type: 'POST',
                         data: {
                              id: id
                         },
                         success: function(response) {
                              console.log(response);
                              row.remove();
                         },
                         error: function(xhr, status, error) {
                              console.error(error);
                         }
                    });
               });
          });
     </script>
     <script>
         $(document).ready(function() {
    // Edit row on edit button click
    $(document).on("click", ".edit", function() {
        var row = $(this).closest("tr");
        row.find("td:not(:last-child)").each(function() {
            var value = $(this).text();
            var fieldName = $(this).attr("class"); // Get the class name (e.g., 'firstname', 'lastname')
            $(this).html('<input type="text" class="form-control" name="' + fieldName + '" value="' + value + '">');
        });
        row.find(".add, .edit").toggle();
        $(".add-new").prop("disabled", true);
    });

    // Save or update data on save button click
    $(document).on("click", ".save", function() {
        var row = $(this).closest("tr");
        var formData = {};

        // Collect data from input fields
        row.find("input").each(function() {
            formData[$(this).attr("name")] = $(this).val();
        });

        $.ajax({
            url: 'add.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log(response); // Log the response for debugging purposes

                // Display a success message
                alert("Data saved successfully!");

                // Reload the dashboard_admin.php page
                window.location.href = 'dashboard_admin.php';
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

     </script>
</body>

</html>