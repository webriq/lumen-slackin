@extends('app')

@section('content')
<div class="row">
    <div class="createBox">
        <div class="ibox-content">
            <div class="login-header">
                <h3><i class="material-icons">public</i> &nbsp; Join WebriQ on Slack</h3>
            </div>
            <div class="login-box-body">
            <br>
            <br>
                <div id="logo">
                    <a href="https://{{$team['domain']}}.slack.com">
                        <img src="{{$team['icon']['image_132']}}" />
                    </a>
                </div>

                <div id="message">
                    <h4 class="login-box-msg"> {!! trans('slackin.join', ['team' => $team['name'], 'domain' => $team['domain']]) !!}</h4>
                </div>

                @if(isset($totals, $totals['active'], $totals['total']))
                <div id="status" >
                    {!! trans_choice('slackin.users_online', $totals['active'], $totals) !!}
                </div>
                @endif
                <br>
                <br>
                <div id="form-invite" class="col-sm-12 wizard formalize">
                    <div id="validation-message"></div>

                    <form action="{{url('/invite')}}" method="post" class="form-horizontal" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" placeholder="{{trans('slackin.placeholders.username')}}" autofocus="true"/>
                            <div class="help-block">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" placeholder="{{trans('slackin.placeholders.email')}}"/>
                            <div class="help-block">

                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-rounded btn-inverse" value="{{trans('slackin.submit')}}"/>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ibox-body -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
