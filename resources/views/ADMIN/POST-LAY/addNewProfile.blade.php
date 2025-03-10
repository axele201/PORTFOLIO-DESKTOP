<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="NewProfile">
        <div class="card card-solidNewProf">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div><!-- /.card-header -->

                <!-- form start -->
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNama">Nama</label>
                            <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDeskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleInputDeskripsi" name="deskripsi" placeholder="Deskripsi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPendidikan1">Pendidikan 1</label>
                            <input type="text" class="form-control" id="exampleInputPendidikan1" name="pendidikan1" placeholder="Pendidikan 1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPendidikan2">Pendidikan 2</label>
                            <input type="text" class="form-control" id="exampleInputPendidikan2" name="pendidikan2" placeholder="Pendidikan 2" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPendidikan3">Pendidikan 3</label>
                            <input type="text" class="form-control" id="exampleInputPendidikan3" name="pendidikan3" placeholder="Pendidikan 3" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAlamat">Alamat Domisili</label>
                            <input type="text" class="form-control" id="exampleInputAlamat" name="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputWhatsapp">Nomor Telepon</label>
                            <input type="text" class="form-control" id="exampleInputWhatsapp" name="whatsapp" placeholder="Whatsapp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input (Only JPG, PNG, PDF allowed)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file" accept=".jpg,.jpeg,.png,.pdf" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check1" required>
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</div>
