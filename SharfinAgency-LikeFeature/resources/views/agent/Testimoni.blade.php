<div class="container page-container">
    <div>
        <div style="padding-bottom: 100px;padding-top: 50px">
        <div class="card m-lg-auto" style="padding: 24px 64px">
        <table class="table">
            <thead class="thead-dark">
            <h2>TESTIMONI</h2>
            <br>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Testimoni</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($testimonis as $testi )
                    <tr>
                        <td>{{$testi->id}}</td>
                        <td>{{$testi->nama}}</td>
                        <td>{{$testi->pekerjaan}}</td>
                        <td>{{$testi->testimoni}}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
