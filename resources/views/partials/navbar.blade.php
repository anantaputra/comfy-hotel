<div class="min-w-full flex justify-between container px-20 my-8">
        <div class="flex">
            <a href="/">
                <div class="flex items-center space-x-4 cursor-pointer" id="icon">
                    <img src="img/single-bed.png" alt="icon" style="width: 30px; height: 30px">
                    <span class="text-gray-500 text-2xl font-semibold">Comfy</span>
                </div>
            </a>
        </div>
        <div class="flex mt-2">
            <div class="flex space-x-14">
                <a href="#" class="font-semibold text-gray-400 hover:text-gray-700">Discover</a>
                <a href="#" class="font-semibold text-gray-400 hover:text-gray-700">Special Offer</a>
                <a href="#" class="font-semibold text-gray-400 hover:text-gray-700">About Us</a>
                @if (auth()->user())
                <div class="block h-7" id="account-login">
                    <div class="flex items-center space-x-2 cursor-pointer hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold text-gray-400">Ananta</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="w-32 h-auto bg-white absolute hidden" id="account">
                        <div class="w-full flex items-center border-b cursor-pointer px-2 space-x-2 pt-2 pb-1 hover:bg-blue-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            <span>Profil</span>
                        </div>
                        <div class="w-full flex items-center cursor-pointer px-2 space-x-2 pt-1 pb-2 hover:bg-blue-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <button type="button" class="w-24 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 -mt-2.5" id="login-btn">Login</button>
                @endif
            </div>
        </div>
</div>

{{-- hover mouse account --}}
<script>
    document.getElementById('account-login').addEventListener('mouseover', function(){
        document.getElementById('account').style.display = 'block'
    })

    document.getElementById('account-login').addEventListener('mouseout', function(){
        document.getElementById('account').style.display = 'none'
    })
</script>