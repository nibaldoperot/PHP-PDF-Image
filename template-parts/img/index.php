</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="resources/images/montana-studio.svg" style="height: 64px;width: auto;"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="./">Home</a></li>
        <li><a href="single.php?type=pdf">Upload PDF</a></li>
        <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
        <li><a href="./single.php?type=img&status=uploaded">Uploaded Images</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="./">Home</a></li>
        <li><a href="single.php?type=pdf">Upload PDF</a></li>
        <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
        <li><a href="./single.php?type=img&status=uploaded">Uploaded Images</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <h5 class="header col s12 light">Upload Image(s)</h5>

      <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="files[]" multiple/>
                <input type="submit"/>
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
    <div class="parallax"><img src="resources/images/img.jpg" alt="images index"></div>
  </div>

<?php
if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        $desired_dir="uploads/img/original/";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
        }else{
                print_r($errors);
        }
    }
    header("Location: single.php?type=img&status=uploaded"); /* Redirect browser */
    exit();
	if(empty($error)){
		echo "Success";
	}
}
?>