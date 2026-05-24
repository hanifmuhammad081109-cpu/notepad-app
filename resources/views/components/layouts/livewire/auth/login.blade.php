<div>
    <input type="text" placeholder="Email" class="border border-gray-300 rounded-md px-4 py-2 mb-4 w-full">
    <input type="password" placeholder="Password" class="border border-gray-300 rounded-md px-4 py-2 mb-4 w-full">
    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md w-full">Login</button>
    
    <p class="text-center text-gray-600 mt-4">
      Belum punya akun? 
      <a href="{{ route('auth.register') }}" class="text-blue-600 hover:underline">Register</a>
    </p>
</div>
