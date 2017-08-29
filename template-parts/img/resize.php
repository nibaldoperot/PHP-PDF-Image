
</head>
<body>
    <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo"><img src="resources/images/montana-studio.svg" style="height: 64px;width: auto;"/></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="./">Home</a></li>
            <li><a href="single.php?type=pdf">Upload PDF</a></li>
            <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
            <li><a href="single.php?type=img">Upload Image</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="./">Home</a></li>
            <li><a href="single.php?type=pdf">Upload PDF</a></li>
            <li><a href="single.php?type=pdf&status=uploaded">Uploaded PDFs</a></li>
            <li><a href="single.php?type=img">Upload Image</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
    </nav>
    <div class="content">
        <div class="section">
            <div class="row" style="background-color:#009688;color:white !important">
                <div class="col s12 m12">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons" style="color:white">build</i></h2>
                    </div>
                </div>
                <div class="col s12 m5">
                    <input placeholder="Width" class="width"/>
                    
                </div>
               <div class="col s12 m2">
                    <h2 class="center"><i class="material-icons">clear</i></h2>
                </div>
                <div class="col s12 m5">
                    <input placeholder="Heigth" class="height"/>
                </div>
            </div>
            <?php
            $counter = 0;
            if ($handle = opendir('uploads/img/original')) {
                while (false !== ($entry = readdir($handle))) {
                    $counter++;
                    if($counter == 1){ ?>
                        <div class="row">
                    <?php }
                    if ($entry != "." && $entry != "..") { ?>
                            <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center teal-text"><i class="material-icons">perm_media</i></h2>
                                <div class="row left">
                                    <?php echo $entry; ?> - 
                                    <?php echo number_format ( filesize ( "uploads/img/original/$entry" )/(1024*1024) , 2 )." MB";?>
                                    <br />
                                    <?php foreach (glob("uploads/img/resized/*".$entry) as $filename) { ?>
                                            <a href="<?php echo $filename; ?>"><?php echo substr($filename,20) ?>  - 
                                                <?php echo number_format ( filesize ( $filename )/(1024*1024) , 2 )." MB";?>
                                            </a>
                                            <br />
                                    <?php } ?>
                                    <button class="resize_img" name="<?php echo $entry ?>" >Resize</button>
                                    <button class="delete_img" name="<?php echo $entry; ?>" >Delete</button>
                                    <img id='loading' class="loading" src='resources/images/loading.gif' style='display: none;height: 60px;'>
                                </div>
                            </div>
                        </div>
                    <?php if($counter == 3){
                            $counter = 0; ?>
                            </div>
                    <?php } ?>
                <?php }
                    }
                    closedir($handle);
            } ?>
            </div>

        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                <!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
                </div>
            </div>
            </div>
            <div class="parallax"><img src="resources/images/resize.jpg" alt="resize image"></div>
        </div>
        </div>
    </div>