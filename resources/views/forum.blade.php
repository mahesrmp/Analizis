@extends('layout')

@section('title', 'Daftar Course - AnalyZis')

@section('content')

    <body class="bg-light">
        <section class="hero">
            <div class="container text-center py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="fw-bold">Forum Diskusi AnalyZis</h1>
                        <p class="lead">Bergabunglah dalam diskusi seputar tren teknologi, keterampilan terkini, dan peluang karier di dunia IT.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="card p-4 shadow-sm">
                <h2 class="mb-3">Buat Diskusi Baru</h2>
                <form id="diskusiForm">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori:</label>
                        <select id="kategori" class="form-select">
                            <option value="tren-skill">Tren Skill IT</option>
                            <option value="pelatihan">Pelatihan & Kursus</option>
                            <option value="karir">Karier & Lowongan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Diskusi:</label>
                        <input type="text" id="judul" class="form-control" placeholder="Masukkan judul diskusi"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="konten" class="form-label">Isi Diskusi:</label>
                        <textarea id="konten" class="form-control" placeholder="Tulis pertanyaan atau diskusi Anda..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>

            <h2 class="mt-5">Diskusi Terbaru</h2>
            <div id="daftarDiskusi">
                <div class="card p-3 mb-3 shadow-sm">
                    <h3 class="text-primary">Bagaimana cara mempelajari Machine Learning?</h3>
                    <p><strong>Kategori:</strong> Tren Skill IT</p>
                    <p>Apakah ada rekomendasi kursus terbaik untuk pemula?</p>
                    <button class="btn btn-outline-primary btn-sm reply-btn">Balas</button>
                    <span class="ms-2">👍 10</span>

                    <div class="reply-form d-none mt-3">
                        <textarea class="form-control reply-text" placeholder="Tulis balasan..."></textarea>
                        <button class="btn btn-success btn-sm mt-2 submit-reply">Kirim</button>
                    </div>

                    <div class="replies mt-3">
                        <h5>Balasan:</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Saya merekomendasikan kursus di Coursera! 🎓</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.reply-btn').click(function() {
                    $(this).siblings('.reply-form').toggleClass('d-none');
                });

                $('.submit-reply').click(function() {
                    let replyText = $(this).siblings('.reply-text').val();
                    if (replyText.trim() !== '') {
                        let replyList = $(this).closest('.card').find('.replies ul');
                        replyList.append(`<li class='list-group-item'>${replyText}</li>`);
                        $(this).siblings('.reply-text').val('');
                        $(this).parent().addClass('d-none');
                    }
                });
            });
        </script>
    </body>

    </html>

@endsection
