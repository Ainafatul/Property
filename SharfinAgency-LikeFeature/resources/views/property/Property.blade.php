<link rel="stylesheet" href="{{ URL::asset('css/property.css') }}"/>
<?php $datas = \App\Http\Controllers\AgentController::getProperties()?>
<article class="container page-container">
    <div style="padding-bottom: 100px;padding-top: 50px">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Property</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
@include('property.MyProperty')
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
@include('property.NewProperty')
            </div>
        </div>
    </div>
</article>
<script>
    $('#isJual').change(function () {
        $('#detailPenjualan').attr('hidden', !$(this).is(':checked'))
    });
    $('#isSewa').change(function () {
        $('#detailPenyewaan').attr('hidden', !$(this).is(':checked'))
    });

    function preview_image(event, img, index) {
        let reader = new FileReader();
        reader.onload = function () {
            let output = document.getElementById(img);
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[index]);
    }

    $('#uploadImage').change(function (event) {
        const input = document.getElementById('uploadImage');
        if (input.files.length <= 7) {
            $('#maxPicture').text('Okey Lur');
            $('#submit').attr('disabled', false)
            for (let i = 0; i < input.files.length; i++) {
                preview_image(event, 'img' + i, i)
            }
        } else {
            $('#maxPicture').text('Limit e 7 Dulur ku Sayang');
            $('#submit').attr('disabled', true)
        }
    });
</script>

