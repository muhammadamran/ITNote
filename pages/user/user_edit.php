<?php
$data = $db->query('SELECT * FROM tb_user WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Update User</h5>
      </div>
      <div class="card-body ">
        <form action="pages/user/user_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST">
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Username</label>
                <input id="inputText3" name="username" type="text" value="<?= $row['username'] ?>" class="form-control" readonly disabled>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Nama</label>
                <input id="inputText3" name="nama" type="text" value="<?= $row['nama'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Email</label>
                <input id="inputText3" name="email" type="email" value="<?= $row['email'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="role" class="col-form-label">Role</label>
                <select class="form-control" name="role">
                    <option value="<?= $row['role'] == 'admin' ? 'Administrator' : 'User' ?><"><?= $row['role'] == 'admin' ? 'Administrator' : 'User' ?></option>
                    <option>-- Pilih Role --</option>
                    <option value="admin" <?= $row['role'] == 'admin' ? 'selected' : '' ?>>Administrator</option>
                    <option value="user" <?= $row['role'] == 'user' ? 'selected' : '' ?>>User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Grade</label><select class="form-control" name="grade" required="required">
                    <option value="<?php echo $row['grade'];?>"><?php echo $row['grade'];?></option>
                    <option value="">-- Pilih Grade --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Usia</label>
                <select class="form-control" name="usia" required="required">
                    <option value="<?php echo $row['usia'];?>"><?php echo $row['usia'];?></option>
                    <option value="">-- Pilih Usia --</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Status Pernikahan</label>
                <select class="form-control" name="status_pernikahan" required="required">
                    <option value="<?php echo $row['status_pernikahan'];?>"><?php echo $row['status_pernikahan'];?></option>
                    <option value="">-- Pilih Status Pernikahan --</option>
                    <option value="1">Nikah</option>
                    <option value="2">Belum Menikah</option>
                    <option value="3">Janda</option>
                    <option value="4">Duda</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Indesk Predikat</label>
                <select class="form-control" name="indesk_predikat" required="required">
                    <option value="<?php echo $row['indesk_predikat'];?>"><?php echo $row['indesk_predikat'];?></option>
                    <option value="">-- Pilih Indesk Predikat --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Tingkat Kehadiran</label>
                <select class="form-control" name="kehadiran" required="required">
                    <option value="<?php echo $row['kehadiran'];?>"><?php echo $row['kehadiran'];?></option>
                    <option value="">-- Pilih Tingkat Kehadiran --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Rangking Kerja</label>
                <select class="form-control" name="rangking" required="required">
                    <option value="<?php echo $row['rangking'];?>"><?php echo $row['rangking'];?></option>
                    <option value="">-- Pilih Rangking Kerja --</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </div>
            <div class="form-group">
                <label for="iddept" class="col-form-label">Department</label>
                <select name="department" class="form-control">
                    <option value="<?= $row['department'] ?>"><?= $row['department'] ?></option>
                    <option value="">-- Pilih Department --</option>
                    <?php
                        //Membuat koneksi ke database 
                    $kon = mysqli_connect("localhost",'root',"","siranap");
                    if (!$kon){
                      die("Koneksi database gagal:".mysqli_connect_error());
                  }

                        //Perintah sql untuk menampilkan semua data pada tabel department
                  $sql="select * from department";

                  $hasil=mysqli_query($kon,$sql);
                  $no=0;
                  while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                    ?>
                    <option value="<?php echo $data['department'];?>"><?php echo $data['department'];?></option>
                    <?php 
                }
                ?>
            </select>
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