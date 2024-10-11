<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// Dashboard
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/dashboard-monitoring', 'Home::monitoring_laporan_harian');

$routes->get('/layout', 'Home::index');

// Engineering
$routes->get('/approval-material', 'Home::approval_material');
$routes->get('/drawing', 'Home::drawing');
$routes->get('/detail-drawing', 'Home::detail_drawing');

// HSE
$routes->get('/izin-kerja', 'Home::izin_kerja');
$routes->get('/rap-hse-tambah', 'Home::rap_hse_tambah');
$routes->get('/rap-hse-tambah-rev', 'Home::rap_hse_tambah_rev');
$routes->get('/rap-hse-edit', 'Home::rap_hse_edit');

// Laporan Kerja
$routes->get('/terpasang-edit', 'Home::terpasang_edit');
$routes->get('/terpasang-tambah', 'Home::terpasang_tambah');

// PO & DO
$routes->get('/po-total', 'Home::po_total');
$routes->get('/po-detail', 'Home::po_detail');
$routes->get('/po-tambah', 'Home::po_tambah');
$routes->get('/do-detail', 'Home::do_detail');
$routes->get('/do-tambah', 'Home::do_tambah');

// RAP
$routes->get('/rap-detail', 'Home::rap_detail');
$routes->get('/rap-tambah-ak', 'Home::rap_tambah_ak');
$routes->get('/rap-tambah-ak-rev', 'Home::rap_tambah_ak_rev');
$routes->get('/rap-edit-ak', 'Home::rap_edit_ak');

// Master
$routes->get('/mastermaterial-stock', 'Home::mastermaterial_stock');
$routes->get('/groupmaterial-stock', 'Home::groupmaterial_stock');

// BPD
$routes->get('/bpd-detail', 'Home::bpd_detail');
$routes->get('/bpd-tambah', 'Home::bpd_tambah');

// BPB
$routes->get('/bpb-stock', 'Home::bpb_stock');
$routes->get('/bpb-tambah', 'Home::bpb_tambah');
$routes->get('/bpb-nonrap', 'Home::bpb_nonrap');
$routes->get('/bpb-detail', 'Home::bpb_detail');

// Proyek
$routes->get('/ba-ins-edit', 'Home::ba_instalasi_edit');

// BBM
$routes->get('/bbm-beli-edit', 'Home::bbm_beli_edit');
$routes->get('/bbm-beli-tambah', 'Home::bbm_beli_tambah');
$routes->get('/bbm-po-tambah', 'Home::bbm_po_tambah');
$routes->get('/bbm-po-edit', 'Home::bbm_po_edit');
$routes->get('/bbm-ll-tambah', 'Home::bbm_ll_tambah');
$routes->get('/bbm-ll-edit', 'Home::bbm_ll_edit');
$routes->get('/bbm-ti-tambah', 'Home::bbm_ti_tambah');
$routes->get('/bbm-ti-edit', 'Home::bbm_ti_edit');

// Users
$routes->get('/modules', 'Home::modules');

// BBK
$routes->get('/bbk-sub-tambah', 'Home::bbk_sub_tambah');
$routes->get('/bbk-sub-edit', 'Home::bbk_sub_edit');
$routes->get('/bbk-to-tambah', 'Home::bbk_to_tambah');
$routes->get('/bbk-to-edit', 'Home::bbk_to_edit');
$routes->get('/bbk-po-tambah', 'Home::bbk_po_tambah');
$routes->get('/bbk-po-edit', 'Home::bbk_po_edit');
$routes->get('/bbk-ll-tambah', 'Home::bbk_ll_tambah');
$routes->get('/bbk-ll-edit', 'Home::bbk_ll_edit');

// Workshop
$routes->get('/stock-material', 'Home::stock_material');
$routes->get('/bbk-tambah', 'Home::bbk_tambah');
$routes->get('/bbm-tambah', 'Home::bbm_tambah');
$routes->get('/laporan-pemakaian-seng', 'Home::laporan_pemakaian_seng');

