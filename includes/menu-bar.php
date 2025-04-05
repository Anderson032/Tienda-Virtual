<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Fijo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .fixed-menu {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #fff; /* Ajusta esto según el fondo de tu menú */
            border-bottom: 1px solid #ccc; /* Opcional: agrega un borde inferior para destacar el menú */
        }

        body {
            padding-top: 60px; /* Ajusta este valor para dar espacio al contenido y que no se oculte detrás del menú fijo */
        }
    </style>
</head>
<body>
    <div class="header-nav animate-dropdown fixed-menu">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Menu despegable</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Inicio</a>
                                </li>
                                <?php 
                                    $sql = mysqli_query($con, "select id,categoryName from category limit 6");
                                    while($row = mysqli_fetch_array($sql)) {
                                ?>
                                <li class="dropdown yamm">
                                    <a href="category.php?cid=<?php echo $row['id']; ?>"> <?php echo $row['categoryName']; ?></a>
                                </li>
                                <?php } ?>
                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>				
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Aquí puedes agregar el resto del contenido de tu página -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
