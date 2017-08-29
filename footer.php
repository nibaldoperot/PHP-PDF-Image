  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s16">
          <a id="logo-container" href="#" class="brand-logo"><img src="resources/images/montana-studio.svg" style="height: 64px;width: auto;"/></a>
          <p class="grey-text text-lighten-4">
            Somos un estudio de producción dedicado al desarrollo de nuevos medios y sitios corporativos.
            Al mismo tiempo creamos sistemas basados en tus requerimientos.
          </p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://montana-studio.com">Montana Studio</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $(function(){
      $('.compress_pdf').click(function(){
        var filename = $(this).attr('name')
        var path = filename
        console.log(filename)
        $('#loading').show()
        $.ajax({
          type: "POST",
          url: "template-parts/pdf/do_compress.php",
          data: "path="+path
        }).done(function( msg ) {
          alert( "Compression Finished")
          location.reload() 
        })
      })


      $('.delete_pdf').click(function(){
        var filename = $(this).attr('name')
        var path = filename
        console.log(filename)
        $('#loading').show()
        $.ajax({
          type: "POST",
          url: "template-parts/pdf/do_delete.php",
          data: "path="+path
        }).done(function( msg ) {
          alert( "Deleted File")
          location.reload() 
        })
      })

      $('.resize_img').click(function(){
        var filename = $(this).attr('name')
        var path = filename
        var width = $('.width').val()
        var height = $('.height').val()
        console.log(filename, width, height)
        $('#loading').show()
        $.ajax({
          type: "POST",
          url: "template-parts/img/do_resize.php",
          data: "path="+path+"&width="+width+"&height="+height
        }).done(function( msg ) {
          alert( "Resized File")
          location.reload() 
        })
      })

      $('.delete_img').click(function(){
        var filename = $(this).attr('name')
        var path = filename
        console.log(filename)
        $('#loading').show()
        $.ajax({
          type: "POST",
          url: "template-parts/img/do_delete.php",
          data: "path="+path
        }).done(function( msg ) {
          alert( "Deleted File")
          location.reload() 
        })
      })
    })
  </script>
  </body>
</html>