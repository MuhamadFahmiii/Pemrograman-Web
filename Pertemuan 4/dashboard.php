<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <style>
    header img {
      width: 100%;
      height: auto;
      display: block;
    }
    ul {
      background-color: #dddddd;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: left;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #2017c3;
    }

    footer {
      background-color: #f4f4f4;
      padding: 20px;
      text-align: center; /* Menyusun teks dan elemen di footer ke tengah */
    }

    footer ul {
      list-style-type: none;
      padding: 0;
      margin: 0;

      display: flex; /* Mengaktifkan flexbox */
      justify-content: center; /* Menyusun elemen di tengah secara horizontal */
    }
  </style>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="beritaterkini.html">Home</a></li>
          <li><a href="about.asp">About us</a></li>
        </ul>
      </nav>
      <br />
      <img src="thebeatles.jpg" alt="jalan" />
    </header>
    <br />
    <hr />

    <h1>Berita terkini</h1>
    <br />
    <main>
      <div class="Berita">
        <img
          style="float: left; margin-right: 10px"
          src="astronot.jpg"
          width="200px"
        />
        <h4>
          Astronot Meluncur Tanpa Roket: Teknologi Baru Siap Merevolusi
          Eksplorasi Antariksa
        </h4>
        <p>
          Teknologi revolusioner berhasil meluncurkan astronot ke orbit tanpa
          menggunakan roket konvensional. Dengan sistem propulsi elektromagnetik
          yang inovatif, langkah ini diharapkan memangkas biaya peluncuran dan
          mengurangi dampak lingkungan. Eksperimen ini menandai awal dari
          perubahan besar dalam cara manusia menjelajahi luar angkasa.
        </p>
        <br />
        <a style="clear: left" href="beritaterkini1.html">selengkapnya</a>
      </div>
      <br style="clear: left" />
      <br />
      <hr />

      <div>
        <img
          style="float: left; margin-right: 10px"
          src="olhar.jpg"
          width="200px"
        />
        <h4>Michael daffa.jr menjadi juara</h4>
        <p>
          Michael Daffa Jr., pegolf muda berbakat, berhasil menjuarai turnamen
          golf internasional bergengsi. Dengan permainan yang memukau dan
          ketenangan di bawah tekanan, ia membawa pulang trofi juara dan
          mengukir namanya sebagai bintang baru di dunia golf.
        </p>
        <br />
        <br />
        <a style="clear: left" href="beritaterkini2.html">selengkapnya</a>
      </div>
    </main>
    <br />
    <br />
    <br />
    <br />
    <hr />

    <footer>
      <h3>web rekomendasi</h3>
      <br />
      <ul>
        <li><a href="https://www.google.com" target="_blank">Google</a></li>
        <li>
          <a href="https://www.microsoft.com" target="_blank">microsoft</a>
        </li>
      </ul>
    </footer>
  </body>
</html>
