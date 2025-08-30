<?php include 'header.php'; ?>
<style>
    body { background: linear-gradient(135deg, #0d0b14, hsl(19, 84%, 43%)); }
    .achievements { background-color: #121212; padding: 60px 20px; text-align: center; }
    .achievements h2 { font-size: 2.5rem; margin-bottom: 40px; border-bottom: 2px solid #ff5722; display: inline-block; }
    .achievements-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1100px; margin: auto; }
    .achievement-card { background: #1f1f1f; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,.5); transition: .3s; }
    .achievement-card:hover { transform: translateY(-10px); box-shadow: 0 15px 40px rgba(0,0,0,.7); }
</style>

<section class="achievements">
    <h2>Achievements</h2>
    <div class="achievements-container">
        <div class="achievement-card">
            <h3>🎖️ Graduated with Honors in SHS</h3>
            <p>Graduated with honors in JHS and SHS at Davao City National High School.</p>
        </div>
        <div class="achievement-card">
            <h3>💻 Completed Projects</h3>
            <p>Developed a website about a bakery shop during our 1st year STI.</p>
            <p>Developed a group project called Rhymx during our 2nd year STI.</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
