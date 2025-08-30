<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
    body { font-family: Arial, sans-serif; color: white; background: linear-gradient(135deg,#1f1c2c,#928dab); }
    .navbar {
      background-color: #333; display: flex; justify-content: center; align-items: center;
      height: 80px; position: fixed; top: 0; width: 100%; z-index: 1000;
    }
    .navbar a {
      color: white; padding: 0 20px; text-decoration: none; font-size: 18px;
    }
    .navbar a:hover { background-color: #444; color: #fff; }
    section { min-height: 100vh; padding: 120px 20px 60px; text-align: center; }
    h1, h2 { margin-bottom: 20px; }
    p { font-size: 1.2rem; line-height: 1.6; }

    .circle-image { width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 4px solid #000; margin: 20px 0; }

    .achievements { background: linear-gradient(135deg,#1e3c72,#2a5298); }
    .achievements-container {
      display: grid; grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
      gap: 20px; max-width: 1100px; margin: 0 auto;
    }
    .achievement-card {
      background:#222; padding:20px; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.5);
      transition: transform .3s ease;
    }
    .achievement-card:hover { transform: translateY(-10px); }
    .achievement-card h3 { color:#00adb5; margin-bottom:10px; }

    .projects { background: linear-gradient(135deg,#a7a5b1,#9308b6); }
    .projects-container {
      display: grid; grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
      gap: 30px; max-width: 1100px; margin: 0 auto;
    }
    .project-card {
      background:#2a2a2a; padding:30px; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.5);
      transition: transform .3s ease, box-shadow .3s ease;
    }
    .project-card:hover { transform: translateY(-10px); box-shadow:0 15px 40px rgba(0,0,0,0.7); }
    .project-card h3 { color:#00adb5; margin-bottom:15px; }

    .contact { background: linear-gradient(135deg,#000428,#004e92); }
    form { max-width:500px; margin:0 auto; display:flex; flex-direction:column; gap:15px; }
    input, textarea {
      padding:12px; border:none; border-radius:8px; outline:none;
    }
    button {
      padding:12px; background:#00adb5; color:white; border:none; border-radius:8px;
      cursor:pointer; transition: background .3s;
    }
    button:hover { background:#008b9a; }
  </style>
</head>
<body>


  <div class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About Me</a>
    <a href="#achievements">Achievements</a>
    <a href="#projects">Projects</a>
  </div>


  <section id="home">
    <h1>Welcome to My Portfolio!</h1>
    <h2 class="typing-text"></h2>
    <img src="soaferpogi.jpg" alt="Profile" class="circle-image">
    <p>If you want to know more, click the links above.</p>
    <p class="intro">💻 Still learning to code | 💻 Future Programmer | 🎮 Loves gaming</p>
  </section>


  <section id="about" style="background:linear-gradient(135deg,#000000,#434343);">
    <h1>About Me</h1>
    <p>Hello! I'm Josh, a 3rd Year Computer Science student at STI Davao.  
       Passionate about coding, gaming, and constantly learning new technologies.  
       My dream is to become a skilled developer and create useful applications for people.</p>
  </section>


  <section id="achievements" class="achievements">
    <h1>Achievements</h1>
    <div class="achievements-container">
      <div class="achievement-card">
        <h3>Dean’s Lister</h3>
        <p>Recognized for outstanding academic performance during my JHS and SHS.</p>
      </div>
      <div class="achievement-card">
        <h3>Web Dev??!?!?!</h3>
        <p>Built a Website.</p>
      </div>
      <div class="achievement-card">
        <h3>Project</h3>
        <p>Built a Group project Web project.</p>
      </div>
    </div>
  </section>

  <section id="projects" class="projects">
    <h1>Projects</h1>
    <div class="projects-container">
      <div class="project-card">
        <h3>BakeryShop</h3>
        <p>A Windows Forms app that sells bread online — order and get it delivered.</p>
      </div>
      <div class="project-card">
        <h3>ChatBot</h3>
        <p>A chatbot that can answer questions interactively.</p>
      </div>
      <div class="project-card">
        <h3>Student Registration Form</h3>
        <p>A student info system with dynamic combo boxes and full form validation.</p>
      </div>
    </div>
  </section>


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

</body>
</html>
