<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px; ">
            <li>
                <a href="{{ route('dashboard.index') }} ">Dashboard</a>
            </Li>
            <li class="active"><strong>{{ config('apps.user.title') }}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Danh sách thành viên</h5>
                @include('backend.dashboard.user.component.toolbox')
            </div>
            <div class="ibox-content">
                @include('backend.dashboard.user.component.filter')
                @include('backend.dashboard.user.component.table')
            </div>
        </div>
    </div>
</div>
