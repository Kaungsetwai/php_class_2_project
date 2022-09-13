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
     <h1 class="mt-4">Image Dashboard</h1>
     <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
     <?php //include("includes/top_card.php") ?>
     <?php //include("includes/chart.php"); ?>
     <div class="card mb-4">
      <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Image Gallery(1) <span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ New
        Image</span>
      </div>
      <div class="card-body">
       <!-- add to datatable -->
      </div>
     </div>


     <!-- modal  -->

     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Create Gallery</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form action="../actions/image_process.php" method="POST" enctype="multipart/form-data">
          <div class="input-group mb-3">
           <input type="file" name="file" class="form-control" id="inputGroupFile02">
           <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
          </div>
          <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Description </label>
           <input type="text" name="description" class="form-control" id="exampleInputEmail1"
            placeholder="Enter Your Category Name">
          </div>

          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <input type="submit" class="btn btn-primary" name="create_gallery" value="Add Image">
          </div>
         </form>
        </div>

       </div>
      </div>
     </div>
     <!-- end modal -->
    </div>
   </main>
   <?php include("includes/footer.php"); ?>