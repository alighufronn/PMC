<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('url');
    }

    public function index(): string
    {
        return view('layout/page_layout');
    }

    // Dashboard
    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function monitoring_laporan_harian(): string
    {
        return view('monitoring_laporan_harian');
    }

    // Engineering
    public function approval_material(): string
    {
        return view('approval-material');
    }
    public function drawing(): string
    {
        return view('drawing');
    }
    public function detail_drawing(): string
    {
        return view('detail_listdrawing');
    }

    // HSE
    public function izin_kerja(): string
    {
        return view('izin-kerja');
    }
    public function rap_hse_tambah(): string
    {
        return view('rap_hse_tambah');
    }
    public function rap_hse_tambah_rev(): string
    {
        return view('rap_hse_tambah_rev');
    }
    public function rap_hse_edit(): string
    {
        return view('rap_hse_edit');
    }

    // Laporan Kerja
    public function terpasang_tambah(): string
    {
        return view('terpasang_tambah');
    }
    public function terpasang_edit(): string
    {
        return view('terpasang_edit');
    }

    // PO & DO
    public function po_detail(): string
    {
        return view('po_detail');
    }
    public function po_tambah(): string
    {
        return view('po_tambah');
    }
    public function do_tambah(): string
    {
        return view('do_tambah');
    }
    public function do_detail(): string
    {
        return view('do_detail');
    }
    public function po_total(): string
    {
        return view('po_total');
    }

    // RAP
    public function rap_detail(): string
    {
        return view('rap_detail');
    }
    public function rap_tambah_ak(): string
    {
        return view('rap_tambah_ak');
    }
    public function rap_tambah_ak_rev(): string
    {
        return view('rap_tambah_ak_rev');
    }
    public function rap_edit_ak(): string
    {
        return view('rap_edit_ak');
    }

    // Master
    public function mastermaterial_stock(): string
    {
        return view('mastermaterial_stock');
    }
    public function groupmaterial_stock(): string
    {
        return view('groupmaterial_stock');
    }    
    
    // BPD
    public function bpd_detail(): string
    {
        return view('bpd_detail');
    }
    public function bpd_tambah(): string
    {
        return view('bpd_tambah');
    }
    
    // BPB
    public function bpb_tambah(): string
    {
        return view('bpb_tambah');
    }
    public function bpb_detail(): string
    {
        return view('bpb_detail');
    }
    public function bpb_nonrap(): string
    {
        return view('bpb_nonrap');
    }
    public function bpb_stock(): string
    {
        return view('bpb_stock');
    }

    // Proyek
    public function ba_instalasi_edit(): string
    {
        return view('ba_instalasi_edit');
    }


    // BBM
    public function bbm_beli_edit(): string
    {
        return view('bbm_beli_edit');
    }
    public function bbm_beli_tambah(): string
    {
        return view('bbm_beli_tambah');
    }
    public function bbm_po_tambah(): string
    {
        return view('bbm_po_tambah');
    }
    public function bbm_po_edit(): string
    {
        return view('bbm_po_edit');
    }
    public function bbm_ll_tambah(): string
    {
        return view('bbm_ll_tambah');
    }
    public function bbm_ll_edit(): string
    {
        return view('bbm_ll_edit');
    }
    public function bbm_ti_tambah(): string
    {
        return view('bbm_ti_tambah');
    }
    public function bbm_ti_edit(): string
    {
        return view('bbm_ti_edit');
    }

    // Users
    public function modules(): string
    {
        return view('modules');
    }

    // Workshop
    public function stock_material(): string
    {
        return view('stock_material');
    }
    public function bbm_tambah(): string
    {
        return view('bbm_tambah');
    }
    public function bbk_tambah(): string
    {
        return view('bbk_tambah');
    }
    public function laporan_pemakaian_seng(): string
    {
        return view('laporan_pemakaian_seng');
    }

    // BBK
    public function bbk_sub_tambah(): string
    {
        return view('bbk_sub_tambah');
    }
    public function bbk_to_tambah(): string
    {
        return view('bbk_to_tambah');
    }
    public function bbk_po_tambah(): string
    {
        return view('bbk_po_tambah');
    }
    public function bbk_ll_tambah(): string
    {
        return view('bbk_ll_tambah');
    }
    public function bbk_sub_edit(): string
    {
        return view('bbk_sub_edit');
    }
    public function bbk_to_edit(): string
    {
        return view('bbk_to_edit');
    }
    public function bbk_po_edit(): string
    {
        return view('bbk_po_edit');
    }
    public function bbk_ll_edit(): string
    {
        return view('bbk_ll_edit');
    }



    public function bpak_edit(): string
    {
        return view('bpak_edit');
    }
    public function bpas_edit(): string
    {
        return view('bpas_edit');
    }
    
}
