<head></head>
<title>Smart Map</title>
<link rel = "icon" href = 
"{{ asset('logo.png') }}" 
        type = "image/x-icon">
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="https://leaflet.github.io/Leaflet.draw/docs/examples/libs/leaflet-src.js"></script>
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/docs/examples/libs/leaflet.css" />
    <!-- <link rel="stylesheet" href="leaflet-search.css" /> -->
    <!-- <script src="leaflet-search.js"></script> -->

    <script src="https://leaflet.github.io/Leaflet.draw/src/Leaflet.draw.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/Leaflet.Draw.Event.js"></script>
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/src/leaflet.draw.css" />

    <script src="https://leaflet.github.io/Leaflet.draw/src/Toolbar.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/Tooltip.js"></script>

    <script src="https://leaflet.github.io/Leaflet.draw/src/ext/GeometryUtil.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/ext/LatLngUtil.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/ext/LineUtil.Intersect.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/ext/Polygon.Intersect.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/ext/Polyline.Intersect.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/ext/TouchEvents.js"></script>

    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/DrawToolbar.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Feature.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.SimpleShape.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Polyline.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Marker.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.CircleMarker.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Circle.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Polygon.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/draw/handler/Draw.Rectangle.js"></script>


    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/EditToolbar.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/EditToolbar.Edit.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/EditToolbar.Delete.js"></script>

    <script src="https://leaflet.github.io/Leaflet.draw/src/Control.Draw.js"></script>

    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Poly.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.SimpleShape.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Marker.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.CircleMarker.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Circle.js"></script>
    <script src="https://leaflet.github.io/Leaflet.draw/src/edit/handler/Edit.Rectangle.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.css" />
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    body {
  padding: 0;
  margin: 0;
  position: relative;
  
}

.top{
    margin-top: 10px;
}

select{
    width: 100px !important;
}

textarea{
    height: 200px !important;
}

.img_view{
    width: 300px;
    height: 200px;
    float: right;
}

.hd{
    display:none;
}

/*=========================== search =================*/
.search {
  width: 300px;
  height: 10px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 50px;
  font-size: 16px;
  /*background-color: white;*/
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
.search:focus{
    width: 300px
}
/*=========================== search =================*/
/*=========================== modal side =================*/
#mod_edits{

}

.dropdown-menu li {
position: relative;
}
.dropdown-menu .dropdown-submenu {
display: none;
position: absolute;
left: 100%;
top: -7px;
}
.dropdown-menu .dropdown-submenu-left {
right: 100%;
left: auto;
}
.dropdown-menu > li:hover > .dropdown-submenu {
display: block;
}
/*=========================== modal side =================*/

h5{
    font-size: 14px!important;
}

#btn_search{
    margin-top: 20px!important;border-radius: 50%;position: fixed;z-index: 99!important;margin-left: 100px;padding: 20px;justify-content: center
}
#btn_menu{
    margin-top: 20px!important;position: fixed;z-index: 98!important;margin-left: 10px;padding: 20px;justify-content: center
}

.div_detail{
    display: none;position: fixed;z-index: 99!important;margin-top:100px;margin-left: 20px;padding: 20px;justify-content: center;align-items: right;right: 10;bottom: 10
}
#sidebar{
    display: none;position: fixed;z-index: 99!important;margin-top: 0px;margin-left: 0px;padding: 20px;justify-content: center
}


.select_wilayah{
    width: 200px!important
}

.hd{
    /*display: none*/
}

.ml-30{
    margin-left: 30px;
}
/*
.leaflet-control-zoom{
    margin-right: 50px!important;
    margin-bottom: 35px!important;
}*/

.leaflet-control-layers-overlays{
    display: none;
}


.li-informasi{
    color: black;
    margin-left: 30px;
    text-decoration: none;
}
table {
  display: block;
  height: 200px;
  overflow-y: scroll;
}

#img-logo{
    height: 30px
}

</style>
<?php $sts = 0?>


