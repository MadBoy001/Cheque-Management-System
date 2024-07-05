@extends('superuser.layouts.master')

@section('content')

<div class="main">
    <h1>Welcome</h1>
    <div class="main-container">
        <div class="dashboard-card-container">
            <div class="dashboard-card">Total Cheques: {!! $chequeCount !!}</div>
            <div class="dashboard-card">Active Cheques: {!! $activeChequeCount !!}</div>
            <div class="dashboard-card">Inactive Cheques: {!! $inactiveChequeCount !!}</div>
            <div class="dashboard-card">Expiring Cheques: {!! $expiringChequeCount !!}</div>
            <div class="dashboard-card">Expired Cheques: {!! $expiredChequeCount !!}</div>
            <div class="dashboard-card">Returned Cheques: {!! $returnedChequeCount !!}</div>
        </div>
    </div>
</div>


    
@endsection