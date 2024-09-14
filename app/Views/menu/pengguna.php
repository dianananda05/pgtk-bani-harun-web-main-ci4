<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    <!-- <div class="header">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-bar" placeholder="Search...">
        </div>
        <div class="user-profile">
            <img src="path_to_avatar.jpg" alt="User Avatar">
            <div class="profile-info">
                <h3>John Doe</h3>
                <p>Administrator</p>
            </div>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>

    <h1 class="text-2xl font-bold mb-6">Pengguna</h1>

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <input type="text" placeholder="Cari nama pengguna" class="border rounded-lg px-4 py-2 w-64">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">+ Tambah Pengguna</button>
        </div>

        <div class="mb-4">
            <span class="font-semibold">List</span>
            <span class="ml-4">Request <span class="bg-gray-200 rounded-full px-2 py-1 text-sm">7</span></span>
            <span class="ml-4 text-blue-500">Tersimpan <span class="bg-blue-100 text-blue-500 rounded-full px-2 py-1 text-sm">78</span></span>
        </div>

        <div class="mb-4">
            <span class="font-semibold">Label:</span>
            <label class="ml-4"><input type="checkbox"> Guru</label>
            <label class="ml-4"><input type="checkbox"> Siswa</label>
            <label class="ml-4"><input type="checkbox"> Wali Murid</label>
            <label class="ml-4"><input type="checkbox"> Others</label>
            <a href="#" class="text-blue-500 ml-4">+ Create New Label</a>
        </div>

        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-2">ID</th>
                    <th class="text-left py-2">Nama</th>
                    <th class="text-left py-2">Tanggal Registrasi</th>
                    <th class="text-left py-2">Label</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Dummy data - replace with database query
                $users = [
                    ['00001', 'Christine Brooks', '14 Feb 2019', 'Guru'],
                    ['00002', 'Rosie Pearson', '14 Feb 2019', 'Siswa'],
                    ['00003', 'Darrell Caldwell', '14 Feb 2019', 'Wali Murid'],
                    ['00004', 'Gilbert Johnston', '14 Feb 2019', 'Siswa'],
                    ['00005', 'Alan Cainwest', '14 Feb 2019', 'Siswa'],
                    ['00006', 'Alfred Murray', '14 Feb 2019', 'Siswa'],
                    ['00007', 'Alfred Murray', '14 Feb 2019', 'Siswa'],
                    ['00008', 'Alfred Murray', '14 Feb 2019', 'Siswa'],
                ];

                foreach ($users as $user) {
                    echo "<tr class='border-b'>";
                    echo "<td class='py-2'>{$user[0]}</td>";
                    echo "<td class='py-2'>{$user[1]}</td>";
                    echo "<td class='py-2'>{$user[2]}</td>";
                    echo "<td class='py-2'><span class='bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm'>{$user[3]}</span></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="mt-4 text-gray-600">
            Showing 1-08 of 78
            <div class="float-right">
                <button class="px-2 py-1 border rounded">&lt;</button>
                <button class="px-2 py-1 border rounded">&gt;</button>
            </div>
        </div>
    </div> -->
    <div class="main-content">
    <div class="header">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-bar" placeholder="Search...">
        </div>
        <div class="user-profile">
            <img src="<?= base_url('assets/img/profil-user.png') ?>" alt="Moni Roy">
            <div>
                <h3 style="margin: 0;">Moni Roy</h3>
                <p style="margin: 0; color: #6c757d;">Admin</p>
            </div>
            <i class="fas fa-chevron-down" style="margin-left: 10px;"></i>
        </div>
    </div>

    <div style="background-color: white; border-radius: 8px; padding: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.1); margin: 20px">
        <!-- <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <input type="text" placeholder="Cari nama pengguna" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; width: 300px;">
            <button style="background-color: #0d6efd; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">+ Tambah Pengguna</button>
        </div>

        <div style="margin-bottom: 20px;">
            <span style="font-weight: 600;">List</span>
            <span style="margin-left: 20px;">Request <span class="badge">7</span></span>
            <span style="margin-left: 20px; color: #0d6efd;">Tersimpan <span class="badge badge-blue">78</span></span>
        </div>

        <div style="margin-bottom: 20px;">
            <span style="font-weight: 600;">Label:</span>
            <label style="margin-left: 20px;"><input type="checkbox"> Guru</label>
            <label style="margin-left: 20px;"><input type="checkbox"> Siswa</label>
            <label style="margin-left: 20px;"><input type="checkbox"> Wali Murid</label>
            <label style="margin-left: 20px;"><input type="checkbox"> Others</label>
            <a href="#" style="color: #0d6efd; margin-left: 20px; text-decoration: none;">+ Create New Label</a>
        </div> -->

        <!-- <div style="background-color: white; border-radius: 8px; padding: 30px; box-shadow: 0 0 20px rgba(0,0,0,0.1); margin: 20px;"> -->

        <table style="width: 100%; border-collapse: separate; border-spacing: 0 10px;">
            <thead>
                <tr>
                    <th style="text-align: left; padding: 10px; color: #6c757d; font-weight: 600; border-bottom: 2px solid #e9ecef;">ID</th>
                    <th style="text-align: left; padding: 10px; color: #6c757d; font-weight: 600; border-bottom: 2px solid #e9ecef;">Name</th>
                    <th style="text-align: left; padding: 10px; color: #6c757d; font-weight: 600; border-bottom: 2px solid #e9ecef;">Registration Date</th>
                    <th style="text-align: left; padding: 10px; color: #6c757d; font-weight: 600; border-bottom: 2px solid #e9ecef;">Label</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = [
                    ['00001', 'Christine Brooks', '14 Feb 2019', 'Guru'],
                    ['00002', 'Rosie Pearson', '14 Feb 2019', 'Siswa'],
                    ['00003', 'Darrell Caldwell', '14 Feb 2019', 'Wali Murid'],
                    ['00004', 'Gilbert Johnston', '14 Feb 2019', 'Siswa'],
                    ['00005', 'Alan Cainwest', '14 Feb 2019', 'Siswa'],
                    ['00006', 'Alfred Murray', '14 Feb 2019', 'Siswa'],
                    ['00007', 'Alfred Murray', '14 Feb 2019', 'Siswa'],
                    ['00008', 'Alfred Murray', '14 Feb 2019', 'Siswa'],
                ];

                foreach ($users as $user) {
                    echo "<tr style='background-color: #f8f9fa; transition: all 0.3s;' onmouseover='this.style.backgroundColor=\"#e9ecef\";' onmouseout='this.style.backgroundColor=\"#f8f9fa\";'>";
                    echo "<td style='padding: 15px; border-radius: 5px 0 0 5px;'>{$user[0]}</td>";
                    echo "<td style='padding: 15px;'>{$user[1]}</td>";
                    echo "<td style='padding: 15px;'>{$user[2]}</td>";
                    $labelColor = $user[3] === 'Guru' ? '#d1fae5' : ($user[3] === 'Siswa' ? '#dbeafe' : '#fef3c7');
                    $textColor = $user[3] === 'Guru' ? '#065f46' : ($user[3] === 'Siswa' ? '#1e40af' : '#92400e');
                    echo "<td style='padding: 15px; border-radius: 0 5px 5px 0;'><span style='background-color: {$labelColor}; color: {$textColor}; padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: 600;'>{$user[3]}</span></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <div style="margin-top: 20px; color: #6c757d; display: flex; justify-content: space-between; align-items: center;">
            <span>Showing 1-08 of 78</span>
            <div>
                <button style="padding: 5px 10px; border: 1px solid #ced4da; background-color: white; cursor: pointer; border-radius: 5px; margin-right: 5px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#e9ecef';" onmouseout="this.style.backgroundColor='white';">&lt;</button>
                <button style="padding: 5px 10px; border: 1px solid #ced4da; background-color: white; cursor: pointer; border-radius: 5px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#e9ecef';" onmouseout="this.style.backgroundColor='white';">&gt;</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
