<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\EventosController;
use Controllers\RegalosController;
use Controllers\PonentesController;
use Controllers\DashboardController;
use Controllers\ApiEventosController;
use Controllers\ApiPonentesController;
use Controllers\RegistradosController;
use Controllers\PaginasController;

$router = new Router();


////////////////////////////////////////////// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);
$router->get('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);


////////////////////////////////////////////// Area de administracion

$router->get('/admin/dashboard',[DashboardController::class,'index']);

$router->get('/admin/ponentes',[PonentesController::class,'index']);
$router->get('/admin/ponentes/crear',[PonentesController::class,'crear']);
$router->post('/admin/ponentes/crear',[PonentesController::class,'crear']);

// Editar ponente

$router->get('/admin/ponentes/editar',[PonentesController::class,'editar']);
$router->post('/admin/ponentes/editar',[PonentesController::class,'editar']);


// Eliminar Ponente
$router->post('/admin/ponentes/eliminar',[PonentesController::class,'eliminar']);


$router->get('/admin/eventos',[EventosController::class,'index']);
$router->get('/admin/eventos/crear',[EventosController::class,'crear']);
$router->post('/admin/eventos/crear',[EventosController::class,'crear']);
$router->get('/admin/eventos/editar',[EventosController::class,'editar']);
$router->get('/admin/eventos/editar',[EventosController::class,'editar']);

$router->post('/admin/eventos',[EventosController::class,'eliminar']);


$router->get('/admin/registrados',[RegistradosController::class,'index']);
$router->get('/admin/regalos',[RegalosController::class,'index']);



// API PARA EVENTOS HORARIO
$router->get('/api/eventos-horario',[ApiEventosController::class,'index']);

// API PONENTES

$router->get("/api/ponentes",[ApiPonentesController::class,"index"]);



// Usuario Routing
$router->get('/',[PaginasController::class,'index']);

$router->get('/eventos',[PaginasController::class,'eventos']);
$router->get('/paquetes',[PaginasController::class,'paquetes']);
$router->get('/conferencias-workshops',[PaginasController::class,'conferencias']);




$router->comprobarRutas();