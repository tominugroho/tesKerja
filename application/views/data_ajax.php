<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<!-- <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

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

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p id="tampilajax">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>DATA AJAX</h2>

        <h7>Tampilkan Berdasarkan :</h7>
        <select class="form-control">
        	<option value=''>-- Pilih --</option>
        	<option value='id_wilayah'>Wilayah</option>
        	<option value='kategori'>Kategori</option>
        	<option value='merk'>Merk</option>
        </select>
        <input type="text" class="form-control" id='id_wilayah' placeholder='Enter number'></select>
        
        <table id="table_ajax" class="table table-striped table-hover" width="100%">
        	<thead>
        		<th>No.</th>
        		<th>Id Wilayah</th>
        		<th>Kategori</th>
        		<th>Nama Produk</th>
        		<th>Merk</th>
        		<th>Satuan</th>
        		<th>Harga Dasar</th>
        	</thead>
        	<tbody id="data_ajax">
        		
        	</tbody>
        </table>
      </div>
      

    </div>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
  <p>&copy; Company 2017-2019</p>
</footer>
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    $.ajax({
      url: "https://estimator.id/material/api/getKatalogProdukPopuler/0",
      type: "GET",
      dataType: "json",
      success: function(response){
       $('#data_ajax').html();
       for (var i=0; i<response.length; i++){
     
       	$('#data_ajax').append(
	       	'<tr>'+
		       	'<td>'+(i+1)+'</td>'+
		       	'<td>'+response[i].id_wilayah+'</td>'+
		       	'<td>'+response[i].kategori+'</td>'+
		       	'<td>'+response[i].nama_produk+'</td>'+
		       	'<td>'+response[i].merk+'</td>'+
		       	'<td>'+response[i].satuan+'</td>'+
		       	'<td>'+response[i].harga_dasar+'</td>'+
	       	'</tr>'
       	);
      }
 	 }
    });
  });
</script>

</body>
</html>
