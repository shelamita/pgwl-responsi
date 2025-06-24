@extends('layout.template')


@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-minimap@3.6.1/dist/Control.MiniMap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-search@3.0.2/dist/leaflet-search.min.css">

    <style>
        #map {
            width: 100%;
            height: calc(100vh - 56px);
        }
    </style>
@endsection

@section('content')
    <div id="map"></div>

    <!-- Modal Create Point -->
    <div class="modal fade" id="createpointModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Point</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('points.store') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Fill point name">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="geom_point" class="form-label">Geometry</label>
                            <textarea class="form-control" id="geom_point" name="geom_point" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="image_point" name="image"
                                onchange="document.getElementById('preview-image-point').src = window.URL
                            .createObjectURL(this.files[0])">
                            <img src="" alt="" id="preview-image-point" class="img-thumbnail"
                                width="400">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Create Polyline -->
    <div class="modal fade" id="createpolylineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Polyline</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('polylines.store') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Fill point name">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="geom_polyline" class="form-label">Geometry</label>
                            <textarea class="form-control" id="geom_polyline" name="geom_polyline" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="image_polyline" name="image"
                                onchange="document.getElementById('preview-image-polyline').src = window.URL
                            .createObjectURL(this.files[0])">
                            <img src="" alt="" id="preview-image-polyline" class="img-thumbnail"
                                width="400">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Create Polygon -->
    <div class="modal fade" id="createpolygonModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Polygon</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('polygons.store') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Fill point name">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="geom_polygon" class="form-label">Geometry</label>
                            <textarea class="form-control" id="geom_polygon" name="geom_polygon" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="image_polygon" name="image"
                                onchange="document.getElementById('preview-image-polygon').src = window.URL
                            .createObjectURL(this.files[0])">
                            <img src="" alt="" id="preview-image-polygon" class="img-thumbnail"
                                width="400">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://unpkg.com/@terraformer/wkt"></script>
    <script src="https://unpkg.com/leaflet-minimap@3.6.1/dist/Control.MiniMap.min.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://unpkg.com/leaflet-search@3.0.2/dist/leaflet-search.min.js"></script>

    <script>
        var map = L.map('map').setView([-8.579127384783261, 116.33818564791294], 10);

        // Basemap 1: OpenStreetMap
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Basemap 2: Esri World Imagery
        var esri = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: '&copy; <a href="https://www.esri.com/">Esri</a> &mdash; Source: Esri, i-cubed, USDA, USGS'
            });

        // Basemap 3: CartoDB Positron
        var carto = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://carto.com/">CARTO</a>'
        });

        map.locate({
            setView: true,
            maxZoom: 14
        });

        map.on('locationfound', function(e) {
            L.circle(e.latlng, {
                    radius: e.accuracy
                }).addTo(map)
                .bindPopup("Lokasi Anda").openPopup();
        });

        var osm2 = new L.TileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");

        var miniMap = new L.Control.MiniMap(osm2, {
            toggleDisplay: true,
            aimingRectOptions: {
                color: "green", // Warna outline area
                weight: 2, // Ketebalan garis
                fillColor: "green", // Warna isi (bisa diatur juga kalau perlu)
                fillOpacity: 0.1 // Transparansi isi
            }
        }).addTo(map);

        /* Digitize Function */
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        // Layer WMS dari GeoServer
        var batasLombokWMS = L.tileLayer.wms("http://localhost:8080/geoserver/Savana_Raya/wms", {
            layers: 'Savana_Raya:Batas_Lombok_Hijau',
            format: 'image/png',
            transparent: true,
            attribution: "© GeoServer Savana Raya",
            version: '1.1.0'
        });

        // Tambahkan ke peta
        batasLombokWMS.addTo(map);

        var drawControl = new L.Control.Draw({
            draw: {
                position: 'topleft',
                polyline: true,
                polygon: true,
                rectangle: true,
                circle: false,
                marker: true,
                circlemarker: false
            },
            edit: false
        });

        map.addControl(drawControl);

        map.on('draw:created', function(e) {
            var type = e.layerType,
                layer = e.layer;

            console.log(type);

            var drawnJSONObject = layer.toGeoJSON();
            var objectGeometry = Terraformer.geojsonToWKT(drawnJSONObject.geometry);

            console.log(drawnJSONObject);
            // console.log(objectGeometry);

            if (type === 'polyline') {
                console.log("Create " + type);

                $('#geom_polyline').val(objectGeometry);

                // nanti akan munculkan modal create polyline
                $('#createpolylineModal').modal('show');


            } else if (type === 'polygon' || type === 'rectangle') {
                console.log("Create " + type);

                $('#geom_polygon').val(objectGeometry);

                // nanti akan munculkan modal create polygon
                $('#createpolygonModal').modal('show');

            } else if (type === 'marker') {
                console.log("Create " + type);

                $('#geom_point').val(objectGeometry);

                // nanti akan munculkan modal create marker
                $('#createpointModal').modal('show');

            } else {
                console.log('__undefined__');
            }

            drawnItems.addLayer(layer);
        });

        // Marker Bandara Lombok (Lombok International Airport)
        var bandaraIcon = L.icon({
            iconUrl: '../storage/images/plane.png',
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -28]
        });

        var markerBandara = L.marker([-8.760113085675279, 116.27340683006207], {
                icon: bandaraIcon
            })
            .bindPopup("<strong>Bandara Internasional Lombok (LOP)</strong><br>Transportasi udara ke/dari Pulau Lombok.")
            .addTo(map);

        // Tambahkan layer GeoJSON rute wisata
        // fetch("/storage/geojson/rute_wisata_lombok.geojson")
        //     .then(response => response.json())
        //     .then(data => {
        //         const ruteLayer = L.geoJSON(data, {
        //             style: function(feature) {
        //                 // Warna berdasarkan jenis transportasi
        //                 const jenis = feature.properties.transport;
        //                 let color = "gray";
        //                 if (jenis === "darat") color = "green";
        //                 else if (jenis === "laut") color = "blue";
        //                 else if (jenis === "udara") color = "orange";

        //                 return {
        //                     color: color,
        //                     weight: 4,
        //                     dashArray: (jenis === "udara") ? "5, 10" : "1"
        //                 };
        //             },
        //             onEachFeature: function(feature, layer) {
        //                 const props = feature.properties;
        //                 layer.bindPopup(`
    //             <strong>Rute:</strong> ${props.name}<br>
    //             <strong>Transportasi:</strong> ${props.transport}
    //         `);
        //             }
        //         }).addTo(map);

        //         map.fitBounds(ruteLayer.getBounds());
        //     });

        //GeoJSON point
        var point = L.geoJson(null, {
            pointToLayer: function(feature, latlng) {
                var customIcon = L.icon({
                    iconUrl: '{{ asset('storage/images/pin.png') }}', // path ke icon marker
                    iconSize: [32, 32], // ukuran gambar
                    iconAnchor: [16, 32], // titik anchor ke koordinat
                    popupAnchor: [0, -32] // posisi popup terhadap icon
                });
                return L.marker(latlng, {
                    icon: customIcon
                });
            },
            onEachFeature: function(feature, layer) {
                var routeedit = "{{ route('points.edit', ':id') }}";
                routeedit = routeedit.replace(':id', feature.properties.id);

                var routeDelete = "{{ route('points.destroy', ':id') }}";
                routeDelete = routeDelete.replace(':id', feature.properties.id);

                var popupContent = `
                <div class="card" style="width: 18rem;">
                    <img src='{{ asset('storage/images') }}/${feature.properties.image}' class="card-img-top" alt="${feature.properties.name}">
                    <div class="card-body">
                        <h5 class="card-title">${feature.properties.name}</h5>
                        <p class="card-text">${feature.properties.description}</p>
                        <p class="card-text"><small class="text-muted">Dibuat pada: ${feature.properties.created_at}</small></p>
                        <p class="card-text"><small class="text-muted">Dibuat oleh: ${feature.properties.user_created}</small></p>
                        <div class="d-flex justify-content-between">
                            <a href="${routeedit}" class="btn btn-warning btn-sm" title="Edit Data">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form method="POST" action="${routeDelete}" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>`;

                layer.on({
                    click: function(e) {
                        layer.bindPopup(popupContent).openPopup();
                    },
                    mouseover: function(e) {
                        layer.bindTooltip(feature.properties.name);
                    },
                });
            },
        });

        // Ambil data dan tambahkan ke peta
        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });

        // GeoJSON polyline
        var polyline = L.geoJson(null, {
            style: function(feature) {
                return {
                    color: '#B22222',
                    weight: 4,
                    opacity: 0.9
                };
            },
            onEachFeature: function(feature, layer) {
                var routeedit = "{{ route('polylines.edit', ':id') }}".replace(':id', feature.properties.id);
                var routeDelete = "{{ route('polylines.destroy', ':id') }}".replace(':id', feature.properties
                    .id);

                var popupContent = `
                <div class="card" style="width: 18rem;">
                    <img src='{{ asset('storage/images') }}/${feature.properties.image}' class="card-img-top" alt="${feature.properties.name}">
                    <div class="card-body">
                        <h5 class="card-title">${feature.properties.name}</h5>
                        <p class="card-text">${feature.properties.description}</p>
                        <p class="card-text"><strong>Jarak:</strong> ${feature.properties.length_km.toFixed(2)} km</p>
                        <p class="card-text"><small class="text-muted">Dibuat pada: ${feature.properties.created_at}</small></p>
                        <p class="card-text"><small class="text-muted">Dibuat oleh: ${feature.properties.user_created}</small></p>
                        <div class="d-flex justify-content-between">
                            <a href="${routeedit}" class="btn btn-warning btn-sm" title="Edit Data">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form method="POST" action="${routeDelete}" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>`;


                layer.bindPopup(popupContent);
                layer.bindTooltip(feature.properties.name);
            }
        });

        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });

        //GeoJSON polygon
        var polygon = L.geoJson(null, {
            style: function(feature) {
                return {
                    color: '#2E8B57', // Warna garis (outline)
                    fillColor: '#3CB371', // Warna isi (hijau danau)
                    fillOpacity: 0.5, // Transparansi isi
                    weight: 2 // Ketebalan garis
                };
            },
            onEachFeature: function(feature, layer) {

                var routeedit = "{{ route('polygons.edit', ':id') }}";
                routeedit = routeedit.replace(':id', feature.properties.id);

                var routeDelete = "{{ route('polygons.destroy', ':id') }}";
                routeDelete = routeDelete.replace(':id', feature.properties.id);

                var popupContent = `
                <div class="card" style="width: 18rem;">
                    <img src='{{ asset('storage/images') }}/${feature.properties.image}' class="card-img-top" alt="${feature.properties.name}">
                    <div class="card-body">
                        <h5 class="card-title">${feature.properties.name}</h5>
                        <p class="card-text">${feature.properties.description}</p>
                        <p class="card-text"><strong>Luas:</strong> ${feature.properties.area_km2.toFixed(2)} km<sup>2</sup></p>
                        <p class="card-text"><small class="text-muted">Dibuat pada: ${feature.properties.created_at}</small></p>
                        <p class="card-text"><small class="text-muted">Dibuat oleh: ${feature.properties.user_created}</small></p>
                        <div class="d-flex justify-content-between">
                            <a href="${routeedit}" class="btn btn-warning btn-sm" title="Edit Data">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form method="POST" action="${routeDelete}" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Data">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>`;

                layer.on({
                    click: function(e) {
                        layer.bindPopup(popupContent).openPopup();
                    },
                    mouseover: function(e) {
                        layer.bindTooltip(feature.properties.name);
                    },
                });
            },
        });

        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });


        var baseMaps = {
            "OpenStreetMap": osm,
            "Esri World Imagery": esri,
            "CartoDB Positron": carto
        };

        var overlayMaps = {
            "Destinasi Pantai": point,
            "Rute Wisata": polyline,
            "Destinasi Bendungan": polygon,
            "Batas Administrasi": batasLombokWMS
        };

        L.control.layers(baseMaps, overlayMaps, {
            collapsed: false
        }).addTo(map);
    </script>
@endsection
