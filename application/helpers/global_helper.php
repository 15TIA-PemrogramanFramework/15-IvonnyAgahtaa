<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu_admin()
	{
		return '<li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p> List Member</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Permintaan Revisi</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Daftar Pesanan Design</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Tambah Foto Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>'

	;
		
	}

function generate_sidemenu_member()
	{
		return '<li class="active">
                    <a href="'.site_url('home2').'">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="'.site_url('Controller_Order').'">
                        <i class="ti-user"></i>
                        <p> Order Design</p>
                    </a>
                </li>
                <li>
                   <a href="'.site_url('Controller_revisi').'">
                        <i class="ti-view-list-alt"></i>
                        <p>Permintaan Revisi</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Daftar Pesanan Design</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Tambah Foto Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>'




	;
		
	}
?>