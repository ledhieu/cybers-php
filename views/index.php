
<?php include_once("components/loader.php");?>
<div class="body flex w-screen h-screen items-center">
	<div class="flex flex-col m-auto w-full lg:w-fit px-6 lg:px-0">
		<div class="hand text-center">The future of adult entertainement</div>
		<h1 id="h1">CYBER<br />LOGOHERE</h1>
		<div class="text-primary">
			<div class="flex gap-3 mt-3 mb-3">
				<div>THE CORE</div>
				<svg
					id="Layer_2"
					class="h-[25px]"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 475.72 271.58"
					><defs
						><style>
							.cls-1 {
								fill: #79dda9;
							}
						</style></defs><g id="OBJECTS"
						><path
							class="cls-1"
							d="M404.98,38.8C360.38,13.78,301.08,.03,238.44,.01c-.16,0-.32-.01-.48-.01h-.33c-63.12,.11-122.51,14.09-167.22,39.37C24.94,65.08-.06,99.47,0,136.2c.13,74.74,106.54,135.39,237.37,135.38h.72c63.12-.11,122.51-14.09,167.22-39.37,45.47-25.71,70.47-60.1,70.41-96.83-.07-36.73-25.19-71.03-70.74-96.58Zm-4.09,7.3c41.02,23.01,64.34,53.1,66.27,85.11l-69.5,.12c-1.29-34.83-17.89-67.36-47.13-91.99-11.83-9.96-25.18-18.13-39.59-24.42,33.53,6.23,64.26,16.76,89.95,31.18Zm-167.22,85.51l-69.08,.12c1.12-65.91,31.18-119.36,68.87-123.13l.21,123.01Zm.01,8.37l.21,123.02c-37.7-3.64-67.94-57-69.29-122.9l69.08-.12Zm8.37-.01l69.08-.12c-1.12,65.91-31.18,119.36-68.87,123.13l-.21-123.01Zm-.01-8.37l-.21-123.02c37.7,3.64,67.94,57,69.29,122.9l-69.08,.12Zm-85.81,.15l-69.8,.12c2.18-58.96,52.22-107.99,118.52-120.42-28.05,20.52-47.83,66.54-48.73,120.3Zm.01,8.37c1.08,53.76,21.02,99.7,49.13,120.13-66.35-12.21-116.55-61.06-118.93-120.01l69.8-.12Zm163.26-.28l69.8-.12c-1.18,32.33-16.62,62.65-43.87,85.75-20.78,17.62-46.59,29.48-74.71,34.7,28.07-20.51,47.88-66.54,48.77-120.34Zm-.01-8.37c-1.08-53.79-21.04-99.76-49.18-120.17,28.14,5.12,53.99,16.89,74.83,34.45,27.32,23.01,42.86,53.27,44.16,85.6l-69.8,.12ZM74.53,46.66c25.75-14.56,56.61-25.23,90.29-31.57-50.23,22.02-85.02,65.95-86.76,116.79l-69.51,.12c1.82-32.02,25.04-62.19,65.98-85.34ZM8.57,140.37l69.5-.12c1.91,50.8,36.81,94.59,87.07,116.45C76.5,240.31,11.84,194.64,8.57,140.37Zm392.62,84.56c-25.64,14.5-56.34,25.14-89.85,31.48,14.39-6.34,27.72-14.56,39.51-24.56,29.16-24.73,45.65-57.32,46.82-92.15l69.5-.12c-1.82,32.02-25.04,62.19-65.98,85.34Z"
						/></g></svg>
			</div>
			<div class="flex h-fit gap-2 relative">
				<div class="checker h-auto w-[40px]"></div>
				<div class="w-[600px]">
					<span style="color: #ffffff00" class="typed">
					CYBERBROKERS IS BUILDING A CAPTIVATING UNIVERSE THROUGH BEAUTIFUL COLLECTIBLES, ENGAGING CONTENT, AND INTERACTIVE EXPERIENCES. COLLECT / CREATE / EXPAND YOUR REALITY.
					</span>
				</div>
				<div class="w-[600px] absolute left-[45px]" id="typed-div">
					<span class="inline typed" id="typed"></span>
				</div>
			</div>
		</div>
		<!-- <Button text="CLICK TO EXPLORE" href="episodes" class="ml-auto mr-auto mt-5"/> -->
		<?php include_once "./components/button.php";
			 createButton([
				"href" => "episodes", 
				"text" => "CLICK TO EXPLORE", 
				"classes" => "ml-auto mr-auto mt-5"
			]);
		?>
	</div>
</div>
<div class="absolute w-screen h-screen z-[-1] top-0" style="background: #000000df"></div>
<img
	class="absolute w-screen h-screen z-[-2] top-0"
	src="/static/assets/bg2.jpg"
	style="filter: saturate(0)"
/>

<script>
	window.addEventListener('doneLoading', e=> {
		let typed = new Typed('#typed', {
			strings: [
				'CYBERBROKERS IS BUILDING A CAPTIVATING UNIVERSE THROUGH BEAUTIFUL COLLECTIBLES, ENGAGING CONTENT, AND INTERACTIVE EXPERIENCES. COLLECT / CREATE / EXPAND YOUR REALITY.'
			],
			typeSpeed: 20,
			cursorChar: '█'
		});
	})
	
</script>	

<style>
	#h1 {
		font-size: clamp(0.8rem, 4vw + 1rem, 7.5rem);
		line-height: clamp(0.8rem, 4vw + 0.5rem, 7rem);
	}
	.hand {
		font-size: clamp(1.7rem, 2.5vw + 1rem, 3.5rem);
		color: var(--primary);
	}
	.p {
	}
	.typed{
		font-size: 0.8rem;
	}
	.typed{
		font-size: 0.2rem;
	}
	@media only screen and (min-width: 1024px){
		.typed{
			font-size: 1rem;
			line-height: 1rem;
		}
	}
	
</style>