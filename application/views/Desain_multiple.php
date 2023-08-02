<style>#container{
      margin:0 auto;
      width:800px;
      text-align:center}
      #employee-table{
        width:800px;
        border:1px solid #aaa}
    </style>
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
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             



   
  
    <div id="container">
      <h2>Desain Multiple Add
      </h2> 
      <button id="add-new-btn" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>
      </button>
      <button id="delete-btn" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
      </button>
      <br>
      <br>
      <table id="employee-table" class="table table-bordered">
        <tr>
          <th>First Name
          </th>
          <th>Last Name
          </th>
          <th>Mobile No
          </th>
          <th>Email ID
          </th>
          <th>Action
          </th>
        </tr>
      </table>
    </div>		
  </body> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
  </script> 
  <script type="text/javascript">/* This event will fire on 'Add New Row' button click */
    $("#add-new-btn").on("click", function(){
      //calling method to add new row
      addNewRow();
    }
                        );
    /* This event will fire on 'Delete Row' button click */
    $("#delete-btn").on("click", function(){
      //calling method to delete the last row
      deleteRow();
    }
                       );
    /* This method will add a new row */
    function addNewRow(){
      var rowHtml='<tr><td><input type="text" class="form-control" /></td>'
      +'<td><input type="text" class="form-control" /></td>'
      +'<td><input type="text" class="form-control"/></td>'
      +'<td><input type="text" class="form-control"/></td>'
      +'<td><input type="button" class="btn btn-sm btn-danger" value="delete" onclick="deleteRow(this)" /></td></tr>';
      $("#employee-table").append(rowHtml);
    }
    /* This method will delete a row */
    function deleteRow(ele){
      var table = $('#employee-table')[0];
      var rowCount = table.rows.length;
      if(rowCount <= 1){
        // alert("There is no row available to delete!");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'There is no row available to delete!'
            })
        return;
      }
      if(ele){
        //delete specific row
        $(ele).parent().parent().remove();
      }
      else{
        //delete last row
        table.deleteRow(rowCount-1);
      }
    }
  </script> 
















              </div>
              </div>
</section>
