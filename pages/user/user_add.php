<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Tambah User</h5>
      </div>
      <div class="card-body ">
        <form action="pages/user/user_proses.php?aksi=insert" method="POST">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Username</label>
                <input id="inputText3" name="username" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Password</label>
                <input id="inputText3" name="password" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Nama Depan</label>
                <input id="inputText3" name="firstname" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Nama Belakang</label>
                <input id="inputText3" name="lastname" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Gelar Depan</label>
                <input id="inputText3" name="gelar_depan" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Gelar Belakang</label>
                <input id="inputText3" name="gelar_belakang" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Email</label>
                <input id="inputText3" name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="role" class="col-form-label">Role</label>
                <select class="form-control" name="role">
                    <option value="">-- Pilih Role --</option>
                    <option value="superadmin">Superadmin</option>
                    <option value="admin">Administrator</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required="required">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="male">Pria</option>
                    <option value="female">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Alamat</label>
                <textarea id="inputText3" name="alamat" type="text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">No. Telepon</label>
                <input id="inputText3" name="no_telepon" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Unit</label>
                <input id="inputText3" name="unit" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Jabatan</label>
                <input id="inputText3" name="jabatan" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>