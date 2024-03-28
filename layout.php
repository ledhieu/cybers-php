<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="%sveltekit.assets%/favicon.png" />
		<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1" />
        <script src="https://cdn.tailwindcss.com"></script>
        
		<link rel="stylesheet" type="text/css" href="https://unpkg.com/augmented-ui@2/augmented-ui.min.css">
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script type="importmap">
			{
			    "imports": {
                    "three": "https://unpkg.com/three@v0.162.0/build/three.module.js",
                    "three/addons/": "https://unpkg.com/three@v0.162.0/examples/jsm/"
			    }
			}
		</script>	
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        'text': {
                            'xxxs': '.625rem'
                        },
                        screens: {
                            '2xl': {'min': '1536px'},
                            // => @media (min-width: 1536px) { ... }
                        },
                        gridColumn: {
                            'span-13': 'span 13 / span 13',
                            'span-14': 'span 13 / span 13',
                            'span-15': 'span 13 / span 13',
                            'span-16': 'span 13 / span 13',
                            'span-17': 'span 13 / span 13',
                            'span-18': 'span 13 / span 13',
                            'span-19': 'span 13 / span 13',
                            'span-20': 'span 13 / span 13',
                            'span-21': 'span 21 / span 21',
                        },
                        gridTemplateColumns: {
                            '21': 'repeat(21, minmax(0, 1fr))',
                            '24': 'repeat(24, minmax(0, 1fr))'
                        }
                    },
                    
                }
            }
        </script>
        <link rel="stylesheet" href="app.css">
	</head>
	<body data-sveltekit-preload-data="hover">
		<div style="display: contents">
            <div id="layout-container">
                <div class="fixed top-0 left-0 z-[10000]">
                    <!-- <Navbar solid={$page.route.id != '/'}/> -->
                    <?php include('components/navbar.php') ?>
                </div>
                <?php
                    include('router.php');
                ?>
                <!-- <Footer></Footer> -->
                <?php 
                    include('components/footer.php');
                ?>
            </div>
        </div>
	</body>

    <script>
        let scrollbarWidth = 10;

        function getScrollbarWidth() {
            // Creating invisible container
            const outer = document.createElement('div');
            outer.style.visibility = 'hidden';
            outer.style.overflow = 'scroll'; // forcing scrollbar to appear
            outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
            document.body.appendChild(outer);

            // Creating inner element and placing it in the container
            const inner = document.createElement('div');
            outer.appendChild(inner);

            // Calculating difference between container's full width and the child width
            const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);

            // Removing temporary elements from the DOM
            outer.parentNode.removeChild(outer);

            return scrollbarWidth;
        }
        scrollbarWidth = getScrollbarWidth()
        const root = document.querySelector(':root');
        root.style.setProperty('--scrollbar-width', scrollbarWidth + 'px')
    </script>
</html>
