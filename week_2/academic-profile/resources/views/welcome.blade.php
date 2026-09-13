<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Profil Akademik</title>
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

        .hero {
            position: relative;
            min-height: 78vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem 1.5rem 8rem;
            overflow: hidden;
            background: linear-gradient(135deg, var(--blue-deep) 0%, var(--teal) 100%);
        }

        .blob {
            position: absolute;
            border-radius: 44% 56% 61% 39% / 51% 44% 56% 49%;
            filter: blur(2px);
            opacity: 0.35;
        }

        .blob-1 {
            width: 420px;
            height: 420px;
            top: -140px;
            right: -100px;
            background: rgba(95, 217, 198, 0.45);
        }

        .blob-2 {
            width: 320px;
            height: 320px;
            bottom: -160px;
            left: -80px;
            background: rgba(11, 79, 115, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 640px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 1.5rem;
        }

        .eyebrow-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--mint);
        }

        h1 {
            font-size: clamp(2.2rem, 5vw, 3.2rem);
            font-weight: 800;
            line-height: 1.15;
            color: #ffffff;
            margin: 0 0 1rem;
        }

        .hero-sub {
            font-size: 1.1rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.88);
            line-height: 1.6;
            margin: 0;
        }

        /* Profile card, overlapping the hero */
        .profile-card {
            position: relative;
            z-index: 2;
            max-width: 640px;
            margin: -6rem auto 4rem;
            background: var(--paper);
            border-radius: 20px;
            padding: 2.5rem;
            display: flex;
            gap: 1.75rem;
            align-items: center;
            box-shadow: 0 20px 50px -20px rgba(11, 79, 115, 0.35);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .profile-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 28px 60px -18px rgba(11, 79, 115, 0.4);
        }

        .profile-photo {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
            border: 3px solid var(--mint);
        }

        .profile-info h2 {
            font-size: 1.35rem;
            font-weight: 700;
            margin: 0 0 0.25rem;
        }

        .profile-dept {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--teal);
            margin: 0 0 0.6rem;
        }

        .profile-bio {
            font-size: 0.95rem;
            color: var(--muted);
            line-height: 1.55;
            margin: 0;
        }

        @media (max-width: 560px) {
            .profile-card {
                flex-direction: column;
                text-align: center;
                margin-top: -4rem;
                padding: 2rem 1.5rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .profile-card { transition: none; }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>

        <div class="hero-content">
            <span class="eyebrow">
                <span class="eyebrow-dot"></span>
                Profil Akademik
            </span>
            <h1>Selamat Datang di Halaman Saya</h1>
            <p class="hero-sub">
                Ruang digital untuk mengenal saya lebih dekat sebagai bagian dari
                civitas akademika ITS.
            </p>
        </div>
    </section>

    <div class="profile-card">
        <img
            class="profile-photo"
            src="https://placehold.co/200x200/0b4f73/ffffff?text=Foto"
            alt="Foto profil mahasiswa"
        >
        <div class="profile-info">
            <h2>Riyan Fadli Amazzadin</h2>
            <p class="profile-dept">Teknik Informatika &middot; Angkatan 2024</p>
            <p class="profile-bio">
                Mahasiswa yang tertarik pada robotika dan kecerdasan buatan. Merupakan anggota dari tim ICHIRO ITS
            </p>
        </div>
    </div>

</body>
</html>