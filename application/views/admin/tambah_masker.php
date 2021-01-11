<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Masker Organik</h1>
	</div>

	<div class="cotainer">
		<div class="row mt-4 mb-4">
			<div class="cool-md-6">
				<button class="btn btn-primary mb-4 btn-tambah" data-toggle="modal" data-target="#tambah_masker">Tambah	data masker</button>
			</div>
		</div>

		<?php echo $this->session->flashdata('pesan') ?>

		<table class="table table-striped" id="table-data">
			<thead>
				<tr>
					<th scope="col">Nama Masker</th>
					<th scope="col">Jenis Kulit</th>
					<th scope="col">Kategori</th>
					<th scope="col">Bahan Pembuatan</th>
					<th scope="col">Stok Barang</th>
					<th scope="col">Harga</th>
					<th colspan="">Aksi</th>
				</tr>

			</thead>
			<tbody id="tbody-table">
			</tbody>
		</table>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="tambah_masker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data Masker </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url(). 'admin/Data_masker/tambah_aksi';?>" method="POST"
						enctype="multipart/form-data">

						<div class="form-group">
							<label>Nama Masker</label>
							<input type="hidden" name="id_masker" id="id_masker">
							<input type="text" name="nama_masker" class="form-control form-control-sm" id="nama_masker">
						</div>

						<div class="form-group">
							<label>Jenis Kulit</label>
							<input type="text" name="jenis_kulit" class="form-control  form-control-sm"
								id="jenis_kulit">
						</div>

						<div class="form-group">
							<label>Kategori Masker </label>
							<input type="text" name="kategori" class="form-control  form-control-sm" id="kategori">
						</div>

						<div class="form-group">
							<label>Bahan Pembuatan</label>
							<input type="text" name="bahan_pembuatan" class="form-control  form-control-sm"
								id="bahan_pembuatan">
						</div>

						<div class="form-group">
							<label>Stok Barang</label>
							<input type="text" name="stok_barang" class="form-control  form-control-sm"
								id="stok_barang">
						</div>

						<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harga" class="form-control  form-control-sm" id="harga">
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
			getAllData();

			//AJAX TAMPIL DATA
			function getAllData(){
				$.ajax({
					type: 'GET',
					url: '<?php echo base_url()?>admin/Data_masker/getAllData',
					async: true,
					dataType: 'json',
					success: function(data){
						let html = '';
						let i;
						for(i = 0; i < data.results.masker.length; i++){
							html += `
								<tr>
									<td>${data.results.masker[i].nama_masker}</td>
									<td>${data.results.masker[i].jenis_kulit}</td>
									<td>${data.results.masker[i].kategori}</td>
									<td>${data.results.masker[i].bahan_pembuatan}</td>
									<td>${data.results.masker[i].stok_barang}</td>
									<td>${data.results.masker[i].harga}</td>
									<td>
										<button class="btn btn-warning btn-sm btn-edit" data-id="${data.results.masker[i].id}">
											<i class="fas fa-edit"></i>
										</button>
										<button class="btn btn-danger btn-sm" onclick="return deleteData(${data.results.masker[i].id})">
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

			//Get Data Edit
			$('#tbody-table').on('click','.btn-edit',function(){
				let id_masker = $(this).attr('data-id');
				$.ajax({
					type: 'GET',
					url: '<?php echo base_url()?>admin/Data_masker/getDataEdit/'+id_masker,
					dataType: 'json',
					success: function(data) {
						$('#tambah_masker').modal('show');
						$('#id_masker').val(data.results.masker[0].id);
						$('#nama_masker').val(data.results.masker[0].nama_masker);
						$('#jenis_kulit').val(data.results.masker[0].jenis_kulit);
						$('#kategori').val(data.results.masker[0].kategori);
						$('#bahan_pembuatan').val(data.results.masker[0].bahan_pembuatan);
						$('#stok_barang').val(data.results.masker[0].stok_barang);
						$('#harga').val(data.results.masker[0].harga);
					}
				})
				return false;
			})
		})

		
		btnTambah = document.querySelector('.btn-tambah');
		btnTambah.addEventListener('click', function () {
			document.querySelector('#id_masker').value = ''
			document.querySelector('#nama_masker').value = ''
			document.querySelector('#jenis_kulit').value = ''
			document.querySelector('#kategori').value = ''
			document.querySelector('#bahan_pembuatan').value = ''
			document.querySelector('#stok_barang').value = ''
			document.querySelector('#harga').value = ''
		})

		const deleteData = (id) => {
			const url = `<?php echo base_url()?>admin/Data_masker/hapus/${id}`
			swal({
					title: "Apa anda yakin?",
					text: "Data akan terhapus secara permanen!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						window.location.href = url;
					}
				});
		}

	</script>
