<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .article-title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .article-info {
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }
        .article-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section-content {
            font-size: 16px;
            text-align: justify;
            line-height: 1.6;
        }
        .section-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 20px;
        }
        .section-grid.left-column {
            grid-template-columns: 1fr;
        }
        .section-grid.right-column {
            grid-template-columns: 1fr;
        }
        .section-grid .article-section {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="article-title">{{ $artikel->judul }}</div>
        <div class="article-info">
            No. Artikel: {{ $artikel->noartikel }} | Penulis: {{ $artikel->penulis }} | Email: {{ $artikel->email }} | Institusi: {{ $artikel->intansi }} | Tanggal: {{ $artikel->tanggal }} | Jenis: {{ $artikel->jenis }}
        </div>

        <div class="article-section">
            <div class="section-title">Abstrak</div>
            <div class="section-content" style="text-align: justify;">{{ $artikel->abstrak }}</div>
        </div>

        <div class="article-section">
            <div class="section-title">Kata Kunci</div>
            <div class="section-content" style="text-align: center;">{{ $artikel->katakunci }}</div>
        </div>

        <div class="section-grid">
            <div class="section-grid left-column">
                <div class="article-section">
                    <div class="section-title">Latar Belakang</div>
                    <div class="section-content">{!! $artikel->latarbelakang !!}</div>
                </div>

                <div class="article-section">
                    <div class="section-title">Metode</div>
                    <div class="section-content">{!! $artikel->metode !!}</div>
                </div>

                <div class="article-section">
                    <div class="section-title">Hasil</div>
                    <div class="section-content">{!! $artikel->hasil !!}</div>
                </div>
            </div>

            <div class="section-grid right-column">
                <div class="article-section">
                    <div class="section-title">Pembahasan</div>
                    <div class="section-content">{!! $artikel->pembahasan !!}</div>
                </div>

                <div class="article-section">
                    <div class="section-title">Simpulan</div>
                    <div class="section-content">{!! $artikel->simpulan !!}</div>
                </div>

                <div class="article-section">
                    <div class="section-title">Saran</div>
                    <div class="section-content">{!! $artikel->saran !!}</div>
                </div>

                <div class="article-section">
                    <div class="section-title">Referensi</div>
                    <div class="section-content">{!! $artikel->referensi !!}</div>
                </div>
            </div>
        </div>

        <div class="footer">
            This article is generated using a template. &copy; {{ date('Y') }} Your Organization.
        </div>
    </div>
</body>
</html>
