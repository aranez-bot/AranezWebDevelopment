<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- ===== HEADER SECTION ===== -->
    <header class="header">
        <h1>Arañez Rizaly</h1>
        <p>Hi, I’m Rizaly G. Arañez, from Pong-On, Bontoc, Southern Leyte. 21 years of age, currently studying Information Technology major in Programming.</p>
    </header>

    <!-- ===== PROFILE SECTION ===== -->
    <section class="profile">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo">
        <div class="profile-text">
            <h2>About Me</h2>
            <p>
                 A committed student who strives to learn, improve, and fulfill academic responsibilities with dedication.
            </p>
        </div>
    </section>

    <!-- ===== HOBBIES / INTERESTS ===== -->
    <section class="hobbies">
        <h2>Hobbies & Interests</h2>
        <div class="hobby-grid">
            <div>📺 Watching Anime</div>
            <div>🎤 Singing</div>
            <div>🏐 Volleyball</div>
            <div>📚 Reading</div>
            <div>🎵 Music</div>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="contact">
        <h2>Contact Me</h2>
        <p>📞 Phone: 0950-874-9788</p>
        <p>📧 Email: aranezrizaly949@email.com</p>
        <p>🔗 Facebook: <a href="#">https://www.facebook.com/share/1C9YXhKtcc/</a></p>
    </section>

</body>
</html>
