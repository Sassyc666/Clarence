  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Clarence | Portfolio</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  </head>
  <body>
    <div id="particles-js"></div>

    <!-- Navbar -->
    <nav class="navbar">
      <div class="nav-logo"></div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#whatido">What I Do</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#gallery">Gallery</a></li>
      </ul>
    </nav>

    <!-- HOME -->
    <section id="home">
      <div class="home-container">
        <div class="home-left">
          <img src="CLAR.jpg" alt="Clarence Picture" class="profile-pic fade-in">
        </div>
        <div class="home-right">
          <h1 class="typing">Hi, I'm <span class="highlight">Clarence 👋</span></h1>
          <p class="fade-in">
            A passionate <strong>Computer Technology Student</strong> who loves building interactive websites and creative digital systems.  
            I blend design and functionality to make every project clean, responsive, and impactful.
          </p>
          <div class="quick-info slide-in-up">
            <div class="info-item">📍 Cebu, Philippines</div>
            <div class="info-item">🎓 College of Technology</div>
            <div class="info-item">💻 Frontend & Backend Developer</div>
          </div>

          <div class="home-buttons fade-in-up">
            <a href="#skills" class="btn">View My Skills</a>
            <a href="Clarence_CV.pdf" class="btn-outline">Download CV</a>
          </div>

          <div class="socials fade-in-up">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- WHAT I DO -->
    <section id="whatido">
      <div class="whatido-container">
        <h2 class="fade-in">What I Do 💡</h2>
        <p class="fade-in" style="color:#ccc;margin-bottom:20px;">
          I specialize in both creative and technical fields — transforming ideas into interactive experiences.
        </p>
        <div class="cards">
          <div class="card slide-in-left">
            <h3>💻 Web Development</h3>
            <p>I create responsive websites using HTML, CSS, JS, and PHP — from landing pages to functional systems.</p>
          </div>
          <div class="card fade-in-up">
            <h3>🧠 Problem Solving</h3>
            <p>I enjoy debugging, optimizing code, and tackling algorithmic challenges logically and efficiently.</p>
          </div>
          <div class="card slide-in-right">
            <h3>🎨 UI/UX Design</h3>
            <p>I focus on clean, user-centered designs that balance visual appeal and usability.</p>
          </div>
          <div class="card fade-in-up">
            <h3>⚙️ System Development</h3>
            <p>I design database-driven systems like Student Management and Document Request Systems.</p>
          </div>
          <div class="card slide-in-left">
            <h3>📸 Multimedia Editing</h3>
            <p>I edit videos and photos, blending storytelling with technology and creativity.</p>
          </div>
          <div class="card slide-in-right">
            <h3>🤖 Exploring New Tech</h3>
            <p>I love experimenting with AI tools, automation scripts, and the latest web frameworks.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SKILLS & HOBBIES -->
    <section id="skills">
      <div class="skills-container">
        <div class="skills fade-in-up">
          <h2>My Coding Skills</h2>
          <div class="skill"><div class="skill-name">HTML</div><div class="skill-bar"><div class="skill-fill" data-level="95"></div></div></div>
          <div class="skill"><div class="skill-name">CSS</div><div class="skill-bar"><div class="skill-fill" data-level="90"></div></div></div>
          <div class="skill"><div class="skill-name">JavaScript</div><div class="skill-bar"><div class="skill-fill" data-level="85"></div></div></div>
          <div class="skill"><div class="skill-name">PHP</div><div class="skill-bar"><div class="skill-fill" data-level="80"></div></div></div>
          <div class="skill"><div class="skill-name">MySQL</div><div class="skill-bar"><div class="skill-fill" data-level="75"></div></div></div>
          <div class="skill"><div class="skill-name">Python</div><div class="skill-bar"><div class="skill-fill" data-level="65"></div></div></div>
        </div>

        <div class="hobbies slide-in-right">
          <h2>My Hobbies & Interests</h2>
          <ul class="hobbies-list">
            <li>🎮 Playing competitive online games</li>
            <li>🎧 Listening to EDM, Lo-fi, and Pop</li>
            <li>📸 Taking aesthetic photos & editing</li>
            <li>🧩 Exploring AI tools & web trends</li>
            <li>🐱 Favorite Animals: Cats, Dogs & Pandas</li>
            <li>🧑‍💻 Experimenting with personal coding projects</li>
            <li>🌍 Learning about tech innovations worldwide</li>
            <li>✈️ Exploring new places & cultures</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- PHOTO SLIDESHOW (Hands-on Activities) -->
<section id="photo-slideshow">
  <div class="whatido-container">
    <h2 class="fade-in">Hands-on Activities 📸</h2>
    <p class="fade-in" style="color:#ccc;margin-bottom:2rem;">
      A showcase of my practical projects, exercises, and experiences in technology and creativity.
    </p>

    <div class="slideshow-container">
      <div class="slide fade">
        <img src="1.png" alt="Activity 1">
      </div>

      <div class="slide fade">
        <img src="2.png" alt="Activity 2">
      </div>

      <div class="slide fade">
        <img src="3.png" alt="Activity 3">
      </div>

      <div class="slide fade">
        <img src="4.png" alt="Activity 4">
      </div>

      <div class="slide fade">
        <img src="5.png" alt="Activity 5">
      </div>

      <!-- Navigation Buttons -->
      <a class="prev" onclick="changeSlide(-1, 'photo')">&#10094;</a>
      <a class="next" onclick="changeSlide(1, 'photo')">&#10095;</a>
    </div>

    <!-- Dots / Indicators -->
    <div class="dots-container">
      <span class="dot" onclick="currentSlide(1, 'photo')"></span>
      <span class="dot" onclick="currentSlide(2, 'photo')"></span>
      <span class="dot" onclick="currentSlide(3, 'photo')"></span>
      <span class="dot" onclick="currentSlide(4, 'photo')"></span>
      <span class="dot" onclick="currentSlide(5, 'photo')"></span>
    </div>
  </div>
</section>

<!-- VIDEO GALLERY (Videography) -->
<section id="gallery">
  <div class="whatido-container">
    <h2 class="fade-in">Videography 🎥</h2>
    <p class="fade-in" style="color:#ccc;margin-bottom:2rem;">
      A collection of short videos I’ve worked on — documenting projects, moments, and creative edits.
    </p>

    <div class="slideshow-container">
      <div class="slide fade">
        <video src=".mp4" controls></video>
      </div>

      <div class="slide fade">
        <video src="brogrammers.mp4" controls></video>
      </div>

      <div class="slide fade">
        <video src="lv_0_20251006215321.mp4" controls></video>
      </div>

      <div class="slide fade">
        <video src="lv_0_20251021180337.mp4" controls></video>
      </div>

      <div class="slide fade">
        <video src="lv_0_20251021191032.mp4" controls></video>
      </div>

      <!-- Navigation -->
      <a class="prev" onclick="changeSlide(-1, 'video')">&#10094;</a>
      <a class="next" onclick="changeSlide(1, 'video')">&#10095;</a>
    </div>

    <!-- Dots -->
    <div class="dots-container">
      <span class="dot" onclick="currentSlide(1, 'video')"></span>
      <span class="dot" onclick="currentSlide(2, 'video')"></span>
      <span class="dot" onclick="currentSlide(3, 'video')"></span>
      <span class="dot" onclick="currentSlide(4, 'video')"></span>
      <span class="dot" onclick="currentSlide(5, 'video')"></span>
    </div>
  </div>
</section>





    <!-- JS -->
    <script src="js/script.js"></script>
  </body>
  </html>
