<?php
// File: test_name.php
require_once("Validator.php");

echo "<h3>Hasil Pengujian Input Nama Mahasiswa</h3>";

// Test Case 1: Nama lengkap (valid)
try {
    $result = validateName("Septia Amanda Aulia");
    echo "PASS: Nama 'Septia Amanda Aulia' diterima.\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Septia Amanda Aulia' ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: Nama berupa angka
try {
    $result = validateName("1212");
    echo "FAIL: Nama '1212' seharusnya ditolak.\n";
} catch (Exception $e) {
    echo "PASS: Nama '1212' ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 3: Nama kosong
try {
    $result = validateName("");
    echo "FAIL: Nama kosong seharusnya ditolak.\n";
} catch (Exception $e) {
    echo "PASS: Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}
?>