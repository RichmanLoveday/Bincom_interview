<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <script src="https://cdn.tailwindcss.com/3.3.0"></script>
        <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
        </script>
        <script defer src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    </head>

    <body>
        <header>
            <!-- Navigation bar -->
            <nav class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
                data-te-navbar-ref>
                <div class="flex w-full flex-wrap items-center justify-between px-3 md:w-[40%] mx-auto">
                    <div class="flex items-center">
                        <!-- Hamburger menu button -->
                        <button
                            class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                            type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
                            aria-controls="navbarSupportedContentY" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <!-- Hamburger menu icon -->
                            <span class="[&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <!-- Navigation links -->
                    <div class="!visible hidden grow basis-[100%] w-100 flex justify-content-center items-center lg:!flex lg:basis-auto"
                        id="navbarSupportedContentY" data-te-collapse-item>
                        <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="<?= ROOT ?>polling_unit/" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">Polling Unit Result</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="<?= ROOT ?>polling_unit/total_result" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">Summed Total</a>
                            </li>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                    href="<?= ROOT ?>polling_unit/store_result" data-te-nav-link-ref data-te-ripple-init
                                    data-te-ripple-color="light">Store Result</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>