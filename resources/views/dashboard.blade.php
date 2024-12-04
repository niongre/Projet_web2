@extends('base')

@section('title', 'Dashboard')

@section('content')
<div class="side-menu">
    <div class="brand-name">
        <h1>Brand name</h1>
    </div>
    <ul>
        <li><i class="fa-solid fa-tachometer-alt"></i> Dashboard</li>
        <li><i class="fa-solid fa-users"></i> Users</li>
        <li><i class="fa-solid fa-graduation-cap"></i> Training</li>
        <li><i class="fa-solid fa-newspaper"></i> Blog</li>
        <li><i class="fa-solid fa-cogs"></i> Setting</li>
    </ul>
</div>
<div class="dash-container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="user">
                <a href="#" class="btn">Add new</a>
                <img src="" alt="notification_img">
                <div class="img-case">
                    <img src="" alt="user_img">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h1>2190</h1>
                    <h3>Members</h3>
                </div>
                <div class="icon-case">
                    <img src="" alt="members_img">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h1>2190</h1>
                    <h3>Trainings</h3>
                </div>
                <div class="icon-case">
                    <img src="" alt="training_img">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h1>2190</h1>
                    <h3>Blogs</h3>
                </div>
                <div class="icon-case">
                    <img src="" alt="blog_img">
                </div>
            </div>

        </div>
        <div class="content-2">
            <div class="recent-payments">
                <div class="title">
                    <h2>Recent Payments</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Name</th>
                        <th>Name</th>
                        <th>Name</th>
                    </tr>
                </table>
            </div>
            <div class="new-user"></div>
        </div>
    </div>
</div>
@endsection
