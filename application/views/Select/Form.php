 
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1></h1>
        <h3><span class="badge badge-info"><?= $title ?></span></h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- <li class="breadcrumb-item"><a class="text-secondary" href="<?= site_url('') ?>"><span class="badge badge-outline-secondary">Kembali</span></a></li> -->
          <!-- <li class="breadcrumb-item"><span class="badge badge-secondary">Master Class Form</span></a></li> -->
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
 <!-- general form elements disabled -->
 <section class="content">
 <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            
              <form action="" method="post">
              
                  <div class="row">
                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                        <label>Data 1</label>
                        <select name="" id="" class="form-control js-example-basic-single">
                            <option value="">PILIH</option>
                            <?php foreach ($getsel->result() as $key => $value) { ?>
                               <option value=""><?= $value->email?></option>
                           <?php } ?>
                        </select>
                      </div>
                    </div> -->

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Data 1</label>
                        <select name="email[]" id="email" class="form-control" multiple>
                            <option value="">-Pilih-</option>
                            <?php foreach ($getsel->result() as $key => $data) { ?>
                                <option value="<?= $data->email ?>"><?= $data->email ?></option>
                            <?php }?>
                        </select>
                        <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?= form_error('email[]') ?></span></small>
                      </div>
                    </div>
                  </div>
                  <hr>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                </form>
</div>
</section>

<script>
//     $(document).ready(function() {
//     $('.js-example-basic-single').select2({
//         theme: "bootstrap4"
//     });
// });

$(document).ready(function() {
    $('#email').select2({
      placeholder: "CHOSE MULTIPLE SELECT",
       allowClear: true,
        theme: 'bootstrap4',
          maximumSelectionLength: 5
    });
  });

</script>