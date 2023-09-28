{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('school') }}"><i class="nav-icon la la-question"></i> Schools</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('employee') }}"><i class="nav-icon la la-question"></i> Employees</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('attendance') }}"><i class="nav-icon la la-question"></i> Attendances</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('leave-history') }}"><i class="nav-icon la la-question"></i> Leave histories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('student') }}"><i class="nav-icon la la-question"></i> Students</a></li>