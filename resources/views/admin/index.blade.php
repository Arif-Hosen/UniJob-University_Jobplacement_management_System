@extends('layout.admin')

@section('stylesheet')
  <style>
    .mini-stat{
        -webkit-box-shadow: -6px 6px 15px 3px rgba(0,0,0,0.8);
        box-shadow: -6px 6px 15px 3px rgba(0,0,0,0.8);
    }
    .mini-stat:hover{
        -webkit-transform: translateY(-8px);
        transform: translateY(-8px);
        transition-duration: 0.5s;
    }
  </style>

@endsection
@section('content')

  <div class="container-fluid">
    <div class="row">
      @if(\App\Helper\CustomHelper::canView('', 'Institute Head|Industry'))
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="panel">
              <div class="panel-heading">
                <h2 class="panel-title">
                  @if (isset(auth()->user()->name_en))
                    {{auth()->user()->name_en}}
                  @else
                    {{ auth()->user()->name_en }}
                  @endif
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif

      {{-- <div class="col-12">
        @if(\App\Helper\CustomHelper::canView('', 'Institute Head') && \App\Helper\CustomHelper::isInstituteTrainingProvider())
        <div class="card">
          <div class="card-body">
            <section class="panel">
              <header class="panel-heading">
                <h2 class="panel-title">Upcoming Training</h2>
              </header>
              <div class="panel-body">
                @if(session()->has('status'))
                  {!! session()->get('status') !!}
                @endif
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                       cellspacing="0" width="100%" style="font-size: 14px">
                  <thead>
                  <tr>
                    <th width="50">#</th>
                    <th>Training Title</th>
                    <th>Training Duration</th>
                    <th>Coordinator</th>
                    <th>Participants</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($upcoming as $key => $val)
                    <tr class="@if(($key%2) == 0)gradeX @else gradeC @endif">
                      <td class="p-1">{{ ($key+1) }}</td>
                      <td class="p-1 text-capitalize">{{ $val->title }}</td>
                      <td class="p-1">{{ \App\Helper\CustomHelper::dateDiffReadable($val->start_date, $val->end_date)  }}</td>
                      <td class="p-1 text-capitalize">{{ $val->user->name_en }}</td>
                      <td class="p-1 text-center">{{ $val->members_count }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </section>
            <section class="panel">
              <header class="panel-heading">
                <h2 class="panel-title">Completed Training</h2>
              </header>
              <div class="panel-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                       cellspacing="0" width="100%" style="font-size: 14px">
                  <thead>
                  <tr>
                    <th width="50">#</th>
                    <th>Training Title</th>
                    <th>Training Duration</th>
                    <th>Coordinator</th>
                    <th>Participants</th>
                  </tr>
                  </thead>
                  <tbody>


                  @foreach($complete as $key => $val)
                    <tr class="@if(($key%2) == 0)gradeX @else gradeC @endif">
                      <td class="p-1">{{ ($key+1) }}</td>
                      <td class="p-1 text-capitalize">{{ $val->title }}</td>
                      <td class="p-1">{{ \App\Helper\CustomHelper::dateDiffReadable($val->start_date, $val->end_date)  }}</td>
                      <td class="p-1 text-capitalize">{{ $val->user->name_en }}</td>
                      <td class="p-1 text-center">{{ $val->members_count }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
        @endif
      </div> --}}

    </div>
{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <h3>Order</h3>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-purple">{{ $order->pending }}</span>--}}
{{--            Pending--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-blue-grey">{{ $order->processing }}</span>--}}
{{--            Processing--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $order->awaitingShipment }}</span>--}}
{{--            Awaiting Shipment--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-barley"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $order->delivered }}</span>--}}
{{--            Delivered--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-dark mr-0 float-right"><i class="mdi mdi-airballoon"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $order->completed }}</span>--}}
{{--            Completed--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-indigo mr-0 float-right"><i class="mdi mdi-yeast"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $order->cancelled }}</span>--}}
{{--            Cancelled--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-lime mr-0 float-right"><i class="mdi mdi-water"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $order->total }}</span>--}}
{{--            Total--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--    </div>--}}

{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <h3>Product</h3>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-purple">{{ $product->active }}</span>--}}
{{--            Active--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-blue-grey">{{ $product->inactive }}</span>--}}
{{--            Inactive--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $product->total }}</span>--}}
{{--            Total--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <h3>Category</h3>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-purple">{{ $category->active }}</span>--}}
{{--            Active--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-blue-grey">{{ $category->inactive }}</span>--}}
{{--            Inactive--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $category->total }}</span>--}}
{{--            Total--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <h3>Sub-Category</h3>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-purple">{{ $subCategory->active }}</span>--}}
{{--            Active--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-blue-grey">{{ $subCategory->inactive }}</span>--}}
{{--            Inactive--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $subCategory->total }}</span>--}}
{{--            Total--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--      <div class="col-md-12">--}}
{{--        <h3>Brand</h3>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-purple">{{ $brand->active }}</span>--}}
{{--            Active--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-blue-grey">{{ $brand->inactive }}</span>--}}
{{--            Inactive--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}

{{--      <div class="col-md-6 col-lg-6 col-xl-3">--}}
{{--        <div class="mini-stat clearfix bg-white">--}}
{{--          <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>--}}
{{--          <div class="mini-stat-info">--}}
{{--            <span class="counter text-brown">{{ $brand->total }}</span>--}}
{{--            Total--}}
{{--          </div>--}}
{{--          <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

  </div><!-- container -->
@endsection


@section('script')

@endsection
