<?php 
  include '../helpers/head.php';
?>


  <div class="card">
  <h5 class="card-header">Mis Cupones</h5>
  <div class="card-body">
    <h5 class="card-title">Al completar la cantidad de cupones establecidos podra canjearlos por sorpresas!</h5>
    <p class="card-text">Encuentra grandes ofertas con los cupones actuales.</p>
   

    <div class="form-row">   
 
    <div class="col-12 col-md-4">
   
       <select class="form-control">
        <option value="1">Abarrotes</option>
        <option value="2">Bares</option>
        <option value="3">Carniceroa</option>
        <option value="4">Farmacia</option>
        <option value="5">Panaderia</option>
        <option value="6">Medico</option>
      </select>
    </div>
    <div class="col-12 col-md-4">
    <button type="button" class="btn btn-info btn-lg btn-block">Filtrar</button>
    </div>
    <div class="col-12 col-md-4">
    </div>
</div>


    
  </div>
</div>


<?php
  include '../helpers/footer.php';
 ?>