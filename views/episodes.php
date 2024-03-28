<div class="canvas w-screen h-screen overflow-hidden relative"
	id="canvas">
	<!-- <img id="bg" src="assets/cyber.png" class="absolute w-full h-screen object-cover"/> -->
</div>

<script type="module">
        import * as THREE from 'three';

        let mx = 0, my = 0;
        let createdScene;

        document.addEventListener('mousemove', onMousemove)
		// background = document.getElementById('bg')
		createdScene = createScene()

		let onWindowResize = () => {
			console.log(createdScene.camera)
			createdScene.camera.aspect = window.innerWidth / window.innerHeight;
			createdScene.camera.updateProjectionMatrix();
			// Add logic to resize image
			createdScene.renderer.setSize( window.innerWidth, window.innerHeight );
		}
		
		window.addEventListener('resize', onWindowResize, false)

        function createScene(){
            let textureLoader = new THREE.TextureLoader();
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera( 65, window.innerWidth / window.innerHeight, 0.1, 1000 );

            const renderer = new THREE.WebGLRenderer();
            renderer.setSize( window.innerWidth, window.innerHeight );
            renderer.toneMapping = THREE.NoToneMapping  
            document.getElementById('canvas').appendChild( renderer.domElement );

            camera.position.z = 5;

            const g1 = new THREE.PlaneGeometry( window.innerWidth/100, window.innerHeight/100  );
            
            const t1 = textureLoader.load('/static/assets/cyber.png')
            t1.colorSpace = THREE.SRGBColorSpace
            const m1 = new THREE.MeshBasicMaterial( { side: THREE.DoubleSide, map: t1 } );
            const bg = new THREE.Mesh( g1, m1 );
            scene.add( bg );
            // textures.push(t1)

            const g2 = new THREE.PlaneGeometry( 1.8, 3  );
            const t2 = textureLoader.load('/static/assets/char1.png')
            t2.colorSpace = THREE.SRGBColorSpace
            // textures.push(t2)
            const m2 = new THREE.MeshBasicMaterial( { side: THREE.DoubleSide, map: t2, alphaTest: 0.5 } );
            const char = new THREE.Mesh( g2, m2 );
            scene.add( char );
            char.position.z = 3
            
            let camX = 0, camY = 0;
            camera.position.x = 0;
            camera.position.y = 0;

            let raf;
            function animate() {
                raf = requestAnimationFrame( animate );
                renderer.render( scene, camera );
                camX = mx/3000
                camY = - my / 3000
                camera.position.x += (camX - camera.position.x) * 0.02
                camera.position.y += (camY - camera.position.y) * 0.02
                // console.log(camX, camY, camera.position.x, camera.position.y)
            }
            animate();
            return { scene, renderer, raf, camera }
        }

        function onMousemove(e){
            let center = [window.innerWidth/2, window.innerHeight/2]
            let x = e.clientX - center[0]
            let y = e.clientY - center[1]
            mx = x
            my = y
        }
</script>

