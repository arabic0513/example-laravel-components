<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.css" rel="stylesheet">
    <title>Example App</title>
    @bukStyles(true)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <style>
        .select2-selection__rendered {
            line-height: 35px !important;
        }
        .select2-container .select2-selection--single {
            height: 40px !important;
        }
        .select2-selection__arrow {
            height: 38px !important;
        }
    </style>
</head>
<body>
@bukScripts(true)
    <div class="content">
        <section class="bg-blueGray-50">
            <a href="/" type="button" class="hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Back
            </a>
            <div class="w-full h-full flex items-center justify-center" style="height: 86vh;">
                <div class="bg-white w-11/12 mx-auto rounded shadow-lg z-50 overflow-y-auto" style="background-color: #0b2e13; max-width: 40%;max-height: 80%;">
                    <div style="height: 25em;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;">
                        <div class="block text-center">
                            <div class="py-3 px-6 border-b border-gray-300" style="font-size: 2em;">
                                Система электронных заявок
                            </div>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">Вход с помощью ЭЦП</h5>
                            </div>
                            <form name="eri_form" action="#" id="eri_form" method="post">
                                @csrf
                                <div class="inline-block p-2" style="width: 80%;">
                                    <x-smarts_eimzo_login></x-smarts_eimzo_login>
                                </div>
                                <div class="inline-block">
                                    <x-smarts_eimzo_login_update_button></x-smarts_eimzo_login_update_button>
                                </div>
                                <div style="margin-top: 3em;">
                                    <x-smarts_eimzo_login_sign_button></x-smarts_eimzo_login_sign_button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
