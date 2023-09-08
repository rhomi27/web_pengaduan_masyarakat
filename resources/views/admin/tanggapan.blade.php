<div class="card-footer">
    <div class="card">
        <h5 class="card-header">Tanggapan</h5>
        <div class="card-body">
            @foreach ($tanggapan as $item)
                @if ($item->user_id == $id)
                    <div class="row">
                        <div class="col-md">
                            <div class="float-right w-100">
                                <div class="float-right">
                                    <p>
                                        <img src="{{ asset('ppuser/' . $item->user->foto) }}" alt="pp"
                                            style="width: 50px; height:50px; object-fit:cover; border:2px solid blue;"
                                            class="img-fluid rounded-circle float-right">
                                        <span class="badge bg-info float-right mx-3 my-3">{{ $item->user->nama }}</span>
                                    </p>
                                    <div style="clear: both;">
                                    </div>
                                    <p class="my-4">
                                        <hr>
                                        {{ $item->tanggapan }}
                                        <hr>
                                    </p>
                                    <p class="fw-light float-right">
                                        <small>
                                            {{ $item->created_at->diffForHumans() }}</small>
                                    </p>
                                    <p class="float-left"> <a class="text-decoration-none"
                                            href="/hapuskomen/{{ $item->id }}"><i class="fi-sr-trash"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md">
                            <div class="float-left w-100">
                                <div class="float-left">
                                    <p>
                                        <img src="{{ asset('ppuser/' . $item->user->foto) }}" alt="pp"
                                            style="width: 50px; height:50px; object-fit:cover; border:2px solid blue;"
                                            class="img-fluid rounded-circle float-left">
                                        <span class="badge bg-info float-right mx-3 my-2">{{ $item->user->nama }}</span>
                                    </p>
                                    <div style="clear: both;">
                                    </div>
                                    <p class="my-4">
                                        <hr>
                                        {{ $item->tanggapan }}
                                        <hr>
                                    </p>
                                    <p class="float-left">
                                        <small> {{ $item->created_at->diffForHumans() }}</small>
                                    </p>
                                    <p class="float-right"> <a class="text-decoration-none"
                                            href="/hapuskomen/{{ $item->id }}"><i class="fi-sr-trash"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <div class="row-cols-md-0">
            <div class="col-md-6">
                <form action="/kirimtanggapan" method="post">
                    @csrf
                    <input type="hidden" value="{{ $detail->id }}" name="pengaduan_id" id="pengaduan_id">
                    <div class="input-group mb-3">
                        <input name="tanggapan" type="text" class="form-control" placeholder="Isi Tanggapan Anda..."
                            aria-label="Isi Tanggapan Anda..." aria-describedby="button-addon2" />
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                            <i class="bi bi-send"></i>
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
