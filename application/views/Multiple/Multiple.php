
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


  
    
    <!-- Main content -->
    <section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>">
      <div id="flasherr" data-flasherr="<?= $this->session->flashdata('error') ?>">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h3 class="card-title"><?= $title ?></h3> -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Multiple 
</button>

    <a href="<?= site_url('Multiple/Add')?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
                <table class="table table-bordered" id="tabelPublic">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 150px">Name</th>
                      <th>Description</th>
                      <th style="width: 70px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->


    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form method="post" action="<?php echo base_url("index.php/siswa/save"); ?>">
    <!-- Buat tombol untuk menabah form data -->
    <button type="button" id="btn-tambah-form" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></button>
    <button type="button" id="btn-reset-form" class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></button><br><br>
    
    
    <!-- <table> -->
      <!-- <tr>
        <td><label for="name">name</label></td>
        <td><input type="text" name="name[]" class="form-control" required></td>
      </tr>
      <tr>
        <td><label for="name">description</label></td>
        <td><input type="text" name="description[]" class="form-control"  required></td>
      </tr> -->
      <hr>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name">
     </div>

     <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description">
     </div>

     <div class="form-group">
        <label for="others">others</label>
        <input type="text" class="form-control" id="others">
     </div>
    <hr>

    
      
    <br><br>
    <div id="insert-form"></div>
    
  

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
    </div>
    </div>
    </div>







