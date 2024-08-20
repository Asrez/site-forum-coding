<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn Laravel | Laracasts</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="../images/favicon-32x32.webp" rel="shortcut icon" type="image/x-icon">
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

<div class="container mx-auto xl:px-14 p-4">
    <main class="w-full flex gap-10">
        <aside class="2xl:basis-[15%] lg:basis-[18.5%] lg:block hidden relative">
            <div class="sticky top-8">
                <button class="bg_gr h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative">
                    Reply
                </button>
            </div>
        </aside>
        <div class="2xl:basis-[66.5%] lg:basis-[81.5%] basis-full">
            <button class="bg-[--color5] z-[1000] w-[50px] h-[50px] flex justify-center items-center rounded-full fixed bottom-[20px] right-[10px] newReplay">
                <img alt="" src="images/reply-mobile-button.svg">
            </button>
            <header class="flex">
                <div class="w-[60px] h-[50px] relative">
                    <div class="absolute right-0 bottom-0 border-t-[3px]  border-l-[3px] border-[--color8] w-[25px] h-[30px] translate-y-[5px] opacity-50 backdrop-blur-sm mr-2"></div>
                </div>
                <div class="float-start flex justify-between items-center rounded-[14px] bg-[--color7] transition-all duration-300  w-full px-7 hover:bg-[--color8] h-[50px] relative">
                    <h4 class="tracking-normal text-[--color9] text-[14px] line-clamp-1 font-bold"><?= $post['title'] ?></h4>
                    <div class="flex gap-3">
                        <div class="flex items-center justify-center">
                            <svg class="text-card-200" height="13" viewBox="0 0 19 13" width="19">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M0-3h19v19H0z"></path>
                                    <path d="M9.5.562C5.542.562 2.161 3.025.792 6.5c1.37 3.475 4.75 5.937 8.708 5.937s7.339-2.462 8.708-5.937C16.838 3.025 13.458.562 9.5.562zm0 9.896A3.96 3.96 0 0 1 5.542 6.5 3.96 3.96 0 0 1 9.5 2.542 3.96 3.96 0 0 1 13.458 6.5 3.96 3.96 0 0 1 9.5 10.458zm0-6.333A2.372 2.372 0 0 0 7.125 6.5 2.372 2.372 0 0 0 9.5 8.875 2.372 2.372 0 0 0 11.875 6.5 2.372 2.372 0 0 0 9.5 4.125z"
                                          fill="#8EA5C2"></path>
                                </g>
                            </svg>
                            <span class="text-left text-xs leading-none text-[--color9] font-bold ml-1"><?= $post['viewcount'] ?></span>
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="relative text-card-200" height="19" style="top: -2px;" viewBox="0 0 15 10"
                                 width="15">
                                <path d="M7.5 0C3.344 0 0 2.818 0 6.286c0 1.987 1.094 3.757 2.781 4.914l.117 2.35c.022.438.338.58.704.32l2.023-1.442c.594.144 1.219.18 1.875.18 4.156 0 7.5-2.817 7.5-6.285C15 2.854 11.656 0 7.5 0z"
                                      fill="#8EA5C2"
                                      fill-rule="evenodd"></path>
                            </svg>
                            <span class="text-left text-xs leading-none text-[--color9] font-bold ml-1"><?= count($answers) ?></span>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mt-4 inline-block transition-all duration-300 bg-[--color7] rounded-[14px] py-4 px-7 w-full relative">
                <figure class="inline-flex justify-center float-start items-start w-[74px]">
                    <img alt="" class="rounded-[14px]" loading="lazy" src="../static/photos/<?= $post['image'] ?>">
                </figure>
                <div class="content w-[calc(100%-102px)] float-end h-full inline-flex flex-col align-top">
                    <div class="text-white bg-[--color2] w-full px-4 self-start mt-2 rounded-[14px] h-[60px] flex justify-start items-center text-[18px] font-bold">
                    <?= $post['title'] ?>
                    </div>

                    <p class="tracking-normal text-gray-200 pr-2.5 text-[15px] font-bold mt-3 mb-2 whitespace-pre-line">
                    <?= $post['content'] ?>
                    </p>
                </div>
            </div>
            <div class="replay">
                <?php foreach ($answers as $answer) { ?>
                <div class="replays relative before:content-[''] before:absolute before:block before:top-0 before:left-[15px] before:w-[3px] before:h-full before:bg-[--color8] pl-12">
                    <div class="replay">
                    <div class="mt-4 group has-[button[class*=replay]:hover]:border-blue-700 border border-transparent  inline-block transition-all duration-300 bg-[--color7] rounded-[14px] py-4 px-7 w-full">
                    <figure class="inline-flex justify-center float-start items-start w-[74px]">
                        <img alt="" class="rounded-[14px]" loading="lazy" src="../static/avatars/<?= $answer['image'] ?>">
                    </figure>
                    <div class="content w-[calc(100%-102px)] float-end h-full inline-flex flex-col align-top">
                        <div class="float-start flex justify-start items-center w-full gap-2">
                            <div class="flex flex-col justify-center">
                            <h2 class="tracking-normal font-bold text-[--color9] text-[12px]"><?= $answer['username'] ?></h2>
                            <h4 class="tracking-normal font-bold text-[--color9] text-[12px]"><?= $answer['date'] ?></h4>
                            </div>
                        </div>
                        <p class="tracking-normal text-gray-200 pr-2.5 text-[15px] font-bold mt-3 mb-2 whitespace-pre-line">
                            <?= $answer['answer'] ?>
                        </p>
                        
                        <div class="backup hidden"></div>
                        <div class="btn-wrapper mt-3 flex gap-2">
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <?php } ?>
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
<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/prism.js"></script>
</body>
</html>