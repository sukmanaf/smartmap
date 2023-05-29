<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="https://leaflet.github.io/Leaflet.draw/docs/examples/libs/leaflet-src.js"></script>
    <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/docs/examples/libs/leaflet.css" />

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

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.5.1/leaflet.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
</style>

<div id="map" style="width: 100%; height: 600px; border: 1px solid #ccc"></div>
<!-- =========== Modal Detail ============ -->

<div id="modal_detail" class="modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Detail Peta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                            <textarea name="" readonly class="form-control" id="" cols="30" rows="10">
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
                    <textarea name="" readonly class="form-control" id="" cols="30" rows="10">
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
            <div class="row hd" id="detail_bangunan">
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
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Atap</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Dinding</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Lantai</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Langit-langit</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-md-3">Kondisi</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="">
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
            
      </div>
      <div class="modal-footer">
        <button type="button" onclick="show_bng()" id="btn_op" class="btn btn-primary hd" >Detail Objek Pajak</button>
        <button type="button" onclick="show_op()" id="btn_bng" class="btn btn-primary ">Detail Bangunan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- ============ end modal detail ============= -->
<div id="modal_detail1" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>



   


<script>

    function show_bng() {
        $('#btn_op').addClass('hd')
        $('#detail_tanah').addClass('hd')
        $('#btn_bng').removeClass('hd')
        $('#detail_bangunan').addClass('hd')
    }
    
    function show_op() {
        $('#btn_bng').addClass('hd')
        $('#btn_op').removeClass('hd')
        $('#detail_tanah').removeClass('hd')
        $('#detail_bangunan').addClass('hd')

    }
    
      var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, {maxZoom:20,zoom:13, attribution: osmAttrib}),
            map = new L.Map('map', {center: new L.LatLng(-7.6357943324575, 112.88264323166), zoom: 13,maxZoom:25}),
            drawnItems = L.featureGroup().addTo(map);
            
     //======================= Ori ===========================
        var ORI = L.geoJson(
                null
            , { 	
                onEachFeature: function (feature, layer) {
                    layer.on("click", function () {
                        
                        // alert(selected_draw)
                        if(selected_draw == 0){
                            $('#lbl_nop').html(feature.properties.D_NOP)
                            $('#lbl_luas').html(feature.properties.D_LUAS)
                            $('#modal_detail').modal('show')
                        }else{
                            var f =  feature.geometry.coordinates
                            var arr = [];
                            $.each(f[0], function( key, value ) {
                                // console.log(  value[0] );
                                const temp = value[0];
                                value[0] = value[1];
                                value[1] = temp;
                                arr.push(value)
                            });
                            console.log(arr)    
                            
                            // arr = JSON.stringify(arr)
                            console.log(arr)    
                            // console.log(value);
                            var polyCoords = [arr]

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
                        
                        // polygon.bindTooltip("My polygon",
                        // {permanent: false, direction:"center"}
                        // ).openTooltip()
                            // arr.push([value[1],value[0]])
                        
                    })
                },
                style : function (feature){
                return {
                    fillColor: "transparent",
                    fillOpacity: 0.5,
                    color: "black",
                    dashArray: '3',
                    weight: 2,
                    opacity: 0.7
                }
            }

            
        
        });
        
        $.getJSON('http://localhost:8000/getNop', function(data) {
        // $.getJSON('3575010001.geojson', function(data) {
            ORI.addData(data);
            map.fitBounds(ORI.getBounds());
            // $('#modal_detail').modal('show')

  
        });

       
    

        //======================= Backgraund ================= 
        var BG = L.geoJson(null, { 	style : function (feature){
                return {
                    fillColor: "transparent",
                    fillOpacity: 0.5,
                    color: "green",
                    dashArray: '3',
                    weight: 2,
                    opacity: 0.7
                }
            }
        
        });

        $.getJSON('3575010001bg.geojson', function(data) {
        BG.addData(data);

            map.fitBounds(BG.getBounds());
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

        $.getJSON('3575010001bl.geojson', function(data) {
        BL.addData(data);

            map.fitBounds(BL.getBounds());
        });

        // ================== TX ===================
        
        var TX = L.geoJson(null, { 	style : function (feature){
		// kec = feature.properties.OBJECTID;
                return {
                    fillColor: "transparent",
                    fillOpacity: 0.5,
                    color: "Red",
                    dashArray: '3',
                    weight: 2,
                    opacity: 0.7
                }
            }
        
        });

        $.getJSON('3575010001txLine.geojson', function(data) {
        TX.addData(data);

            map.fitBounds(TX.getBounds());
        });

    L.control.layers({
            "osm": osm.addTo(map),
            "google": L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: 'google',maxZoom:30
               
            })
    
        }, {'drawlayer':drawnItems,
            'Ori' : ORI.addTo(map),
            'Bg' : BG,
            'Bl' : BL,
            'Tx' : TX,
        }, { position: 'topright', collapsed: false }).addTo(map);

   

    //======================= button ====================
    var select = L.control();
    select.onAdd = function(map) {
        var div = L.DomUtil.create('div', 'select');
        div.innerHTML = '<select style="width:90px!important" class="form-control" onchange="select_draw($(this).val())"><option value="0">Lihat</option><option value="1">Edit</option></select>';
        div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.disableClickPropagation(div);
        return div;
    };
    select.addTo(map);


function rem(params) {
    // alert('ok')
    map.removeControl(drawControl);
}
    //====================== End Button =================

     //========================== drawing ======================
     let drawControl
     let editableLayers
     var selected_draw =0
     function select_draw(val) {
        selected_draw=val;
        if(val == 0 ){
            map.removeControl(drawControl);
            map.removeLayer(editableLayers);

        }else{
            editableLayers = new L.FeatureGroup();
            editableLayers.on("click", function(e) {
            //   console.log("editableLayers click");
            //   console.log(e);
            });
            editableLayers.on("touchstart", function(e) {
            //   console.log("editableLayers touchstart");
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
                    color: "#bada55",
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
                console.log(ll);
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
                return('aks')
                // console.log(e);
            });
            editableLayers.on("touchstart", function(e) {
                console.log("editableLayers2 touchstart");
                // console.log(e);
            });
            });
        }
        
    }

    //======================== End Drawing ====================

</script>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
