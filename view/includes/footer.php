</main>

<footer class="bg-dark">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum quam, ipsum ratione nihil odit at nam, cum debitis, fugiat quibusdam eaque unde voluptas. Mollitia maiores repellendus libero quis corrupti placeat?</p>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $URL_WEB ?>resources/prism/prism.js"></script>

<script>
    // esperar a que este todo el DOM cargado
    $(document).ready( function () {

        // cargar el plugin sobre una tabla que tenga id="tpersonas"
        $('#tpersonas').DataTable();
    } );

</script>

</body>
</html>