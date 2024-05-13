<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="flex">
        <div class="w-[40%] relative h-screen">
            <img src="{{ Vite::asset('resources/assets/regis.svg') }}" alt="" class="bg-cover" width="100%">
        </div>
        <div class=" m-[50px] font-inter bg-white">
            <div class="p-10">
                <h1 class="font-bold text-3xl mb-[40px]" >Logo Here</h1>
                <h1 class="font-bold text-3xl">Daftarkan dirimu sekarang!</h1>
                <p class="text-xl mt-2">Bergabung dengan kami dan dapatkan pekerjaan yang kamu inginkan</p>

                <div class="mt-5">
                    <form action="">
                        <div>
                            <label for="" class="text-lg font-semibold">Alamat Email</label>
                            <div>
                                <input type="text" placeholder="example@gmail.com" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            </div>
                        </div>
                        <div class="mt-[30px]">
                            <label for="" class="text-lg font-semibold">Password</label>
                            <div>
                                <input type="password" placeholder="Minimal 6 karakter" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            </div>
                        </div>
                        <div class="mt-[30px]">
                            <label for="" class="text-lg font-semibold">Konfirmasi Password</label>
                            <div>
                                <input type="password" placeholder="Konfirmasi Password Anda" class="py-4 px-5 w-full rounded-md mt-3 text-black border-2 ring-2 ring-gray-200 focus:border-blue-500 outline-none focus:outline-none focus:ring-10" >
                            </div>
                        </div>
                    </form>
                    <button class="mt-10 py-4 w-full rounded-3xl text-white font-semibold" style="background: #003974" type="submit">Daftar</button>
                    <p class="text-sm text-center mt-2">Sudah punya akun? <a href="/login" style="color: #003974">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

</html>