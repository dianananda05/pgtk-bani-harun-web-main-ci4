<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<div class="header">
    <div class="search-container">
        <i class="fas fa-search search-icon"></i>
        <input type="text" class="search-bar" placeholder="Search">
    </div>
    <div class="user-profile"></div>
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
        <p>Rp. 15.000.000</p>
    </div>
</div>

<div class="chart">
    <h2>Kunjungan Website</h2>
    <p>Chart placeholder (You can replace this with a real chart using a library like Chart.js)</p>
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
                <th>Pengeluaran</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Kursi</th>
                <th>2</th>
                <th>Rp. 500.000</th>
                <th>Pengeluaran</th>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
