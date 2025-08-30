<?php include 'header.php'; ?>
<style>
    body { background: linear-gradient(135deg, #a7a5b1, #9308b6); }
    .projects { background: #1a1a1a; padding: 60px 20px; text-align: center; }
    .projects h2 { font-size: 2.5rem; margin-bottom: 40px; border-bottom: 2px solid #00adb5; display: inline-block; }
    .projects-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1100px; margin: auto; }
    .project-card { background: #2a2a2a; padding: 30px; border-radius: 20px; transition: .3s; }
    .project-card:hover { transform: translateY(-10px); box-shadow: 0 15px 40px rgba(0,0,0,.7); }
</style>

<section class="projects">
    <h2>Projects</h2>
    <div class="projects-container">
        <div class="project-card">
            <h3>BakeryShop</h3>
            <p>A Windows Forms app for online bread orders with delivery.</p>
        </div>
        <div class="project-card">
            <h3>ChatBot</h3>
            <p>A chatbot that can answer any question you ask.</p>
        </div>
        <div class="project-card">
            <h3>Student Registration Form</h3>
            <p>A Windows Forms student information system with dynamic combo boxes and validation.</p>
        </div>
        <div class="project-card">
            <h3>Rhymx</h3>
            <p>An Online Ticket Booking Website for concerts</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
