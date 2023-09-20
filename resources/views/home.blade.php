    @extends('adminlte::page')

    @section('content')
    <div class="container">

    <div class="row">
    <div class="col-lg-3 col-6">

    <div class="small-box bg-info">
    <div class="inner">
    <h3>{{ $itens_vendas_count }}</h3>
    <p>New Orders</p>
    </div>
    <div class="icon">
    <i class="fas fa-fw fa-user"></i>
    </div>
    <a href="{{ url('/PedidosClientes')}}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>R${{ $itens_vendas_sum }}</h3>
    <p>Valores dos Pedidos<sup style="font-size: 60px"></sup></p>
    
    </div>
    <div class="icon">
    <i class="ion ion-stats-bars"></i>
    </div>
    <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
    <div class="inner">
    <h3>50</h3>
    <p>User Registrations</p>
    </div>
    <div class="icon">
    <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-danger">
    <div class="inner">
    <h3>65</h3>
    <p>Unique Visitors</p>
    </div>
    <div class="icon">
    <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    </div>


<div class="tab-content p-0">

<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
<canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 576px;" width="576" class="chartjs-render-monitor"></canvas>
</div>
<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
<canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0"></canvas>
</div>
</div>
</div>
</div>
{{--
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
    @endsection
