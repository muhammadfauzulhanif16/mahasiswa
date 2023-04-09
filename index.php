<?php
    require 'services.php';

    if (isset($_POST["tambah"])) {
        if (tambahMahasiswa($_POST) > 0) {
            echo
                "<script>
                    alert('User successfully registered!');
                </script>"
            ;
        } else {
            echo
                "<script>
                    alert('User registration failed!');
                </script>"
            ;
        }
    }

    $students = getData("SELECT * FROM mahasiswa");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>
<body class="fixed bg-slate-100 grid grid-cols-3 h-full w-full divide-x-2">
    <div class="p-8">
        <form class="h-full" method="post" action="">
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Nama</label>
                <input type="text" id="nama" name="nama" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama..." required>
            </div>

            <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Jenis Kelamin</label>
            <div class="flex space-x-2 mb-6">
                <div class="flex items-center">
                    <input id="male" type="radio" value="Laki-Laki" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                    <label for="male" class="ml-2 text-sm font-medium text-slate-900 dark:text-slate-300">Laki-Laki</label>
                </div>
                <div class="flex items-center">
                    <input id="female" type="radio" value="Perempuan" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                    <label for="female" class="ml-2 text-sm font-medium text-slate-900 dark:text-slate-300">Perempuan</label>
                </div>
            </div>

            <div class="mb-6">
                <label for="jurusan" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan jurusan..." required>
            </div>

            <div class="mb-6">
                <label for="umur" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Umur</label>
                <input type="number" id="umur" name="umur" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan umur..." required>
            </div>

            <button type="submit" name="tambah" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
        </form>
    </div>

    <div class="p-8 col-span-2 grid grid-cols-3 gap-4">
        <div>
            <div class="mb-6">
                <label for="cari" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Cari</label>
                <input type="search" id="cari" name="cari" class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari nama, jurusan, umur mahasiswa..." required>
            </div>

            <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Jenis Kelamin</label>
            <div class="flex space-x-2 mb-6">
                <div class="flex items-center">
                    <input id="male" type="radio" value="Laki-Laki" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                    <label for="male" class="ml-2 text-sm font-medium text-slate-900 dark:text-slate-300">Laki-Laki</label>
                </div>
                <div class="flex items-center">
                    <input id="female" type="radio" value="Perempuan" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                    <label for="female" class="ml-2 text-sm font-medium text-slate-900 dark:text-slate-300">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
                    <thead class="text-xs text-slate-700 uppercase bg-slate-50 dark:bg-slate-700 dark:text-slate-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $student) : ?>
                    <tr class="border-b dark:border-slate-700 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-600">
                        <th scope="row" class="px-6 py-4 font-medium text-slate-900 whitespace-nowrap dark:text-white"><?= $student["nama"] ?></th>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $student["jenis_kelamin"] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $student["jurusan"] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $student["umur"] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script>
        const radioButtons = document.querySelectorAll('input[name="jenis_kelamin"]');
        let selectedGender;
        for (const radioButton of radioButtons) {
            if (radioButton.checked) {
                selectedGender = radioButton.value;
                break;
            }
        }
    </script>
</body>
</html>