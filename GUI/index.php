<?PHP
/**
* GUI index page.
*
* @category   GUI
*
* @author     Andrey Hristov <andrey@php.net>, Ulf Wendel <ulf.wendel@phpdoc.de>
* @copyright  1997-2006 The PHP Group
* @license    http://www.php.net/license/3_0.txt  PHP License 3.0
*
* @version    CVS: $Id:$, Release: @package_version@
*
* @link       http://www.mysql.com
* @since      Available since Release 1.0
*/
require_once 'snippets/MySQLConverterTool_GUI_Snippets.php';

$snippet_title = 'Selamat datang di Alat Konverter MySQL ext / mysql
';
$snippet_greeting = 'Selamat datang di Alat Konverter MySQL ext / mysql
';

MySQLConverterTool_GUI_Snippets::load(dirname(__FILE__).'/snippets/header.php');
?>
<div class="maintextbox">
Anda telah berhasil menginstal MySQL ext / mysql Converter Tool. Alat ini membantu Anda untuk memigrasi kode PHP yang ada menggunakan Ekstensi MySQL PHP (ext / mysql) ke Ekstensi PHP MySQLi (ext / mysqli). Alat ini membaca kode sumber dan mengubah semua fungsi MySQL menjadi rekan MySQLi mereka.
</div>
<div class="maintextbox">
    Pilih salah satu tindakan berikut:
</div>
<div class="maintextbox" style="padding-left:1em">
    <a href="convert_directory.php"><h2>Convert a directory</h2></a>
Gunakan ini untuk mengonversi semua file PHP yang ada dalam satu direktori.
       
</div>
<div class="maintextbox" style="padding-left:1em">
    <a href="convert_file.php"><h2>Convert a file</h2></a>
    Gunakan ini untuk mengonversi satu file PHP.
</div>
<div class="maintextbox" style="padding-left:1em">
    <a href="convert_snippet.php"><h2>Convert a code snippet</h2></a>
    Gunakan ini untuk mengonversi potongan, sepotong kode PHP.
</div>    
<?php
MySQLConverterTool_GUI_Snippets::load(dirname(__FILE__).'/snippets/footer.php');
?>