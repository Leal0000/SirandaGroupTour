<form method="POST" action="<?=base_url();?>index.php/Ticket/updateTicket" class="form-control">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?= $tickets->idtickets?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agencia</label>
                                <input type="text" class="form-control" name="agencia" id="agencia" aria-describedby="emailHelp" value="<?=$tickets->agencia?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Folio</label>
                                <input type="text" class="form-control" name="folio" id="folio" aria-describedby="emailHelp"  value="<?=$tickets->folio?>" required>
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Inicio</label>
                                <input type="date" class="form-control" name="inicio" id="inicio" aria-describedby="emailHelp"  value="<?=$tickets->fecha_i?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Final</label>
                                <input type="date" class="form-control" name="final" id="final" aria-describedby="emailHelp"  value="<?=$tickets->fecha_f?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Paquetes</label>
                                <input type="number" class="form-control" name="paquetes" id="paquetes" aria-describedby="emailHelp" value="<?=$tickets->paquetes?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Transporte</label>
                                <select name="transporte" id="transporte" class="form-select" aria-label="Default select example" required>
                                    
                                    <?php foreach($transportes->result() as $transporte):?>
                                    <option <?php if($transporte->idtransporte == $tickets->tipo_transporte ):
                                    echo "selected";
                                    endif?> value="<?=$transporte->idtransporte?>"><?=$transporte->nombre_t?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Itinerario</label>
                               <div class="form-floating">
                                    <textarea class="form-control border" placeholder="Leave a comment here" name="itinerario" id="itinerario" style="height: 100px"  required><?=$tickets->itinerario?></textarea>
                                </div>
                            </div>
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo Dia Persona</label>
                                <input type="number" step="any" class="form-control" name="costo" id="costo" aria-describedby="emailHelp"  value="<?=$tickets->costodia?>" required>
                            </div>
                            <input type="submit" class="btn btn-success btn-hover btn-bordered" value="editar">
                                <a href="<?=base_url();?>index.php/Ticket" class="btn btn-dark">Cancelar</a>
                            </div>
                            
                                                 
</form>