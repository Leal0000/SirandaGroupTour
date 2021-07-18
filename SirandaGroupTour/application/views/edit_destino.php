<form method="POST" action="<?=base_url();?>index.php/Welcome/updateDestino" class="form-control">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?= $registro->iddestinos?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp" value="<?= $registro->nombre_destino?>" required>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success btn-hover btn-bordered" value="editar">
                                <a href="<?=base_url();?>index.php/Welcome/updateDestino" class="btn btn-dark">Cancelar</a>
                            </div>
                            
                        
                    </div>
                    <div class="modal-footer">                       
</form>