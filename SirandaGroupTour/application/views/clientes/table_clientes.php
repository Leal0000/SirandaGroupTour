<div class="container">
    <div class="row">

   

<table class="table table-bordered table-hover" style="margin-left: 10px; margin-top: 50px;">
       

            <thead>
              <tr class="table active">
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Accion</th>



              </tr>
            </thead> 
            <tbody>
                <?php 
                if ($clientes):
                    foreach($clientes->result() as $client){
          ?>
              <tr>
                <th scope="row"><?= $client->idclientes?></th> 
                <td> <?= $client->nombre_c?></td>
                <td><?= $client->apellidos?></td>
                <td>
                    <?=$client->correo?>
                </td>
                <td><?= $client->telefono?></td>
                <td><?= $client->direccion?></td>
                <td>
                <a href="#" class="btn btn-danger btn-hover btn-bordered" data-id="<?=$client->idclientes?>" id="deletecli">Eliminar</a>
                <a href="<?=base_url();?>index.php/Clientes/editClient/<?=$client->idclientes?>" class="btn btn-primary">Editar</a>

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
                Agregar Cliente
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
                            <form method="POST" action="<?=base_url();?>index.php/Clientes/addClientes">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" required>
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                                <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="emailHelp" >
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


          
       