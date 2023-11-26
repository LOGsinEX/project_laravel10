<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS_CHIKAL</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">DATA MAHASISWA</div>

                        <div class="card-body">
                            <table class="table table-striped">

                                <tr>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>

                                </tr>
                                    @php $no=; @endphp
                                    @foreach($data_mahasiswa as $item)
                                    @php $no++; @endphp
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item['nama']}}</td>
                                        <td>{{$item['jk']}}</td>
                                        <td>{{$item['agama']}}</td>
                                        <td>{{$item['alamat']}}</td>
                                        
                                    </tr>
                                    @endforeach

                            </table>

                        </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>