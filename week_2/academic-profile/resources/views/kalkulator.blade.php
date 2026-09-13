<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IPK</title>
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
            max-width: 640px;
            margin: -3.5rem auto 4rem;
            padding: 0 1.5rem;
        }

        .calc-card {
            background: var(--paper);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 50px -20px rgba(11, 79, 115, 0.35);
        }

        .ip-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.75rem;
        }

        .ip-box {
            background: #f2f7f7;
            border-radius: 14px;
            padding: 1.25rem;
            text-align: center;
        }

        .ip-box span {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--muted);
            margin-bottom: 0.4rem;
        }

        .ip-box strong {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--blue-deep);
        }

        .result-box {
            text-align: center;
            padding: 2rem 1.5rem;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--blue-deep) 0%, var(--teal) 100%);
            margin-bottom: 1.5rem;
        }

        .result-box span {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 0.5rem;
        }

        .result-box strong {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
        }

        .predikat {
            text-align: center;
            font-size: 0.95rem;
            color: var(--muted);
        }

        .predikat b {
            color: var(--ink);
        }

        @media (max-width: 480px) {
            .calc-card { padding: 2rem 1.5rem; }
            .ip-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    @php
        // Klasifikasi predikat sederhana berdasarkan rata-rata IP.
        $predikat = match (true) {
            $rata >= 3.5 => 'Cum Laude',
            $rata >= 3.0 => 'Sangat Memuaskan',
            $rata >= 2.5 => 'Memuaskan',
            default => 'Perlu Ditingkatkan',
        };
    @endphp

    <div class="topbar">
        <span class="eyebrow">
            <span class="eyebrow-dot"></span>
            Kalkulator IPK
        </span>
        <h1>Rata-Rata IP Semester</h1>
    </div>

    <div class="page-wrap">
        <div class="calc-card">
            <div class="ip-grid">
                <div class="ip-box">
                    <span>IP Semester 1</span>
                    <strong>{{ number_format($ip1, 2) }}</strong>
                </div>
                <div class="ip-box">
                    <span>IP Semester 2</span>
                    <strong>{{ number_format($ip2, 2) }}</strong>
                </div>
            </div>

            <div class="result-box">
                <span>Rata-Rata</span>
                <strong>{{ number_format($rata, 2) }}</strong>
            </div>

            <p class="predikat">
                Predikat: <b>{{ $predikat }}</b>
            </p>
        </div>
    </div>

</body>
</html>