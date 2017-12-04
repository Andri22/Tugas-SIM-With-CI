	
	<div class="col-md-9 col-centered">
		<div class="panel panel-default" >
		 <div class="panel-body">
		 	<form class="form-horizontal" id="form_transaksi" role="form">
	      	<div class="col-md-8">
			   
	      		<div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="tgl_transaksi">Tgl.Transaksi :</label>
			      <div class="col-md-5">
			        <input type="text" class="form-control" 
			        	name="tgl_transaksi" value="<?= date('d-m-Y') ?>" 
			        	readonly="readonly">
			      </div>
			    </div> 
			    <div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="id_Kendaraan">Id Kendaraan :</label>
			      <div class="col-md-5">
			        <input list="list_Kendaraan" class="form-control reset" 
			        	placeholder="Isi id Kendaraan" name="id_Kendaraan" id="id_Kendaraan" 
			        	autocomplete="off">
			      </div>
			      <div class="col-md-1">
			      <button type="button" class="btn btn-primary" 
                  id="Cari" style="background-color: #0E7A67">
                     Cari</button>
		          </div>
			    </div>
			    <div id="Kendaraan">
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="nama_Kendaraan">Nama Kendaraan :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="nama_Kendaraan" id="nama_Kendaraan" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="harga_Kendaraan">Harga (Rp) :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="harga_Kendaraan" id="harga_Kendaraan" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="qty">Lama Sewa (Hari) :</label>
				      <div class="col-md-4">
				        <input type="number" class="form-control reset" 
				        	autocomplete="off" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" id="qty" min="0" 
				        	name="qty" placeholder="lama..">
				      </div>
				    </div>
			    </div><!-- end id Kendaraan -->

			    <div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="sub_total">Sub-Total (Rp):</label>
			      <div class="col-md-8">
			        <input type="text" class="form-control reset" 
			        	name="sub_total" id="sub_total" 
			        	readonly="readonly">
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-md-offset-3 col-md-3">
			      		<button type="button" class="btn btn-primary" 
			      		id="tambah" style="background-color: #0E7A67">
			      		   Tambah</button>
			    	</div>
			    </div>
			      
	      	</div><!-- end col-md-8 -->