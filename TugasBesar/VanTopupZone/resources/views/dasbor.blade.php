@extends('admin')

@section('title', 'Home Page')

@section('content')

<h2>Dashboard Overview</h2>
<div class="cards">
    <div class="card">
        <h3>Users</h3>
        <p>120 Active Users</p>
    </div>
    <div class="card">
        <h3>Sales</h3>
        <p>$4,500 Today</p>
    </div>
    <div class="card">
        <h3>Messages</h3>
        <p>15 New Messages</p>
    </div>
</div>
@endsection