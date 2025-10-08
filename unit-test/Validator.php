<?php

function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

//Fungsi baru: validasi nama
function validateName($name) {
    if ($name === "") {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }

    // cek apakah hanya huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/" , $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    return true;
}