<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saelendra Farell Syahbana | Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300;400;600;700&family=Archivo:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/tooplate-split-portfolio.css') }}">
<!--

Tooplate 2154 Split Portfolio

https://www.tooplate.com/view/2154-split-portfolio

Free HTML CSS Template

-->
</head>
<body>
    <header>
        <a href="#work" class="logo">
            <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="45" fill="none" stroke="#ff3366" stroke-width="3"/>
                <path d="M 30 40 L 50 60 L 70 40" fill="none" stroke="#ff3366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="50" cy="70" r="3" fill="#ff3366"/>
            </svg>
            <span>Portofolio</span>
        </a>
        <nav>
            <ul class="desktop-nav">
                <li><a href="#work">Proyek</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
        <div class="menu-icon">
            <span></span>
        </div>
    </header>

    <div class="mobile-nav">
        <button class="mobile-nav-close" aria-label="Close menu">&times;</button>
        <ul>
            <li><a href="#work">Proyek</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#testimonials">Testimoni</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
            <div class="mobile-nav-footer">
            <p>Yuk ciptakan sesuatu yang hebat bersama</p>
            <a href="mailto:hello@example.com">hello@example.com</a>
        </div>
    </div>

    <!-- About Section -->
    <!-- Work / Portfolio Section -->
    <section id="work" class="split-container">
        <div class="work-container">
            <div class="section-header">
                <h2>Proyek</h2>
                <p>Beberapa proyek yang pernah saya kerjakan.</p>
            </div>
            <div class="projects-grid">
                <p style="grid-column: 1/-1; text-align: center; padding: 40px 0;">Belum ada proyek yang ditambahkan.</p>
            </div>
        </div>
    </section>
    @php
        $profileName = 'Saelendra Farell Syahbana';
        $contactEmail = 'hello@example.com';
        $contactPhone = '+62 812-3456-7890';
        $contactAddress = 'Jakarta, Indonesia';
        $bio = 'Saya adalah mahasiswa Teknik Informatika yang tertarik dalam pengembangan web, data, dan sistem informasi.';
        $message = 'Saya sedang membangun portofolio proyek yang menunjukkan kemampuan saya di Laravel, desain web, dan pengembangan aplikasi.';
    @endphp

    <section id="about" class="about-section">
        <div class="about-split">
            <div class="about-content">
                <h2>{{ $profileName }}</h2>
                <p>Mahasiswa Teknik Informatika, Fakultas Ilmu Komputer, Universitas Esa Unggul</p>
                <p>{{ $bio }}</p>
                <p>{{ $message }}</p>
                <p>Template ini telah diintegrasikan ke dalam aplikasi Laravel agar konten dapat diperbarui dari database dan admin panel.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>Proyek</p>
                    </div>
                    <div class="stat-item">
                        <h3>30+</h3>
                        <p>Klien</p>
                    </div>
                    <div class="stat-item">
                        <h3>8</h3>
                        <p>Tahun</p>
                    </div>
                </div>
            </div>
                    <div class="about-image" style="background-image: url('{{ asset('images/saelendra-farell-syahbana.jpg') }}'), url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=800&fit=crop');"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="services-container">
            <div class="section-header">
                <h2>Apa yang Saya Lakukan</h2>
                <p>Solusi desain dan pengembangan digital yang disesuaikan untuk kebutuhan Anda.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-number">01</div>
                    <h3>Identitas Merek</h3>
                    <p>Membangun identitas visual yang konsisten dan menarik untuk memperkuat citra brand Anda.</p>
                    <ul class="service-list">
                        <li>Desain Logo</li>
                        <li>Strategi Merek</li>
                        <li>Panduan Visual</li>
                        <li>Materi Branding</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-number">02</div>
                    <h3>Desain Web</h3>
                    <p>Mendesain website yang menarik dan responsif untuk pengalaman pengguna terbaik di semua perangkat.</p>
                    <ul class="service-list">
                        <li>Desain UI/UX</li>
                        <li>Responsif</li>
                        <li>Prototipe</li>
                        <li>Pengembangan Frontend</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-number">03</div>
                    <h3>Strategi Digital</h3>
                    <p>Perencanaan digital yang membantu Anda mencapai tujuan bisnis dan menghadirkan solusi yang terukur.</p>
                    <ul class="service-list">
                        <li>Riset Pengguna</li>
                        <li>Strategi Konten</li>
                        <li>Peta Jalan Digital</li>
                        <li>Analitik</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="testimonials-container">
            <div class="section-header">
                <h2>Testimoni Klien</h2>
                <p>Apa kata klien tentang bekerja bersama saya</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">Bekerja dengan Farrel sangat menyenangkan. Ia berhasil menghadirkan identitas merek yang sesuai dengan visi kami dan sangat profesional dalam setiap tahapnya.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SK</div>
                        <div class="author-info">
                            <h4>Sarah Kim</h4>
                            <p>CEO, Stellar Tech</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">Perhatian terhadap detail dan pendekatan kreatif membuat hasilnya luar biasa. Website kami kini lebih menarik dan mudah digunakan.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MJ</div>
                        <div class="author-info">
                            <h4>Michael Johnson</h4>
                            <p>Founder, FitLife</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">Sangat profesional, kreatif, dan tepat waktu. Proses kolaborasi berjalan lancar dan hasil akhirnya memuaskan.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">EC</div>
                        <div class="author-info">
                            <h4>Emily Chen</h4>
                            <p>Marketing Director, Fashion Co.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-split">
            <div class="contact-info">
                <h2>Mari Bekerja Sama</h2>
                <p>Sudah punya ide proyek? Hubungi saya dan kita buat solusi digital yang tepat untuk kebutuhan Anda.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-item-icon">📧</div>
                        <div class="contact-item-content">
                            <h4>Email</h4>
                            <a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">📱</div>
                        <div class="contact-item-content">
                            <h4>Telepon</h4>
                            <a href="tel:{{ $contactPhone }}">{{ $contactPhone }}</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">📍</div>
                        <div class="contact-item-content">
                            <h4>Lokasi</h4>
                            <a href="https://www.google.com/maps/search/{{ urlencode($contactAddress) }}" target="_blank">{{ $contactAddress }}</a>
                        </div>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link" title="Dribbble">Dr</a>
                    <a href="#" class="social-link" title="Behance">Be</a>
                    <a href="#" class="social-link" title="Instagram">In</a>
                    <a href="#" class="social-link" title="LinkedIn">Li</a>
                    <a href="#" class="social-link" title="Twitter">Tw</a>
                </div>
            </div>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subjek</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <footer>
        <p>Hak Cipta © 2026 Saelendra Farell Syahbana. Semua hak dilindungi. Desain: <a rel="nofollow" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
    </footer>

    <script src="{{ asset('js/tooplate-split-scripts.js') }}"></script>
</body>
</html>