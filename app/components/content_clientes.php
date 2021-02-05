                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
                            </div>
                            <div class="col-sm">
                                <p class="mb-4" align="right"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo cliente</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Listado general de clientes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre entidad</th>
                                            <th>Documento</th>
                                            <th>Llave</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
            //Conf SQL
            $i=1;
            $sql = "SELECT ID_Clientes , Llave_Cliente, Nombre_Cliente, Documento_Cliente, Tipo_Cliente, Fecha_Cliente FROM Clientes  ORDER BY id_Clientes DESC";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $row = sqlsrv_fetch_array( $stmt) ) {
            do{

            //Fin conf SQL       
            ?>
                         
                        <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $row['Nombre_Cliente'];?></td>
                                            <td><?php echo $row['Documento_Cliente'];?></td>
                                            <td><?php echo $row['Llave_Cliente'];?></td>
                                            <td>-</td>
                                            <td>-</td>
                                            
                                        </tr>

            <?php
            }while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC));
            sqlsrv_free_stmt( $stmt);
            }
            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->