<!-- UI -->
<div class="text-white absolute top-0 left-0 w-full min-h-screen sm:h-screen sm:overflow-hidden">
	<div class="absolute top-0 left-0 w-full h-[190px] z-10 gradient-bottom"></div>
	<div class="absolute bottom-0 left-0 w-full h-[190px] z-10 gradient-top"></div>

	<div
		class="relative z-10 h-full w-full min-h-screen pt-Header-height ui-container pb-sms px-sms"
	>
		<div class="col-start-1 row-start-1">
			<div class="flex relative z-10">
				<div class="flex items-center">
					<div class="h-4 border-theme-primary border-l border-t border-b w-1"></div>
					<div class="flex w-[223px] h-[10px] items-stretch gap-[2px]">
						<?php for($i = 0; $i < 12; $i++){ ?>
                            <div class="bg-white grow opacity-100"></div>
                        <?php } ?>
                        <?php for($i = 0; $i < 50 - 12; $i++){ ?>
                            <div class="bg-white grow opacity-30"></div>
                            <?php } ?>
						
					</div>
					<div class="h-4 border-theme-primary border-r border-t border-b w-1"></div>
				</div>
				<div class="text-right pl-4 font-display font-bold leading-none">
					<div>TIME</div>
					<div>0203<!-- --> BLOXS</div>
				</div>
			</div>
			<div class="flex leading-none font-display mt-4 relative z-10">
				<div class="bg-stripes w-4 mr-2"></div>
				<div>
					<div class="text-sm">
						<div>LOC \\</div>
						<div>13.01.13.13.15.14\\11.09.12.12.19</div>
					</div>
					<div class="mt-3 text-xl+ font-bold">[<!-- -->The Strip<!-- -->]</div>
				</div>
			</div>
		</div>
		<div
			class="sm:hidden col-start-1 col-end-4 row-start-2 justify-center items-center flex lg:my-[120px]"
		>
			<div class="w-3/4 sm:w-3/5 lg:w-2/5 relative">
				<span
					style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative"
					><span
						style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;padding-top:47.410649161196204%"
					></span><img
						alt=""
						src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
						decoding="async"
						data-nimg="responsive"
						style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover"
					/>
					<!-- <noscript
						><img
							alt=""
							sizes="(min-width: 768px) 50vw, (min-width: 1024px) 30vw, 100w"
							srcSet="/_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=256&amp;q=75 256w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=384&amp;q=75 384w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=3840&amp;q=75 3840w"
							src="/_next/image?url=https%3A%2F%2Fa.storyblok.com%2Ff%2F172457%2F1371x650%2F91b576add0%2Fthe-strip-lockup.png&amp;w=3840&amp;q=75"
							decoding="async"
							data-nimg="responsive"
							style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover"
							loading="lazy"
						/></noscript
					> -->
					</span
				>
			</div>
		</div>
		<div
			class="col-start-1 row-start-3 xl:row-start-4 relative z-10"
		>
			<svg class="description-label" viewBox="0 0 102 25"
				><path
					class="fill-black/45"
					d="M.5,2.5C.5,1.4,1.4,.5,2.5,.5H99.5c1.11,0,2,.9,2,2V13.53c0,.61-.28,1.19-.76,1.57l-11.29,8.97c-.35,.28-.79,.43-1.24,.43H2.5c-1.1,0-2-.9-2-2V2.5Z"
				></path><path
					class="fill-theme-primary/20"
					d="M.5,2.5C.5,1.4,1.4,.5,2.5,.5H99.5c1.11,0,2,.9,2,2V13.53c0,.61-.28,1.19-.76,1.57l-11.29,8.97c-.35,.28-.79,.43-1.24,.43H2.5c-1.1,0-2-.9-2-2V2.5Z"
				></path><path
					d="M88.21,25H2.5c-1.38,0-2.5-1.12-2.5-2.5V2.5C0,1.12,1.12,0,2.5,0H99.5c1.38,0,2.5,1.12,2.5,2.5V13.53c0,.77-.34,1.48-.94,1.96l-11.29,8.96c-.44,.35-.99,.54-1.55,.54ZM2.5,1c-.83,0-1.5,.67-1.5,1.5V22.5c0,.83,.67,1.5,1.5,1.5H88.21c.34,0,.67-.12,.93-.33l11.29-8.96c.36-.29,.57-.71,.57-1.17V2.5c0-.83-.67-1.5-1.5-1.5H2.5Z"
					class="fill-theme-primary"
				></path><path
					d="M18.5,20.5H10.5c-2.21,0-4-1.79-4-4V8.5c0-2.21,1.79-4,4-4h8c2.21,0,4,1.79,4,4v8c0,2.21-1.79,4-4,4ZM10.5,5.81c-1.48,0-2.69,1.21-2.69,2.69v8c0,1.48,1.21,2.69,2.69,2.69h8c1.48,0,2.69-1.21,2.69-2.69V8.5c0-1.48-1.21-2.69-2.69-2.69H10.5Z"
					class="fill-theme-primary animate-pulse"
				></path><path
					d="M13.5,9.5h2c1.1,0,2,.9,2,2v2c0,1.1-.9,2-2,2h-2c-1.1,0-2-.9-2-2v-2c0-1.1,.9-2,2-2Z"
					class="fill-white animate-pulse"
				></path><path
					d="M30.05,7V15.7h4.35v1.8h-6.15V7h1.8Zm7.06,0v10.5h-1.8V7h1.8Zm9.37,0l-3.08,10.5h-2.4l-3.08-10.5h1.88l2.4,8.2,2.4-8.2h1.88Zm7.34,0v1.8h-4.73v2.48h4.12v1.8h-4.12v2.62h4.73v1.8h-6.53V7h6.53Zm6.37,6.08v4.42h-1.8V7h6.53v1.8h-4.72v2.48h4.12v1.8h-4.12Zm12.29-6.08v1.8h-4.72v2.48h4.12v1.8h-4.12v2.62h4.72v1.8h-6.52V7h6.52Zm7.64,0v1.8h-4.72v2.48h4.12v1.8h-4.12v2.62h4.72v1.8h-6.53V7h6.53Zm5.99,10.5h-4.88V7h4.88c.65,0,1.2,.22,1.65,.66,.45,.44,.68,1,.68,1.67v5.85c0,.64-.23,1.19-.69,1.65-.45,.45-1,.67-1.64,.67Zm.53-2.33v-5.85c0-.16-.05-.28-.15-.38-.09-.1-.21-.15-.38-.15h-3.07v6.9h3.07c.16,0,.29-.05,.38-.14,.1-.1,.15-.23,.15-.39Z"
					class="fill-white"
				></path>
            </svg>
			<div class="description-typewriter">
				<span class="relative z-20"
					><span class="Typewriter__wrapper"
						>The throbbing, neon heart of Era Novum, alive with the pulse of desire and commerce. If
						you came to Era Novum to shop, to party, to watch a show, or just to marvel at all the
						beauty and chaos the city has to offer; then the Strip is the place for you! Looking to
						drop hard creds on top end merch? Mercantiles</span
					><span class="Typewriter__cursor"> █</span></span
				>
			</div>
		</div>
		<div
			class="mt-3 xl:mt-0 xl:ml-sms xl:col-start-3 col-start-1 col-end-4 xl:col-end-4 row-start-4 flex gap-6 font-display leading-none self-end overflow-hidden relative z-10"
		>
			<div class="xl:min-w-[188px] sm:grow">
				<div class="space-y-1.5 sm:space-y-2.5">
					<div class="h-4 sm:h-5 flex items-end">
						<div class="flex items-center gap-x-1.5 sm:gap-x-2 overflow-hidden">
							<div class="t-ui-xs sm:t-ui-sm text-theme-primary truncate">Status</div>
						</div>
					</div>
					<div class="border-t border-l border-theme-primary h-1.5 sm:h-2"></div>
				</div>
				<div class="flex gap-2 pt-2 sm:pt-3">
					<div
						class="whitespace-nowrap text-xl+ text-black bg-white flex items-center justify-items-center px-2"
					>
						<div>Safe zone</div>
					</div>
				</div>
			</div>
			<div class="xl:min-w-[188px] grow">
				<div class="space-y-1.5 sm:space-y-2.5">
					<div class="h-4 sm:h-5 flex items-end">
						<div class="flex items-center gap-x-1.5 sm:gap-x-2 overflow-hidden">
							<div class="t-ui-xs sm:t-ui-sm text-theme-primary truncate">World</div>
						</div>
					</div>
					<div class="border-t border-l border-theme-primary h-1.5 sm:h-2"></div>
				</div>
				<div class="text-xl+ pt-2 sm:pt-3">Era Novum</div>
			</div>
			<div class="xl:min-w-[188px] grow overflow-hidden">
				<div class="space-y-1.5 sm:space-y-2.5">
					<div class="h-4 sm:h-5 flex items-end">
						<div class="flex items-center gap-x-1.5 sm:gap-x-2 overflow-hidden">
							<div class="t-ui-xs sm:t-ui-sm text-theme-primary truncate">Node address</div>
						</div>
					</div>
					<div class="border-t border-l border-theme-primary h-1.5 sm:h-2"></div>
				</div>
				<div class="text-xl+ pt-2 sm:pt-3 truncate">EN.TS.001/Neonstreet/</div>
			</div>
		</div>
		<div class="col-start-3 row-start-1 row-end-3"></div>
	</div>
