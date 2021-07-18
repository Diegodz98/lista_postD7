    <div class="contenedor">
    
    <div class="formulario">
        <input type="search" name="" id="filtro" placeholder="Buscar..." class="input-buscar">
        <button id="btnExportar" class="btnExportar">Exportar Exel</button>
        
    </div>

    <table class="tabla-post" id="tablaPosts">
        <thead>
        <tr> 
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>


        </tr>
        </thead>
                <tbody>
                    <?php  foreach ($posts as $post) {
                        ?>
                        <tr class="fila-post">
                            
                        <td><?php  print $post->id; ?></td>
                        <td><?php  print $post->title;?></td>
                        <td><?php  print $post->body; ?></td>
                    </tr>

                    <?php    
                    }?>
                            
                </tbody>
            </table>

</div>

   