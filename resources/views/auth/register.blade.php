<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="script/tailwind-config.js"></script>

    <style type="text/tailwindcss">
        .flex::before,
        .flex::after {
            display: none !important;
        }
    </style>
</head>

<body class="font-poppins">
    <!-- Desktop Only -->
    <div class="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
        <div class="fixed top-[-50px] hidden lg:block">
        <img src="images/signup-image.png"
                class="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[440px]" alt="">
        </div>
        <div class="py-24 flex laptopLg:ml-[480px] laptopXl:ml-[670px]">
            <div>
                <img src="images/moonton-white.svg" alt="">
                <div class="my-[70px]">
                    <div class="font-semibold text-[26px] mb-3">
                        Sign Up
                    </div>
                    <p class="text-base text-[#767676] leading-7">
                        Explore our new movies and get <br>
                        the better insight for your life
                    </p>
                </div>
                <form class="w-[370px]" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-col gap-6">
                        <div>
                            <label class="text-base block mb-2" for="username">Username</label>
                            <input type="text" id="username" name="username" class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-[#F20000] focus:outline-none @error('username') is-invalid @enderror" value="{{ old('name') }}" placeholder="Your Username..."/>
                        </div>
                        <div>
                            <label class="text-base block mb-2" for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-[#F20000] focus:outline-none @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Your Email Address" />
                        </div>
                        <div>
                            <label class="text-base block mb-2" for="password">Password</label>
                            <input type="password" id="password" name="password" class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-[#F20000] focus:outline-none @error('password') is-invalid @enderror" placeholder="Your Password" />
                        </div>
                    </div>
                    <div class="grid space-y-[14px] mt-[30px]">
                        <button type="submit" class="rounded-2xl bg-[#F20000] py-[13px] text-center">
                            <span class="text-base font-semibold">
                                Sign Up
                            </span>
                        </button>
                        <a href="{{ route('login') }}" class="rounded-2xl border border-white py-[13px] text-center">
                            <span class="text-base text-white">
                                Sign In to My Account
                            </span>
                        </a>
                        <!-- <button type="submit" class="rounded-2xl bg-merah py-[13px] text-center">
                            <span class="text-base font-semibold">
                                Sign Up
                            </span>
                        </button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>