<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\pam;
use App\Models\listrik;
use App\Models\pulsa;
use App\Models\internet;
use App\Models\tvkabel;

class AuthController extends Controller
{
    function loginView()
    {
        return view("login");
    }

    public function loginAction(Request $req){
        $user = User::where('divisi', $req->divisi)->first();
        if($user->admin = true){
            return view('dashboard');
        } elseif($user->IT = true){
            return view('dashboardit');
        }elseif ($user->keuangan = true) {
            return view('dashboardkeuangan');
        }
        return view('login');
    }

    public function pamAction(Request $req){
        $pam = pam::create([
            'nomor_pegawai'=>$req->nomor_pegawai,
            'nama'=>$req->nama,
            'alamat'=>$req->alamat,
            'nomor_rekening'=>$req->nomor_rekening,
            'pemakaian'=>$req->pemakaian,
            'plafon'=>$req->plafon,
            'beban_pegawai'=>$req->beban_pegawai,
            'beban_perusahaan'=>$req->beban_perusahaan,
            'keterangan'=>$req->keterangan,
        ]);
        return view('tambahpam');
    }

    public function pulsaAction(Request $req){
        $pam = pam::create([
            'nomor_pegawai'=>$req->nomor_pegawai,
            'nama'=>$req->nama,
            'nomor_hp'=>$req->nomor_hp,
            'pemakaian'=>$req->pemakaian,
            'plafon'=>$req->plafon,
            'roaming_ln'=>$req->roaming_ln,
            'beban_pegawai'=>$req->beban_pegawai,
            'beban_perusahaan'=>$req->beban_perusahaan,
        ]);
        return view('tambahpulsa');
    }

    public function listrikAction(Request $req){
        $pam = pam::create([
            'nomor_pegawai'=>$req->nomor_pegawai,
            'nama'=>$req->nama,
            'alamat'=>$req->alamat,
            'nomor_kontrol'=>$req->nomor_kontrol,
            'tagihan'=>$req->tagihan,
            'biaya_admin'=>$req->biaya_admin,
            'pemakaian'=>$req->pemakaian,
            'plafon'=>$req->plafon,
            'beban_pegawai'=>$req->beban_pegawai,
            'beban_perusahaan'=>$req->beban_perusahaan,
            'keterangan'=>$req->keterangan,

        ]);
        return view('tambahlistrik');
    }

    public function internetAction(Request $req){
        $pam = pam::create([
            'nomor_hp'=>$req->nomor_hp,
            'pemakaian'=>$req->pemakaian,
            'biaya_admin'=>$req->biaya_admin,
            'total'=>$req->total,

        ]);
        return view('tambahinternet');
    }

    public function tvkabelAction(Request $req){
        $pam = pam::create([
            'nomor_pegawai'=>$req->nomor_pegawai,
            'nama'=>$req->nama,
            'jenis_tv'=>$req->jenis_tv,
            'nomor_id'=>$req->nomor_id,
            'pemakaian'=>$req->pemakaian,
            'plafon'=>$req->plafon,
            'roaming_ln'=>$req->roaming_ln,
            'beban_pegawai'=>$req->beban_pegawai,
            'beban_perusahaan'=>$req->beban_perusahaan,

        ]);
        return view('tambahtvkabel');
    }

    function dashboardView()
    {
        return view("dashboard");
    }

    function dashboarditView()
    {
        return view("dashboardit");
    }

    function mdpulsaitView()
    {
        return view("mdpulsait");
    }

    function mdtvkabelitView()
    {
        return view("mdtvkabelit");
    }

    function profilitView()
    {
        return view("profilit");
    }

    function editprofilitView()
    {
        return view("editprofilit");
    }

    function editprofilkeuanganView()
    {
        return view("editprofilkeuangan");
    }

