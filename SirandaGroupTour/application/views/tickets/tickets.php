<div class="container">
    <div class="row">

   

<table class="table table-bordered table-hover" style="margin-left: 10px; margin-top: 50px;">
       

            <thead>
              <tr class="table active">
                <th scope="col">Id</th>
                <th scope="col">Agencia</th>
                <th scope="col">Folio</th>
                <th scope="col">Inicio</th>
                <th scope="col">Final</th>
                <th scope="col">Transporte</th>
                <th scope="col">Dias</th>
                <th scope="col">Paquetes</th>
                <th scope="col">Costo(Persona Dia)</th>
                <th scope="col">Costo (Persona General)</th>
                <th scope="col">Costo (Dia)</th>
                <th scope="col">Total Neto</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead> 
            <tbody>
                <?php 
                if ($tickets):
                    foreach($tickets->result() as $ticket){
          ?>
              <tr>
                <th scope="row"><?= $ticket->idtickets?></th> 
                <td> <?= $ticket->agencia?></td>
                <td><?= $ticket->folio?></td>
                <td>
                    <?=$ticket->fecha_i?>
                </td>
                <td><?= $ticket->fecha_f?></td>
                <td><?= $ticket->nombre_t?></td>
                <td><?= $ticket->dias?></td>
                <td><?= $ticket->paquetes?></td>
                <td><?= $ticket->costodia?></td>
                <td><?= $ticket->costo_persona?></td>
                <td><?= $ticket->costo_dia_t?></td>
                <td><?= $ticket->total_neto?></td>
                 <td>
                <a href="#" class="btn btn-danger btn-hover btn-bordered" data-id="<?=$ticket->idtickets?>" id="deleteTi">Eliminar</a>
                <a href="<?=base_url();?>index.php/Ticket/getTicket/<?=$ticket->idtickets?>" class="btn btn-primary">Editar</a>
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
                Agregar Ticket
                </button> 
            </div>
        </div>




                       








                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega un Ticket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <form method="POST" action="<?=base_url();?>index.php/Ticket/addTicket">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agencia</label>
                                <input type="text" class="form-control" name="agencia" id="agencia" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Folio</label>
                                <input type="text" class="form-control" name="folio" id="folio" aria-describedby="emailHelp" required>
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Inicio</label>
                                <input type="date" class="form-control" name="inicio" id="inicio" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Final</label>
                                <input type="date" class="form-control" name="final" id="final" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">#Paquetes</label>
                                <input type="number" class="form-control" name="paquetes" id="paquetes" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Transporte</label>
                                <select name="transporte" id="transporte" class="form-select" aria-label="Default select example" required>
                                    <option >Select</option>
                                    <?php foreach($transportes->result() as $transporte):?>
                                    <option value="<?=$transporte->idtransporte?>"><?=$transporte->nombre_t?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Itinerario</label>
                               <div class="form-floating">
                                    <textarea class="form-control border" placeholder="Leave a comment here" name="itinerario" id="itinerario" style="height: 100px" required></textarea>
                                </div>
                            </div>
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo Dia Persona</label>
                                <input type="number" step="any" class="form-control" name="costo" id="costo" aria-describedby="emailHelp" required>
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


          
       