@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'stations' ? 'active' : '' }}">
                <a href="{{ route('Station') }}">
                    <i class="fa fa-home"></i>
                    <span class="title">Station</span>
                </a>
            </li>
            {{--<li class="{{ $request->segment(1) == 'vehicles' ? 'active' : '' }}">--}}
                {{--<a href="{{ route('vehicles.index') }}">--}}
                    {{--<i class="fa fa-car"></i>--}}
                    {{--<span class="title">Vehicle</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{ $request->segment(1) == 'assets' ? 'active' : '' }}">--}}
                {{--<a href="{{ route('assets.index') }}">--}}
                    {{--<i class="fa fa-gears"></i>--}}
                    {{--<span class="title">Assets</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{ $request->segment(1) == 'asset_types' ? 'active' : '' }}">--}}
                {{--<a href="{{ route('asset_types.index') }}">--}}
                    {{--<i class="fa fa-database"></i>--}}
                    {{--<span class="title">Asset Type</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{ $request->segment(1) == 'mobile_computers' ? 'active' : '' }}">--}}
                {{--<a href="{{ route('mobile_computers.index') }}">--}}
                    {{--<i class="fa fa-laptop"></i>--}}
                    {{--<span class="title">Mobile Computer</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            

            {{--<li>--}}
                {{--<a href="#logout" onclick="$('#logout').submit();">--}}
                    {{--<i class="fa fa-arrow-left"></i>--}}
                    {{--<span class="title">Logout</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>
{{--{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}--}}
{{--<button type="submit">Logout</button>--}}
{{--{!! Form::close() !!}--}}