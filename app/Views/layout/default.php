<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= session('layout_title') ?? 'PGTK Bani Harun Dashboard'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* CSS untuk sidebar dan main-content */
        body {
            display: flex;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            overflow-x: hidden;
        }
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-right: 1px solid #e0e0e0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            transition: transform 0.3s ease;
            position: fixed; /* Menempel di sisi kiri */
            top: 0; /* Menempel di atas */
            bottom: 0; /* Menempel di bawah */
            left: 0; /* Menempel di kiri */
            z-index: 1001; /* Memastikan sidebar selalu di atas */
        }
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 40px;
            margin-right: 10px;
        }
        .logo-text {
            font-weight: bold;
            color: #1a73e8;
            margin-right: 10px; 
        }
        .logo i {
            margin-left: 10px;
        }
        .menu-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            color: #202224;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .menu-item:hover {
            background-color: #e8f0fe;
            color: #1a73e8;
        }
        .menu-item i {
            margin-right: 10px;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            margin-top: 60px; 
            transition: margin-left 0.3s ease;
            margin-left: 290px; /* Menyisakan ruang untuk sidebar */
            position: relative; 
        }
        .header {
            position: fixed; /* Membuat header tetap di tempat saat di-scroll */
            top: 0; /* Menempel di atas */
            left: 290px; /* Menempel di kiri */
            right: 0; /* Menempel di kanan */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-bottom: 1px solid #e0e0e0;
            z-index: 1000; 
            transition: left 0.3s ease; /* Transisi untuk pergerakan header */
        }
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            margin-left: 10px; 
        }
        .search-bar {
            padding: 10px 10px 10px 40px; /* Padding kiri lebih besar untuk memberi ruang bagi ikon */
            width: 388px;
            border-radius: 19px;
            border: 0.6px solid #D5D5D5;
            background: #F5F6FA;
            margin-left: 10px;
        }
        .search-icon {
            position: absolute;
            left: 25px; /* Jarak dari sisi kiri input */
            font-size: 16px;
            color: #aaa;
        }
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #fff; 
            border-radius: 8px;
            padding: 10px;
            position: relative;
        }
        .user-profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .user-profile i {
            margin-left: auto;
            color: #888;
            font-size: 16px;
            cursor: pointer;
            background-color: #f0f0f0; /* Light background color for the circle */
            padding: 10px; /* Padding to make the icon look centered in the circle */
            border-radius: 50%; /* Makes the icon container circular */
            border: 1px solid #ddd; /* Optional: Add a slight border to the circle */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            font-size: 14px;
        }
        .profile-info h3 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
            color: #202224;
        }
        .profile-info p {
            margin: 0;
            color: #aaa;
            font-size: 12px;
        }
        .stats {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .stat-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            text-align: center;
        }
        .stat-card h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #666;
        }
        .stat-card p {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }
        .chart, .transaction-table {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .transaction-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .transaction-table th, .transaction-table td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        .sidebar.hidden {
            transform: translateX(-290px); /* Menggeser sidebar keluar layar */
        }
        .main-content.expanded {
            margin-left: 0; /* Konten meluas saat sidebar disembunyikan */
        }
        .menu-item a {
            color: inherit; /* Menggunakan warna teks yang sama dengan elemen lainnya */
            text-decoration: none; /* Menghilangkan garis bawah pada tautan */
        }
        .menu-item a:hover {
            color: inherit; /* Menghindari perubahan warna saat hover */
            text-decoration: underline; /* Menambahkan garis bawah saat hover, opsional */
        }
        .dropdown-content {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            min-width: 150px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
        .dropdown-content a {
            color: #202224;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .menu-item:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <?= $this->include('layout/menu') ?> <!-- Panggil menu -->

    <!-- Main Content -->
    <div class="main-content <?= session('sidebar_hidden') ? 'expanded' : ''; ?>">
        <?= $this->renderSection('content'); ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var sidebar = document.getElementById("sidebar");
            var mainContent = document.querySelector(".main-content");
            var header = document.querySelector(".header");
            var toggleButton = document.getElementById("toggle-sidebar");

            function toggleSidebar() {
                sidebar.classList.toggle("hidden");
                mainContent.classList.toggle("expanded");
                if (sidebar.classList.contains("hidden")) {
                    header.style.left = "0";
                    mainContent.style.marginLeft = "0";
                } else {
                    header.style.left = "290px";
                    mainContent.style.marginLeft = "290px";
                }
            }

            if (toggleButton) {
                toggleButton.addEventListener("click", toggleSidebar);
            }

            // Check initial state
            if (sidebar.classList.contains("hidden")) {
                header.style.left = "0";
                mainContent.style.marginLeft = "0";
            }
        });
    </script>

</body>
</html>