<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete | AZZURA Media</title>

 
    <!-- Memanggil file .js untuk proses autocomplete -->
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.8.2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />

    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){ 
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/search',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#v_nim').val(''+suggestion.nim); // membuat id 'v_nim' untuk ditampilkan
                    $('#v_jurusan').val(''+suggestion.jurusan); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
    </script>


</head>
<body>


<div id="content">
<h1>Autocomplete</h1>
    <div class="wrap">
    <table>
        <tr>
            <td><small>Nama :</small><br><input type="search" class='autocomplete nama' id="autocomplete1" name="nama_customer"/></td>
        </tr>
        <tr>
            <td><small>Jurusan :</small><br><input type="text" class='autocomplete' id="v_jurusan" name="nama_customer"/></td>
        </tr>
        <tr>
            <td><small>NIM :</small><br><input type="text" class='autocomplete' id="v_nim" name="nama_customer"/></td>
        </tr>
    </div>
</div>


</body>
</html>