
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
            
                <form action="<?= site_url('Cekongkir/kalkulasi')?>" method="POST">
                  <div class="row fieldGroup">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>From</label>
                      <select name="from" id="from" class="form-control">
                        <option value=""></option>
                    
                       <?php foreach ($kota->rajaongkir->results as $key => $value) { ?>
                         <option value="<?=$value->city_id?>"><?=$value->city_name?></option>
                       <?php } ?>
       
                      </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>To</label>
                        <select name="to" id="to" class="form-control">
                        <option value=""></option>
                        <?php foreach ($kota->rajaongkir->results as $key => $value) { ?>
                         <option value="<?=$value->city_id?>"><?=$value->city_name?></option>
                       <?php } ?>
                      </select>
                      </div>
                    </div>



                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>berat gr</label>
                        <input type="number" name="berat" class="form-control">
                      </div>
                    </div>


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kurir</label>
                        <select name="kurir" id="kurir" class="form-control">
                        <option>PILIH</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS Indonesia</option>
                        <option value="tiki">TIKI</option>
                      </select>
                      </div>
                    </div>

                  

                    
                   <hr>
                  </div>
                  <hr>
                <button type="submit"  class="btn btn-primary">Save changes</button>
                </form>
              </div>
</section>
<script>
    $(document).ready(function() {
    $('#from').select2({
        theme: "bootstrap4",
        placeholder: "Chose Your City",
        allowClear: true
    });
});

$(document).ready(function() {
    $('#to').select2({
        theme: "bootstrap4",
        placeholder: "Chose Your City",
        allowClear: true
    });
});


</script>