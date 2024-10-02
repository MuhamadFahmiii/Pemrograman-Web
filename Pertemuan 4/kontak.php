<!DOCTYPE html>
<html>
  <head>
    <h1><title>Home</title></h1>
  </head>

  <body>
    <center>
      <header>
        <a href="home.html">Home</a>
        <span> | </span>
        <a href="tentang.html">About</a>
        <span> | </span>
        <a href="kontak.html">Contact</a>
        <span> | </span>
      </header>
      <h1>Isi Form</h1>
      <form>
        <br />
        nama:
        <input name="nama" /><br />
        <br />
        url:
        <input type="text" name="url" />
        <br />
        <br />
        Hobi:
        <br />
        <br />
        <input type="checkbox" name="Hobi[]" /> futsal
        <br />
        <input type="checkbox" name="Hobi[]" /> basket
        <br />
        <input type="checkbox" name="Hobi[]" /> badminton
        <br />
        <br />
        jenis kelamin: <br /><br />
        <input type="radio" name="jkel" value="laki-laki" /> laki-laki
        <br />
        <input type="radio" name="jkel" value="perempuan" /> perempuan
        <br />
        <br />
        <input type="submit" name="tombolsubmit" value="kirim" />
        <input type="reset" name="tombolhapus" value="hapus" />
      </form>
    </center>
  </body>
</html>
