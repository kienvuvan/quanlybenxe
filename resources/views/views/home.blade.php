@extends('views.main')
@section('container')
	<div id="content" class="space-top-none">
      <div class="main-content">
        <div class="space60">&nbsp;</div>
        <div class="row">
          <div class="col-sm-12">
            <div class="beta-products-list">
              <h4>Hãng xe đi nhiều</h4>
              <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($nhaXe)}} nhà xe</p>
                <div class="clearfix"></div>
              </div>

              <div class="row">
                @foreach($nhaXe as $car)
                  <div class="col-sm-3">
                    <div class="single-item">
                      <div class="single-item-header">
                        <a href="product.html"><img src="resources/image/quanlybenxe/xe1.png" alt=""></a>
                      </div>
                      <div class="single-item-body">
                        <p class="single-item-title">{{$car->NhaXe}}</p>
                      </div>
                      <div class="single-item-caption">
                        <a class="beta-btn primary" href="product.html">Thông tin chi tiết </a>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection