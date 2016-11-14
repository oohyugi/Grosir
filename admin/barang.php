<?php 
include 'header.php';
?>

<script>
// $(function() {
// var data_table = "";
//        $.ajax({
//             url: "http://localhost/kios/admin/eek.php",
//             //force to handle it as text
//             dataType: "json",
//             success: function(data) {
//              for (var i =0; i<data.length; i++){
//                  data_table +="<tr> <td> "+data[i].nama_barang+"</td> <td> "+data[i].harga+"</td><td>"+data[i].status+"</td></tr>";
//              }
//               $('#exampl').append(data_table);    
//             }
//         });
//   });

// $(document).ready(function (){
//     var table_data = "http://localhost/kios/admin/eek.php"

//     var table = $('#example1').DataTable( {
//         data: table_data
//     } );    
// });

$(document).ready(function() {
    $('#example1').DataTable( {
        "ajax": 'http://localhost/kios/admin/api/stok_barang.php'
    } );
} );
// var table = $('#example1').DataTable( {
//     ajax: "http://localhost/kios/admin/eek.php"
// } );
 
// table.ajax.url( 'newData.json' ).load();

</script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Pabrik</th>
                  <th>Jumlah barang</th>
                  <th>Modal</th>
                  <th>Harga Atas</th>
                  <th>Harga Bawah</th>
                  
                </tr>
                </thead>
                <tbody>
            
               
              
                
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
include 'footer.php';

?>