<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-0">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title">Tanggapan</h5>
                        <form action="/komen" method="post">
                            @csrf
                            <input type="hidden" name="pengaduan_id" value="{{ $detail->id }}">
                            <div class="input-group mb-3 mt-3 w-50">
                                <div class="form-floating">
                                    <input name="tanggapan" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" aria-describedby="button-addon2">
                                    <label for="floatingTextarea">Tanggapan</label>
                                </div>
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                                        class="bi bi-send"></i> Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        @foreach ($tanggapan as $coment)
                            <div class="media">
                                <img src="{{ asset('ppuser/' . $coment->user->foto) }}" class="foto mr-3 rounded-circle"
                                    alt="Profil">
                                <div class="media-body">
                                    <h6 class="mt-2 badge bg-info">{{ $coment->user->nama }}</h6>
                                    <p class="fw-light"><small>{{ $coment->user->role }}</small></p>
                                    <p>{{ $coment->tanggapan }}</p>
                                </div>
                                <div class="media-footer">
                                    <p class="fw-light">{{ $coment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                    <div class="card-footer bg-info">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
