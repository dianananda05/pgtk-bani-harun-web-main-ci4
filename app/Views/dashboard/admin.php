<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGTK Bani Harun Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #f0f4f8;
            padding: 20px;
            border-right: 1px solid #e0e0e0;
        }
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .logo-text {
            font-weight: bold;
            color: #1a73e8;
        }
        .menu-item {
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        .menu-item:hover, .menu-item.active {
            background-color: #e8f0fe;
            color: #1a73e8;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar {
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            width: 300px;
        }
        .user-profile {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stat-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 30%;
        }
        .chart {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .gallery {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .gallery-images {
            display: flex;
            justify-content: space-between;
        }
        .gallery-item {
            width: 30%;
        }
        .gallery-item img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo-placeholder.png" alt="PGTK Logo">
            <div class="logo-text">PGTK<br>BANI HARUN</div>
        </div>
        <div class="menu-item active">Dashboard</div>
        <div class="menu-item">Pengurus</div>
        <div class="menu-item">Cash Flow</div>
        <div class="menu-item">Website</div>
        <div class="menu-item">Pembatalan</div>
        <div class="menu-item">Pengaturan</div>
        <div class="menu-item">Inbox</div>
        <div class="menu-item">Settings</div>
        <div class="menu-item">Logout</div>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
            <input type="text" class="search-bar" placeholder="Search...">
            <img src="user-profile-placeholder.jpg" alt="User Profile" class="user-profile">
        </div>
        <div class="stats">
            <div class="stat-card">
                <h3>Anggota</h3>
                <p>100 Orang</p>
            </div>
            <div class="stat-card">
                <h3>Pendapatan</h3>
                <p>Rp. 20.000.000</p>
            </div>
            <div class="stat-card">
                <h3>Pengeluaran</h3>
                <p>Rp. 20.000.000</p>
            </div>
        </div>
        <div class="chart">
            <h2>Kunjungan Website</h2>
            <!-- Add your chart here -->
            <p>Chart placeholder</p>
        </div>
        <div class="gallery">
            <div class="gallery-header">
                <h2>Gallery</h2>
                <button>Lihat Lainnya</button>
            </div>
            <div class="gallery-images">
                <div class="gallery-item">
                    <img src="gallery-1-placeholder.jpg" alt="Pembelajaran KKN">
                    <p>Pembelajaran KKN</p>
                </div>
                <div class="gallery-item">
                    <img src="gallery-2-placeholder.jpg" alt="Menanam pohon">
                    <p>Menanam pohon</p>
                </div>
                <div class="gallery-item">
                    <img src="gallery-3-placeholder.jpg" alt="Pentas seni">
                    <p>Pentas seni</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>