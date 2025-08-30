<?php include 'header.php'; ?>
<style>
    body { background: linear-gradient(135deg, #1f1c2c, #928dab); }
    h1 { font-size: 2.5rem; margin-bottom: 10px; }
    .circle-image {
        width: 200px; height: 200px; border-radius: 50%;
        object-fit: cover; border: 4px solid #050505;
    }
    p { font-size: 1.2rem; line-height: 1.8; }
    .intro { font-size: 1.2rem; margin-top: 15px; }
</style>

<h1>Welcome to My Portfolio!</h1>
<h2 class="typing-text"></h2>

<script>
    const text = "Hi! I'm Josh, 3rd Year CS Student at STI Davao.";
    let index = 0;
    function typeEffect() {
        if (index < text.length) {
            document.querySelector(".typing-text").textContent += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100);
        }
    }
    window.onload = typeEffect;
</script>

<img src="soaferpogi.jpg" alt="Profile Picture" class="circle-image">
<p>If you want to know more, click the links above.</p>
<p class="intro">💻 Still learning to code | 💻 Future Programmerz | 🎮 Loves gaming</p>

<?php include 'footer.php'; ?>
