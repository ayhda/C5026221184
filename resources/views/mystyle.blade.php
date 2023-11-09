<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSS</title>
    <link rel="stylesheet" href="mystyle.css" />
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: burlywood;
      }

      p {
        text-align: center;
      }

      .salam {
        font-size: 50px;
        text-align: right;
        font-weight: bold;
        text-decoration: uppercase;
        color: rgb(0, 106, 255);
      }

      .garisbawah {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <!--Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
    Hallo
    <b
      style="
        color: rgb(255, 0, 0);
        text-decoration: underline;
        text-shadow: 0px 0px 100px rgb(100, 6, 10);
      "
      >apa</b
    >
    kabar?
    <!--Inpage CSS, digunakan jika yang berbeda hanya 1 halaman-->
    <div class="garisbawah salam">Hallo apa kabar?</div>
    <!--External file, digunakan untuk global 1 situs-->
    <span class="sembunyi">Hallo apa kabar?</span>
    <p>Hallo apa kabar?</p>
    <a href="https://www.google.com/" target="_blank">Google</a>
    <img
      src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2023/05/woman-working-on-macbook-pro.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5"
      width="500"
      height="500"
      class="picture"
    />
    <div class="kotakfoto">
      <img
        src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2023/05/woman-working-on-macbook-pro.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5"
        width="500"
        height="500"
        class="staticpicture"
      />
    </div>
  </body>
</html>
