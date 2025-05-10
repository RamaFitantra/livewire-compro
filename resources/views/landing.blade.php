<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Logo Carousel Animation</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'infinite-scroll': 'infinite-scroll 25s linear infinite',
                    },
                    keyframes: {
                        'infinite-scroll': {
                            from: { transform: 'translateX(0)' },
                            to: { transform: 'translateX(-100%)' },
                        }
                    }                    
                },
            },
        };
    </script>
</head>

<body class="relative font-inter antialiased">

    <main class="relative min-h-screen flex flex-col justify-center bg-slate-900 overflow-hidden">
        <div class="w-full max-w-5xl mx-auto px-4 md:px-6 py-24">
            <div class="text-center">

                <!-- Logo Carousel animation -->
                <div
                    x-data="{}"
                    x-init="$nextTick(() => {
                        let ul = $refs.logos;
                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                    })"
                    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]"
                >
                    <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <li>
                            <img src="/images/robot1.png" alt="Facebook" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot1.png" alt="Disney" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot2.png" alt="Airbnb" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot3.png" alt="Apple" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot4.png" alt="Spark" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        <li>
                            <img src="/images/robot5.png" alt="Samsung" class="h-24 hover:scale-150 transition-transform duration-300"/>
                        </li>
                        
                    </ul>                
                </div>
                <!-- End: Logo Carousel animation -->
                
            </div>

        </div>
    </main>
    
   

</body>

</html>