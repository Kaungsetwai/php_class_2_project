<?php 
session_start();

include("function.php");

$auth = check();
 ?>
<?php include("includes/head.php"); ?>

<body class="sb-nav-fixed">

 <?php include("includes/top_navbar.php"); ?>

 <div id="layoutSidenav">
  <div id="layoutSidenav_nav">
   <?php include("includes/sidebar.php"); ?>
  </div>
  <div id="layoutSidenav_content">
   <main>
    <div class="container-fluid px-4">
     <h1 class="mt-4">Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><?php echo $auth; ?></li>
     </ol>
     <?php // include("includes/top_card.php") ?>
     <?php //include("includes/chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       DataTable Example
      </div>
      <div class="card-body">
       <!-- add to datatable -->
       <table id="datatablesSimple">
        <thead>
         <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Start date</th>
          <th>Action</th>
         </tr>
        </thead>
        <tfoot>
         <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Start date</th>
          <th>Action</th>
         </tr>
        </tfoot>
        <tbody>
         <?php 
include("../config/db_con.php");
$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
      echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
          echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>
                   <a href='Edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a> 
            <a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
     
            </td>";
 }
} else {
 echo "0 result";
}

?>
        </tbody>
       </table>
      </div>
     </div>
    </div>
   </main>
   <?php include("includes/footer.php"); ?>