<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<style>
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }
    .stats {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
    }
    .stat-card {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        width: 30%;
        text-align: center;
        position: relative;
    }
    .stat-card img {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
        position: absolute;
        top: 10px;
        right: 10px;
    }
    .stat-card h5 {
        font-size: 18px;
        color: #4a4a4a;
        margin: 10px 0;
        font-weight: normal;
        text-align: left;
    }
    .stat-card p {
        font-size: 24px;
        font-weight: bold;
        color: #1a1a1a;
        margin-top: 10px;
        text-align: left;
    }
    .stat-card p:nth-child(3) {
        color: #007bff; /* Pendapatan */
    }
    .stat-card p:nth-child(4) {
        color: #ff4757; /* Pengeluaran */
    }
    .stat-card a {
        color: #20c997;
        font-size: 14px;
        position: absolute;
        bottom: 15px;
        right: 20px;
    }
    .italic-text {
        font-style: italic;
    }
</style>

<div class="header">
    <div class="search-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" class="search-bar" placeholder="Search">
    </div>
    <div class="user-profile"></div>
</div>

<div class="title">
    <h1>Dashboard</h1>
</div>

<div class="stats">
    <div class="stat-card">
        <h5>Anggota</h5>
        <img src="<?= base_url('assets/img/Icon.png') ?>" alt="Icon Anggota">
        <p style="color: black;">100 Orang</p>
        <a href="#" class="italic-text">lihat detail</a>
    </div>
    <div class="stat-card">
        <h5>Pendapatan</h5>
        <img src="<?= base_url('assets/img/Circle 2.png') ?>" alt="Pendapatan">
        <p>Rp. 20.000.000</p>
        <a href="#" class="italic-text">lihat detail</a>
    </div>
    <div class="stat-card">
        <h5>Pengeluaran</h5>
        <img src="<?= base_url('assets/img/Circle 1.png') ?>" alt="Pengeluaran">
        <p style="color: red;">Rp. 15.000.000</p>
        <a href="#" class="italic-text">lihat detail</a>
    </div>
</div>

<div class="chart">
    <div class="chart-header" style="display: flex; justify-content: space-between; align-items: center;">
        <h2>Kunjungan Website</h2>
        <div>
            <select class="form-select text-secondary border-light-subtle">
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>
    </div>
    <div class="chart-container">
        <canvas id="websiteVisitsChart"></canvas>
    </div>
</div>

<div class="transaction-table">
    <h2>Transaksi Terakhir</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Biaya</th>
                <th>Ket.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <th>Mainan Anak</th>
                <th>2</th>
                <th>Rp. 200.000</th>
                <th style="color: red;">Pengeluaran</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Kursi</th>
                <th>2</th>
                <th>Rp. 500.000</th>
                <th style="color: red;">Pengeluaran</th>
            </tr>
        </tbody>
    </table>
</div>

<script>
    const ctx = document.getElementById('websiteVisitsChart').getContext('2d');

    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(37, 99, 235, 0.2)');
    gradient.addColorStop(1, 'rgba(37, 99, 235, 0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['5k', '10k', '15k', '20k', '25k', '30k', '35k', '40k', '45k', '50k', '55k', '60k'],
            datasets: [{
                label: 'Kunjungan',
                data: [40, 20, 60, 40, 100, 55, 72, 60, 85, 90, 75, 70],
                borderColor: 'rgb(37, 99, 235)',
                backgroundColor: gradient,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: 'rgb(37, 99, 235)',
                pointBorderColor: 'rgb(37, 99, 235)',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(37, 99, 235)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 10
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        font: {
                            size: 10
                        },
                        stepSize: 20, // Mengatur jarak antara nilai pada sumbu Y
                        callback: function(value) {
                        return value + '%'; // Menampilkan angka sebagai persentase
                    }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    titleFont: {
                        size: 12,
                        weight: 'bold'
                    },
                    bodyFont: {
                        size: 12
                    },
                    padding: 8,
                    displayColors: false
                }
            },
            interaction: {
                mode: 'nearest',
                axis: 'x',
                intersect: false
            }
        }
    });
</script>
<?= $this->endSection() ?>