<div style="position: relative;">
    <div id="map" style="width: 100%; height: 100vh; border: 1px solid #ccc;z-index: 1;position: absolute;">
    </div>
        
        <button id="btn_menu" onclick="show_sidebar()" class="btn btn-sm btn-light" ><i class="fa fa-bars" aria-hidden="true"></i></button>

        <button id="btn_search" onclick="$('#mod_search').modal('show')" class="btn btn-sm btn-primary" ><i class="fa fa-search" aria-hidden="true"></i></button>

        <!-- <div id="sidebar" style="height: 100vh;width: 300px" class="bg-light" style=""> -->
            <!-- <button class="btn btn-light pull-right" onclick="$('#sidebar').css('display','none')"><i class="fa fa-times" aria-hidden="true"></i></button></br>
            
            <h4><center> Sidebar Menu</center></h4>
            <hr>  -->
            <!-- <div class="row" style="margin-top: 5px;width: 250px"> -->
                <!-- <div class="col-md-12">
                    <h5>Kecamatan</h5>
                    <select id="kecamatan" class="form-control select_wilayah" style="margin-bottom:  10px">
                        <option >-- Pilih Kecamatan --</option>
                        <option >Purworejo</option>   
                        <option >Bugul Kidul</option>
                        <option >Gadingrejo</option>
                        <option >Panggungrejo</option>
                    </select>
                </div>
                 <div class="col-md-12">
                    <h5>Desa/Kelurahan</h5>
                    <select id="kelurahan" class="form-control select_wilayah" style="margin-bottom:  10px">
                        <option >-- Pilih Desa/Kelurahan --</option>
                    </select>
                </div>
                <hr>
                 <div class="col-md-12">
                    <h5>Pilih Mode</h5>
                    <select style="width:200px!important" class="form-control" onchange="select_draw($(this).val())"><option value="0">Lihat</option><option value="1">Edit</option></select>
                </div> -->
                <!-- <div style="display:none">
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="1" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_ori" for="1"> Objek Pajak</label></div>
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="2" name="gaucher[]" onchange="processCheck(this)"><label for="2"> Bangunan</label></div>
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="3" name="gaucher[]" onchange="processCheck(this)"><label for="3"> Blok</label></div> -->
                        <!-- <div style="display:flex"><input type="checkbox" class="gaucher" id="4" name="gaucher[]" onchange="processCheck(this)"><label for="4"> TX</label></div> -->
                  <!--    <hr><center>Tematik</center>
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="5" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_jenis_tanah" for="5"> Jenis Tanah</label></div>
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="6" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_jenis_bangunan" for="6"> Jenis Bangunan</label></div>
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="7" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_buku" for="7"> Buku</label></div>
                     <div style="display:flex"><input type="checkbox" class="gaucher" id="8" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_npwp" for="8"> NPWP</label></div>
                     </div>'
                </div> -->
                <!-- <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;"> -->
                    
            <!-- </div> -->
        <!-- </div> -->
        <div id="sidebar" class="flex-shrink-0 p-3 bg-white" style="width: 280px;height: 100vh">
              <button class="btn btn-light pull-right" onclick="$('#sidebar').css('display','none')"><i class="fa fa-times" aria-hidden="true"></i></button></br>
              <img src="{{ asset('logo.png') }}" id="img-logo"  alt="">
              <span class="fs-5 fw-semibold">Smart Map</span></br>
              <span class=" fw-semibold">Bapenda Kota Pasuruan</span>
              <hr>
            <!-- <div class="row">
                <div class="col-md-12">
                    <h5>Kecamatan</h5>
                    <select id="kecamatan" class="form-control select_wilayah" style="margin-bottom:  10px">
                        <option >-- Pilih Kecamatan --</option>
                        <option >Purworejo</option>   
                        <option >Bugul Kidul</option>
                        <option >Gadingrejo</option>
                        <option >Panggungrejo</option>
                    </select>
                </div>
                 <div class="col-md-12">
                    <h5>Desa/Kelurahan</h5>
                    <select id="kelurahan" class="form-control select_wilayah" style="margin-bottom:  10px">
                        <option >-- Pilih Desa/Kelurahan --</option>
                    </select>
                </div>
                <hr>
                 <div class="col-md-12">
                    <h5>Pilih Mode</h5>
                    <select style="width:200px!important" class="form-control" onchange="select_draw($(this).val())"><option value="0">Lihat</option><option value="1">Edit</option></select>
            </div>
            <hr> -->
            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                  Tematik
                </button>
                <div class="collapse" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <div style="display:flex"><input type="checkbox" class="gaucher hd" id="5" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_jenis_tanah" class="ml-30" for="5"> Jenis Tanah</label></div>
                    </li>
                    <li>
                        <div style="display:flex"><input type="checkbox" class="gaucher hd" id="6" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_jenis_bangunan" class="ml-30" for="6"> Jenis Bangunan</label></div>
                    </li>
                    <li>
                          <div style="display:flex"><input type="checkbox" class="gaucher hd" id="7" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_sts_bayar" class="ml-30" for="7"> Status Bayar</label></div>
                    </li>
                    <li>
                        <div style="display:flex"><input type="checkbox" class="gaucher hd" id="7" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_buku" class="ml-30" for="7"> Buku</label></div>
                    </li>
                    <li>
                         <div style="display:flex"><input type="checkbox" class="gaucher hd" id="8" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_npwp" class="ml-30" for="8"> NPWP</label></div>
                    </li>
                    <li>
                         <div style="display:flex"><input type="checkbox" class="gaucher hd" id="8" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_znt" class="ml-30" for="8"> Zona NIlai Tanah</label></div>
                    </li>

                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#informasi-collapse" aria-expanded="true">
                  Informasi
                </button>
                <div class="collapse" id="informasi-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="#" class="li-informasi">Data Objek Pajak Tanpa Peta</a>
                    </li>
                    <li>
                        
                        <a href="#" class="li-informasi">Cetak Masal Info Rinci</a>

                    </li>
                    <li>
                          <a href="#" class="li-informasi">Rekapitulasi Data Info SIN</a>
                    </li>
                    <li>
                        <a href="#" class="li-informasi">Daftar OP SIN</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        <div id="div_jenis_tanah" class="card div_detail text-right" style="">
            <h5><center>Jenis Penggunaan Tanah</center></h5>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: red;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Tanah + bangunan</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[23]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: blue;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Kavling Siap Bangun</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[125]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: purple;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Tanah Kosong</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[77]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: orange;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Fasilitas Umum</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[90]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: aqua;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Tidak Ada Data</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[89]</span></div>
            </div>
        </div>


        <div id="div_jenis_bangunan" class="card div_detail" style="">
            <h5><center>Jenis Penggunaan Bangunan</center></h5>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: red;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Perumahan</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[23]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: blue;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Perkantoran Swasta</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[125]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: purple;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Pabrik</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[77]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: orange;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Toko/Apotik/Pasar/Ruko</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[90]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: aqua;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Rumah Sakit/Klinik</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[89]</span></div>
            </div>
        </div>
        <div id="div_buku" class="card div_detail" style="">
            <h5><center>Jenis Penggunaan Bangunan<center></h5>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: red;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Buku I</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[923]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: blue;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Buku II</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[825]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: purple;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">BUKU III</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[727]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: orange;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">BUKU IV</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[90]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: aqua;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">BUKU V</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[89]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: white;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Ketetapan Nol </span></div>
                <div class="col-md-3"><span style="font-size: 12px">[10]</span></div>
            </div>
        </div>
        <div id="div_npwp" class="card div_detail" style="">
            <h5 ><center>Objek Pajak</center> </h5>
            <h5><center>Yang Mempunyai NPWP</center></h5>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: purple;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Tidak Memliki NPWP</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[727]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: aqua;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Memiliki NPWP</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[89]</span></div>
            </div>
        </div>
        <div id="div_status_pembayaran" class="card div_detail" style="">
            <h5 >Status Pembayaran PBB</h5>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: purple;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Tidak Ada SPPT</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[23]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: aqua;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Sudah Bayar</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[299]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: white;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Belum Bayar</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[89]</span></div>
            </div>
        </div>
        <div id="div_individu" class="card div_detail" style="">
            <h5 >Peta OP Dengan Nilai Individu</h5>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: orange;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Sudah DInilai Individu</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[723]</span></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-md-2">
                    <div class="" style="background-color: white;border: 0.5px solid black;height: 25px;width: 25px"></div>
                </div>
                <div class="col-md-7"><span style="font-size: 12px">Belum DInilai Individu</span></div>
                <div class="col-md-3"><span style="font-size: 12px">[299]</span></div>
            </div>
        </div>
</div>


<!-- <form method="POST" enctype="multipart/form-data" action="{{url('maps')}}">
        @csrf
        <input type="file" name="files">
        <input type="submit" name="submit" value="submit"></br>
        <input type="radio" name="jns" checked="" value="nop">nop</br>
        <input type="radio" name="jns" value="blok">blok</br>
        <input type="radio" name="jns" value="jalan">jalan</br>
        <input type="radio" name="jns" value="bangunan">bangunan</br>
 </form>
<!-- =========== Modal Detail ============ -->