</div>


<!-- Episodes section -->

<div id="episodes" class="bg-black px-sms py-20">
	<div class="grid w-full grid-cols-1 lg:grid-cols-3 gap-5 gap-y-20">
		<!-- {#each Array.from({length: 5}) as _, i}
			<Episode href={`/episodes/${i + 1}`} src={`/assets/${i + 1}.webp`}/>
		{/each} -->
        <?php 
            include_once('components/episode.php');
            for($i = 0; $i < 5; $i++){ 
                $props = array(
                    "href" => "/episodes0", 
                    "imgSrc" => "/static/assets/" . ($i + 1) . ".webp", 
                    "title" => "News", 
                    "time" => "March 01, 2024", 
                    "description" => "🚀 Patestradigm Lost Takes NYC: NFT.NYC 2024 Extravaganza!"
                );
                createEpisode($props);
            }
        ?>
	</div>
</div>


<style>
	
	.description-label{
		width: 101px;
    	margin-bottom: 1rem;
    	filter: drop-shadow(0 0 8px rgb(var(--primary) / .55));
	}
	.description-typewriter{
		position: relative;
		height: 5rem;
		padding: 5px 7px;
		line-height: 110%;
		letter-spacing: -.01em;
		display: flex;
		align-items: flex-end;
		font-family: Plaak, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
		font-size: clamp(.9375rem, .1vw + .9rem, 1.0625rem);
		text-transform: uppercase;
		overflow: hidden;
	}
</style>
