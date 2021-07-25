<div class="container">
    <div class="row">

   

<table class="table table-bordered table-hover" style="margin-left: 10px; margin-top: 50px;">
       

            <thead>
              <tr class="table active">
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Costo(dia)</th>
                <th scope="col">Marca</th>
                <th scope="col">Matricula</th>
                <th scope="col">Accion</th>
              </tr>
            </thead> 
            <tbody>
                <?php 
                if ($transportes):
                    foreach($transportes->result() as $transporte){
          ?>
              <tr>
                <th scope="row"><?= $transporte->idtransporte?></th> 
                <td> <?= $transporte->nombre_t?></td>
                <td><?= $transporte->costo_dia?></td>
                <td>
                    <?=$transporte->marca?>
                </td>
                <td><?= $transporte->matricula?></td>
                 <td>
                <a href="#" class="btn btn-danger btn-hover btn-bordered" data-id="<?=$transporte->idtransporte?>" id="deleteTr">Eliminar</a>
                <a href="<?=base_url();?>index.php/Transporte/getTransporte/<?=$transporte->idtransporte?>" class="btn btn-primary">Editar</a>
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
                Agregar Transporte
                </button> 
            </div>
        </div>




                       








                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega un Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <form method="POST" action="<?=base_url();?>index.php/Transporte/addTransporte">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo (dia)</label>
                                <input type="number" class="form-control" name="costo" id="costo" aria-describedby="emailHelp" required>
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Marca</label>
                                <input type="text" class="form-control" name="marca" id="marca" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Matricula</label>
                                <input type="text" class="form-control" name="matricula" id="matricula" aria-describedby="emailHelp" >
                            </div>
                            <div class="mb-3">
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


          
       