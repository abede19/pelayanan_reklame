<style type="text/css">
	.table > thead:first-child > tr:first-child > th{
		text-align: center;
	}
	.table-bordered > tbody > tr > td{
		text-align: center;
	}
</style>
<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
  			<div class="row">
                <div class="col-md-12">
                    <div class="content-box">
                        <div class="content-box-wrapper">

                             <a href="<?php echo base_url('C_dashboard/tambah_gallery')?>"><button class="btn btn-alt btn-hover btn-primary">
                             	<span>Tambah Data</span>
                             	<i class="glyph-icon icon-arrow-right"></i>
                             </button></a>
								<table class="table table-bordered" style="margin-top: 10px;">
									<thead>
										<tr>
											<th>Gambar</th>
											<th>Judul Gambar</th>
											<th>Tangga Upload</th>
											<th>Keterangan</th>
											<th align="center">Aksi</th>
										</tr>
									</thead>
									<tbody align="center">
										<tr>
											<td>######</td>
											<td>######</td>
											<td>#####</td>
											<td>#####</td>
											<td>
					                              <button class="btn btn-alt btn-hover btn-primary">
					                             	<span>Hapus Data</span>
					                             	<i class="glyph-icon icon-arrow-right"></i>
					                             </button>
												 <button class="btn btn-alt btn-hover btn-primary" data-toggle="modal" data-target="#Edit">
					                             	<span>Edit Data</span>
					                             	<i class="glyph-icon icon-arrow-right"></i>
					                             </button>
					                             	<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								                        <div class="modal-dialog">
								                            <div class="modal-content">
								                               
								                                <div class="modal-body">
								                                    <form class="form-horizontal ">
														                <div class="form-group">
														                    <label class="col-sm-3 control-label">Nama</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control" >
														                    </div>
														                </div>
														                 <div class="form-group">
														                    <label class="col-sm-3 control-label">Alamat</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control">
														                    </div>
														                </div>
														                 <div class="form-group">
														                    <label class="col-sm-3 control-label">Pekerjaan</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control" >
														                    </div>
														                </div>
														                 <div class="form-group">
														                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control" >
														                    </div>
														                </div>
														                 <div class="form-group">
														                    <label class="col-sm-3 control-label">No. Telepon</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control" >
														                    </div>
														                </div>
														                 <div class="form-group">
														                    <label class="col-sm-3 control-label">Username</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control" >
														                    </div>
														                </div>
														                 <div class="form-group">
														                    <label class="col-sm-3 control-label">Password</label>
														                    <div class="col-sm-6">
														                        <input type="text" class="form-control" >
														                    </div>
														                </div>
														            </form>
								                                </div>
								                                <div class="modal-footer">
								                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								                                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
								                                </div>
								                            </div>
								                        </div>
								                    </div>
											</td>
										</tr>
									</tbody>
								</table>
                                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
        
