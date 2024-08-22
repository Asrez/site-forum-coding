<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="../static/<?= $logo['value_setting'] ?>" rel="shortcut icon" type="image/x-icon">
    <link href="../node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
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

<div class="container mx-auto px-3 mt-4 sm:mt-0 sm:px-10 lg:px-56">
    <main class="w-full">
        <div class="user-information flex w-full xl:flex-row xl:gap-0 gap-7 flex-col">
            <div class="xl:basis-1/2 basis-full h-[220px] flex xl:flex-col flex-row justify-between xl:justify-center gap-2">
                <div class="user flex justify-start items-center gap-5">
                    <img alt="avatar" class="w-[108px] h-[108px] rounded-[24px] shadow-md shadow-black"
                         src="../static/avatars/<?= $user['image'] ?>">
                    <div class="inf flex flex-col justify-start h-full gap-1">
                        <h2 class="text-white font-bold text-[20px]"><?= $user['name'] ?></h2>
                        <h2 class="text-white font-bold text-[14px]"><?= $user['username'] ?></h2>
                    </div>
                </div>
                <div class="social w-[108px] flex justify-center items-center pt-2">
                    <a class="h-[40px] px-4 bg-[--color2] flex justify-center items-center hover:bg-[--color3] transition-all duration-300 rounded-[14px] text-[--color4] font-bold"
                       href="/edit">
                        Edit
                    </a>
                </div>
                <div class="social w-[108px] flex justify-center items-center pt-2">
                    <?php if ($user['state'] === 1) { ?>
                        <a href="/panel" class="h-[40px] w-[100px] rounded-[14px] hidden md:flex justify-center items-center bg-[--color2] font-bold tracking-wide hover:bg-[--color3] transition-all duration-300 text-[--color4] text-[14px]">
                        Manage Site
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="xl:basis-1/2 basis-full h-[220px] flex gap-4 justify-end items-center">
                <div class="xl:w-[146px] w-full group h-full bg-[--color7] rounded-[14px] p-2 py-4 flex flex-col justify-between items-center pt-6 hover:border-blue-800 border border-transparent transition-all duration-300 cursor-pointer">
                    <img alt=""
                         class="grayscale-[60%] h-[100px] object-cover overflow-hidden group-hover:grayscale-0 transition-all duration-300"
                         src="./images/profile/xp-level.svg">
                    <h2 class="mt-3 text-white text-[25px] font-bold group-hover:text-[--color5] transition-all duration-300">
                        <?= $count_activity ?></h2>
                    <div class="font-bold text-center text-white group-hover:text-[--color5] transition-all duration-300">
                        Questions <br>
                    </div>
                </div>
                <div class="xl:w-[146px] w-full group h-full bg-[--color7] rounded-[14px] p-2 py-4 flex flex-col justify-between items-center pt-6 hover:border-blue-800 border border-transparent transition-all duration-300 cursor-pointer">
                    <img alt=""
                         class="grayscale-[60%] overflow-hidden h-[100px] object-cover group-hover:grayscale-0 transition-all duration-300"
                         src="./images/profile/xp-lesson.svg">
                    <h2 class="mt-3 text-white text-[25px] font-bold group-hover:text-[--color5] transition-all duration-300">
                        <?= $count_reply ?></h2>
                    <div class="font-bold text-center text-white group-hover:text-[--color5] transition-all duration-300">
                        Reply <br>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="activity mt-16">
            <h1 class="w-[150px] text-center font-bold text-white mx-auto text-[21px] after:content-[''] relative after:absolute after:inline-block after:bottom-0 after:right-1/2 after:translate-x-1/2 after:w-full after:h-[5px] after:rounded-full after:bg-[--color5] pb-2">
                Question
            </h1>
                <?php foreach ($questions as $question) { ?>
                    <div class="w-full max-w-[800px] mx-auto flex justify-between mt-8">
                        <div class="basis-[12%] flex gap-1">
                            <div class="month flex-1 bg-[--color8] flex justify-center items-center rounded-[14px] h-[30px] font-bold text-[12px] text-[--color4]" title="view count">
                               <?= $question['viewcount'] ?>
                            </div>
                        </div>
                        <a href="/show_post/<?= $question['id'] ?>">
                            <div class="basis-[86%] flex flex-col gap-5">
                                <div class="w-full bg-[--color8] rounded-[14px] py-4 px-8  pb-8 relative">
                                    <img src="../static/photos/<?= $question['image'] ?>">
                                    <h2 class="font-bold text-white"><?= $question['title'] ?></h2>
                                    <p class="mt-4 text-white font-bold text-[14px] whitespace-pre-line"><br><?= $question['content'] ?></p>
                                    <h3 class="mt-4 text-[10px]" style=" color :<?php if ($question['state'] === 0) echo 'red'; else echo 'green' ?>">
                                        <?php if ($question['state'] === 0) echo "not confirmed yet"; else echo "confirmed"; ?>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
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