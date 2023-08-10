
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
          
          <a href="<?= base_url('Cekongkir/Cek') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
    
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

