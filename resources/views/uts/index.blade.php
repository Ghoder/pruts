<!DOCTYPE html>
<html lang="en" data-theme="cyberpunk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Daisy --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('uts.components.navbar')
    <main>
        <div class="flex justify-center mt-6 mb-6">
            <h1 class="text-5xl">Identitas Kelompok</h1>
        </div>
        <div class="p-5 flex flex-wrap justify-around gap-5">
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">1</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Risky Pratama</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410126</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">2</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Ramadhan Ilham Nugroho</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410097</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">3</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Fathu Sony Zamzami</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410076</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">4</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Muhamad Khabibud Dhakhiya</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410103</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Card --}}
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body"> 
                    <h2 class="card-title">
                        <div class="badge badge-secondary">5</div>
                        Mahasiswa
                    </h2>
                    <table>
                        <tr>
                            <td>NAMA</td>
                            <td>: Muhammad Kharisudin</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 22104410094</td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td>: Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>: 4</td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- End Card --}}
        </div>
    </main>
</body>

</html>
