@extends('layouts.main')
@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="../vendor/chart.js/Chart.min.css">
    <style>
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .dashboard-welcome {
            font-size: 24px;
            font-weight: bold;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .dashboard-stat-item {
            flex: 1;
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-right: 10px;
        }

        .dashboard-stat-label {
            font-size: 18px;
            font-weight: bold;
        }

        .dashboard-stat-value {
            font-size: 24px;
            margin-top: 10px;
        }

        .dashboard-recent-activity {
            margin-top: 20px;
        }

        .activity-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
        }

        .activity-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .activity-time {
            color: #888;
            font-size: 14px;
        }

        .center-items {
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
@endsection
@section('body')
    <div class="main-content">
        <div class="title">
            <div class="dashboard-header">
                <div class="dashboard-welcome">
                    Selamat datang, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>

        <!-- Statistik Dashboard -->
        <div class="content-wrapper">
            <div class="row same-height center-items">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kelas Aktif</h4>
                        </div>
                        <div class="card-body">
                            <h5>0</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tugas Belum Selesai</h4>
                        </div>
                        <div class="card-body">
                            <h5>0</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ujian Mendatang</h4>
                        </div>
                        <div class="card-body">
                            <h5>0</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="text-center">
                <div class="h3 mb-3">Anda belum berlangganan kelas apapun. Silakan kunjungi halaman Program Saya untuk
                    membeli
                    paket bimbel yang Anda inginkan.</div>
                <div><a class="btn btn-primary text-center mb-5" href="{{ route('daftar-program') }}"><p class="h5">Program Saya</p></a></div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header-statistics">
                            <h5>Pemberitahuan Terkini</h5>
                            <p>Zenify Academy</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table small-font table-striped table-hover table-sm">
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Kelas baru akan segera dimulai. Periksa jadwal di dashboard untuk memastikan
                                                Anda tidak melewatkan sesi pembelajaran penting.</td>
                                            <td>1 Hari yang Lalu</td>
                                            <td><i class="fa fa-caret-up text-success"></i></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mohon diperhatikan bahwa tagihan bulan ini sudah tersedia di dashboard.
                                                Silakan lakukan pembayaran tepat waktu untuk kelancaran pembelajaran.</td>
                                            <td>3 Hari yang Lalu</td>
                                            <td><i class="fa fa-caret-up text-success"></i></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Kami telah menambahkan materi baru ke dalam modul pembelajaran Anda. Cek
                                                dashboard untuk akses langsung ke materi-materi terkini.</td>
                                            <td>4 Hari yang Lalu</td>
                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Harap maklum bahwa kami akan melakukan pemeliharaan sistem pada tanggal
                                                [tanggal]. Dashboard mungkin tidak dapat diakses selama beberapa jam. Terima
                                                kasih atas pengertian Anda.</td>
                                            <td>7 Hari yang Lalu</td>
                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Aktivitas Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <ul class="timeline-xs">
                                <li class="timeline-item success">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            2 minutes ago
                                        </div>
                                        <p>
                                            <a class="text-info" href="">
                                                {{ Auth::user()->name }}
                                            </a>
                                            has completed register account.
                                        </p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            12:30
                                        </div>
                                        <p>
                                            Staff Meeting
                                        </p>
                                    </div>
                                </li>
                                <li class="timeline-item danger">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            11:11
                                        </div>
                                        <p>
                                            Completed new layout.
                                        </p>
                                    </div>
                                </li>
                                <li class="timeline-item info">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            Thu, 12 Jun
                                        </div>
                                        <p>
                                            Contacted
                                            <a class="text-info" href="">
                                                Microsoft
                                            </a>
                                            for license upgrades.
                                        </p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            Tue, 10 Jun
                                        </div>
                                        <p>
                                            Started development new site
                                        </p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            Sun, 11 Apr
                                        </div>
                                        <p>
                                            Lunch with
                                            <a class="text-info" href="">
                                                Mba Inem
                                            </a>
                                            .
                                        </p>
                                    </div>
                                </li>
                                <li class="timeline-item warning">
                                    <div class="margin-left-15">
                                        <div class="text-muted text-small">
                                            Wed, 25 Mar
                                        </div>
                                        <p>
                                            server Maintenance.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-4">
                    <div class="card">
                        <!-- <div class="float-label">
                                                                                                                                <h6>Sales</h6>
                                                                                                                                <h4>$1500</h4>
                                                                                                                            </div> -->
                        <div class="card-body">
                            <div class="label">
                                <h6>Statistik Nilai</h6>
                            </div>
                            <div id="apex-chart"></div>

                        </div>

                    </div>
                    <br>
                    <div class="card">

                        <span></span>

                        <div class="card-body">
                            <div class="label">
                                <h6>Progress Pembelajaran</h6>
                            </div>
                            <div id="apex-chart-bar"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Chat</h4>
                        </div>
                        <div class="card-body small-padding">
                            <div class="panel-discussion ps-chat">
                                <ol class="discussion">
                                    <li class="messages-date">
                                        Sunday, Feb 9, 12:58
                                    </li>
                                    <li class="self">
                                        <div class="message">
                                            <div class="message-name">
                                                Mas Bambang
                                            </div>
                                            <div class="message-text">
                                                Hi, Mba Inem
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                How are you?
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="other">
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                Hi, i am good
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar2.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="self">
                                        <div class="message">
                                            <div class="message-name">
                                                Mas Bambang
                                            </div>
                                            <div class="message-text">
                                                Glad to see you ;)
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="messages-date">
                                        Sunday, Feb 9, 13:10
                                    </li>
                                    <li class="other">
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                What do you think about my new Dashboard?
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar2.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="messages-date">
                                        Sunday, Feb 9, 15:28
                                    </li>
                                    <li class="other">
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                Alo...
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                Are you there?
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar2.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="self">
                                        <div class="message">
                                            <div class="message-name">
                                                Mas Bambang
                                            </div>
                                            <div class="message-text">
                                                Hi, i am here
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                Your Dashboard is great
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="messages-date">
                                        Friday, Feb 7, 23:39
                                    </li>
                                    <li class="other">
                                        <div class="message">
                                            <div class="message-name">
                                                Mba Inem
                                            </div>
                                            <div class="message-text">
                                                How does the binding and digesting work in ReactJS?, Bang?
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar2.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="self">
                                        <div class="message">
                                            <div class="message-name">
                                                Mas Bambang
                                            </div>
                                            <div class="message-text">
                                                oh that's your question?
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="message-name">
                                                Mas Bambang
                                            </div>
                                            <div class="message-text">
                                                little reduntant, no?
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div class="message-name">
                                                Mas Bambang
                                            </div>
                                            <div class="message-text">
                                                literally we get the question daily
                                            </div>
                                            <div class="message-avatar">
                                                <img src="../assets/images/avatar1.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="message-bar">
                                <div class="message-inner">
                                    <a class="link icon-only" href="#"><i class="fa fa-camera"></i></a>
                                    <div class="message-area">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <a class="link" href="#">
                                        Send
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/pages/index.min.js"></script>
@endsection
@section('runjs')
@endsection
