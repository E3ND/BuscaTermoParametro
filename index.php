<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destiny</title>


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/styleMain.css" rel="stylesheet">

        <link href="assets/css/myCss3.css" rel="stylesheet">

    </head>
    <body>

        <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.php"> Destiny </a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                
                <li> <a class="nav-link scrollto active" href="index.php"> Home </a></li>

                <li> <a class="nav-link scrollto" href="allTerms.php"> All terms </a></li>
                         
                <li> 
                    <form class="MainBar" method="POST" action="index.php"> 
                        <input class="inputMain" name="parametroMain" placeholder="Pesquise" /> 
                        <input id="buttonMain" class="btn btn-primary btn-sm" type="submit" value="Pesquisar">
                    </form> 
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        </div>
        </header>

        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container position-relative">
            <h1> Welcome to Destiny </h1>
            <h2> Welcome to Destiny, here you will learn all kinds of technical terms </h2>
            <a href="allTerms.php" class="btn-get-started scrollto">Get Started</a>
            </div>
        </section>

    <br> <br>
    
    <?php 
        // Ocultar o erro que aparece na tela do $parametro estar indefinido
        error_reporting(0);
        // ini_set(“display_errors”, 0 );

        $parametro = $_POST['parametroMain'];

        $parametro = strtolower($parametro);

        include("conexao.php");

            try{
                $stmt =$pdo -> prepare("select * from tbtermsdesc");

                $stmt ->execute();

                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
       
        switch ($parametro) {
            case "":
                echo('
                
                <main> 

                <center> <h3> Termos técnicos recentes </h3> </center>
        
            
        
                <br><br>
        
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            
                        <div class="card" style="width: 16rem;">
                            <img class="card-img-top" src="assets/img/cards/edge.jpeg" alt="Imagem de capa do card Edge">
                            <div class="card-body">
                                <h5 class="card-title">Edge</h5>
                                <p class="card-text"> '.$row['Edge'].' </p>
                            </div>
                        </div>
        
                        </div>
                        <div class="col-sm">
                            
                        <div class="card" style="width: 16rem;">
                            <img class="card-img-top" src="assets/img/cards/dos.jpeg" alt="Imagem de capa do card DOS">
                            <div class="card-body">
                                <h5 class="card-title">DOS</h5>
                                <p class="card-text"> '.$row['DOS'].' </p>
                            </div>
                        </div>
        
                        </div>
                <div class="col-sm">
                            
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="assets/img/cards/scroll.jpeg" alt="Imagem de capa do card Scroll">
                    <div class="card-body">
                        <h5 class="card-title">Scroll</h5>
                        <p class="card-text"> '.$row['Scroll'].' </p>
                    </div>
                </div>

                </div>
                    </div>
                </div>
        
            </main> 
                
                ');
            break;

            case "algorithm":
                echo('
                    
                    <main> 

                    <center> <h3> Termo técnico algorithm </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/algorithm.jpeg" alt="Imagem de capa do card Algorithm">
                                <div class="card-body">
                                    <h5 class="card-title">Algorithm</h5>
                                    <p class="card-text"> '.$row['Algorithm'].' </p>
                                </div>
                            </div>
            
                            </div>
                           
                        </div>
                    </div>
            
                </main> 

                ');
            break;

            case "caption":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico caption </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/caption.jpeg" alt="Imagem de capa do card Caption">
                                <div class="card-body">
                                    <h5 class="card-title">Caption</h5>
                                    <p class="card-text"> '.$row['Caption'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "alt key":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico alt key </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/altkey.jpeg" alt="Imagem de capa do card AltKey">
                                <div class="card-body">
                                    <h5 class="card-title">Alt Key</h5>
                                    <p class="card-text"> '.$row['AltKey'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "flowchart":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico flowchart </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/flowchart.jpeg" alt="Imagem de capa do card Flowchart">
                                <div class="card-body">
                                    <h5 class="card-title">Flowchart</h5>
                                    <p class="card-text"> '.$row['Flowchart'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "amplifier":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico amplifier </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/amplifier.jpeg" alt="Imagem de capa do card Amplifier">
                                <div class="card-body">
                                    <h5 class="card-title">Amplifier</h5>
                                    <p class="card-text"> '.$row['Amplifier'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "close file":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico close file </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/closefile.jpeg" alt="Imagem de capa do card CloseFile">
                                <div class="card-body">
                                    <h5 class="card-title">Close file</h5>
                                    <p class="card-text"> '.$row['CloseFile'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "analog":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico analog </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/analog.jpeg" alt="Imagem de capa do card Analog">
                                <div class="card-body">
                                    <h5 class="card-title">Analog</h5>
                                    <p class="card-text"> '.$row['Analog'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "data control":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico data control </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/datacontrol.jpeg" alt="Imagem de capa do card Data Control">
                                <div class="card-body">
                                    <h5 class="card-title">Data Control</h5>
                                    <p class="card-text"> '.$row['DataControl'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "auto activate":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico auto active </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/autoactivate.jpeg" alt="Imagem de capa do card Auto Active">
                                <div class="card-body">
                                    <h5 class="card-title">Auto Activate</h5>
                                    <p class="card-text"> '.$row['AutoActivate'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "backup":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico backup </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/backup.jpeg" alt="Imagem de capa do card Backup">
                                <div class="card-body">
                                    <h5 class="card-title">Backup</h5>
                                    <p class="card-text"> '.$row['Backup'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "bos":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico BOS </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/bos.jpeg" alt="Imagem de capa do card BOS">
                                <div class="card-body">
                                    <h5 class="card-title">BOS</h5>
                                    <p class="card-text"> '.$row['BOS'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "bottom":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico bottom </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/bottom.jpeg" alt="Imagem de capa do card Bottom">
                                <div class="card-body">
                                    <h5 class="card-title">Bottom</h5>
                                    <p class="card-text"> '.$row['Bottom'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "bug":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico bug </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/bug.jpeg" alt="Imagem de capa do card Bug">
                                <div class="card-body">
                                    <h5 class="card-title">Bug</h5>
                                    <p class="card-text"> '.$row['Bug'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "byte":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico byte </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/byte.jpeg" alt="Imagem de capa do card Byte">
                                <div class="card-body">
                                    <h5 class="card-title">Byte</h5>
                                    <p class="card-text"> '.$row['Byte'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "caps lock":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico caps lock </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/capslock.jpeg" alt="Imagem de capa do card Caps Lock">
                                <div class="card-body">
                                    <h5 class="card-title">Caps Lock</h5>
                                    <p class="card-text"> '.$row['CapsLock'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "compiler":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico compiler </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/compiler.jpeg" alt="Imagem de capa do card Compiler">
                                <div class="card-body">
                                    <h5 class="card-title">Compiler</h5>
                                    <p class="card-text"> '.$row['Compiler'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "data field":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico data field </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/datafield.jpeg" alt="Imagem de capa do card Data Field">
                                <div class="card-body">
                                    <h5 class="card-title">Data Field</h5>
                                    <p class="card-text"> '.$row['DataField'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "dos":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico DOS </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/dos.jpeg" alt="Imagem de capa do card DOS">
                                <div class="card-body">
                                    <h5 class="card-title">DOS</h5>
                                    <p class="card-text"> '.$row['DOS'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "directory":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico directory </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/directory.jpeg" alt="Imagem de capa do card Directory">
                                <div class="card-body">
                                    <h5 class="card-title">Directory</h5>
                                    <p class="card-text"> '.$row['Directory'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "display":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico display </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/display.jpeg" alt="Imagem de capa do card Display">
                                <div class="card-body">
                                    <h5 class="card-title">Display</h5>
                                    <p class="card-text"> '.$row['Display'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "extract file":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico extract file </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/extractfile.jpeg" alt="Imagem de capa do card Extract File">
                                <div class="card-body">
                                    <h5 class="card-title">Extract File</h5>
                                    <p class="card-text"> '.$row['ExtractFile'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "edge":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico edge </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/edge.jpeg" alt="Imagem de capa do card Edge">
                                <div class="card-body">
                                    <h5 class="card-title">Edge</h5>
                                    <p class="card-text"> '.$row['Edge'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "failure":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico failure </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/failure.jpeg" alt="Imagem de capa do card Failure">
                                <div class="card-body">
                                    <h5 class="card-title">Failure</h5>
                                    <p class="card-text"> '.$row['Failure'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;
            
            case "file set":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico file set </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/fileset.jpeg" alt="Imagem de capa do card File Set">
                                <div class="card-body">
                                    <h5 class="card-title">File Set</h5>
                                    <p class="card-text"> '.$row['FileSet'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;
            
            case "hardware":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico hardware </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/hardware.jpeg" alt="Imagem de capa do card Hardware">
                                <div class="card-body">
                                    <h5 class="card-title">Hardware</h5>
                                    <p class="card-text"> '.$row['Hardware'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "hide edges":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico hide edges </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/hideedges.jpeg" alt="Imagem de capa do card Hide Edges">
                                <div class="card-body">
                                    <h5 class="card-title">Hide Edges</h5>
                                    <p class="card-text"> '.$row['HideEdges'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "integer":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico integer </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/integer.jpeg" alt="Imagem de capa do card Integer">
                                <div class="card-body">
                                    <h5 class="card-title">Integer</h5>
                                    <p class="card-text"> '.$row['TermInteger'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "ink":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico ink </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/ink.jpeg" alt="Imagem de capa do card Ink">
                                <div class="card-body">
                                    <h5 class="card-title">INK</h5>
                                    <p class="card-text"> '.$row['ink'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;
            
            case "usb":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico usb </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/usb.jpeg" alt="Imagem de capa do card USB">
                                <div class="card-body">
                                    <h5 class="card-title">USB</h5>
                                    <p class="card-text"> '.$row['USB'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "tab":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico tab </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/tab.jpeg" alt="Imagem de capa do card Tab">
                                <div class="card-body">
                                    <h5 class="card-title">Tab</h5>
                                    <p class="card-text"> '.$row['Tab'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "screen":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico screen </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/screen.jpeg" alt="Imagem de capa do card Screen">
                                <div class="card-body">
                                    <h5 class="card-title">Screen</h5>
                                    <p class="card-text"> '.$row['Screen'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "scroll":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico scroll </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/scroll.jpeg" alt="Imagem de capa do card Scroll">
                                <div class="card-body">
                                    <h5 class="card-title">Scroll</h5>
                                    <p class="card-text"> '.$row['Scroll'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "server":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico server </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/server.jpeg" alt="Imagem de capa do card Server">
                                <div class="card-body">
                                    <h5 class="card-title">Server</h5>
                                    <p class="card-text"> '.$row['Server'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main> 
                
                ');
            break;

            case "set up":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico set up </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/setup.jpeg" alt="Imagem de capa do card Set Up">
                                <div class="card-body">
                                    <h5 class="card-title">Set Up</h5>
                                    <p class="card-text"> '.$row['SetUp'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            case "shift":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico shift </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/shift.jpeg" alt="Imagem de capa do card Shift">
                                <div class="card-body">
                                    <h5 class="card-title">Shift</h5>
                                    <p class="card-text"> '.$row['Shift'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            case "short cut":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico short cut </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/shortcut.jpeg" alt="Imagem de capa do card Short Cut">
                                <div class="card-body">
                                    <h5 class="card-title">Short Cut</h5>
                                    <p class="card-text"> '.$row['ShortCut'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            case "ram":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico ram </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/ram.jpeg" alt="Imagem de capa do card Ram">
                                <div class="card-body">
                                    <h5 class="card-title">Ram</h5>
                                    <p class="card-text"> '.$row['Ram'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            case "reset":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico reset </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/reset.jpeg" alt="Imagem de capa do card Reset">
                                <div class="card-body">
                                    <h5 class="card-title">Reset</h5>
                                    <p class="card-text"> '.$row['Reset'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;
            
            case "ruler":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico ruler </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/ruler.jpeg" alt="Imagem de capa do card Ruler ">
                                <div class="card-body">
                                    <h5 class="card-title">Ruler</h5>
                                    <p class="card-text"> '.$row['Ruler'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            case "rom":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico rom </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/rom.jpeg" alt="Imagem de capa do card Rom">
                                <div class="card-body">
                                    <h5 class="card-title">Rom</h5>
                                    <p class="card-text"> '.$row['ROM'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;
            
            case "password":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico password </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/password.jpeg" alt="Imagem de capa do card Password">
                                <div class="card-body">
                                    <h5 class="card-title">Password</h5>
                                    <p class="card-text"> '.$row['Password'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            case "lock";
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico lock </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/lock.jpeg" alt="Imagem de capa do card Lock">
                                <div class="card-body">
                                    <h5 class="card-title">Lock</h5>
                                    <p class="card-text"> '.$row['Lock'].'</p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;
            
            case "load":
                echo('
                
                    <main> 

                    <center> <h3> Termo técnico load </h3> </center>
            
                
            
                    <br><br>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                
                            <div class="card" style="width: 16rem;">
                                <img class="card-img-top" src="assets/img/cards/load.jpeg" alt="Imagem de capa do card Load">
                                <div class="card-body">
                                    <h5 class="card-title">Load</h5>
                                    <p class="card-text"> '.$row['Load'].' </p>
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>
            
                </main>
                
                ');
            break;

            default:
                echo('
                
                    <main> 

                        <center> <h3> Nada encontrado aqui ;-; </h3> </center>
                
                    </main>
                
                ');
        }

        }
        }

        catch(PDOException $e){
            echo "Erro: " .$e ->getMessage();
        }
    
    
    ?>
  
  <br><br>

    <footer> 

        <div class="FinalPage"> 
        <center>
            <br>
            <h1 class="footerH1">Todos os direitos reservados</h1>
            <p class="footerP">Hitalo chaves, Bruno da Silva, Danilo Claro, Pedro Maciel, Nickolas Alexandre e Rikellme Keven</p>
            <h1 class="footer">2021</h1>
            </center>   
        </div>

    </footer>

        <script src="assets/js/main.js"></script> 
    </body>
</html>