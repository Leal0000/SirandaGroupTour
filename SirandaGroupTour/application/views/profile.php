<div class="container">
    <div class="row">
  <div class="card-header" >
   <h2>Perfil de usuario</h2> 
  </div>
  <img src="https://previews.123rf.com/images/alekseyvanin/alekseyvanin1704/alekseyvanin170403722/76700719-icono-de-la-l%C3%ADnea-de-usuario-esquema-de-perfil-ilustraci%C3%B3n-de-logotipo-vectorial-pictograma-lineal-aislad.jpg" style="width: 500px;" class="card-img-top" alt="...">
  <div class="card-body" >
    <h5 class="card-title"><?=$this->session->nombre?> <?=$this->session->apellido?></h5>
    <p class="card-text"><?=$this->session->correo?></p>
    <a href="#" class="btn btn-primary">Editar Perfil</a>
  </div>
</div>
    </div>
</div>


