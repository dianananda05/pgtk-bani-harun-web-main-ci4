<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-6">Pengguna</h1>
    
    <div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-bar" placeholder="Search"></input>
        </div>
        <div class="user-profile" style="display: flex; align-items: center;">
            <img src="<?= base_url('assets/img/profil-user.png') ?>" alt="Moni Roy" style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
            <div style="margin-left: 10px;">
                <h3 style="margin: 0;">Moni Roy</h3>
                <p style="margin: 0; color: #6c757d;">Admin</p>
            </div>
            <i class="fas fa-chevron-down" style="margin-left: 10px;"></i>
        </div>
    </div>

    <div class="main-content" style="display: flex; gap: 20px; max-width: 2200px; margin: auto;">
        <!-- Left side - Filter options -->
        <div style="width: 250px; background-color: white; border-radius: 8px; padding: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div style="position: relative; width: 100%; max-width: 200px;">
                    <i class="fas fa-search search-icon" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #aaa;"></i>
                    <input type="text" placeholder="Cari nama pengguna" 
                        style="padding: 10px 10px 10px 35px; width: 100%; border: 1px solid #ddd; border-radius: 30px;">
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div style="flex-grow: 1; display: flex; gap: 20px;">
                    <button style="background-color: #0d6efd; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 250px;">+ Tambah Pengguna</button>
                </div>
            </div>
            
            <div style="margin-bottom: 20px;">
                <span style="font-weight: 600;">List</span>
                
                <div style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span style="margin-left: 8px;">Request</span>
                    </div>
                    <span class="badge">7</span> <!-- Badge di sebelah kanan -->
                </div>

                <div style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span style="margin-left: 8px;">Tersimpan</span>
                    </div>
                    <span class="badge badge-blue">78</span> <!-- Badge di sebelah kanan -->
                </div>
            </div>

            <div style="margin-top: 20px;">
                <span style="font-weight: 600;">Label:</span>
                <div style="margin-top: 10px;">
                    <label class="custom-checkbox">
                        <input type="checkbox" id="guru">
                        <span class="checkmark" style="background-color: #d1fae5;"></span>
                        Guru
                    </label>
                    <label class="custom-checkbox">
                        <input type="checkbox" id="siswa">
                        <span class="checkmark" style="background-color: #dbeafe;"></span>
                        Siswa
                    </label>
                    <label class="custom-checkbox">
                        <input type="checkbox" id="wali-murid">
                        <span class="checkmark" style="background-color: #fef3c7;"></span>
                        Wali Murid
                    </label>
                    <label class="custom-checkbox">
                        <input type="checkbox" id="others">
                        <span class="checkmark" style="background-color: #f3e8ff;"></span>
                        Others
                    </label>
                </div>
                <a href="#" style="color: #0d6efd; text-decoration: none; display: inline-block; margin-top: 10px;">+ Create New Label</a>
            </div>
        </div>

        <div style="flex: 1; background-color: white; border-radius: 8px; padding: 30px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
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

    <style>
        .custom-checkbox {
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            gap: 10px;
            cursor: pointer;
        }

        .custom-checkbox input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .custom-checkbox .checkmark {
            position: relative;
            width: 20px;
            height: 20px;
            background-color: #eee;
            border-radius: 5px;
        }

        .custom-checkbox input:checked + .checkmark {
            background-color: currentColor;
        }

        .custom-checkbox .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked + .checkmark:after {
            display: block;
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>
<?= $this->endSection() ?>
