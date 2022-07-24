@extends('back-end.supers.parent')

@section('super-title', 'Super Dashboard')
@section('super-location', 'Dashboard')
@section('super-index', 'Super Dashboard')


@section('super-styles')

@endsection

@section('super-aside-items')
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Users
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All</p>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('super-content')

@endsection

@section('super-scripts')

@endsection
