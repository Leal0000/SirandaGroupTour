<div class="container">
    <div class="row">

   

<table class="table table-bordered table-hover" style="margin-left: 10px; margin-top: 50px;">
       

            <thead>
              <tr class="table active">
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Destino</th>
                <th scope="col">Inicio</th>
                <th scope="col">Final</th>
                <th scope="col">Dias</th>
                <th scope="col">Costo</th>
                <th scope="col">Estado</th>
                <th scope="col">Accion</th>



              </tr>
            </thead> 
            <tbody>
                <?php 
                if ($viajes):
                    foreach($viajes->result() as $viaje){
          ?>
              <tr>
                <?php $id=$viaje ?>
                <th scope="row"><?= $viaje->idviajes?></th> 
                <td> <?= $viaje->titulo?></td>
                <td><?= $viaje->descripcion?></td>
                <td>
                    <?=$viaje->nombre_destino?>
                </td>
                <td><?= $viaje->fecha_inicio?></td>
                <td><?= $viaje->fecha_finaL?></td>
                <td><?= $viaje->dias?></td>
                <td><?= $viaje->costo?></td>
                
                <td><?php if($viaje->status > 0){
                 echo "Activo";   
                }
                else{
                    echo "Inactivo";
                }
                    ?>
            
            
                </td>
                <td>
                    <a href="#" class="btn btn-danger btn-hover btn-bordered" data-id="<?=$viaje->idviajes?>" id="delete">Eliminar</a>
                <a href="<?=base_url();?>index.php/Welcome/editar/<?=$viaje->idviajes?>" class="btn btn-primary">Editar</a>

                </td>
                
              </tr>
              <?php

    }
endif
?>
  
            </tbody>
            
          </table>

      
                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar Viaje
                </button> 
            </div>
        </div>




                       








                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega un viaje</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <form method="POST" action="<?=base_url();?>index.php/Welcome/agregar">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="desc" id="desc" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Destino</label>
                                <select name="destino" id="destino" class="form-select" aria-label="Default select example">
                                    <option >Select</option>
                                    <?php foreach($destinos->result() as $dest):?>
                                    <option value="<?=$dest->iddestinos?>"><?=$dest->nombre_destino?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha Inicio</label>
                                <input type="date" class="form-control" name="fecha_i" id="fecha_i" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha Final</label>
                                <input type="date" class="form-control" name="fecha_f" id="fecha_f" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo</label>
                                <input type="number" class="form-control" name="costo" id="costo" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success btn-hover btn-bordered" value="enviar">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            
                        
                    </div>
                    <div class="modal-footer">
                       
                    </form>



                    </div>
                    </div>
                </div>
                </div>


          
       