@php
    use Illuminate\Support\Facades\Storage;

    $defaultName = 'Saelendra Farell Syahbana';
    $siteName = $profile?->site_name ?? 'Portofolio';
    $navName = $profile?->navbar_name ?? 'Farel';
    $heroName = $profile?->hero_name ?? $defaultName;
    $heroTitle = $profile?->hero_title ?? 'Mahasiswa Teknik Informatika';
    $bio = $profile?->bio ?? 'Saya tertarik dalam pengembangan website, sistem informasi, dan aplikasi berbasis Laravel.';
    $description = $profile?->description ?? 'Portofolio ini dibuat agar data biodata, daftar pekerjaan, dan pesan visitor bisa dikelola langsung melalui admin panel.';
    $photoUrl = $profile?->photo ? Storage::url($profile->photo) : asset('images/saelendra-farell-syahbana.jpg');
    $workTitle = $profile?->work_section_title ?? 'Apa yang Saya Kerjakan';
    $workSubtitle = $profile?->work_section_subtitle ?? 'Beberapa pekerjaan atau project yang dapat saya tampilkan dan kelola dari admin panel.';
    $contactTitle = $profile?->contact_section_title ?? 'Bekerja Sama';
    $contactSubtitle = $profile?->contact_section_subtitle ?? 'Punya ide, tugas, atau project? Kirim pesan lewat form ini dan saya bisa melihatnya dari admin panel.';
    $contactEmail = $profile?->email ?? 'hello@example.com';
    $contactPhone = $profile?->phone ?? '+62 812-3456-7890';
    $contactAddress = $profile?->address ?? 'Jakarta, Indonesia';
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heroName }} | {{ $siteName }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400;600;700&family=Archivo:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #222222;
            --panel: #2b2b2b;
            --text: #ffffff;
            --muted: #b8b8b8;
            --line: rgba(255,255,255,.12);
            --pink: #ff3366;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Archivo', sans-serif;
            line-height: 1.7;
        }
        a { color: inherit; text-decoration: none; }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 20;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px 7vw;
            background: rgba(34,34,34,.9);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--line);
        }
        .brand {
            font-family: 'Crimson Pro', serif;
            font-size: 34px;
            font-weight: 700;
            text-transform: lowercase;
            letter-spacing: .5px;
        }
        .brand span { color: var(--pink); }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;
            list-style: none;
            color: var(--muted);
            font-weight: 600;
            text-transform: lowercase;
        }
        .nav-links a:hover { color: var(--pink); }

        .section { padding: 96px 7vw; }
        .section-header {
            max-width: 760px;
            margin: 0 auto 54px;
            text-align: center;
        }
        .section-header h2, .biodata-title, .contact-info h2 {
            font-family: 'Crimson Pro', serif;
            font-size: clamp(44px, 5vw, 72px);
            line-height: 1;
            margin-bottom: 18px;
        }
        .section-header p, .muted { color: var(--muted); font-size: 18px; }

        .biodata {
            min-height: calc(100vh - 86px);
            display: grid;
            grid-template-columns: minmax(280px, 430px) 1fr;
            gap: 64px;
            align-items: center;
        }
        .profile-photo {
            min-height: 560px;
            border-radius: 30px;
            background-image: linear-gradient(to bottom, rgba(0,0,0,.05), rgba(0,0,0,.35)), var(--photo);
            background-position: center;
            background-size: cover;
            border: 1px solid var(--line);
            box-shadow: 0 30px 80px rgba(0,0,0,.22);
        }
        .eyebrow {
            color: var(--pink);
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 16px;
        }
        .biodata-title { margin-bottom: 14px; }
        .biodata-subtitle {
            color: var(--pink);
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 24px;
        }
        .biodata-copy {
            color: var(--muted);
            font-size: 18px;
            margin-bottom: 18px;
            max-width: 760px;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 36px;
        }
        .stat-card, .work-card, .contact-form, .contact-info {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 24px;
        }
        .stat-card { padding: 26px; }
        .stat-card strong {
            display: block;
            font-family: 'Crimson Pro', serif;
            font-size: 42px;
            color: var(--pink);
            line-height: 1;
        }
        .stat-card span { color: var(--muted); }

        .work-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 28px;
        }
        .work-card {
            overflow: hidden;
            min-height: 100%;
        }
        .work-image {
            height: 220px;
            background: linear-gradient(135deg, rgba(255,51,102,.35), rgba(255,255,255,.05));
            background-size: cover;
            background-position: center;
            border-bottom: 1px solid var(--line);
        }
        .work-body { padding: 30px; }
        .work-number {
            color: var(--pink);
            font-weight: 900;
            letter-spacing: 2px;
            margin-bottom: 14px;
        }
        .work-body h3 {
            font-family: 'Crimson Pro', serif;
            font-size: 32px;
            margin-bottom: 12px;
        }
        .work-body p { color: var(--muted); }
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 54px 24px;
            color: var(--muted);
            border: 1px dashed var(--line);
            border-radius: 24px;
        }

        .contact-wrap {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 34px;
            align-items: start;
        }
        .contact-info, .contact-form { padding: 38px; }
        .contact-list { margin-top: 32px; display: grid; gap: 18px; }
        .contact-list p { color: var(--muted); }
        .contact-list strong { color: var(--text); display: block; }
        .socials { display: flex; gap: 12px; margin-top: 28px; flex-wrap: wrap; }
        .socials a {
            border: 1px solid var(--line);
            padding: 10px 16px;
            border-radius: 999px;
            color: var(--muted);
        }
        .socials a:hover { color: var(--text); border-color: var(--pink); background: var(--pink); }
        .form-group { margin-bottom: 20px; }
        label {
            display: block;
            font-weight: 700;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: #242424;
            color: var(--text);
            padding: 16px 18px;
            font: inherit;
            outline: none;
        }
        textarea { min-height: 150px; resize: vertical; }
        input:focus, textarea:focus { border-color: var(--pink); }
        .submit-btn {
            border: 0;
            border-radius: 999px;
            background: var(--pink);
            color: var(--text);
            padding: 16px 28px;
            font-weight: 800;
            cursor: pointer;
        }
        .alert {
            border: 1px solid rgba(39, 174, 96, .45);
            background: rgba(39, 174, 96, .12);
            color: #d8ffe7;
            padding: 16px 18px;
            border-radius: 16px;
            margin-bottom: 22px;
        }
        .error-list {
            border: 1px solid rgba(255, 51, 102, .45);
            background: rgba(255, 51, 102, .12);
            color: #ffd9e2;
            padding: 16px 18px;
            border-radius: 16px;
            margin-bottom: 22px;
        }
        .error-list ul { padding-left: 20px; }
        footer {
            border-top: 1px solid var(--line);
            padding: 28px 7vw;
            color: var(--muted);
            text-align: center;
        }

        @media (max-width: 980px) {
            .biodata, .contact-wrap { grid-template-columns: 1fr; }
            .profile-photo { min-height: 440px; }
            .work-grid, .stats { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .navbar { align-items: flex-start; gap: 16px; flex-direction: column; }
            .nav-links { gap: 18px; flex-wrap: wrap; }
            .section { padding: 72px 6vw; }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <a href="#home" class="brand">{{ $navName }}<span>.</span></a>
        <nav aria-label="Navigasi utama">
            <ul class="nav-links">
                <li><a href="#home">home</a></li>
                <li><a href="#work">projek</a></li>
                <li><a href="#contact">contact us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="section biodata">
            <div class="profile-photo" style="--photo: url('{{ $photoUrl }}')"></div>
            <div>
                <p class="eyebrow">Biodata</p>
                <h1 class="biodata-title">{{ $heroName }}</h1>
                <p class="biodata-subtitle">{{ $heroTitle }}</p>
                <p class="biodata-copy">{{ $bio }}</p>
                <p class="biodata-copy">{{ $description }}</p>

                <div class="stats">
                    <div class="stat-card">
                        <strong>{{ $profile?->experience_years ?? '1+' }}</strong>
                        <span>{{ $profile?->experience_label ?? 'Tahun Belajar' }}</span>
                    </div>
                    <div class="stat-card">
                        <strong>{{ $profile?->projects_count ?? '3+' }}</strong>
                        <span>{{ $profile?->projects_label ?? 'Proyek' }}</span>
                    </div>
                    <div class="stat-card">
                        <strong>{{ $profile?->skills_count ?? '5+' }}</strong>
                        <span>{{ $profile?->skills_label ?? 'Skill' }}</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="work" class="section">
            <div class="section-header">
                <h2>{{ $workTitle }}</h2>
                <p>{{ $workSubtitle }}</p>
            </div>

            <div class="work-grid">
                @forelse ($projects as $project)
                    @php
                        $projectImage = $project->image ? Storage::url($project->image) : null;
                    @endphp
                    <article class="work-card">
                        <div class="work-image" @if($projectImage) style="background-image: url('{{ $projectImage }}')" @endif></div>
                        <div class="work-body">
                            <div class="work-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                            <h3>{{ $project->title }}</h3>
                            <p>{{ $project->description }}</p>
                        </div>
                    </article>
                @empty
                    <div class="empty-state">
                        Belum ada data pekerjaan/project. Tambahkan dari admin panel pada menu <strong>Apa yang Saya Kerjakan</strong>.
                    </div>
                @endforelse
            </div>
        </section>

        <section id="contact" class="section">
            <div class="contact-wrap">
                <div class="contact-info">
                    <h2>{{ $contactTitle }}</h2>
                    <p class="muted">{{ $contactSubtitle }}</p>

                    <div class="contact-list">
                        <p><strong>Email</strong><a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a></p>
                        <p><strong>Telepon</strong><a href="tel:{{ $contactPhone }}">{{ $contactPhone }}</a></p>
                        <p><strong>Lokasi</strong>{{ $contactAddress }}</p>
                    </div>

                    <div class="socials">
                        @if($profile?->instagram_url)<a href="{{ $profile->instagram_url }}" target="_blank" rel="noopener">Instagram</a>@endif
                        @if($profile?->linkedin_url)<a href="{{ $profile->linkedin_url }}" target="_blank" rel="noopener">LinkedIn</a>@endif
                        @if($profile?->github_url)<a href="{{ $profile->github_url }}" target="_blank" rel="noopener">GitHub</a>@endif
                    </div>
                </div>

                <form class="contact-form" action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    @if(session('success'))
                        <div class="alert">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="error-list">
                            <strong>Pesan belum terkirim:</strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="submit-btn">Kirim Pesan</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>© {{ date('Y') }} {{ $heroName }}. Dibuat dinamis dengan Laravel & Filament.</p>
    </footer>
</body>
</html>
