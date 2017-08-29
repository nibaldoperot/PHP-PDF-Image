<?php  include 'header.php'; ?>
  <title>Home</title>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="resources/images/montana-studio.svg" style="height: 64px;width: auto;"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="single.php?type=pdf">Upload PDF</a></li>
        <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
        <li><a href="single.php?type=img">Upload Image</a></li>
        <li><a href="single.php?type=img&status=uploaded">Uploaded Images</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="single.php?type=pdf">Upload PDF</a></li>
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
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">description</i></h2>
            <div class="row center">
              <a href="single.php?type=pdf" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Work with PDF</a>
            </div>
            <!-- <p class="light">Acceder a funcionalidades para manejo de PDF, para poder cargar, eliminar y comprimir PDFs</p> -->
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">perm_media</i></h2>
            <div class="row center">
              <a href="single.php?type=img" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Work with Images</a>
            </div>
            <!-- <p class="light">Acceder a funcionalidades para manejo de Imagenes, para poder cargar, 
              eliminar y dimensionar Imagenes en formato jpeg, jpg, png
            </p> -->
          </div>
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
    <div class="parallax"><img src="resources/images/index.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <?php include 'footer.php'; ?>