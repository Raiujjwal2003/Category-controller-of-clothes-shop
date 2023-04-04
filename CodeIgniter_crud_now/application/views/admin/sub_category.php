<?php include('layouts/header.php') ?>
<?php include('layouts/sidenavbar.php')?>


<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    

     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Welcome,<strong>Admin</strong>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Logout
          </a>
         
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Our Sub Category Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div  class="content d-flex  ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <a  href="<?php echo site_url('admin/home/add_subcategory') ?>" class="btn btn-secondary mb-3 col-lg-2 mt-2 ml-5"> Add Sub-Category</a>
              <div style=" gap:20px; flex-wrap: wrap;" class="card-body d-flex gap-6">
  
            <table class="table table-bordered">
           
  <thead>
    <tr>
      <th scope="col" width="5%">id</th>
      <th scope="col" width="12%">name</th>
      <th scope="col" width="12%" >type</th>
      <th scope="col" >Description</th>
      <th scope="col" >action</th>
    </tr>
  </thead>
  
  <?php foreach($subcategory_data as $row){ ?>
  <tbody>
    <tr>
      <td><?php echo $row['subcategory_id'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td>
      <?php $name = $this->db->get_where('category' , array('category_id' => $row['category_id'] ))->row()->name;
                        echo $name;?>

    </td>
      <td><?php echo $row['description'] ?></td>
      <td>
        <a  href="<?php echo site_url('admin/home/update_subcategory/'.$row['subcategory_id']); ?>" class="btn btn-success">Edit</a>
        <a href="<?php echo site_url('admin/home/remove_subcategory/'.$row['subcategory_id']); ?>" class="btn btn-danger">Delete</a> </td>
    </tr>
  
  </tbody>
<?php } ?>

 </table>
    
 

        </div>
            </div>

          </div>

        </div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div> 