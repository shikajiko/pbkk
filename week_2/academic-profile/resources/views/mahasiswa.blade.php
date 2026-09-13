<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
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
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--ink);
            background: var(--paper);
        }

        .topbar {
            padding: 2.5rem 1.5rem 5rem;
            text-align: center;
            background: linear-gradient(135deg, var(--blue-deep) 0%, var(--teal) 100%);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 0.75rem;
        }

        .eyebrow-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--mint);
        }

        .topbar h1 {
            font-size: clamp(1.6rem, 4vw, 2.2rem);
            font-weight: 800;
            color: #ffffff;
            margin: 0;
        }

        .page-wrap {
            max-width: 720px;
            margin: -3.5rem auto 4rem;
            padding: 0 1.5rem;
        }

        .profile-card {
            background: var(--paper);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 50px -20px rgba(11, 79, 115, 0.35);
            text-align: center;
        }

        .profile-photo {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--mint);
            margin-bottom: 1.25rem;
        }

        .profile-card h2 {
            font-size: 1.6rem;
            font-weight: 700;
            margin: 0 0 0.35rem;
        }

        .profile-dept {
            font-size: 1rem;
            font-weight: 600;
            color: var(--teal);
            margin: 0 0 1.5rem;
        }

        .detail-box {
            text-align: left;
            background: #f2f7f7;
            border-radius: 14px;
            padding: 1.5rem 1.75rem;
            margin-bottom: 1.5rem;
        }

        .detail-box h3 {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--blue-deep);
            margin: 0 0 0.6rem;
        }

        .detail-box p {
            font-size: 0.95rem;
            color: var(--muted);
            line-height: 1.65;
            margin: 0;
        }

        .motto {
            position: relative;
            text-align: left;
            padding: 0.25rem 0 0.25rem 1.5rem;
            border-left: 3px solid var(--mint);
        }

        .motto p {
            font-size: 1.05rem;
            font-style: italic;
            color: var(--ink);
            line-height: 1.6;
            margin: 0;
        }

        .not-found {
            background: var(--paper);
            border-radius: 20px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 20px 50px -20px rgba(11, 79, 115, 0.35);
        }

        .not-found .icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 1.25rem;
            border-radius: 50%;
            background: #f2f7f7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--teal);
        }

        .not-found h2 {
            font-size: 1.3rem;
            font-weight: 700;
            margin: 0 0 0.5rem;
        }

        .not-found p {
            font-size: 0.95rem;
            color: var(--muted);
            margin: 0;
        }

        @media (max-width: 560px) {
            .profile-card, .not-found {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>

    @php
        $nrpTerdaftar = '5025241068';
        $ditemukan = ($nrp === $nrpTerdaftar);
    @endphp

    <div class="topbar">
        <span class="eyebrow">
            <span class="eyebrow-dot"></span>
            Profil Mahasiswa
        </span>
        <h1>Pencarian NRP: {{ $nrp }}</h1>
    </div>

    <div class="page-wrap">
        @if ($ditemukan)
            <div class="profile-card">
                <img
                    class="profile-photo"
                    src="https://placehold.co/320x320/0b4f73/ffffff?text=Foto"
                    alt="Foto profil mahasiswa"
                >
                <h2>Riyan Fadli Amazzadin</h2>
                <p class="profile-dept">Teknik Informatika &middot; Angkatan 2024</p>

                <div class="detail-box">
                    <h3>Tentang Saya</h3>
                    <p>
                        Mahasiswa yang tertarik pada robotika dan kecerdasan buatan.
                        Merupakan anggota dari tim ICHIRO ITS, aktif mengembangkan
                        proyek-proyek yang menggabungkan sistem cerdas dengan
                        perangkat keras.
                    </p>
                </div>

                <div class="motto">
                    <p>&ldquo;Semesta akan membantu mereka yang berusaha.&rdquo;</p>
                </div>
            </div>
        @else
            <div class="not-found">
                <div class="icon">?</div>
                <h2>NRP Tidak Ditemukan</h2>
                <p>Tidak ada profil mahasiswa yang cocok dengan NRP {{ $nrp }}.</p>
            </div>
        @endif
    </div>

</body>
</html>