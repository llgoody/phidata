@extends('layouts.system')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                            积分账单
                            积分账户
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric">时间</th>
                            <th class="numeric">金额</th>
                            <th class="numeric">项目</th>
                            <th class="numeric">账户余额</th>
                            <th width="30%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                            <tr>
                                <td>{{ $record->created_at }}</td>
                                <td>{{ $record->amount }}</td>
                                <td>{{ $record->consumption }}</td>
                                <td>
                                    <a href='' class="btn btn-xs blue">
                                        <i class="fa fa-file-o"></i> 充值
                                    </a>
<<<<<<< HEAD

                        @foreach($points as $point)
                            <tr>
                                <td>{{ $point->amount }}</td>

                                    <a href=""   class="btn btn-xs green">
                                        <i class="fa fa-file-o"></i> 查看账单
=======
                                    <a href="{{ action('PointController@changePassword') }}" class="btn btn-xs red">
                                        <i class="fa fa-file-o"></i> 修改支付密码
>>>>>>> a4a1f3e5e931f2fc15bc9360a3aedee945a9f3f5
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection




