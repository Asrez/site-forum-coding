<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn Laravel | Laracasts</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="./images/favicon-32x32.webp" rel="shortcut icon" type="image/x-icon">
    <link href="./node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        .bg-custom-gradient {
            background-image: radial-gradient(circle at 0% 2%, rgb(0, 117, 255), rgb(31, 64, 106) 100%);
        }

        .swal2-show {
            border-radius: 30px !important;
            border: 3px solid var(--color2);
        }

        .swal2-icon {
            margin-top: 20px;
        }

        .swal2-container .swal2-title {
            padding-top: 10px !important;
        }

        .swal2-container .swal2-popup {
            background-color: var(--color1) !important;
        }

        .swal2-container .swal2-title,
        .swal2-container .swal2-html-container {
            color: white !important;
        }

        .swal2-container .swal2-styled {
            color: white !important;
            border-radius: 14px;
            width: 100px;
            background-color: var(--color5) !important;
        }

        div:where(.swal2-icon).swal2-success .swal2-success-ring {
            border: .25em solid rgb(165 220 134) !important;
        }


    </style>
</head>
<body class="bg-[--color1] pb-0 sm:pb-10">

<?php include "includes/Main_header.php"; ?>

<div class="container mx-auto px-3 mt-4 mb-4 sm:mt-0 sm:px-10 lg:px-32">
    <main class="w-full">
        <h1 class="text-[32px] text-white font-bold text-center">Account Settings</h1>
        <h3 class="text-[--color4] text-center font-bold">Need to tweak a setting?</h3>
        <hr class="border-0 h-[1px] bg-gray-800 my-8 opacity-100" noshade>
        <div class="flex gap-10 sm:flex-nowrap flex-wrap">
            <aside class="2xl:basis-[15%] lg:basis-[20%] lg:block basis-full relative">
                <div class="sticky top-8">
                    <img alt="" class="w-[120px] h-[120px] rounded-[14px]" src="../static/avatars/<?= $user['image'] ?>">
                    <ul class="list-none mt-8 w-full left_side_ul">
                        <li class="w-full mt-2">
                            <a class="group w-full py-2 px-3 rounded-[14px] transition-all duration-300 flex justify-start items-center hover:bg-[--color8] text-white hover:text-[--color5] tracking-wide active"
                               href="/edit">
                                <span class="group-hover:bg-[--color5] group-hover:h-[20px] inline-block w-[8px] bg-[--color3] h-[16px] rounded-[14px] me-2 transition-all duration-300"></span>
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="2xl:basis-[66.5%] lg:basis-[80%] basis-full">
                <h2 class="text-white font-bold text-[23px]">Update Your Account</h2>
                <form action="/updateaccont/<?= $user['id'] ?>" method="Post" enctype="multipart/form-data">
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="name">Name</label>
                        <div class="input relative">
                            <input autofocus=""
                                   class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="name" name="name" placeholder="Name..." required="" type="text" value="<?= $user['name'] ?>">
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="user_name">Username</label>
                        <div class="input relative">
                            <input autofocus=""
                                   class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="user_name" name="username" placeholder="Username..." required="" type="text" value="<?= $user['username'] ?>">
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="user_email">Email</label>
                        <div class="input relative">
                            <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="user_email" name="email" placeholder="Email..." required="" type="text" value="<?= $user['email'] ?>">
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="user_password">Password</label>
                        <div class="input relative">
                            <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="user_password" name="password" placeholder="Password..." required="" type="password" value="<?= $user['password'] ?>">
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="image">Password</label>
                        <div class="input relative">
                            <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="image" name="image" type="file">
                        </div>
                    </div>
                    <button class="bg_gr h-[40px] w-[180px] mt-6 rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative" type="submit" name="btnupuser">
                        Update Account
                    </button>
                </form>
            </div>
        </div>
    </main>
</div>

<?php include "includes/Main_footer.php"; ?>

<?php include "includes/Modals.php"; ?>

<script src="./node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
    function ValidateEmail(event) {
        if (event.target.email.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) === null) {
            event.preventDefault();

            Swal.fire({
                title: "Validation Error",
                text: "Email validation error",
                icon: "error"
            });
        }
    }
</script>
<script src="./js/script.js"></script>
</body>
</html>