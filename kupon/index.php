<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
  <?php include 'header.php' ?>
  <title>25% DISC | CV KOMBOS JAYAPURA</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="https://www.vectorlogo.zone/logos/toyota/toyota-tile.svg" width="40" height="40" class="d-inline-block align-top" alt="">
    </a></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/toyotajayapuraofficial/" style="color: white;">Facebook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://g.page/toyotaservicejayapura?share" style="color: white;">Google Maps</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class=" container">
    <form class="myForm">
      <center>
        <h3>BOOKING SERVIS</h3>
      </center>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
      </div>
      <div class="form-group mt-3">
        <label for="noPolisi">No Polisi</label>
        <input type="text" class="form-control" id="noPolisi" placeholder="Masukkan No Polisi">
      </div>
      <div class="form-group mt-3">
        <label for="noPolisi">Tanggal Ingin Servis</label>
        <input type="date" class="form-control" id="tglServis" placeholder="Tanggal Ingin Servis">
      </div>
      <div class="form-group mt-3">
        <small id="info" class="form-text text-muted mt-2">Setelah menekan submit, Anda akan langsung dialihkan ke Whatsapp.</small>
        <br>
        <button type="submit" id="submit" class="btn btn-primary mt-1">Submit</button>
      </div>


    </form>
  </div>

  <!-- 
  <footer class="footer">
    <div class="container">
      <span>© 2021 CVK JAYAPURA</span>
    </div>
  </footer> -->


  <script>
    $(document).ready(function() {

      function capitalizeFirstLetters(str) {
        return str.toLowerCase().replace(/^\w|\s\w/g, function(letter) {
          return letter.toUpperCase();
        })
      }

      $('#nama').on('input', function() {
        kapitalisasi = $('#nama').val();
        x = capitalizeFirstLetters(kapitalisasi);
        $('#nama').val(x)
      });

      $('#noPolisi').on('input', function(evt) {
        $(this).val(function(_, val) {
          return val.toUpperCase();
        });
      });

      // $("#noHP").autoNumeric('init', {
      //   aSep: '',
      //   aDec: '.',
      //   aForm: true,
      //   aSign: ' +62',
      //   pSign: 'p',
      //   vMax: '9999999999999',
      //   vMin: '-999999999'
      // });

      $('#submit').on('click touchstart', function() {
        test = "+6285244449300";
        noBengkel = "+6281381669200";
        nama = $("#nama").val();
        hp = $("#noHP").val();
        noPolisi = $("#noPolisi").val();
        x = $("#tglServis").val();
        moment.locale('id')
        tgl = moment(x).format('dddd, DD MMMM YYYY');
        text = "Halo, saya ingin booking servis. %0a%0aNama: *" + nama + "*" + "%0aNo Polisi: *" + noPolisi + "*" + "%0aTanggal: *" + tgl + "*" + "%0a%0a" + "CVKJYP25%";
        //alert(text);
        if (nama != "" && noPolisi != "" && x != "") {
          win = window.open('https://api.whatsapp.com/send?phone=' + test + '&text=' + text);
          if (win) {
            //Browser has allowed it to be opened
            win.focus();
          } else {
            //Browser has blocked it
            alert('Please allow popups for this website');
          }
          return false;
        } else {
          alert('Isi semua data dengan lengkap!');
        }

      });

    });
  </script>
</body>

</html>