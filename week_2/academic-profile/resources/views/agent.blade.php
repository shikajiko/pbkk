<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ide Platform Agentic AI</title>
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

        .agent-card {
            background: var(--paper);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 20px 50px -20px rgba(11, 79, 115, 0.35);
        }

        .agent-tag {
            display: inline-block;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--teal);
            background: #e8f6f4;
            padding: 0.3rem 0.8rem;
            border-radius: 999px;
            margin-bottom: 1rem;
        }

        .agent-card h2 {
            font-size: 1.6rem;
            font-weight: 700;
            margin: 0 0 0.75rem;
        }

        .agent-desc {
            font-size: 0.98rem;
            color: var(--muted);
            line-height: 1.7;
            margin: 0 0 1.75rem;
        }

        .feature-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 0.9rem;
        }

        .feature-list li {
            display: flex;
            gap: 0.85rem;
            align-items: flex-start;
            font-size: 0.92rem;
            color: var(--ink);
            line-height: 1.5;
        }

        .feature-dot {
            width: 8px;
            height: 8px;
            margin-top: 0.4rem;
            border-radius: 50%;
            background: var(--mint);
            flex-shrink: 0;
        }

        .choice-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.6rem;
            margin-bottom: 1.75rem;
        }

        .choice-pill {
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            color: var(--blue-deep);
            background: #eef5f4;
            padding: 0.55rem 1.2rem;
            border-radius: 999px;
            border: 1px solid transparent;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .choice-pill:hover {
            background: #dff0ee;
        }

        .choice-pill.active {
            background: var(--teal);
            color: #ffffff;
        }

        @media (max-width: 560px) {
            .agent-card { padding: 2rem 1.5rem; }
        }
    </style>
</head>
<body>

    @php
        // Kumpulan tema yang sudah didefinisikan — tambah sendiri sesuai kebutuhan.
        $daftarTema = [
            'coding' => [
                'judul' => 'Coding Agent',
                'deskripsi' => 'Agent yang membantu menulis, membaca, dan memperbaiki kode secara otomatis, mulai dari debugging hingga code review.',
                'fitur' => [
                    'Membaca seluruh codebase untuk memahami konteks proyek',
                    'Menjalankan dan menguji kode secara langsung',
                    'Memberi saran perbaikan berdasarkan best practice',
                ],
            ],
            'finance' => [
                'judul' => 'Finance Agent',
                'deskripsi' => 'Agent yang menganalisis data keuangan, membuat laporan, dan memberi rekomendasi anggaran secara otomatis.',
                'fitur' => [
                    'Mengambil data transaksi dari berbagai sumber',
                    'Membuat ringkasan dan visualisasi arus kas',
                    'Memberi peringatan saat pengeluaran tidak wajar',
                ],
            ],
            'study' => [
                'judul' => 'Study Companion Agent',
                'deskripsi' => 'Agent yang membantu proses belajar, mulai dari merangkum materi kuliah hingga membuat soal latihan.',
                'fitur' => [
                    'Merangkum materi dari slide atau catatan',
                    'Membuat kuis latihan otomatis',
                    'Menyusun jadwal belajar berdasarkan tenggat waktu',
                ],
            ],
        ];

        $tersedia = array_key_exists($tema, $daftarTema);

        $agentAktif = $tersedia
            ? $daftarTema[$tema]
            : [
                'judul' => 'General Assistant Agent',
                'deskripsi' => 'Agent serbaguna yang bisa membantu berbagai tugas sehari-hari, dari menjawab pertanyaan hingga menyusun rencana kerja.',
                'fitur' => [
                    'Menjawab pertanyaan umum dengan konteks percakapan',
                    'Membantu menyusun catatan, ringkasan, dan rencana',
                    'Bisa dikembangkan lebih lanjut ke tema yang lebih spesifik',
                ],
            ];
    @endphp

    <div class="topbar">
        <span class="eyebrow">
            <span class="eyebrow-dot"></span>
            Ide Platform Agentic AI
        </span>
        <h1>{{ $agentAktif['judul'] }}</h1>
    </div>

    <div class="page-wrap">
        <div class="choice-bar">
            <a
                href="{{ route('dashboard.agent') }}"
                class="choice-pill {{ !$tersedia ? 'active' : '' }}"
            >
                General
            </a>

            @foreach ($daftarTema as $key => $data)
                <a
                    href="{{ route('dashboard.agent', ['tema' => $key]) }}"
                    class="choice-pill {{ $tersedia && $tema === $key ? 'active' : '' }}"
                >
                    {{ $data['judul'] }}
                </a>
            @endforeach
        </div>

        <div class="agent-card">
            <span class="agent-tag">
                {{ $tersedia ? 'Tema: ' . $tema : 'Tema default' }}
            </span>

            <h2>{{ $agentAktif['judul'] }}</h2>
            <p class="agent-desc">{{ $agentAktif['deskripsi'] }}</p>

            <ul class="feature-list">
                @foreach ($agentAktif['fitur'] as $fitur)
                    <li>
                        <span class="feature-dot"></span>
                        <span>{{ $fitur }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>
</html>