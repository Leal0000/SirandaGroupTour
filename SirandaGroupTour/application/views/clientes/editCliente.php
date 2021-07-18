<form method="POST" action="<?=base_url();?>index.php/Clientes/updateCliente" class="form-control">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp" value="<?= $clientes->idclientes?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" value="<?=$clientes->nombre_c?>" required>
                            </div>
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" value="<?= $clientes->apellidos?>" required>
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" value="<?= $clientes->correo?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                                <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp" value="<?= $clientes->telefono?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="emailHelp" value="<?= $clientes->direccion?>">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success btn-hover btn-bordered" value="editar">
                                <a href="<?=base_url();?>index.php/Clientes" class="btn btn-dark">Cancelar</a>
                            </div>
                        
                    </div>
                    <div class="modal-footer">                       
</form>