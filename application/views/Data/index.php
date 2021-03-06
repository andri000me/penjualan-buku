<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="btn-insert" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-book fa-sm text-white-50"></i> Tambah Buku</a>
          </div>

          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <div class="flashdatadanger" data-flashdatadanger="<?= $this->session->flashdata('danger') ?>"></div>
          <div class="flashdatasuccess" data-flashdatasuccess="<?= $this->session->flashdata('success') ?>"></div>



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Cover Buku</th>
                      <th>Nama Buku</th>
                      <th>Stok</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php $i = 1; ?>
                    <?php foreach ($data_buku as $buku ): ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td><img src="<?= BASE_URL('assets/img/buku/') . $buku['image'] ?>" class="img-buku" width="100"></td>
                        <td><?= $buku['nama_buku'] ?></td>
                        <td><?= $buku['stok'] ?></td>
                        <td>
                          <a href="#" data-id="<?= $buku['id'] ?>" data-image="<?= $buku['image'] ?>" class="badge badge-dark update-buku" data-toggle="modal" data-target="#exampleModal">Ubah</a>
                          <a href="" class="badge badge-danger delete-buku" data-id="<?= $buku['id'] ?>">Delete</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                    
                  </tbody>
                </table>
              </div>
              <div class="pagination float-right mt-3">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="image"><b>Gambar Buku</b></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="image" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">                    
                        <label class="custom-file-label" id="label-image" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <input type="hidden" name="id" value="" id="id-buku">
                  <input type="hidden" name="image" value="" id="input-image">
                   <input type="hidden" name="extension" value="" id="input-extension">

                  <label for="exampleInputEmail1">Nama Buku</label>
                  <input type="text" class="form-control" id="nama" placeholder="Input Buku..." name="nama" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Buku</label>
                  <input type="number" min="1000" class="form-control" id="harga" placeholder="Input Harga..." name="harga" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Stok</label>
                  <input type="number" min="1" class="form-control" id="stok" placeholder="Input Stok..." name="stok" required>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="insert" class="btn btn-primary" id="submit-insert">Save changes</button>
            </form>
            </div>
          </div>
        </div>
      </div>