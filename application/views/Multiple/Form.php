
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



<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>">
      <div id="flasherr" data-flasherr="<?= $this->session->flashdata('error') ?>">
        <!-- Default box -->
        <div class="card">
        <div class="card-header" style="background-color:RGB(40, 178, 170);">
            <h3 class="card-title  text-light"></h3>
             
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
            <div class="card">
              <div class="card-header">
                <span class="badge badge-info"><?= $title?></span>

                <div class="container my-5">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="">
            
				    <div class="form-group fieldGroup">
				        <div class="input-group">
                
                <div class="form-group col-4 <?= form_error('username[]') ? '' : null ?>">
                <label for="username">username</label>
				            <input type="text" name="username[]" class="form-control" placeholder="Enter Your Username"/>
                    <small  class="form-text text-muted"><?= form_error('username[]') ?></small>
                  </div>

                  <div class="form-group col-4">
                   <label for="email">Email address</label>
                    <input type="text" name="email[]" class="form-control" placeholder="Enter Your email"/>
                  </div>

                  <div class="form-group col-3">
                  <label for="password">Password</label>
                    <input type="password" name="password[]" class="form-control" placeholder="Enter Your password"/>
                  </div>
                 

                  <div class="input-group-addon mt-4"> 
				                <a href="javascript:void(0)" class="btn  btn-success addMore"><i class="fas fa-plus"></i></a>
				            </div>
				        </div>
				    </div>
				    
				    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit"/>				    
				</form>
        
				<div class="form-group fieldGroupCopy" style="display: none;">
				    
        <div class="input-group">
                
                <div class="form-group col-4 <?= form_error('username[]') ? '' : null ?>">
                <label for="username">username</label>
				            <input type="text" name="username[]" class="form-control" placeholder="Enter Your Username"/>
                    <small  class="form-text text-muted"><?= form_error('username[]') ?></small>
                  </div>

                  <div class="form-group col-4">
                   <label for="email">Email address</label>
                    <input type="text" name="email[]" class="form-control" placeholder="Enter Your email"/>
                  </div>

                  <div class="form-group col-3">
                  <label for="password">Password</label>
                    <input type="password" name="password[]" class="form-control" placeholder="Enter Your password"/>
                  </div>
                 

                  <div class="input-group-addon mt-4"> 
				            <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
				          </div>
				        </div>


				</div>

			</div>
		</div>
	</div>
            </div>
          <div class="card-footer">
            <!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  </section>


  <script>
		$(document).ready(function(){
    // membatasi jumlah inputan
    var maxGroup = 10;
    
    //melakukan proses multiple input 
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
	</script>