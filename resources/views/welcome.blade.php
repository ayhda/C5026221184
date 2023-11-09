<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="“X-UA-Compatible”" content="“ie edge”" />
    <title>Adhya's Website</title>

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="olas.css" />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">Adhyalio.</a>
      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#books">Books</a>
        <a href="#interests">Interests</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="bx bx-moon" id="darkMode-icon"></div>

      <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, I'm</h3>
        <h1>I Gusti Ngurah Adhya Pradipta</h1>
        <p>
          Explore the vibrant world of a 19-year-old man whose curiosity knows
          no bounds. This digital space is dedicated to the thoughts and
          interests of a young individual who loves to delve into a wide range
          of subjects, making it a hub for diverse and engaging content.
        </p>

        <div class="social-media">
          <a href="https://www.instagram.com/adhyaprdt"
            ><i class="bx bxl-instagram-alt"></i
          ></a>
          <a href="https://github.com/ayhda"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/pradiptaadhya"
            ><i class="bx bxl-linkedin"></i
          ></a>
        </div>

        <a href="#" class="btn">Download CV</a>
      </div>

      <div class="profession-container">
        <div class="profession-box">
          <div class="profession" style="--i: 0">
            <i class="bx bx-code-alt"></i>
            <h3>Web Developer</h3>
          </div>
          <div class="profession" style="--i: 1">
            <i class="bx bx-bug-alt"></i>
            <h3>Software Engineer</h3>
          </div>
          <div class="profession" style="--i: 2">
            <i class="bx bx-data"></i>
            <h3>Data Scientist</h3>
          </div>
          <div class="profession" style="--i: 3">
            <i class="bx bx-bitcoin"></i>
            <h3>Blockchain Dev</h3>
          </div>

          <div class="circle"></div>
        </div>

        <div class="overlay"></div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="about-img">
        <img src="asset/self.png" alt="" />
      </div>

      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Hi, I'm Adhya</h3>
        <p>
          As a third-semester student majoring in Information Systems at the
          Sepuluh Nopember Institute of Technology, I possess a profound
          fascination for the intersection of business, economics, and
          technology. My dedication lies in the mission to contribute to the
          advancement of society's economy and the well-being of humanity
          through the innovative application of technology. I am committed to
          harnessing the transformative power of technology to foster economic
          growth and improve the overall quality of life for individuals.
        </p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>

    <section class="books" id="books">
      <h2 class="heading">My Top 3<span>Books</span></h2>

      <div class="books-container">
        <div class="books-box">
          <i class="bx bxs-book"></i>
          <h3>Sapiens</h3>
          <p>
            "Sapiens" by Yuval Noah Harari offers a captivating exploration of
            human history, tracing our evolution from ancient ancestors to
            modern civilization, providing a unique perspective on the human
            narrative.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="books-box">
          <i class="bx bxs-book"></i>
          <h3>Rich Dad Poor Dad</h3>
          <p>
            "Rich Dad Poor Dad" by Robert Kiyosaki challenges conventional money
            wisdom, comparing the financial philosophies of his "rich dad" and
            "poor dad," imparting insights on financial education, passive
            income, and a new mindset for success.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
        <div class="books-box">
          <i class="bx bxs-book"></i>
          <h3>The Psychology of Money</h3>
          <p>
            Morgan Housel's "The Psychology of Money" explores the emotional and
            behavioral aspects of finance, challenging conventional ideas of
            wealth and success. It emphasizes the significance of patience,
            resilience, and understanding human behavior for making wise
            financial choices.
          </p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <section class="interests" id="interests">
      <h2 class="heading">Personal <span>Interests</span></h2>

      <div class="interests-container">
        <div class="interests-box">
          <img src="asset/reading.jpg" alt="" />

          <div class="interests-layer">
            <h4>Reading</h4>
            <p>
              Reading is a deeply enriching and cherished personal interest that
              I hold close to my heart. It allows me to embark on captivating
              journeys of imagination, knowledge, and self-discovery.
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="interests-box">
          <img src="asset/investing.jpg" alt="" />

          <div class="interests-layer">
            <h4>Investing</h4>
            <p>
              Investing is a personal passion that I enthusiastically pursue.
              It's a journey of financial exploration, strategic
              decision-making, and long-term wealth-building. $BTC
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="interests-box">
          <img src="asset/fitness.jpg" alt="" />

          <div class="interests-layer">
            <h4>Fitness</h4>
            <p>
              Fitness is a deeply ingrained and cherished personal interest of
              mine. It's a journey of physical and mental well-being, a
              commitment to a healthier and more vibrant life.
            </p>
            <a href="#"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me!</span></h2>

      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Full Name" />
          <input type="email" placeholder="Email Address" />
        </div>
        <div class="input-box">
          <input type="number" placeholder="Mobile Number" />
          <input type="text" placeholder="Email Subject" />
        </div>
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Your Message"
        ></textarea>
        <input type="submit" value="Send Message" class="btn" />
      </form>
    </section>

    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Adhya | All Rights Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bxs-up-arrow"></i></a>
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="script.js"></script>

    <div class="full-width" ><a class="centered-link btn" href="linktree">Linktree</a></div>
    <div class="full-width" ><a class="centered-link btn" href="welcomereal">Welcome PHP</a></div>
    <div class="full-width" ><a class="centered-link btn" href="layout">Layout</a></div>
    <div class="full-width" ><a class="centered-link btn" href="blog">Blog</a></div>
    <div class="full-width" ><a class="centered-link btn" href="hello">Hello</a></div>
    <div class="full-width" ><a class="centered-link btn" href="js1">Javascript 1</a></div>
    <div class="full-width" ><a class="centered-link btn" href="js2">Javascript 2</a></div>
    <div class="full-width" ><a class="centered-link btn" href="link">Link</a></div>
    <div class="full-width" ><a class="centered-link btn" href="mystyle">My Style</a></div>
    <div class="full-width" ><a class="centered-link btn" href="responsive">Responsive 1</a></div>
    <div class="full-width" ><a class="centered-link btn" href="responsive2">Responsive 2</a></div>
    <div class="full-width" ><a class="centered-link btn" href="style">Style</a></div>
  </body>
</html>
