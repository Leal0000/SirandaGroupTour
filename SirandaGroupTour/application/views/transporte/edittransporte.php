<form method="POST" action="<?=base_url();?>index.php/Transporte/editTransporte" class="form-control">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?= $transportes->idtransporte?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" value="<?=$transportes->nombre_t?>" required>
                            </div>
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo (dia)</label>
                                <input type="number" class="form-control" name="costo" id="costo" aria-describedby="emailHelp" value="<?= $transportes->costo_dia?>" required>
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Marca</label>
                                <input type="text" class="form-control" name="marca" id="marca" aria-describedby="emailHelp" value="<?= $transportes->marca?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Matricula</label>
                                <input type="text" class="form-control" name="matricula" id="matricula" aria-describedby="emailHelp" value="<?= $transportes->matricula?>">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success btn-hover btn-bordered" value="editar">
                                <a href="<?=base_url();?>index.php/Transporte" class="btn btn-dark">Cancelar</a>
                            </div>
                        
                    </div>
                    <div class="modal-footer">                       
</form>