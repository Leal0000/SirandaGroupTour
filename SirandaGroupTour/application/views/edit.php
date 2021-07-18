<form method="POST" action="<?=base_url();?>index.php/Welcome/updateViaje" class="form-control">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?= $registro->idviajes?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp" value="<?= $registro->titulo?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="desc" id="desc" aria-describedby="emailHelp" value="<?= $registro->descripcion?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Destino</label>
                                <select name="destino" id="destino" class="form-select" aria-label="Default select example">
                                    <option >Select</option>
                                    <?php foreach($destinos->result() as $dest):?>
                                    <option
                                    <?php if($dest->iddestinos == $registro->destino):
                                    echo "selected";
                                    endif?>
                                     value="<?=$dest->iddestinos?>"   ><?=$dest->nombre_destino?>
                                    </option>

                                    <?php endforeach?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha Inicio</label>
                                <input type="date" class="form-control" name="fecha_i" id="fecha_i" aria-describedby="emailHelp" value="<?= $registro->fecha_inicio?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Fecha Final</label>
                                <input type="date" class="form-control" name="fecha_f" id="fecha_f" aria-describedby="emailHelp" value="<?= $registro->fecha_finaL?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Costo</label>
                                <input type="number" class="form-control" name="costo" id="costo" aria-describedby="emailHelp" value="<?= $registro->costo?>" required>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success btn-hover btn-bordered" value="editar">
                                <a href="<?=base_url();?>index.php/Welcome/page" class="btn btn-dark">Cancelar</a>
                            </div>
                            
                        
                    </div>
                    <div class="modal-footer">
                       
                    </form>