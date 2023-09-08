{{-- <section
        id="masuk"
        class="services section-bg"
      >
        <div class="container">
          <div class="section-title">
            <span>Masuk dan Daftar</span>
            <h2>Masuk dan Daftar</h2>
            <p>
              Ayo daftar dan login lalu mengadulah sepuasmu sampai pemerintah
              mendengar suara rakyat
            </p>
            @if(session()->has('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
            @if(session()->has('gagal'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          </div>
          
          <!-- login -->
          <div class="row justify-content-start gy-3">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card bg-primary bg-opacity-10">
                <div class="card-body">
                  <h3 class="card-title text-center">Masuk</h3>
                  <form action="/login" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="mail">Email</label>
                      <input type="text" name="textEmail" class="form-control login-input @error('textEmail') is-invalid
                      @enderror" id="mail" placeholder="Masukan Nama Anda">
                      @error('Emailtext')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Kata Sandi</label>
                      <input type="password" name="textPassword" class="form-control login-input @error('textPassword') is-invalid
                      @enderror" id="password" placeholder="Masukan Kata Sandi Anda">
                      @error('Passwordtext')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-5 right">Masuk</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- registrasi -->
            <div class="col-lg-8 col-md-8 mb-4">
              <div class="card bg-primary bg-opacity-10">
                <div class="card-body">
                  <h3 class="card-title text-center">Daftar</h3>
                  <form action="/regis" method="post">
                    @csrf
                        <div class="form-group mb-4">
                          <label for="nik">Nik</label>
                          <input type="text" name="textNik"
                          class="form-control regis-input @error('textNik') is-invalid
                          @enderror" id="nik" placeholder="Masukan Nik Anda" required>
                          @error('textNik')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group mb-4">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" name="textNama"
                          class="form-control regis-input" id="nama" placeholder="Masukan Nama Anda" required>
                        </div>
                        <div class="form-group mb-4">
                          <label for="alamat">Alamat</label>
                          <input type="text" name="textAlamat"
                          class="form-control regis-input" id="alamat" placeholder="Masukan Alamat Anda" required>
                        </div>
                        <div class="form-group mb-4">
                          <label for="jk">Jenis Kelamin</label>
                          <select name="JK" class="form-control regis-input" id="jk" required>
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                          </select>
                        </div>
                        <div class="form-group mb-4">
                          <label for="email">Email</label>
                          <input type="email" name="textEmail"
                          class="form-control regis-input  @error('textEmail') is-invalid
                          @enderror" id="email" placeholder="Masukan Email Anda" required>
                          @error('textEmail')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group mb-4">
                          <label for="sandi">Kata Sandi</label>
                          <input type="password" name="textPassword"
                          class="form-control regis-input  @error('textPassword') is-invalid
                          @enderror" id="sandi" placeholder="Masukan Kata Sandi Anda" required>
                          @error('textPassword')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                    <button type="submit" class="btn btn-primary btn-block mt-5 right">Daftar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      
          <!-- end register -->
          </div>
        </div>
      </section> --}}