<meta name="csrf-token" content="{{ csrf_token() }}" />
<div id="modal_detail" class="modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Detail Peta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

            <div class="row " id="detail_bangunan">
                <div class="col-md-6">
                    <div class="row top">
                        <div class="col-md-3">Pilih Bangunan</div>
                        <div class="col-md-9">
                            <select name="" class="form-control" id="">
                                <option value=""></option>  
                            </select>
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Nop</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="35.75.121.233.455.5555.0">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Jumlah Bangunan</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="001">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Bangunan Ke</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="001">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Penggunaan Bangunan</div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="Perumahan">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Luas Bangunan</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="60 m2">
                        </div>
                        <div class="col-md-3">Jumlah Lantai</div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="1">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Tahun Dibangun</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="2022">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Tahun DI Renovasi</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="-">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div class="row top">
                        <div class="col-md-3">Konstruksi</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="Bangunan">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Atap</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="Genteng">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Dinding</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="Cor">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Lantai</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="Granit">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Langit-langit</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="Kasibot">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Kondisi</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="Baik">
                        </div>
                    </div>
                    
                    <div class="row top">
                        <div class="col-md-12">
                            Gambar 
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-12">
                            <img src="rumah.jpg" alt="" class="img_view">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="detail_tanah">
                <div class="col-md-12"><h3>INFORMASI RINCI OBJEK PAJAK</h3></div>
                <div class="row top">
                    <div class="col-md-3">Pilih Tahun Pajak</div>
                    <div class="col-md-9">
                        <select name="" id=""   class="form-control">
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                        </select>
                    </div>
                    
                <div class="row top">
                    <div class="col-md-3"> Tahun Pajak</div>
                    <div class="col-md-9">
                            <input type="text" readonly class="form-control" value="2023">
                    </div>
                </div>
                
                <div class="row top">
                    <div class="col-md-3"> NOP </div>
                    <div class="col-md-9">
                            <input type="text" readonly class="form-control"  value="35.75.876.876.876.2222.0">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Letak OP</div>
                    <div class="col-md-9">
                            <textarea name="" style="height: 100px!important" readonly class="form-control" id="" cols="30" rows="10">
                                Jalan Raya pasuruan no 88 
                            </textarea>
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Wajib Pajak</div>
                    <div class="col-md-9">
                            <input type="text" readonly class="form-control"  value="Wawan Dwi">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Status</div>
                    <div class="col-md-9">
                            <input type="text" readonly  class="form-control" value="Pemilik">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Pekerjaan</div>
                    <div class="col-md-9">
                            <input type="text" readonly  class="form-control" value="Pekerja">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> alamat</div>
                    <div class="col-md-9">
                    <textarea name="" style="height: 100px!important" readonly class="form-control" id="" cols="30" rows="10">
                                Jalan Raya pasuruan no 88 
                            </textarea>
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Luas Tanah</div>
                    <div class="col-md-3">
                            <input type="text" readonly  class="form-control" value="100 m2">
                    </div>
                    <div class="col-md-3"> Kode ZNT</div>
                    <div class="col-md-3">
                            <input type="text" readonly  class="form-control" value="an 123">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Jenis Tanah</div>
                    <div class="col-md-9">
                            <input type="text" readonly  class="form-control" value="Tanah + Bangunan">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> Jumlah Bangunan</div>
                    <div class="col-md-9">
                            <input type="text" readonly  class="form-control" value="1">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> NJOP Bumi</div>
                    <div class="col-md-9">
                            <input type="text" readonly  class="form-control" value="200000">
                    </div>
                </div>
                <div class="row top">
                    <div class="col-md-3"> NJOP Bangunan</div>
                    <div class="col-md-9">
                            <input type="text" readonly  class="form-control" value="200000">
                    </div>
                </div>
                
                <div class="row top">
                    <div class="col-md-3"> PBB</div>
                    <div class="col-md-9">
                            <input type="text"  class="form-control" value="400000000">
                    </div>
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" onclick="show_op()" id="btn_op" class="btn btn-primary " >Detail Objek Pajak</button>
        <button type="button" onclick="show_bng()" id="btn_bng" class="btn btn-primary ">Detail Bangunan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- ============ end modal detail ============= -->
<!-- ============  modal search ============= -->

<div id="mod_search" class="modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pencarian Objek Pajak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="">
          <input class="form-check-input" type="radio" checked="" value="nop" name="search_jenis" id="search_nop">
          <label class="form-check-label" for="search_nop">
            NOP
          </label>
          <input class="form-check-input" type="radio" name="search_jenis" value="nama" id="search_nama">
          <label class="form-check-label" for="search_nama">
            Nama
          </label>
          <input class="form-check-input" type="radio" name="search_jenis" value="alamat" id="search_alamat">
          <label class="form-check-label" for="search_alamat">
            Alamat
          </label>

        </div>
        <div class="row">
            <div class="col-md-10">
                <input type="text" id="searching_text" name="searching_text" class="form-control">
            </div>
            <div class="col-md-2">
                <button onclick="cari_new($('#searching_text').val())" class="btn btn-primary">Cari</button>
            </div>
        </div>
        <div>
            <table id="table_search" style="display: none" class="table" >
                    <thead>
                        <th>Nama</th>
                        <th>NOP</th>
                        <th>ALamat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody >
                        <tr>
                            <td>Budi Santoso</td>
                            <td>35.75.140.012.001.0002.1</td>
                            <td>Jalan Mawar no5</td>
                            <td><button class="btn btn-primary" onclick="cari_nop(357501000100900470)">Pilih</button></td>
                        </tr>
                        <tr>
                            <td>Budi Setiawan</td>
                            <td>35.75.140.012.006.0002.1</td>
                            <td>Jalan Manggis no5</td>
                            <td><button class="btn btn-primary" onclick="cari_nop(357501000100900470)">Pilih</button></td>
                        </tr>
                        <tr>
                            <td>Setiabudi</td>
                            <td>35.75.140.012.007.0019.1</td>
                            <td>Jalan Kelapa Manis no 10</td>
                            <td><button class="btn btn-primary" onclick="cari_nop(357501000100900470)">Pilih</button></td>
                        </tr>
                        <tr>
                            <td>Budiwan </td>
                            <td>35.75.140.012.010.0087.1</td>
                            <td>Jalan Rame no 99</td>
                            <td><button class="btn btn-primary" onclick="cari_nop(357501000100900470)">Pilih</button></td>
                        </tr>
                        <tr>
                            <td>Budi </td>
                            <td>35.75.140.012.099.0688.1</td>
                            <td>Jalan Soekarno-hatta no 10</td>
                            <td><button class="btn btn-primary" onclick="cari_nop(357501000100900470)">Pilih</button></td>
                        </tr>
                    </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ============ end modal search ============= -->


<!-- Vertically centered modal -->
<!-- Vertically centered modal -->


<div id="mod_add" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nop</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="POST" enctype="multipart/form-data" id="addForm">
        @csrf
            <div class="modal-body">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nop</label>
                <input type="text" class="form-control" name="nop" id="nop_add">
                <input type="hidden" class="form-control" name="geom" id="nop_add_geom">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Gambar</label></br>
                    <input type="file" name="">
              </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div id="mod_edit" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit NOP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form id="editForm" method="POST" enctype="multipart/form-data" action="">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nop</label>
                <input type="text" class="form-control" name="nop" id="nop_edit">
                <input type="hidden" class="form-control" name="nop_old" id="nop_edit_old">
                <input type="hidden" class="form-control" name="geom" id="nop_edit_geom">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Gambar</label></br>
                <input type="file" name="">
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="sideModal" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit NOP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form id="editForm" method="POST" enctype="multipart/form-data" action="">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nop</label>
                <input type="text" class="form-control" name="nop" id="nop_edit">
                <input type="text" class="form-control" name="nop_old" id="nop_edit_old">
                <input type="text" class="form-control" name="geom" id="nop_edit_geom">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Gambar</label></br>
                <input type="file" name="">
          </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
      


