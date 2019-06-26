<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>PERPUSTAKAAN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<!-- <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<?php $this->helper("form"); ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .col-md-4 {
        padding-left:0
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main">

 <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Assalamu'alaikum!</h1>
      <p><a class="btn btn-primary btn-lg" href="http://localhost/perpus/" role="button">Kepo &raquo;</a></p>
    </div>
  </div>


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>DATA BUKU</h2> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahBuku">Tambah Buku
        </button>
        <div class = "row">
        <div class = "col-md-3" style="max-widht: 17% ; margin-top: 6%">
        <h7>Tampilkan Berdasarkan :</h7>
        <div class="col-md-8">
        <!-- <select class="form-control " id="filter_by"> -->
        <?php 
          $pilih = array (
            'judul_buku' => 'Judul Buku',
            'nama_pengarang' => 'Pengarang',
            'nama_penerbit' => 'Penerbit',
            'tahun_terbit' => 'Tahun Terbit'
          ); 

          $atribut = array(
            'class' => 'form-control',
            'id' => 'filter_by',
            'style' => 'font-size : 12pt'
          );

          echo form_dropdown ('filter',$pilih,'judul_buku',$atribut);
        ?>
        </div>
        
        <div class = "col-md-12">
          <?php 
          // $atribut = array(
          //   'type' => 'text',
          //   'class' => 'form-control',
          //   'id' => 'keyword',
          //   'placeholder' => 'Ketikkan sesuatu..'
          // );
          // echo form_input($atribut);
          ?>
          <input type="text" class="form-control" id="keyword" placeholder='Ketikkan kata kunci..' onkeyup=
					"filterMulti($(this).val())">
        </div>
        </div>
        </div>
        
         <!-- <div class="col-md-12"> 
         <select class="form-control " id="filter_by">
         	<option value=''>-- Choose --</option>
           <option value='judul_buku'>Judul Buku</option>
         	<option value='id_pengarang'>Pengarang</option>
         	<option value='id_penerbit'>Penerbit</option>
         	<option value='tahun_terbit'>Tahun Terbit</option>
          
         </select>
         <input type="text" class="form-control" id='keyword' placeholder='Enter Keyword' 
         onkeyup="filterData($('#filter_by').val(),$(this).val())"></select>
         .val itu sama dengan .text di vb
         (this) digunakan untuk memanggil elemen di dalam satu event, kalau class (.judul_buku) -->
        
        <table id="table_buku" class="table table-striped table-hover" width="100%">
        	<thead>
        		<th>No.</th>
        		<th>ID Buku</th>
        		<th>Judul Buku</th>
        		<th>Pengarang</th>
        		<th>Penerbit</th>
        		<th>Tahun Terbit</th>
        		<th>Stok</th>
            <th>Kategori</th>
            <th>Opsi</th>
        	</thead>
        	<tbody id="data_buku"></tbody>
        </table>
        </div>
        </div>

    </div>

    <hr>

  </div> <!-- /container -->

</main>


<!-- Modal -->
<div class="modal fade" id="ModalTambahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Tambah Buku</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <form id="TambahBuku1">
        <div class="form-group col-md-4">
          <label for="id_buku">ID Buku</label>
          <input type="text" class="form-control" name="id_buku" id="id_buku" placeholder="...">
        </div>
        <div class="form-group">
          <label for="judul_buku">Judul Buku</label>
          <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="...">
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <select class="form-control" id="pengarang" name="pengarang">
          </select>
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <select class="form-control" id="penerbit" name="penerbit">
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="tahun_terbit">Tahun Terbit</label>
          <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="...">
        </div>
        <div class="form-group col-md-4">
          <label for="stok">Stok</label>
          <input type="text" class="form-control" id="stok" name="stok" placeholder="...">
        </div>
        <div class="form-group">
          <label for="no_isbn">No. ISBN</label>
          <input type="text" class="form-control" id="no_isbn" name="no_isbn" placeholder="...">
        </div>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select class="form-control" id="kategori" name="kategori">
          </select>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <div class="col-md-8">
          <button type="submit" class="btn btn-primary center-block" id="simpan" name="simpan" >Simpan</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalUbahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Ubah Buku</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <form id="UbahBuku1">
        <div class="form-group col-md-4">
          <label for="ubah_id_buku">ID Buku</label>
          <input type="text" class="form-control" name="id_buku" id="ubah_id_buku">
        </div>
        <div class="form-group">
          <label for="ubah_judul_buku">Judul Buku</label>
          <input type="text" class="form-control" id="ubah_judul_buku" name="judul_buku">
        </div>
        <div class="form-group">
          <label for="ubah_pengarang">Pengarang</label>
          <select class="form-control" id="ubah_pengarang" name="pengarang">
          </select>
        </div>
        <div class="form-group">
          <label for="ubah_penerbit">Penerbit</label>
          <select class="form-control" id="ubah_penerbit" name="penerbit">
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="ubah_tahun_terbit">Tahun Terbit</label>
          <input type="text" class="form-control" id="ubah_tahun_terbit" name="tahun_terbit">
        </div>
        <div class="form-group col-md-4">
          <label for="ubah_stok">Stok</label>
          <input type="text" class="form-control" id="ubah_stok" name="stok">
        </div>
        <div class="form-group">
          <label for="ubah_no_isbn">No. ISBN</label>
          <input type="text" class="form-control" id="ubah_no_isbn" name="no_isbn">
        </div>
        <div class="form-group">
          <label for="ubah_kategori">Kategori</label>
          <select class="form-control" id="ubah_kategori" name="kategori">
          </select>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <div class="col-md-8">
          <button type="submit" class="btn btn-primary center-block" id="ubah_simpan" name="simpan" >Simpan Perubahan</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container">
  <p>&copy; Tomi Nugroho 1999-2019</p>
</footer>

<!-- ====================================================================================================== -->

<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script>

      //function js diluar documen ready
     

      function tampilData(id_buku) {
        $.ajax({
            url: "<?php echo base_url('index.php/getDataBuku/') ?>"+id_buku,
            type: "GET",
            dataType: "json",
            success: function(response){
            alert(response);
            $('#ubah_id_buku').val(response.id_buku);
            $('#ubah_judul_buku').val(response.judul_buku);
            $('#ubah_pengarang').val(response.id_pengarang);
            $('#ubah_penerbit').val(response.id_penerbit);
            $('#ubah_tahun_terbit').val(response.tahun_terbit);
            $('#ubah_stok').val(response.stok);
            $('#ubah_no_isbn').val(response.no_isbn);
            $('#ubah_kategori').val(response.id_kategori);

            $('#ModalUbahBuku').modal('show');
            }
        })
      };

  $(document).ready(function(){

        

        $('#simpan').on('click',function(){
          $.ajax({
          url: "<?php echo base_url('index.php/simpanBuku') ?>",
          type: "POST",
          data:$('#TambahBuku1').serialize(), //untuk mengambil nilai" dari elemen"(yg ada namenya) dalam satu selektor
          dataType: "json",
          success: function(data){
            $('#ModalTambahBuku').modal('hide');
            alert(data.info);
          }
          })
        });


        $('#ubah_simpan').on('click',function(){
          $.ajax({
          url: "<?php echo base_url('index.php/ubahBuku') ?>",
          type: "POST",
          data:$('#UbahBuku1').serialize(), //untuk mengambil nilai" dari elemen"(yg ada namenya) dalam satu selektor
          dataType: "json",
          success: function(data){
            $('#ModalUbahBuku').modal('hide');
            alert(data.info);
						document.location.reload(true);
          }
          })
        });
				


        $.ajax({
          url: "<?php echo base_url('index.php/getData') ?>",
          type: "GET",
          dataType: "json",
          success: function(response){
          $('#data_buku').html();
          for (var i=0; i<response.length; i++){
        
            $('#data_buku').append(
              '<tr>'+
                '<td>'+(i+1)+'</td>'+
                '<td>'+response[i].id_buku+'</td>'+
                '<td>'+response[i].judul_buku+'</td>'+
                '<td>'+response[i].nama_pengarang+'</td>'+
                '<td>'+response[i].nama_penerbit+'</td>'+
                '<td>'+response[i].tahun_terbit+'</td>'+
                '<td>'+response[i].stok+'</td>'+
                '<td>'+response[i].kategori+'</td>'+
                '<td><button class="btn btn-warning" onclick="tampilData(\''+response[i].id_buku+'\')"><i class="fa fa-edit"></i></button></td>'+ //dom html
              '</tr>'
            );
          }
          }
        });

      // $.ajax({
      //     url: "<?php echo base_url('index.php/getDataPengarang') ?>",
      //     type: "GET",
      //     dataType: "json",
      //     success: function(response){
      //      $('#pengarang').html();
      //      $('#pengarang').append('<option>Pilih</option>');
      //      for (var i=0; i<response.length; i++){ //looping data
        
      //      	$('#pengarang').append('<option value='+response[i].id_pengarang+'>'+response[i].nama_pengarang+'</option>');
      //     }
      //  }
      //   });

        $.ajax({
          url: "<?php echo base_url('index.php/getDataPengarang') ?>",
          type: "GET",
          dataType: "json",
          success: function(response){
          $('#pengarang,#ubah_pengarang').empty(); //'id_buku*=pengarang' jika tanda ^ maka depanya harus kata ...
          $('#pengarang,#ubah_pengarang').append('<option>Pilih Pengarang</option>');
          for (var i=0; i<response.length; i++){ //looping data
                $('#pengarang,#ubah_pengarang').append(
                  '<option value ='+response[i].id_pengarang+'>'+response[i].nama_pengarang+'</option>'
                );
              }
          }
        });
        
    
      //   $.ajax({
      //     url: "<?php echo base_url('index.php/getDataPenerbit') ?>",
      //     type: "GET",
      //     dataType: "json",
      //     success: function(response){
      //      $('#penerbit').html();
      //      $('#penerbit').append('<option>Pilih</option>');
      //      for (var i=0; i<response.length; i++){ //looping data
        
      //      	$('#penerbit').append('<option value='+response[i].id_penerbit+'>'+response[i].nama_penerbit+'</option>');
      //     }
      //  }
      //   });

        $.ajax({
          url: "<?php echo base_url('index.php/getDataPenerbit') ?>",
          type: "GET",
          dataType: "json",
          success: function(response){
          $('#penerbit,#ubah_penerbit').empty(); //'id_buku*=pengarang' jika tanda ^ maka depanya harus kata ...
          $('#penerbit,#ubah_penerbit').append('<option>Pilih Penerbit</option>');
          for (var i=0; i<response.length; i++){ //looping data
                $('#penerbit,#ubah_penerbit').append(
                  '<option value ='+response[i].id_penerbit+'>'+response[i].nama_penerbit+'</option>'
                );
          }
          }
        });
        

      //   $.ajax({
      //     url: "<?php echo base_url('index.php/getDataKategori') ?>",
      //     type: "GET",
      //     dataType: "json",
      //     success: function(response){
      //      $('#kategori').html();
      //      $('#kategori').append('<option>Pilih</option>');
      //      for (var i=0; i<response.length; i++){ //looping data
        
      //      	$('#kategori').append('<option value='+response[i].id_kategori+'>'+response[i].kategori+'</option>');
      //     }
      //  }
      //   });

        $.ajax({
          url: "<?php echo base_url('index.php/getDataKategori') ?>",
          type: "GET",
          dataType: "json",
          success: function(response){
          $('#kategori,#ubah_kategori').empty(); //'id_buku*=pengarang' jika tanda ^ maka depanya harus kata ...
          $('#kategori,#ubah_kategori').append('<option>Pilih Kategori</option>');
          for (var i=0; i<response.length; i++){ //looping data
                $('#kategori,#ubah_kategori').append(
                  '<option value ='+response[i].id_kategori+'>'+response[i].kategori+'</option>'
                );
          }
          }
        });

				$('#keyword').on('keyup',function(){
          filterData($('#filter_by').val(),$(this).val());
        });

				$('#keyword').on('keyup',function(){
          filterMulti($(this).val());
        });

				function filterData(filter_by,keyword){
        if (keyword == '') keyword = '0';
        $.ajax({
          url: "<?php echo base_url('index.php/filterData/') ?>"+filter_by+'/'+keyword, //ini model penulisan parameter dalam js
          type: "GET",
          dataType: "json",
          success: function(response){
          $('#data_buku').html('');
          for (var i=0; i<response.length; i++){
        
            $('#data_buku').append(
              '<tr>'+
                '<td>'+(i+1)+'</td>'+
                '<td>'+response[i].id_buku+'</td>'+
                '<td>'+response[i].judul_buku+'</td>'+
                '<td>'+response[i].nama_pengarang+'</td>'+
                '<td>'+response[i].nama_penerbit+'</td>'+
                '<td>'+response[i].tahun_terbit+'</td>'+
                '<td>'+response[i].stok+'</td>'+
                '<td>'+response[i].kategori+'</td>'+
								'<td><button class="btn btn-warning" onclick="tampilData(\''+response[i].id_buku+'\')"><i class="fa fa-edit"></i></button></td>'+ //dom html
              '</tr>'
            );
          }
          }
        });

        $('#keyword').on('keyup',function(){
          filterMulti($('#keyword').val(),$(this).val());
        });
				function filterMulti(keyword){
        if (keyword == '') keyword = '0';
        $.ajax({
          url: "<?php echo base_url('index.php/filterMulti/') ?>"+keyword, //ini model penulisan parameter dalam js
          type: "GET",
          dataType: "json",
          success: function(response){
          $('#data_buku').html('');
          for (var i=0; i<response.length; i++){
        
            $('#data_buku').append(
              '<tr>'+
                '<td>'+(i+1)+'</td>'+
                '<td>'+response[i].id_buku+'</td>'+
                '<td>'+response[i].judul_buku+'</td>'+
                '<td>'+response[i].nama_pengarang+'</td>'+
                '<td>'+response[i].nama_penerbit+'</td>'+
                '<td>'+response[i].tahun_terbit+'</td>'+
                '<td>'+response[i].stok+'</td>'+
                '<td>'+response[i].kategori+'</td>'+
								'<td><button class="btn btn-warning" onclick="tampilData(\''+response[i].id_buku+'\')"><i class="fa fa-edit"></i></button></td>'+ //dom html
              '</tr>'
            );
          }
          }
        });
				}
  });
</script>

</body>
</html>
