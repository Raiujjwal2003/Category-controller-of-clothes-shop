<?php include('layouts/header.php')?>
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Sub Category</h1>
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
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <form action="<?php echo site_url('admin/home/edit_subcategory/').$single_subcategory_data['subcategory_id']?>" method="post">
            

              <div class="form-group">
                            <label for="field-ta" class="col-sm-3 control-label">category</label>

                            <div class="col-sm-7">
                                <select name="category" class="form-control select2" required>
                                    <option value=""></option>
                                    <?php foreach ($category_data as $row2) { ?>
                                        <option value="<?php echo $row2['category_id']; ?>" <?php if ($single_subcategory_data['category_id'] == $row2['category_id']) echo 'selected'; ?> >
                                            <?php echo $row2['name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                <div class="mb-3">
                    <label for="product" class="form-label">Name</label>
                    <input name="subcategory_name" type="text" class="form-control" value="<?php echo $single_subcategory_data['name']; ?>" required  >
                    <div  class="form-text"> </div>
                </div>

                <div class="mb-3">
                    <label for="product" class="form-label">Description</label>
                    <input name="description" type="text" class="form-control"value="<?php echo $single_subcategory_data['description']; ?>" required >
                    <div  class="form-text"> </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">product image link</label>
                    <input name="subcategory_img" type="link" class="form-control" value="<?php echo $single_subcategory_data['image']; ?>" required >
                    <div  class="form-text"> </div>
                </div>


              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
              </div>
            </div>
        </div>
      </div>
    </div>
      </div><!-- /.container-fluid -->
    </div>
  </div>