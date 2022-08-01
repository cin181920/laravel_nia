<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'loginView']);
Route::get('/login', [AuthController::class,"loginView"]);
Route::get('/dashboard', [AuthController::class,"dashboardView"]);
Route::get('/dashboardit', [AuthController::class,"dashboarditView"]);
Route::get('/mdpulsait', [AuthController::class,"mdpulsaitView"]);
Route::get('/mdtvkabelit', [AuthController::class,"mdtvkabelitView"]);
Route::get('/profilit', [AuthController::class,"profilitView"]);
Route::get('/editprofilit', [AuthController::class,"editprofilitView"]);
Route::get('/dashboardkeuangan', [AuthController::class,"dashboardkeuanganView"]);
Route::get('/mdlistrikkeuangan', [AuthController::class,"mdlistrikkeuanganView"]);
Route::get('/mdpamkeuangan', [AuthController::class,"mdpamkeuanganView"]);
Route::get('/veriflistrik', [AuthController::class,"veriflistrikView"]);
Route::get('/verifpam', [AuthController::class,"verifpamView"]);   
Route::get('/verifpulsa', [AuthController::class,"verifpulsaView"]);
Route::get('/verifinternet', [AuthController::class,"verifinternetView"]);
Route::get('/veriftvkabel', [AuthController::class,"veriftvkabelView"]);
Route::get('/editveriftvkabel2', [AuthController::class,"editveriftvkabel2View"]);
Route::get('/editveriflistrik2', [AuthController::class,"editveriflistrik2View"]);
Route::get('/editverifpam2', [AuthController::class,"editverifpam2View"]);
Route::get('/editverifpulsa2', [AuthController::class,"editverifpulsa2View"]);
Route::get('/editverifinternet2', [AuthController::class,"editverifinternet2View"]);
Route::get('/berhasilsimpandata', [AuthController::class,"berhasilsimpandataView"]);
Route::get('/mdlistriksdm', [AuthController::class,"mdlistriksdmView"]);
Route::get('/mdpamsdm', [AuthController::class,"mdpamsdmView"]);
Route::get('/mdpulsa', [AuthController::class,"mdpulsaView"]);
Route::get('/mdtvkabel', [AuthController::class,"mdtvkabelView"]);
Route::get('/mdinternet', [AuthController::class,"mdinternetView"]);
Route::get('/tambahlistrik', [AuthController::class,"tambahlistrikView"]);
Route::get('/tambahpam', [AuthController::class,"tambahpamView"]);
Route::get('/tambahinternet', [AuthController::class,"tambahinternetView"]);
Route::get('/tambahpulsa', [AuthController::class,"tambahpulsaView"]);
Route::get('/tambahtvkabel', [AuthController::class,"tambahtvkabelView"]);
Route::get('/editmdinternet', [AuthController::class,"editmdinternetView"]);
Route::get('/editmdlistrik', [AuthController::class,"editmdlistrikView"]);
Route::get('/editmdpam', [AuthController::class,"editmdpamView"]);
Route::get('/editmdpulsa', [AuthController::class,"editmdpulsaView"]);
Route::get('/editmdtvkabel', [AuthController::class,"editmdtvkabelView"]);
Route::get('/editprofilesdm', [AuthController::class,"editprofilesdmView"]);
Route::get('/profilsdm', [AuthController::class,"profilsdmView"]);
Route::get('/mdpulsakeuangan', [AuthController::class,"mdpulsakeuanganView"]);
Route::get('/berhasildiverif', [AuthController::class,"berhasildiverifView"]);
Route::get('/verifikasifasilitas', [AuthController::class,"verifikasifasilitasView"]);
Route::get('/masterdata', [AuthController::class,"masterdataView"]);
Route::get('/berhasiltambah', [AuthController::class,"berhasiltambahView"]);
Route::get('/listexcellistrik', [AuthController::class,"listexcellistrikView"]);
Route::get('/listexcelinternet', [AuthController::class,"listexcelinternetView"]);
Route::get('/listexcelpulsa', [AuthController::class,"listexcelpulsaView"]);
Route::get('/listexcelpam', [AuthController::class,"listexcelpamView"]);
Route::get('/listexceltvkabel', [AuthController::class,"listexceltvkabelView"]);
Route::get('/listexcellistrikkeuangan', [AuthController::class,"listexcellistrikkeuanganView"]);
Route::get('/listexcelpulsakeuangan', [AuthController::class,"listexcelpulsakeuanganView"]);
Route::get('/listexcelpamkeuangan', [AuthController::class,"listexcelpamkeuanganView"]);
Route::get('/listexceltvkabelit', [AuthController::class,"listexceltvkabelitView"]);
Route::get('/listexcelpulsait', [AuthController::class,"listexcelpulsaitView"]);
Route::get('/listverifinternet', [AuthController::class,"listverifinternetView"]);
Route::get('/listveriflistrik', [AuthController::class,"listveriflistrikView"]);
Route::get('/listverifpam', [AuthController::class,"listverifpamView"]);
Route::get('/listverifpulsa', [AuthController::class,"listverifpulsaView"]);
Route::get('/listveriftvkabel', [AuthController::class,"listveriftvkabelView"]);
Route::get('/profilkeuangan', [AuthController::class,"profilkeuanganView"]);
Route::get('/editprofilkeuangan', [AuthController::class,"editprofilkeuanganView"]);
Route::get('/profilit', [AuthController::class,"profilitView"]);
Route::get('/berhasilhapus', [AuthController::class,"berhasilhapusView"]);

Route::post('loginAction', [AuthController::class, 'loginAction']);
Route::post('pamAction', [AuthController::class, 'pamAction']);
Route::post('listrikAction', [AuthController::class, 'listrikAction']);
Route::post('pulsaAction', [AuthController::class, 'pulsaAction']);
Route::post('internetAction', [AuthController::class, 'internetAction']);
Route::post('tvkabelAction', [AuthController::class, 'tvkabelAction']);