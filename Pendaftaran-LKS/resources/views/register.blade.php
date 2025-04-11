<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrasi Pelajar LKS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-200 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md animate-fadeIn">
    <h2 class="text-2xl font-bold text-center text-purple-700 mb-6">Registrasi Pelajar LKS</h2>

    <form action="{{ route('register.student') }}" method="POST">
      @csrf

      <div class="mb-4">
        <label for="nisn" class="block font-semibold mb-1">NISN</label>
        <input type="text" name="nisn" id="nisn" required
          class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" />
      </div>

      <div class="mb-4">
        <label for="nama" class="block font-semibold mb-1">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" required
          class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" />
      </div>

      <div class="mb-4">
        <label for="sekolah" class="block font-semibold mb-1">Asal Sekolah</label>
        <input type="text" name="sekolah" id="sekolah" required
          class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" />
      </div>

      <div class="mb-4">
        <label for="umur" class="block font-semibold mb-1">Umur</label>
        <input type="number" name="umur" id="umur" required
          class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" />
      </div>

      <div class="mb-4">
        <label for="lomba" class="block font-semibold mb-1">Lomba yang Diikuti</label>
        <input type="text" name="lomba" id="lomba" required
          class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" />
      </div>

      <button type="submit"
        class="w-full bg-purple-600 text-white py-2 rounded-xl hover:bg-purple-700 transition duration-300">
        Daftar
      </button>

      <p class="text-center mt-4 text-sm text-gray-500">
        Sudah punya akun? <a href="{{ route('login') }}" class="text-purple-600 font-medium">Login di sini</a>
      </p>
    </form>
  </div>

  <style>
    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(10px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeIn {
      animation: fadeIn 0.6s ease-in-out;
    }
  </style>
</body>
</html>
