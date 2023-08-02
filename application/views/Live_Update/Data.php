<style type="text/css">
    .txtedit{
      display: none;
      width: 98%;
    }
    table th, table td{
      padding: 8px;
    }
   </style>
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
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Multiple 
</button> -->

    <!-- <a href="<?= site_url('Multiple/Add')?>" class="btn btn-primary"><i class="fas fa-plus"></i></a> -->
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
                <table class="table table-bordered" id="tabelPublic"  style='border-collapse: collapse;'>
                  <thead>
                    <tr>

                      <th>Data 1</th>
                      <th>Data 2</th>
                      <!-- <th style="width: 70px">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
       // User List
       foreach($row as $user){

         $id = $user['id'];
         $name = $user['name'];
         $description = $user['description'];

         echo "<tr>";
         echo "<td>
         <span class='edit' >".$name."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='name' id='nametxt_".$id."' value='".$name."' >
         </td>";
        
        
         echo "<td>
         <span class='edit' >".$description."</span>
         <input type='text' class='txtedit form-control' data-id='".$id."' data-field='description' id='emailtxt_".$id."' value='".$description."' >
         </td>";
         echo "</tr>";
       }
       ?>
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

<!-- Script -->
 <!-- Script -->
 <!-- <script type='text/javascript' style='display:none;' async>
</script>

<script type="text/javascript" data-cfasync="false"></script> -->
 <script type="text/javascript">
    $(document).ready(function(){

        // On text click
        $('.edit').click(function(){

          // Hide input element
          $('.txtedit').hide();

          // Show next input element
          $(this).next('.txtedit').show().focus();

          // Hide clicked element
          $(this).hide();
        });

        // Focus out from a textbox
        $('.txtedit').focusout(function(){
            // Get edit id, field name and value
            var edit_id = $(this).data('id');
            var fieldname = $(this).data('field');
            var value = $(this).val();

            // assign instance to element variable
            var element = this;

            // Sending AJAX request
            $.ajax({
              url: '<?= base_url('Live_Update/updateuser') ?>',
              type: 'post',
              data: { field:fieldname, value:value, id:edit_id },
              success:function(response){

                // Hide Input element
                $(element).hide();

                // Update viewing value and display it
                $(element).prev('.edit').show();
                $(element).prev('.edit').text(value);
              }
            });
        });
    });
    </script>