    function dashboardkeuanganView()
    {
        return view("dashboardkeuangan");
    }
    function mdlistrikkeuanganView()
    {
        return view("mdlistrikkeuangan");
    }
    function mdpamkeuanganView()
    {
        return view("mdpamkeuangan");
    }
    function veriflistrikView()
    {
        return view("veriflistrik");
    }
    function verifpamView()
    {
        return view("verifpam");
    }
    function verifpulsaView()
    {
        return view("verifpulsa");
    }
    function verifinternetView()
    {
        return view("verifinternet");
    }
    function veriftvkabelView()
    {
        return view("veriftvkabel");
    }
    
    function editveriflistrik2View()
    {
        return view("editveriflistrik2");
    }
    
    function editverifpam2View()
    {
        return view("editverifpam2");
    }
    function editverifpulsa2View()
    {
        return view("editverifpulsa2");
    }
    function editverifinternet2View()
    {
        return view("editverifinternet2");
    }
    function editveriftvkabel2View()
    {
        return view("editveriftvkabel2");
    }
    function berhasilsimpandataView()
    {
        return view("berhasilsimpandata");
    }
    function mdlistriksdmView()
    {
        return view("mdlistriksdm");
    }

    function mdpamsdmView()
    {
        return view("mdpamsdm");
    }
    function mdpulsaView()
    {
        return view("mdpulsa");
    }
    function mdtvkabelView()
    {
        return view("mdtvkabel");
    }
    function mdinternetView()
    {
        return view("mdinternet");
    }
    function tambahinternetView()
    {
        return view("tambahinternet");
    }

    function tambahlistrikView()
    {
        return view("tambahlistrik");
    }
    function tambahpamView()
    {
        return view("tambahpam");
    }
    function tambahpulsaView()
    {
        return view("tambahpulsa");
    }
    function tambahtvkabelView()
    {
        return view("tambahtvkabel");
    }
    function editmdinternetView()
    {
        return view("editmdinternet");
    }
    function editmdlistrikView()
    {
        return view("editmdlistrik");
    }
    function editmdpamView()
    {
        return view("editmdpam");
    }
    function editmdpulsaView()
    {
        return view("editmdpulsa");
    }
    function editmdtvkabelView()
    {
        return view("editmdtvkabel");
    }

    function editprofilesdmView()
    {
        return view("editprofilesdm");
    }
   
    function profilsdmView()
    {
        return view("profilsdm");
    }

    function mdpulsakeuanganView()
    {
        return view("mdpulsakeuangan");
    }

    function berhasildiverifView()
    {
        return view("berhasildiverif");
    }
    function verifikasifasilitasView()
    {
        return view("verifikasifasilitas");
    }

    function masterdataView()
    {
        return view("masterdata");
    }
    function berhasiltambahView()
    {
        return view("berhasiltambah");
    }

    function listexcellistrikView()
    {
        return view("listexcellistrik");
    }

    function listexcelinternetView()
    {
        return view("listexcelinternet");
    }

    function listexcelpulsaView()
    {
        return view("listexcelpulsa");
    }

    function listexcelpamView()
    {
        return view("listexcelpam");
    }

    function listexceltvkabelView()
    {
        return view("listexceltvkabel");
    }
    function listexcellistrikkeuanganView()
    {
        return view("listexcellistrikkeuangan");
    }
    function listexcelpamkeuanganView()
    {
        return view("listexcelpamkeuangan");
    }
    function listexcelpulsakeuanganView()
    {
        return view("listexcelpulsakeuangan");
    }
    function listexcelpulsaitView()
    {
        return view("listexcelpulsait");
    }
    function listexceltvkabelitView()
    {
        return view("listexceltvkabelit");
    }

    function listverifinternetView()
    {
        return view("listverifinternet");
    }

    function listveriflistrikView()
    {
        return view("listveriflistrik");
    }

    function listverifpamView()
    {
        return view("listverifpam");
    }
    function listverifpulsaView()
    {
        return view("listverifpulsa");
    }
    function listveriftvkabelView()
    {
        return view("listveriftvkabel");
    }
    function profilkeuanganView()
    {
        return view("profilkeuangan");
    }
    function berhasilhapusView()
    {
        return view("berhasilhapus");
    }
}