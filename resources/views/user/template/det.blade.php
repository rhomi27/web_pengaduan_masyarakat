<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-8">
                <div class="swiper-slide">
                    @if (strpos($detail->foto, '.mp4') !== false)
                        <video controls style="max-width: 800px; max-height:600px; height:100%; width:100%;">
                            <source src="{{ asset('media/videos/' . $detail->foto) }}" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    @else
                        <img class="img-fluid" style="max-width: 800px; width:100%; max-height:800px; height:100%; object-fit:contain;"
                            src="{{ asset('media/' . $detail->foto) }}" alt="" />
                    @endif
                </div>
            </div>

            <div class="col-md-4">
                <div class="portfolio-info bg-primary-subtle">
                    <h3>{{ $detail->judul }}</h3>
                    <ul>
                        <li><strong>Kategori</strong>: {{ $detail->kategori->nama_kategori }}</li>
                        <li><strong>Tanggal</strong>: {{ $detail->created_at->format('d F, Y') }}</li>
                        <li><strong>Status</strong>:
                            @if ($detail->status == 'new')
                                <span class="badge bg-primary bg-opacity-50 text-wrap">{{ $detail->status }}</span>
                            @elseif ($detail->status == 'proses')
                                <span class="badge bg-success bg-opacity-50 text-wrap">{{ $detail->status }}</span>
                            @elseif ($detail->status == 'selesai')
                                <span class="badge bg-info bg-opacity-50 text-wrap">{{ $detail->status }}</span>
                            @else
                                <span class="badge bg-danger bg-opacity-50 text-wrap">{{ $detail->status }}</span>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Deskripsi
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        {{ $detail->isi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/index" class="btn btn-outline-info mt-4 "><i class="fi fi-ts-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
