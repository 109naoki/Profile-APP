<x-head />
<x-sidebar />
  <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">紹介用コードコピーページ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">

                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">URL</h5>
                                <input type="text" class="form-control rounded-0" id="exampleInputRounded0" readonly value="{{$url}}">
                            </div>
                        </div>
                        <div class="col-2">
                  {!! QrCode::size(200)->generate($url)!!}
                </div>
                    </div>





                </div>

            </div>
        </div>

    </div>
<x-footer />