<script>

    $( document ).ready(function() {
        $('#searching').keypress(function (e) {
          if (e.which == 13) {
                var int = $('#searching').val();
                if ($.isNumeric(int)) {
                    $.getJSON('http://localhost:8000/getSearchNop/'+int, function(data) {
                        // data = JSON.parse(data[0]['geom'])['coordinates']
                        console.log(data)
                        // var polygon = L.polygon(data, {
                        //         title: 'test',
                        //         fillColor: '#F16E60',
                        //         fillOpacity: 0.5,
                        //         weight:5,
                        //         color: '#F16E60',
                        //         opacity: 0.5,
                        //         fill: true
                        //     }).addTo(editableLayers);      
                        
                        //     map.addLayer(editableLayers);
                        // $('#1').attr('checked','checked');
                        // $("#1").trigger("change")
                    });
                }
              }
        });

        $("#addForm").submit(function(event){
            event.preventDefault(); //prevent default action 
            var form_data = new FormData(this); //Encode form elements for submission
            
            
            $.ajax({ 
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                url : "{{url('save_nop')}}",
                type: 'POST',
                data : form_data,
                processData:false,
                         contentType:false,
                         cache:false,
                         async:false,
            }).done(function(response){
                $('#mod_add').modal('hide')
                $("#nop_add").val("")
                map.removeLayer(ORI);
                $.getJSON('http://localhost:8000/getNop', function(data) {
                    map.removeLayer(editableLayers);
                    map.removeLayer(ORI);
                        ORI = L.geoJson(
                                data
                            , {     
                                onEachFeature: function (feature, layer) {
                                    layer.on("click", function () {
                                        
                                        // alert(selected_draw)
                                        if(selected_draw == 0){
                                            $('#lbl_nop').html(feature.properties.D_NOP)
                                            $('#lbl_luas').html(feature.properties.D_LUAS)
                                            $('#modal_detail').modal('show')
                                            show_op()
                                        }else{
                                            var f =  feature.geometry.coordinates
                                            // console.log('iki f')
                                            // console.log(feature.properties.D_NOP)
                                            console.log(feature.properties.d_nop)
                                            $('#nop_edit').val(feature.properties.d_nop)
                                            $('#nop_edit_old').val(feature.properties.d_nop)
                                            var arr = [];
                                            $.each(f[0], function( key, value ) {
                                                // console.log(  value[0] );
                                                const temp = value[0];
                                                value[0] = value[1];
                                                value[1] = temp;
                                                arr.push(value)
                                            });
                                            console.log('iki clik')
                                            // arr = JSON.stringify(arr)
                                            // console.log(value);
                                            editableLayers.clearLayers()
                                             polyCoords = [arr]
                                            var polygon = L.polygon(polyCoords, {
                                                title: 'test',
                                                fillColor: '#F16E60',
                                                fillOpacity: 0.5,
                                                weight:5,
                                                color: '#F16E60',
                                                opacity: 0.5,
                                                fill: true
                                            }).addTo(editableLayers);      
                                        
                                            map.addLayer(editableLayers);
                                        }
                                               // or over a feature property layer.bindTooltip(feature.properties.customTitle)
                                        // polygon.bindTooltip("My polygon",
                                        // {permanent: false, direction:"center"}
                                        // ).openTooltip()
                                            // arr.push([value[1],value[0]])
                                        
                                    })
                                        // layer.bindTooltip('Hi there', {permanent: true}).openTooltip(); 

                                    // feature.properties.D_NOP
                                },
                                style : function (feature){
                                return {
                                    // fillColor: "transparent",
                                    // fillOpacity: 0.5,
                                    // color: "white",
                                    // dashArray: '3',
                                    // weight: 0.5,
                                    // opacity: 0.7
                                    fillColor: "transparent",
                                      weight: 1,
                                      lineJoin: "miter",
                                      color: "white",

                                }
                            }

                            
                        
                        });

                        ORI.addTo(map)

                });

            });

        });
        $("#editForm").submit(function(event){
            event.preventDefault(); //prevent default action 
            var form_data = new FormData(this); //Encode form elements for submission
            var datas = {
                "nop" :  $("#nop_edit").val(),
                "nop_old" :  $("#nop_edit_old").val(),
                "geom" :  $("#nop_edit_geom").val(),
            }
            
            $.ajax({ 
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                url : "{{url('maps')}}/"+$('#nop_edit_old').val(),
                type: "PUT",
                cache: false,
                data: datas,
            }).done(function(response){
                console.log(response)
                $('#mod_edit').modal('hide')
                map.removeLayer(ORI);
                $.getJSON('http://localhost:8000/getNop', function(data) {
                    map.removeLayer(editableLayers);
                    map.removeLayer(ORI);
                //     ORI.addData(data);
                //     map.fitBounds(ORI.getBounds());
                //     $('#1').attr('checked','checked');
                //     $("#1").trigger("change")
                //     $("#nop_edit").val("")


                        ORI = L.geoJson(
                                data
                            , {     
                                onEachFeature: function (feature, layer) {
                                    layer.on("click", function () {
                                        
                                        // alert(selected_draw)
                                        if(selected_draw == 0){
                                            $('#lbl_nop').html(feature.properties.D_NOP)
                                            $('#lbl_luas').html(feature.properties.D_LUAS)
                                            $('#modal_detail').modal('show')
                                            show_op()
                                        }else{
                                            var f =  feature.geometry.coordinates
                                            // console.log('iki f')
                                            // console.log(feature.properties.D_NOP)
                                            console.log(feature.properties.d_nop)
                                            $('#nop_edit').val(feature.properties.d_nop)
                                            $('#nop_edit_old').val(feature.properties.d_nop)
                                            var arr = [];
                                            $.each(f[0], function( key, value ) {
                                                // console.log(  value[0] );
                                                const temp = value[0];
                                                value[0] = value[1];
                                                value[1] = temp;
                                                arr.push(value)
                                            });
                                            console.log('iki clik')
                                            // arr = JSON.stringify(arr)
                                            // console.log(value);
                                            editableLayers.clearLayers()
                                             polyCoords = [arr]
                                            var polygon = L.polygon(polyCoords, {
                                                title: 'test',
                                                fillColor: '#F16E60',
                                                fillOpacity: 0.5,
                                                weight:5,
                                                color: '#F16E60',
                                                opacity: 0.5,
                                                fill: true
                                            }).addTo(editableLayers);      
                                        
                                            map.addLayer(editableLayers);
                                        }
                                               // or over a feature property layer.bindTooltip(feature.properties.customTitle)
                                        // polygon.bindTooltip("My polygon",
                                        // {permanent: false, direction:"center"}
                                        // ).openTooltip()
                                            // arr.push([value[1],value[0]])
                                        
                                    })
                                        // layer.bindTooltip('Hi there', {permanent: true}).openTooltip(); 

                                    // feature.properties.D_NOP
                                },
                                style : function (feature){
                                return {
                                    // fillColor: "transparent",
                                    // fillOpacity: 0.5,
                                    // color: "white",
                                    // dashArray: '3',
                                    // weight: 0.5,
                                    // opacity: 0.7
                                    fillColor: "transparent",
                                      weight: 0.5,
                                      lineJoin: "miter",
                                      color: "white",

                                }
                            }

                            
                        
                        });

                        ORI.addTo(map)

                });

                // ========
            });

        });

});

    var nopSearch = L.geoJson(null, {  style : function (feature){
        // kec = feature.properties.OBJECTID;
                return {
                    fillColor: "red",
                    fillOpacity: 0.5,
                    color: "red",
                    dashArray: '3',
                    weight: 0.5,
                    opacity: 0.7
                }
            }
        
        });

        
    function show_bng() {
        $('#btn_op').removeClass('hd')
        $('#btn_bng').addClass('hd')
        $('#detail_bangunan').removeClass('hd')
        $('#detail_tanah').addClass('hd')
    }
    
    function show_op() {
        $('#btn_bng').removeClass('hd')
        $('#btn_op').addClass('hd')
        $('#detail_tanah').removeClass('hd')
        $('#detail_bangunan').addClass('hd')

    }
    
      var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, {maxZoom:20,zoom:13, attribution: osmAttrib}),
            map = new L.Map('map', {center: new L.LatLng(-7.6357943324575, 112.88264323166)}),
            // map = new L.Map('map', {center: new L.LatLng(-7.6357943324575, 112.88264323166), zoom: 13,maxZoom:25,position: 'topright'}),
            drawnItems = L.featureGroup().addTo(map);


     //======================= Ori ===========================
        var ORI = L.geoJson(
                null
            , { 	
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        console.log(feature.properties.d_nop)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            // console.log('iki f')
                            // console.log(feature.properties.D_NOP)
                            // console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                // console.log(  value[0] );
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            // console.log('iki clik')
                            // arr = JSON.stringify(arr)
                            // console.log(value);
                            // editableLayers.clearLayers()
                            polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                               // or over a feature property layer.bindTooltip(feature.properties.customTitle)
                        // polygon.bindTooltip("My polygon",
                        // {permanent: false, direction:"center"}
                        // ).openTooltip()
                            // arr.push([value[1],value[0]])
                        
                    })
                        // layer.bindTooltip('Hi there', {permanent: true}).openTooltip(); 
                        // layer.bindTooltip(feature.properties.d_nop, { 'permanent': true});

                    // feature.properties.D_NOP
                },
                style : function (feature){
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    title:'nop',
                    opacity: 0.9,
                    fillColor: 'transparent',
                      weight: 0.5,
                      lineJoin: "miter",
                      color: "white",

                }
            }

            
        
        });

        $.getJSON('http://localhost:8000/getNop', function(data) {
            ORI.addData(data);
            map.fitBounds(ORI.getBounds());
            // $('#modal_detail').modal('show')

  
        });

       
    

        //======================= Backgraund ================= 
        var BG = L.geoJson(null, { 	style : function (feature){
                return {
                    fillColor: "green",
                    fillOpacity: 0.5,
                    color: "green",
                    dashArray: '3',
                    weight: 2,
                    opacity: 0.7,
                }
            }
        
        });

        $.getJSON('http://localhost:8000/getBng', function(data) {
        BG.addData(data);

            map.fitBounds(BG.getBounds());
            if (map.hasLayer(ORI)) {
                ORI.bringToFront();
                // alert('ori')
            };
        });

        //============================= BL =========================
        
        var BL = L.geoJson(null, { 	style : function (feature){
		// kec = feature.properties.OBJECTID;
                return {
                    fillColor: "transparent",
                    fillOpacity: 0.5,
                    color: "Blue",
                    dashArray: '3',
                    weight: 2,
                    opacity: 0.7
                }
            }
        
        });

        $.getJSON('http://localhost:8000/getBlok', function(data) {
            BL.addData(data);

            map.fitBounds(BL.getBounds());
            if (map.hasLayer(ORI)) {
                ORI.bringToFront();
            };
        });

        // ================== TX ===================
        
        var TX = L.geoJson(null, { 	style : function (feature){
		// kec = feature.properties.OBJECTID;
                return {
                    fillColor: "transparent",
                    fillOpacity: 0.5,
                    color: "Red",
                    dashArray: '3',
                    weight: 0.5,
                    opacity: 0.7
                }
            }
        
        });

        $.getJSON('http://localhost:8000/getNop', function(data) {
        TX.addData(data);

            map.fitBounds(TX.getBounds());
            if (map.hasLayer(ORI)) {
                ORI.bringToFront();
            };
        });

        googleHybrid = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
              maxZoom: 20,
              subdomains:['mt0','mt1','mt2','mt3']
          });

    L.control.layers({
            "osm": osm,
            "google hybrid": googleHybrid,
            "google": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: 'google',maxZoom:30,zoomControl: false

               
            }).addTo(map)
    
        }, {'drawlayer':drawnItems,
            // 'Ori' : ORI,
            // 'BG' : BG,
            // 'Bl' : BL,
            // 'Tx' : TX,
        }, { position: 'topright', collapsed: false }).addTo(map);

   

   

    //======================= Jenis Tanah ====================

    var jenis_tanah = L.geoJson(
                null
            , {     
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            // console.log('iki f')
                            // console.log(feature.properties.D_NOP)
                            console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                // console.log(  value[0] );
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            console.log('iki clik')
                            // arr = JSON.stringify(arr)
                            // console.log(value);
                            editableLayers.clearLayers()
                             polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                               // or over a feature property layer.bindTooltip(feature.properties.customTitle)
                        // polygon.bindTooltip("My polygon",
                        // {permanent: false, direction:"center"}
                        // ).openTooltip()
                            // arr.push([value[1],value[0]])
                        
                    })
                        // layer.bindTooltip('Hi there', {permanent: true}).openTooltip(); 

                    // feature.properties.D_NOP
                },
                style : function (feature){
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    opacity: 0.9,
                    fillColor: kolor(feature.properties.d_nop.substring(10,13)),
                      weight: 0.5,
                      lineJoin: "miter",
                      color: "white",

                }
            }

            
        
        });


    $.getJSON('http://localhost:8000/getNop', function(data) {
            jenis_tanah.addData(data);
            map.fitBounds(jenis_tanah.getBounds());
            // $('#modal_detail').modal('show')

  
        });


    //======================= Buku ====================

    var buku = L.geoJson(
                null
            , {     
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            // console.log('iki f')
                            // console.log(feature.properties.D_NOP)
                            console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                // console.log(  value[0] );
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            console.log('iki clik')
                            // arr = JSON.stringify(arr)
                            // console.log(value);
                            editableLayers.clearLayers()
                             polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                               // or over a feature property layer.bindTooltip(feature.properties.customTitle)
                        // polygon.bindTooltip("My polygon",
                        // {permanent: false, direction:"center"}
                        // ).openTooltip()
                            // arr.push([value[1],value[0]])
                        
                    })
                        // layer.bindTooltip('Hi there', {permanent: true}).openTooltip(); 

                    // feature.properties.D_NOP
                },
                style : function (feature){
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    opacity: 0.9,
                    fillColor: kolor(feature.properties.d_nop.substring(10,13)),
                      weight: 0.5,
                      lineJoin: "miter",
                      color: "white",

                }
            }

            
        
        });


    $.getJSON('http://localhost:8000/getNop', function(data) {
            buku.addData(data);
            map.fitBounds(buku.getBounds());
            // $('#modal_detail').modal('show')

  
        });


    //======================= NPWP ====================

    var sts_bayar = L.geoJson(
                null
            , {     
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            editableLayers.clearLayers()
                             polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                    })
                },
                style : function (feature){
                    var colours = 'white'
                    if (map.hasLayer(osm) ) {
                        colours='black'
                    };
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    opacity: 0.9,
                    fillColor: kolor_two(feature.properties.d_nop.substring(10,13)),
                      weight: 0.5,
                      lineJoin: "miter",
                      color: colours,
                }
            }
        });


    $.getJSON('http://localhost:8000/getNop', function(data) {
            sts_bayar.addData(data);
            map.fitBounds(sts_bayar.getBounds());
            // $('#modal_detail').modal('show')

  
        });

    //======================= NPWP ====================

    var npwp = L.geoJson(
                null
            , {     
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            editableLayers.clearLayers()
                             polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                    })
                },
                style : function (feature){
                    var colours = 'white'
                    if (map.hasLayer(osm) ) {
                        colours='black'
                    };
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    opacity: 0.9,
                    fillColor: kolor_two(feature.properties.d_nop.substring(10,13)),
                      weight: 0.5,
                      lineJoin: "miter",
                      color: colours,
                }
            }
        });


    $.getJSON('http://localhost:8000/getNop', function(data) {
            npwp.addData(data);
            map.fitBounds(npwp.getBounds());
            // $('#modal_detail').modal('show')

  
        }); //======================= Znt ====================

    var znt = L.geoJson(
                null
            , {     
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            editableLayers.clearLayers()
                             polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                    })
                },
                style : function (feature){
                    var colours = 'white'
                    if (map.hasLayer(osm) ) {
                        colours='black'
                    };
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    opacity: 0.9,
                    fillColor: kolor(feature.properties.d_nop.substring(10,13)),
                      weight: 0.5,
                      lineJoin: "miter",
                      color: colours,
                }
            }
        });


    $.getJSON('http://localhost:8000/getNop', function(data) {
            znt.addData(data);
            map.fitBounds(znt.getBounds());
            // $('#modal_detail').modal('show')

  
        });
    //======================= individu ====================

    var individu = L.geoJson(
                null
            , {     
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                            show_op()
                        }else{
                            var f =  feature.geometry.coordinates
                            console.log(feature.properties.d_nop)
                            $('#nop_edit').val(feature.properties.d_nop)
                            $('#nop_edit_old').val(feature.properties.d_nop)
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            editableLayers.clearLayers()
                             polyCoords = [arr]
                            var polygon = L.polygon(polyCoords, {
                                title: 'test',
                                fillColor: '#F16E60',
                                fillOpacity: 0.5,
                                weight:5,
                                color: '#F16E60',
                                opacity: 0.5,
                                fill: true
                            }).addTo(editableLayers);      
                        
                            map.addLayer(editableLayers);
                        }
                    })
                },
                style : function (feature){
                    var colours = 'white'
                    if (map.hasLayer(osm) ) {
                        colours='black'
                    };
                return {
                    // fillColor: "transparent",
                    // fillOpacity: 0.5,
                    // color: "white",
                    // dashArray: '3',
                    // weight: 0.5,
                    opacity: 0.9,
                    fillColor: 'orange',
                      weight: 0.5,
                      lineJoin: "miter",
                      color: colours,
                }
            }
        });


    $.getJSON('http://localhost:8000/getNop', function(data) {
            individu.addData(data);
            map.fitBounds(individu.getBounds());
            // $('#modal_detail').modal('show')

  
        });


    //======================= jenis bangunan ====================
    var jenis_bangunan = L.geoJson(null, {  style : function (feature){
                return {
                    fillColor: kolor(feature.properties.d_nop.substring(10,13)),
                    fillOpacity: 0.5,
                    color: "green",
                    dashArray: '3',
                    weight: 0.5,
                    opacity: 0.7
                }
            }
        
        });

        $.getJSON('http://localhost:8000/getBng', function(data) {
        jenis_bangunan.addData(data);

            map.fitBounds(BG.getBounds());
        });
    //======================= search ====================

    var searching = new L.control( {
        position : 'topleft'
    });
    searching.onAdd = function(map) {
        var div = L.DomUtil.create('div', 'select');
        // div.innerHTML = 
        //                 '<input type="text" id="searching" name="" placeholder="" class="search"><button onclick="cari()">Cari</button>';
        return div;
    };
    searching.addTo(map)




    //======================= search ====================
    //======================= Layer control ====================
    // var lay = new L.control( {
    //     position : 'topright'
    // });
    // lay.onAdd = function(map) {
    //     var div = L.DomUtil.create('div', 'select');
    //     div.innerHTML = '<div class="card" style="padding-top:5px;padding-left:3px;width:100px">'+

    //                     '<div><input type="checkbox" class="gaucher" id="1" name="gaucher[]" onchange="processCheck(this)"><label for="1">Ori</label></div>'+
    //                     '<div><input type="checkbox" class="gaucher" id="2" name="gaucher[]" onchange="processCheck(this)"><label for="2">BG</label></div>'+
    //                     '<div><input type="checkbox" class="gaucher" id="3" name="gaucher[]" onchange="processCheck(this)"><label for="3">BL</label></div>'+
    //                     '<div><input type="checkbox" class="gaucher" id="4" name="gaucher[]" onchange="processCheck(this)"><label for="4">TX</label></div>'+
    //                     '</div>'
    //                     ;
    //     return div;
    // };
    var str = '<div ">'+

                        '<div style="display:flex"><input type="checkbox" class="gaucher" id="1" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_ori" for="1"> Objek Pajak</label></div>'+
                        '<div style="display:flex"><input type="checkbox" class="gaucher" id="2" name="gaucher[]" onchange="processCheck(this)"><label for="2"> Bangunan</label></div>'+
                        '<div style="display:flex"><input type="checkbox" class="gaucher" id="3" name="gaucher[]" onchange="processCheck(this)"><label for="3"> Blok</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="4" name="gaucher[]" onchange="processCheck(this)"><label for="4"> TX</label></div>'+
                        // '<hr><center>Tematik</center>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="5" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_jenis_tanah" for="5"> Jenis Tanah</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="6" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_jenis_bangunan" for="6"> Jenis Bangunan</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="7" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_buku" for="7"> Buku</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="8" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_npwp" for="8"> NPWP</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="9" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_sts_bayar" for="9"> Status Pembayaran</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="10" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_individu" for="10">  Nilai Individu</label></div>'+
                        // '<div style="display:flex"><input type="checkbox" class="gaucher" id="11" name="gaucher[]" onchange="processCheck(this)"><label id="tmbl_layer_znt" for="11"> Zona Nilai Tanah</label></div>'+
                        '</div>';
    $('.leaflet-control-layers-list').append(str)
    // lay.addTo(map)
     var layer1 = ORI;
    var layer2 = BG;
    var layer3 = BL;
    var layer4 = TX;
    var layer5 = jenis_tanah;
    var layer6 = jenis_bangunan;
    var layer7 = buku;
    var layer8 = npwp;
    var layer9 = sts_bayar;
    var layer10 = individu;
    var layer11 = znt;

  var layers = [layer1, layer2, layer3, layer4, layer5, layer6, layer7, layer8, layer9, layer10, layer11];
  
  var selId = null;
  
  function processCheck(checkbox) {
    var checkId = checkbox.id;

    
    hide_tematik()


    if (checkId == 5) {
        $('#div_jenis_tanah').css('display','block')
    }else{
        $('#div_jenis_tanah').css('display','none')
    }
    if (checkId == 6) {
        $('#div_jenis_bangunan').css('display','block')
        
        if (!map.hasLayer(ORI) && $('#6').is(':checked')) {
            $('#tmbl_layer_ori').click()
        };

        if( $('#6').is(':checked') ){
        }else{

            // $('#tmbl_layer_ori').click()
            // $('#tmbl_layer_ori').click()
        $('#div_jenis_bangunan').css('display','none')
        }

    }else{
        
    }

    if (checkId == 7) {
        $('#div_buku').css('display','block')
    }else{
        $('#div_buku').css('display','none')
    }
    if (checkId == 8) {
        $('#div_npwp').css('display','block')
    }else{
        $('#div_npwp').css('display','none')
    }
    if (checkId == 9) {
        $('#div_status_pembayaran').css('display','block')
    }else{
        $('#div_status_pembayaran').css('display','none')
    }

    if (checkId == 10) {
        $('#div_individu').css('display','block')
    }else{
        $('#div_individu').css('display','none')
    }

    if (checkbox.checked) {
      // if (selId != null) {
      //   map.removeLayer(layers[selId - 1]);
      //   document.getElementById(selId).checked = false;
      // }
      layers[checkId - 1].addTo(map);
      selId = checkId;
      }
    else {
      map.removeLayer(layers[checkId - 1]);
      selId = null;
        $('#div_jenis_tanah').css('display','none')
        $('#div_buku').css('display','none')
        $('#div_npwp').css('display','none')
        $('#div_status_pembayaran').css('display','none')
        $('#div_individu').css('display','none')
        // $('#div_jenis_bangunan').css('display','none')
        // if (checkId == 6) {
        //     $('#tmbl_layer_ori').click()
        // }
    }
    if (map.hasLayer(ORI)) {
        ORI.bringToFront();
    };
  }


    //======================= Layer control ====================
     //======================= button lihat ====================
    var select = L.control();
    select.onAdd = function(map) {
        var div = L.DomUtil.create('div', 'searching');
        div.innerHTML = '<select style="width:100px!important" class="form-control" onchange="select_draw($(this).val())"><option value="0">Lihat</option><option value="1">Edit</option></select>';
        return div;
    };

    select.addTo(map);
     //======================= button lihat ====================
   

    // function ori() {
    //     if($('#ori-check').is(':checked') )
    //      {
    //         console.log('ischeck')
    //         map.removeLayer(ORI)
    //         $("#ori-check").attr('checked',false)
    //      }else{
    //         console.log('notcheck')
    //         $("#ori-check").attr('checked',true)
    //         ORI.addTo(map)
    //      }   
    // }
    

    //======================= position zoom  ====================

    map.removeControl(map.zoomControl);
    L.control.zoom({
        position: 'bottomleft'
    }).addTo(map);


    // $('.leaflet-control-layers-selector').remove()


    // map.addControl(zoomControl)
    // $('.leaflet-left').append('<input type="text">')

    //======================= search ====================
    //     var controlSearch = new L.Control.Search({
    //     position:'topleft',        
    //     layer: ORI,
    //     initial: false,
    //     zoom: 12
    // });

    // map.addControl( controlSearch );



        function rem(params) {
            // alert('ok')
            map.removeControl(drawControl);
        }
    //====================== End Button =================

     //========================== drawing ======================
     var arrDraw=[]
     let drawControl
     let editableLayers = new L.FeatureGroup();
     
     var selected_draw =0
     function select_draw(val) {
        selected_draw=val;
        if(val == 0 ){
            // $('#modal_detail').addClass('hd')
            // $('#modal_add').removeClass('hd')
            map.removeControl(drawControl);
            map.removeLayer(editableLayers);
            $('#nop_edit').val("")
            $('#nop_edit_old').val("")

        }else{

            // $('#modal_detail').removeClass('hd')
            // $('#modal_add').addClass('hd')
            editableLayers.on("click", function(e) {
              console.log("editableLayers click");
                $('#mod_add').modal('show')

            //   console.log(e);
            });
            editableLayers.on("touchstart", function(e) {
              console.log("editableLayers touchstart");
            //   console.log(e);
            });

            map.addLayer(editableLayers);

            drawControl = new L.Control.Draw({
            position: "topright",
            draw: {
                polyline: true,
                polygon: {
                allowIntersection: false,
                drawError: {
                    color: "#e1e100",
                    message: "<strong>Oh snap!<strong> you can't draw that!"
                },
                shapeOptions: {
                    color: "blue",
                    clickable: true
                }
                },
                circle: false,
                circlemarker: false,
                rectangle: {
                shapeOptions: {
                    clickable: true
                }
                },
                marker: true
            },
            edit: {
                featureGroup: editableLayers,
                remove: true
            }
            });

            map.addControl(drawControl);

            map.on(L.Draw.Event.CREATED, function(e) {
                let layer = e.layer;
                editableLayers.addLayer(layer);
                layer.on("click", function(e) {
                    ll = layer.getLatLngs();
                    console.log('create '+ll);
                    // $('#modal_detail1').modal('show')
                    // return('akaa')
                    // console.log(e);
                });
                layer.on("touchstart", function(e) {
                    console.log("layer touchstart");
                    // console.log(e);
                });
                editableLayers.on("click", function(e) {
                    console.log("editableLayers2 click");
                    // $('#nop_add').val("")
                    ll = layer.getLatLngs();
                    console.log('edit '+ll);
                    $('#mod_add').modal('show')
                    // return('aks')
                });
                editableLayers.on("touchstart", function(e) {
                    console.log("editableLayers2 touchstart");
                    // console.log(e);
                });
                editableLayers.removeLayer(e.layer);

            });

            map.on('draw:created', function(e) {
                // var a = JSON.parse(e.layer)
                arrDraw.push(e.layer.getLatLngs())
                var geom = e.layer.getLatLngs()
                // var geom = editableLayers.getLayers()[0].getLatLngs()
                console.log(geom)
            // =======
                var str = 'Polygon(('
                var last = '';
                $.each(geom[0], function( index, value ) {
                    if(index == 0){
                        last = ''+value['lng']+' '+value['lat']+''
                    }
                  str += ''+value['lng']+' '+value['lat']+',';
                });
                str.slice(0,-1)
                str += last+'))'

                $('#nop_add_geom').val(str)
                $('#mod_add').modal('show')
                editableLayers.removeLayer(e.layer);
                // e.cancel();
            });

            map.on('draw:editstop', function(e) {
                // var a = JSON.parse(e.layer)
            //     arrDraw.push(e.layer.getLatLngs())
                console.log(editableLayers.getLayers()[0].getLatLngs())
                var geom = editableLayers.getLayers()[0].getLatLngs()
            // // =======
                var str = 'Polygon(('
                var last = '';
                $.each(geom[0], function( index, value ) {
                    if(index == 0){
                        last = ''+value['lng']+' '+value['lat']+''
                    }
                  str += ''+value['lng']+' '+value['lat']+',';
                });
                str.slice(0,-1)
                str += last+'))'

                $('#nop_edit_geom').val(str)
                $('#mod_edit').modal('show')
                // map.removeLayer(editableLayers);
                editableLayers.removeLayer(e.layer);

            });
        }


        
    }
   function cari() {
        var cari = $('#searching').val();
       $.getJSON('http://localhost:8000/getSearchNop/'+cari, function(data) {
            data = JSON.parse(data[0]['geom'])['coordinates']
                var arr=[]
                var pointZoom =[]
                $.each(data[0], function( key, value ) {
                // console.log(value[0])
                    arr.push([value[1],value[0]])
                    pointZoom=[value[1],value[0]]
                });
                    if (editableLayers) {
                    map.removeLayer(editableLayers);
                        console.log()                        
                    }

                 var polygon = L.polygon(arr, {
                        title: 'test',
                        fillColor: 'red',
                        fillOpacity: 0.5,
                        weight:5,
                        color: 'red',
                        opacity: 0.5,
                        fill: true
                    }).addTo(editableLayers);      
        
            // ORI.addTo(map)

            map.addLayer(editableLayers);
              map.setView(pointZoom);
             map.setZoom(17);
            // // $("#1").trigger("change")
            // // $('#1').attr('checked','checked');
            //  if (map.hasLayer(ORI)) {
            //     console.log('active')
            //     ORI.bringToFront();
            // };
            // map.setView(arr[0], 15, { animation: true })
            });
         var arr = [];
        
    } 

    function cari_new(nop) {
        var cari = $('#searching_text').val();
        if (cari.length == 0) {
            return false
        }
        if ($('#search_nop').is(':checked')) {
            cari_nop(nop)
        }else {
        
            $('#table_search').css('display','block')
        }
    }
    function cari_nop(cari) {

        // var cari = $('#searching_text').val();
       $.getJSON('http://localhost:8000/getSearchNop/'+cari, function(data) {
            data = JSON.parse(data[0]['geom'])['coordinates']
                var arr=[]
                var pointZoom =[]
                $.each(data[0], function( key, value ) {
                // console.log(value[0])
                    arr.push([value[1],value[0]])
                    pointZoom=[value[1],value[0]]
                });
                    if (editableLayers) {
                    map.removeLayer(editableLayers);
                        console.log()                        
                    }

                 var polygon = L.polygon(arr, {
                        title: 'test',
                        fillColor: 'red',
                        fillOpacity: 0.5,
                        weight:5,
                        color: 'red',
                        opacity: 0.5,
                        fill: true
                    }).addTo(editableLayers);      
        
            // ORI.addTo(map)

            map.addLayer(editableLayers);
            map.setZoom(18);
            setTimeout(function(){
                map.setView(pointZoom);
            },1000);
            // // $("#1").trigger("change")
            // // $('#1').attr('checked','checked');
            // if (map.hasLayer(ORI)) {
            //     ORI.bringToFront();
            // };
            // map.setView(arr[0], 15, { animation: true })
            });
         var arr = [];
        $('#mod_search').modal('hide')
    }
    //======================== End Drawing ====================

   
    function kolor(v) {
        if (v >=0 && v <= 4) {
            num = 0
        }else if(v >=5 && v <= 9){
            num = 1

        }else if(v >=10 && v <= 14){
            num = 2
        }else if(v >=15 && v <= 17){
            num = 3
        }else{
            num = 4
        }
        var arr = ['red','blue','purple','orange','aqua']
        // var num =  Math.floor(Math.random() * 6)
      
        // alert(num)
        return arr[num]
    }   


    function kolor_two(v) {
        if (v >=0 && v <= 10) {
            num = 0
        }else{
            num = 1
        }
        var arr = ['purple','aqua']
        // var num =  Math.floor(Math.random() * 6)
      
        // alert(num)
        return arr[num]
    }

    function show_sidebar() {
        hide_tematik()
        $('#sidebar').css('display','block')
        $('#sidebar').css('animation','3s slide-right')
    }

    function hide_tematik(argument) {
        if (map.hasLayer(jenis_tanah) ) {
            $('#tmbl_layer_jenis_tanah').click()
        };
        if (map.hasLayer(jenis_bangunan) ) {
            $('#tmbl_layer_jenis_bangunan').click()
        };
        if (map.hasLayer(buku) ) {
            $('#tmbl_layer_buku').click()
        };
        if (map.hasLayer(npwp) ) {
            $('#tmbl_layer_npwp').click()
        };
        if (map.hasLayer(sts_bayar) ) {
            $('#tmbl_layer_sts_bayar').click()
        };

        if (map.hasLayer(individu) ) {
            $('#tmbl_layer_individu').click()
        };   
        if (map.hasLayer(znt) ) {
            $('#tmbl_layer_znt').click()
        };
    }

</script>






<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
