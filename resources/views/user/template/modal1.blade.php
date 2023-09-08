<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/edit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" value="{{ $user->nama }}" class="form-control regis-input"
                            id="nama" placeholder="nama" name="nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" value="{{ $user->alamat }}" class="form-control regis-input"
                            id="alamat" placeholder="alammat" name="alamat">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jk">Jenis Kelamin</label>
                       <select name="kelamin" id="jk" class="form-control regis-input">
                        <option value="{{ $user->kelamin }}">{{ $user->kelamin }}</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                       </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="text" value="{{ $user->email }}" class="form-control regis-input"
                            id="email" placeholder="email" name="email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="pw">Password</label>
                        <input type="password" class="form-control regis-input" placeholder="kata sandi"
                            id="pw" name="password">
                    </div>
                    <div class="input-group mb-3">
                        <input name="profile_picture" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Foto Profil</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
