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