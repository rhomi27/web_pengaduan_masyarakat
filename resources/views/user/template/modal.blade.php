<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Pengaduan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/tambah" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control regis-input" id="judul"
                            placeholder="Isi Judul Pengaduan...">
                    </div>
                    <div class="form-group mb-1">
                        <label for="kateg">Kategori</label>
                        <select name="kategori_id" class="form-select regis-input" aria-label="Default select example"
                            id="kateg">
                            <option selected>Pilih Kategori</option>
                            @foreach ($dataKategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4 mt-4">
                        <label for="isi">Deskripsi</label>
                        <textarea name="isi" type="text" class="form-control regis-input" id="isi"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input name="foto" type="file" accept="image/*,video/*" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Lampiran</label>
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
<!-- end modal -->
