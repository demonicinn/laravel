<div class="col-md-3 left_Sectnss">
    <ul class="profile_data">

        <li class="{{ ($active=='profile')?'active':'' }}"><a href="{{ route('settings.profile') }}">Profile</a></li>

        <li class="{{ ($active=='admin')?'active':'' }}"><a href="{{ route('settings.admin') }}">Account</a></li>

        <!--li class="{{ ($active=='notifications')?'active':'' }}"><a href="{{ route('settings.notifications') }}">Notifications</a></li-->

        <li class="{{ ($active=='programs')?'active':'' }}"><a href="{{ route('settings.programs') }}">My Programs</a></li>

        <li class="{{ ($active=='billing')?'active':'' }}"><a href="{{ route('settings.billing') }}">Payment History</a></li>

    </ul>
</div>