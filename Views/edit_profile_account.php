<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <?php include "init/style.php"; ?>
</head>
<body class="bg-[--color1] pb-0 sm:pb-10">

<?php include "includes/header.php"; ?>

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
                               href="/manage/edit">
                                <span class="group-hover:bg-[--color5] group-hover:h-[20px] inline-block w-[8px] bg-[--color3] h-[16px] rounded-[14px] me-2 transition-all duration-300"></span>
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="2xl:basis-[66.5%] lg:basis-[80%] basis-full">
                <h2 class="text-white font-bold text-[23px]">Update Your Account</h2>
                <form action="/main/updateaccont/<?= $user['id'] ?>" method="Post" enctype="multipart/form-data">
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
                                   id="user_email" name="email" placeholder="Email..." required="" type="email" value="<?= $user['email'] ?>">
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="user_password">Password</label>
                        <div class="input relative">
                            <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="user_password" name="password" placeholder="Password..." required="" type="password" >
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="user_password2">New Password</label>
                        <div class="input relative">
                            <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="user_password2" name="new_password" placeholder="Password..." type="password" >
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="user_password3">Repeat New Password</label>
                        <div class="input relative">
                            <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                                   id="user_password3" name="repeat_new_password" placeholder="Password..." type="password" >
                        </div>
                    </div>
                    <div class="input-box mt-6">
                        <label class="text-[--color6] font-bold block" for="image">Image</label>
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

<?php include "includes/footer.php"; ?>

<?php include "includes/modals.php"; ?>

<?php include "init/script.php"; ?>
</body>
</html>