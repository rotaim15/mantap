<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tentang SIMANTAP - Satpol PP Kota Semarang</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    {{--
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" /> --}}

    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "tertiary-container": "#876600",
                      "surface-container": "#e5eeff",
                      "outline": "#6f787d",
                      "on-surface-variant": "#3f484c",
                      "tertiary": "#694f00",
                      "outline-variant": "#bec8cd",
                      "tertiary-fixed-dim": "#f7be1d",
                      "on-tertiary-container": "#ffebc4",
                      "error-container": "#ffdad6",
                      "surface-variant": "#d3e4fe",
                      "on-error-container": "#93000a",
                      "on-primary-fixed-variant": "#004d62",
                      "secondary-container": "#6cf8bb",
                      "secondary-fixed": "#6ffbbe",
                      "secondary-fixed-dim": "#4edea3",
                      "on-surface": "#0b1c30",
                      "surface-container-lowest": "#ffffff",
                      "inverse-primary": "#81d1f0",
                      "background": "#f8f9ff",
                      "surface-bright": "#f8f9ff",
                      "surface-container-highest": "#d3e4fe",
                      "on-primary": "#ffffff",
                      "primary": "#005a71",
                      "on-secondary-fixed-variant": "#005236",
                      "on-primary-container": "#d3f1ff",
                      "error": "#ba1a1a",
                      "on-tertiary": "#ffffff",
                      "primary-fixed-dim": "#81d1f0",
                      "surface-container-high": "#dce9ff",
                      "inverse-surface": "#213145",
                      "on-secondary": "#ffffff",
                      "inverse-on-surface": "#eaf1ff",
                      "on-tertiary-fixed-variant": "#5a4300",
                      "primary-container": "#0e7490",
                      "primary-fixed": "#b9eaff",
                      "surface": "#f8f9ff",
                      "on-secondary-container": "#00714d",
                      "on-tertiary-fixed": "#251a00",
                      "surface-dim": "#cbdbf5",
                      "tertiary-fixed": "#ffdf9a",
                      "surface-container-low": "#eff4ff",
                      "on-secondary-fixed": "#002113",
                      "on-error": "#ffffff",
                      "on-primary-fixed": "#001f29",
                      "surface-tint": "#006781",
                      "secondary": "#006c49",
                      "on-background": "#0b1c30"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "margin-desktop": "48px",
                      "base": "8px",
                      "xl": "64px",
                      "sm": "12px",
                      "lg": "40px",
                      "xs": "4px",
                      "gutter": "24px",
                      "margin-mobile": "16px",
                      "md": "24px"
              },
              "fontFamily": {
                      "headline-lg-mobile": ["Plus Jakarta Sans"],
                      "label-md": ["Plus Jakarta Sans"],
                      "headline-lg": ["Plus Jakarta Sans"],
                      "display": ["Plus Jakarta Sans"],
                      "title-lg": ["Plus Jakarta Sans"],
                      "body-md": ["Plus Jakarta Sans"],
                      "body-lg": ["Plus Jakarta Sans"],
                      "headline-md": ["Plus Jakarta Sans"]
              },
              "fontSize": {
                      "headline-lg-mobile": ["24px", {"lineHeight": "1.25", "fontWeight": "700"}],
                      "label-md": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "1.25", "fontWeight": "700"}],
                      "display": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "title-lg": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                      "body-md": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "body-lg": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}]
              }
            },
          },
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .card-shadow {
            box-shadow: 0px 2px 4px rgba(14, 116, 144, 0.05);
        }

        .card-shadow:hover {
            box-shadow: 0px 10px 15px rgba(14, 116, 144, 0.1);
        }

        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.8);
        }
    </style>
    @yield('styles')
</head>

<body class="bg-background text-on-surface flex min-h-screen">
    <!-- Main Canvas -->
    <main class="flex-1 flex flex-col min-h-screen">
        <!-- TopNavBar -->
        <header class="bg-surface dark:bg-surface-dim shadow-sm docked full-width top-0 sticky z-30">
            <div class="flex justify-between items-center w-full px-margin-desktop py-4 max-w-screen-2xl mx-auto">
                <div class="flex items-center gap-8">
                    <span
                        class="text-title-lg font-title-lg font-bold text-primary dark:text-primary-fixed-dim">Simantap</span>
                    <nav class="hidden md:flex items-center gap-6">
                        {{-- Link Index --}}
                        <a href="{{ route('home') }}"
                            class="transition-colors pb-1 {{ Route::is('home') ? 'text-primary dark:text-primary-fixed-dim font-bold border-b-2 border-primary dark:border-primary-fixed-dim' : 'text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim' }}">
                            Index
                        </a>

                        {{-- Link About --}}
                        <a href="{{ route('about') }}"
                            class="transition-colors pb-1 {{ Route::is('about') ? 'text-primary dark:text-primary-fixed-dim font-bold border-b-2 border-primary dark:border-primary-fixed-dim' : 'text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim' }}">
                            About
                        </a>
                    </nav>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}"
                        class="inline-flex p-2 hover:bg-surface-container rounded-lg transition-colors active:scale-95">
                        <span class="material-symbols-outlined text-on-surface-variant">login</span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <div class="flex-1 px-margin-desktop py-md max-w-screen-2xl mx-auto w-full">
            @yield('content')
        </div>
        <!-- Footer -->
        <footer
            class="w-full mt-auto bg-surface-container-highest dark:bg-surface-container-high border-t border-outline-variant dark:border-outline">
            <div
                class="flex flex-col md:flex-row justify-between items-center px-margin-desktop py-lg w-full max-w-screen-2xl mx-auto">
                <div class="flex flex-col gap-1 mb-4 md:mb-0">
                    <span class="font-title-lg text-title-lg text-primary dark:text-primary-fixed-dim">SIMANTAP</span>
                    <p class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant">© @php echo
                        date('Y'); @endphp Satpol
                        PP Kota Semarang. All Rights Reserved.</p>
                </div>
                <div class="flex gap-6">
                    <a class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant hover:text-primary hover:underline transition-all"
                        href="#">Privacy Policy</a>
                    <a class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant hover:text-primary hover:underline transition-all"
                        href="#">Terms of Service</a>
                    <a class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant hover:text-primary hover:underline transition-all"
                        href="#">Contact Support</a>
                </div>
            </div>
        </footer>
    </main>
    @stack('scripts')
</body>

</html>
