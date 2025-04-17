<?php
$conf->debug = true;

$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/php-08-baza-danych';
$conf->action_root = $conf->app_root.'/ctrl.php?action=';

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'calc_credit';
$conf->db_user = 'admin_calc';
$conf->db_pass = '1k9oxnzlbxBHoc6g';
$conf->db_charset = 'utf8';

$conf->db_port = '3306';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);