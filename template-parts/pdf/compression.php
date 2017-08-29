
</head>
<body>
    <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo"><img src="resources/images/montana-studio.svg" style="height: 64px;width: auto;"/></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="./">Home</a></li>
            <li><a href="single.php?type=pdf">Upload PDF</a></li>
            <li><a href="single.php?type=img">Upload Image</a></li>
            <li><a href="single.php?type=img&status=uploaded">Uploaded Images</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="./">Home</a></li>
            <li><a href="single.php?type=pdf">Upload PDF</a></li>
            <li><a href="single.php?type=img">Upload Image</a></li>
            <li><a href="single.php?type=img&status=uploaded">Uploaded Images</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
    </nav>
    <div class="content">
        <div class="section">
            <?php
            $counter = 0;
            if ($handle = opendir('uploads/pdf/original')) {
                while (false !== ($entry = readdir($handle))) {
                    $counter++;
                    if($counter == 1){ ?>
                        <div class="row">
                    <?php }
                    if ($entry != "." && $entry != "..") { ?>
                            <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center teal-text"><i class="material-icons">reorder</i></h2>
                                <div class="row center">
                                    <?php echo $entry; ?> - 
                                    <img id='loading' class="loading" src='resources/images/loading.gif' style='display: none;height: 60px;float: right;'>
                                    <?php echo number_format ( filesize ( "uploads/pdf/original/$entry" )/(1024*1024) , 2 )." MB";
                                    if(file_exists ( "uploads/pdf/compressed/$entry" )){ ?>
                                        <a href="uploads/pdf/compressed/<?php echo $entry; ?>" name="<?php echo $entry; ?>" >
                                            Compressed PDF (<?php echo number_format ( filesize ( "uploads/pdf/compressed/$entry" )/(1024*1024) , 2 )." MB"; ?>)
                                        </a>
                                    <?php }else{ ?>
                                            <button class="compress_pdf" name="<?php echo $entry ?>" >Compress</button>
                                    <?php } ?>
                                    <button class="delete_pdf" name="<?php echo $entry; ?>" >Delete</button>
                                    
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
            <div class="parallax"><img src="resources/images/compression.jpg" alt="compression image"></div>
        </div>
        </div>
    </div>