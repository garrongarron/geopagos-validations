<?php
include_once 'tools/AbstractTable.php';
include_once 'tools/Printer.php';


include_once 'controllers/FavoritosController.php';
include_once 'controllers/PagosController.php';
include_once 'controllers/UsuariosController.php';
include_once 'controllers/UsuariosPagosController.php';

include_once 'models/FavoritosModel.php';
include_once 'models/PagosModel.php';
include_once 'models/UsuariosModel.php';
include_once 'models/UsuariosPagosModel.php';


include_once 'Tests/UsuariosTest.php';
include_once 'Tests/FavoritosTest.php';
include_once 'Tests/PagosTest.php';
include_once 'Tests/UsuariosPagosTest.php';

//Testing usuarios
$userTests = new UsuariosTest();
$userTests->run();

//Testing favoritos
$favoritosTest = new FavoritosTest();
$favoritosTest->run();

//Testing pagos
$pagosTest = new PagosTest();
$pagosTest->run();

//Testing Usuario-Pagos
$usuariosPagosTest = new UsuariosPagosTest();
$usuariosPagosTest->run();

//show Testing Results
Printer::show();