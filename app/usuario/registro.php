<?php 
  include '../helpers/head.php';
 ?>
    <script type="text/javascript" src="../ejemplo/instascan.min.js"></script>

  <div class="card">
  <h5 class="card-header">Registro de cupon</h5>
  <div class="card-body">
    <h5 class="card-title">Tus cupones, los tienes al instante!</h5>
    <p class="card-text">Encuentra grandes ofertas con los cupones actuales.</p>
   

    <div class="form-row">   
    <div class="col-12 col-md-3">    
    </div>
    <div class="col-12 col-md-6">
    <video id="preview" class="img-fluid" alt="Responsive image"></video>
    </div>
    <div class="col-12 col-md-3">
    </div>
    <input type="text" id="datos" value="">
</div>


    
  </div>
</div>
<script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
        console.log("amor");
        $("#datos").val(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
<?php
  include '../helpers/footer.php';
  ?>
