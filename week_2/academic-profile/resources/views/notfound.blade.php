<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --blue-deep: #0b4f73;
            --teal: #14877d;
            --mint: #5fd9c6;
            --ink: #122024;
            --paper: #fdfefe;
            --muted: #5c7079;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--ink);
            background: linear-gradient(135deg, var(--blue-deep) 0%, var(--teal) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .card {
            background: var(--paper);
            border-radius: 20px;
            padding: 3rem 2.5rem;
            max-width: 440px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 50px -20px rgba(11, 79, 115, 0.5);
        }

        .code {
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.02em;
            color: var(--teal);
            background: #e8f6f4;
            display: inline-block;
            padding: 0.35rem 0.9rem;
            border-radius: 999px;
            margin-bottom: 1.25rem;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 0.75rem;
        }

        p {
            font-size: 0.95rem;
            color: var(--muted);
            line-height: 1.6;
            margin: 0 0 1.75rem;
        }

        .back-link {
            display: inline-block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #ffffff;
            background: var(--teal);
            padding: 0.7rem 1.6rem;
            border-radius: 999px;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .back-link:hover {
            background: var(--blue-deep);
        }
    </style>
</head>
<body>

    <div class="card">
        <span class="code">404</span>
        <h1>Halaman Tidak Ditemukan</h1>
        <p>
            Alamat yang Anda tuju tidak tersedia. Periksa kembali tautannya,
            atau kembali ke halaman utama.
        </p>
        <a class="back-link" href="{{ route('home') }}">Kembali ke Beranda</a>
    </div>

</body>
</html>