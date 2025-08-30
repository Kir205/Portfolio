<?php include 'header.php'; ?>
<style>
    body { background: linear-gradient(135deg, #433f55, #0e7fc0); }
    .about-me { background-color: #1a1a1a; color: #f0f0f0; padding: 50px 20px; text-align: center; }
    .about-me h2 { font-size: 2.5rem; margin-bottom: 20px; border-bottom: 2px solid #00adb5; display: inline-block; }
    .about-container { display: flex; flex-direction: column; align-items: center; gap: 30px; }
    .profile-pic { width: 200px; height: 200px; border-radius: 50%; border: 5px solid #00adb5; object-fit: cover; }
    .about-text { max-width: 800px; text-align: left; line-height: 1.8; }
    blockquote { margin-top: 30px; font-style: italic; border-left: 4px solid #00adb5; padding-left: 15px; }
    @media (min-width: 768px) { .about-container { flex-direction: row; } .about-text { margin-left: 40px; } }
</style>

<section class="about-me">
    <h2>About Me</h2>
    <div class="about-container">
        <img src="soaferpogi.jpg" alt="Profile Picture" class="profile-pic">
        <div class="about-text">
            <p>Hi! I'm <strong>Rafael Josh G. Sanchez</strong>, a 3rd-year Computer Science student at <strong>STI Davao</strong>.</p>
            <p>I’m passionate about software development and web design, but I’m still a newbie. I want to learn more about programming.</p>
            
            <h3>Skills</h3>
            <ul><li>💻 Programming Languages: Java, C#, HTML, CSS, Python (beginner level)</li></ul>

            <h3>Fun Facts</h3>
            <ul>
                <li>😴 I like <strong>sleeping</strong>.</li>
                <li>💻 Passionate about programming.</li>
                <li>🎮 I love video games.</li>
            </ul>

            <blockquote>💡 "Try and Try, until you succeed."</blockquote>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
