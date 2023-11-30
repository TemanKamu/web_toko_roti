<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Web home</title>
</head>

<body>
    <section class="w-full min-h-screen">
        <!-- component -->
        <div class=" min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="w-[30rem] relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-300 to-orange-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <form class="relative h-[30rem] flex flex-col justify-center items-center px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20" onsubmit="handleSubmit(event)">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Login With your account</h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600" placeholder="Email address" required />
                                    <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                                    <span class="text-sm text-red-500" id="errorEmail" style="display: none;">Email atau password salah!</span>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600" placeholder="Password" required />
                                    <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                                    <span class="text-sm text-red-500" id="errorPassword" style="display: none;">Email atau password salah!</span>
                                </div>
                                <div class="relative">
                                    <button type="submit" class="bg-orange-400 text-white rounded-md px-2 py-1">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        function handleSubmit(event) {
            event.preventDefault();
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');
            var errEmail = document.getElementById('errorEmail');
            var errPassword = document.getElementById('errorPassword');

            var email = "lutf8363@gmail.com";
            var password = "agisna06";

            if (emailInput.value !== email || passwordInput.value !== password) {
                errEmail.style.display = "block";
                errPassword.style.display = "block";
                console.log(false);
            } else {
                errEmail.style.display = "none";
                errPassword.style.display = "none";
                localStorage.setItem('userEmail', emailInput.value);
                localStorage.setItem('userPassword', passwordInput.value);
                window.location.href = "src/index.php";
            }
        }
    </script>

</body>

</html>