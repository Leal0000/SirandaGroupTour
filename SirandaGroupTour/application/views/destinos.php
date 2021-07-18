<div class="container">
    <div class="row">

   

<table class="table table-bordered table-hover" style="margin-left: 10px; margin-top: 50px;">
       

            <thead>
              <tr class="table active">
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Accion</th>



              </tr>
            </thead> 
            <tbody>
                <?php 
                if ($destinos):
                    foreach($destinos->result() as $dest){
          ?>
              <tr>
                
                <th scope="row"><?= $dest->iddestinos?></th> 
                <td> <?= $dest->nombre_destino?></td>
                <td>
                    <a href="#" class="btn btn-danger btn-hover btn-bordered" data-id="<?=$dest->iddestinos?>" id="deletedes">Eliminar</a>
                <a href="<?=base_url();?>index.php/Welcome/editarDestinos/<?=$dest->iddestinos?>" class="btn btn-primary">Editar</a>

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
                Agregar Destino

                </button> 
            </div>
        </div>




                       








                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega un destino</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <form method="POST" action="<?=base_url();?>index.php/Welcome/add_destino">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" required>
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


          
       