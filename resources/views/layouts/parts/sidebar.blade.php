<div class="bg-white border-end" id="sidebar-wrapper">
    @can('admin')
        <div class="sidebar-heading bg-white">Admin Employee</div>
        <div class="list-group list-group-flush">
            <a class="border-0 list-group-item list-group-item-action" href="#!">Dashboard</a>
            <a class="border-0 list-group-item list-group-item-action" href="#!">Shortcuts</a>
            <a class="border-0 list-group-item list-group-item-action" href="#!">Overview</a>
            <a class="border-0 list-group-item list-group-item-action" href="#!">Events</a>
            <a class="border-0 list-group-item list-group-item-action" href="#!">Profile</a>
            <a class="border-0 list-group-item list-group-item-action" href="#!">Status</a>
        </div>
    @else
        <div class="sidebar-heading bg-white">Employee</div>
        <div class="list-group small list-group-flush">
            <a class="border-0 list-group-item list-group-item-action" href="{{ route('employee_dashboard') }}">Dashboard</a>
            <a class="border-0 list-group-item list-group-item-action" href="#!">Profile</a>
        </div>
    @endcan
</div>