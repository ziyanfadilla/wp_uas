 <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Customer</h1>
</div>

<div class="cotainer">
    <div class="row mt-4 mb-4">
        <div class="cool-md-6">
            <button class="btn btn-primary mb-4 btn-tambah" data-toggle="modal" data-target="#v_pembeli">Tambah	data customer</button>
        </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-striped" id="table-data">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Masker</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Tanggal Pembelian</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Email</th>
                <th colspan="">Aksi</th>
            </tr>

        </thead>
        <tbody id="tbody-table">
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="v_pembeli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data Customer </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url(). 'admin/Data_pembeli/tambah_aksi';?>" method="POST"
						enctype="multipart/form-data">

						<div class="form-group">
							<label>Nama Pembeli</label>
							<input type="hidden" name="id_pembeli" id="id_pembeli">
							<input type="text" name="nama" class="form-control form-control-sm" id="nama">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control  form-control-sm"
								id="alamat">
						</div>

						<div class="form-group">
							<label>Nama Masker </label>
							<input type="text" name="nama_masker" class="form-control  form-control-sm" id="nama_masker">
						</div>

						<div class="form-group">
							<label>Jumlah Barang</label>
							<input type="text" name="jumlah_barang" class="form-control  form-control-sm"
								id="jumlah_barang">
						</div>

						<div class="form-group">
							<label>Tanggal Pembelian</label>
							<input type="date" name="tanggal_pembelian" class="form-control  form-control-sm" id="tanggal_pembelian">
						</div>

						<div class="form-group">
							<label>Total Harga</label>
							<input type="text" name="total_harga" class="form-control  form-control-sm" id="total_harga">
                        </div>
                        
                        <div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control  form-control-sm" id="email">
						</div>


				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				</form>

			</div>
		</div>
</div>


<script>
$(document).ready(function () {
	
	console.log('<?php echo base_url()?>admin/Data_pembeli/getAllPembeli');
	//Ajax tampildata
	function getAllPembeli(){
		$.ajax({
			type:'GET',
			url : '<?php echo base_url()?>admin/Data_pembeli/getAllPembeli',
			async : true,
			dataType : 'json',
			success : function(data){
				console.log(data.results);
				let html = '';
				let i;
				for(i = 0; i<data.results.pembeli.length; i++){
					html += `
						<tr>
							<td>${data.results.pembeli[i].nama}</td>
							<td>${data.results.pembeli[i].alamat}</td>
							<td>${data.results.pembeli[i].nama_masker}</td>
							<td>${data.results.pembeli[i].jumlah_barang}</td>
							<td>${data.results.pembeli[i].tanggal_pembelian}</td>
							<td>${data.results.pembeli[i].total_harga}</td>
							<td>${data.results.pembeli[i].email}</td>
							<td>
								<button class="btn btn-warning btn-sm btn-edit" data-id="${data.results.pembeli[i].id_pembeli}">
									<i class="fas fa-edit"></i>									
								</button>

								<button class="btn btn-danger btn-sm" onclick="return deleteData(${data.results.pembeli[i].id_pembeli})">
									<i class="fas fa-trash"></i>
								</button>
							</td>
						</tr>
					`;
				}
				$('#table-data #tbody-table').html(html);
				$('#table-data').dataTable({"sAjaxDataProp":""})
			}
		})
	}

	getAllPembeli();
	//get edit data
	$('#tbody-table').on('click','.btn-edit',function(){
		let id_pembeli = $(this).attr('data-id');
		console.log(id_pembeli);
		$.ajax({
			type: 'GET',
			url : '<?php echo base_url()?>admin/Data_pembeli/getDataEdit/'+id_pembeli,
			dataType : 'json',
			success: function(data) {
				$('#v_pembeli').modal('show');
				$('#id_pembeli').val(data.results.pembeli[0].id_pembeli);
				$('#nama').val(data.results.pembeli[0].nama);
				$('#alamat').val(data.results.pembeli[0].alamat);
				$('#nama_masker').val(data.results.pembeli[0].nama_masker);
				$('#jumlah_barang').val(data.results.pembeli[0].jumlah_barang);
				$('#tanggal_pembelian').val(data.results.pembeli[0].tanggal_pembelian);
				$('#total_harga').val(data.results.pembeli[0].total_harga);
				$('#email').val(data.results.pembeli[0].email);
			}
		})
		return false;
	})
})

btnTambah = document.querySelector('.btn-tambah');
btnTambah.addEventListener('click', function (){
	document.querySelector('#id_pembeli').value = ''
	document.querySelector('#nama').value = ''
	document.querySelector('#alamat').value = ''
	document.querySelector('#nama_masker').value = ''
	document.querySelector('#jumlah_barang').value = ''
	document.querySelector('#tanggal_pembelian').value = ''
	document.querySelector('#total_harga').value = ''
	document.querySelector('#email').value = ''

})

const deleteData = (id) => {
	const url =  `<?php echo base_url()?>admin/Data_pembeli/hapus/${id}`
	swal({
		tittle : "Apa anda yakin ?",
		text : "Data akan dihapus secara permanen",
		icon : "warning",
		button : true,
		dangerMode : true,
	})
	.then((willDelete) => {
		if (willDelete){
			window.location.href = url;
		}
	});
} 
</script>