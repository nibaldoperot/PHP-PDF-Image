</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="resources/images/montana-studio.svg" style="height: 64px;width: auto;"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./">Home</a></li>
        <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
        <li><a href="single.php?type=img">Upload Image</a></li>
        <li><a href="single.php?type=img&status=uploaded">Uploaded Images</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="./">Home</a></li>
        <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
        <li><a href="single.php?type=img">Upload Image</a></li>
        <li><a href="single.php?type=img&status=uploaded">Uploaded Images</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <h5 class="header col s12 light">Upload PDF</h5>

      <div class="row">
          <form enctype="multipart/form-data" action="<?php print $_SERVER['PHP_SELF']?>?type=pdf" method="post">
                <p class="light">
                    <label class="mdl-button mdl-js-button mdl-button--icon mdl-button--file">
                        <a class="btn-large waves-effect waves-light teal lighten-1">Browse</a>
                        <input type="file" name="pdfFile"/><br /><br />
                    </label>
                    <label class="mdl-button mdl-js-button mdl-button--icon mdl-button--file">
                        <a class="btn-large waves-effect waves-light teal lighten-1">Upload</a>
                        <input type="submit" value="Upload" />
                    </label>
                </p>
            </form>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
        </div>
      </div>
    </div>
    <div class="parallax"><img src="resources/images/pdf.jpg" alt="pdf index"></div>
  </div>


  <?php
if ( isset( $_FILES['pdfFile'] ) ) {
	if ($_FILES['pdfFile']['type'] == "application/pdf") {
		$source_file = $_FILES['pdfFile']['tmp_name'];
		$dest_file = "uploads/pdf/original/".$_FILES['pdfFile']['name'];

		if (file_exists($dest_file)) {
			print "The file name already exists!!";
		}
		else {
			move_uploaded_file( $source_file, $dest_file )
			or die ("Error!!");
			if($_FILES['pdfFile']['error'] == 0) {
				print "Compresión Exitosa";
				print "<b><u>Detalles : </u></b><br/>";
				print "Nombre del Archivo : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
				print "Tamaño : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
				print "Ubicación : uploads/pdf/original/".$_FILES['pdfFile']['name']."<br/>";
				header("Location: single.php?type=pdf&status=uploaded"); /* Redirect browser */
				exit();
			}
		}
	}
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error al subir el archivo ".$_FILES['pdfFile']['name']."<br/>";
			print "Extensión inválida, debe ser un PDF"."<br/>";
			print "Código de Error:  ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
}
?>