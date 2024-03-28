<?php 
    $request = $_SERVER['REQUEST_URI'];

    $solid = $request != '/' && $request != '/episodes';
?>

<div id="navbar" class="w-screen text-white flex px-3 lg:px-6 py-3 <?php if($solid) echo "solid"; ?>">
    <div class="menu flex items-center gap-3">
        <button class="button flex justify-center items-center"
        id="nav-button"
        data-augmented-ui="br-clip tl-round tr-round bl-round exe border">
            <div class="dots-grid grid grid-cols-5 grid-rows-5 gap-0 w-full">
                <?php for($i = 0; $i < 25; $i++) { ?>
                    <span data-index="<?php echo $i; ?>"
                    class="col-span-1 dots <?php 
                        if($i < 5 || $i >= 20 || ($i >= 10 && $i < 15) || $i % 2 != 1){
                            echo "empty";
                        }
                    ?>"
                    style="transition: 0.2s ease;
                    --delay: <?php 0.1 * ($i % 3) ?>s;"></span>
                <?php } ?>
            </div>
        </button>
        <!-- <p class="text-white font-bold m" style="font-size: 14px">MENU</p> -->
    </div>
    <a class="mx-auto flex items-center" href="/"><h1 class="logo">CYBER<br class="block lg:hidden">SEXUALS</h1></a>
    <div class="wallet relative">
        <!-- <Wallet/> -->
        <?php include_once('components/wallet.php'); ?>
    </div>
</div>

<div id="modal" class="modal fixed w-screen h-screen z-[-1] overflow-scroll
pt-Header-height pb-Header-height flex flex-col lg:flex-row lg:items-center gap-5 lg:gap-20">
    <div class="flex flex-col items-start px-sms">
        <a class="modal-button" on:click={handleClick}>series</a>
        <a href="/episodes" class="modal-button" on:click={handleClick}>episodes</a>
        <a href="/models" class="modal-button" on:click={handleClick}>models</a>
        <a class="modal-button" on:click={handleClick}>marketplace</a>
        <a class="modal-button" on:click={handleClick}>community</a>
        <a class="modal-button" on:click={handleClick}>blog</a>
        <a class="modal-button" on:click={handleClick}>support</a>
        <a class="modal-button" on:click={handleClick}>load wallet</a>
    </div>
    <div class="flex flex-col gap-5 px-3 lg:px-0">
        <h3 class="uppercase text-primary font-bold plaak">Social</h3>
        <ul class="socials flex gap-5">
            <li><a href="#" target="_blank" rel="noopener noreferrer" class="t-p-sm inline-flex items-center text-theme-alt hover:text-theme-primary transition-colors"><span class="w-5 h-5 fill-current"><svg viewBox="0 0 24 19" xmlns="http://www.w3.org/2000/svg"><path d="M20.317 1.86A19.791 19.791 0 0 0 15.432.343a.074.074 0 0 0-.079.037c-.21.375-.444.865-.608 1.25a18.271 18.271 0 0 0-5.487 0A12.644 12.644 0 0 0 8.641.38a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 1.86a.07.07 0 0 0-.032.028C.533 6.535-.32 11.069.099 15.547a.083.083 0 0 0 .031.056 19.902 19.902 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.22 14.22 0 0 0 1.226-1.994c.021-.04.001-.09-.041-.106a13.109 13.109 0 0 1-1.872-.892.077.077 0 0 1-.008-.128c.126-.094.252-.192.372-.291a.074.074 0 0 1 .078-.01c3.927 1.793 8.18 1.793 12.061 0a.074.074 0 0 1 .079.009c.12.099.245.198.372.292.044.033.04.1-.006.128-.598.35-1.22.645-1.873.891a.077.077 0 0 0-.041.107c.36.698.772 1.363 1.225 1.993a.076.076 0 0 0 .084.029 19.836 19.836 0 0 0 6.002-3.03.077.077 0 0 0 .032-.055c.5-5.177-.838-9.674-3.549-13.66a.06.06 0 0 0-.031-.029ZM8.02 12.82c-1.182 0-2.157-1.085-2.157-2.418 0-1.333.956-2.42 2.157-2.42 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.419-2.157 2.419Zm7.975 0c-1.183 0-2.157-1.085-2.157-2.418 0-1.333.955-2.42 2.157-2.42 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.419-2.157 2.419Z"></path></svg></span><span class="sr-only">Discord</span></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer" class="t-p-sm inline-flex items-center text-theme-alt hover:text-theme-primary transition-colors"><span class="w-5 h-5 fill-current"><svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg"><path d="M20 2.834c-.75.333-1.5.583-2.333.666.833-.5 1.5-1.333 1.833-2.25-.833.5-1.667.834-2.583 1a4.034 4.034 0 0 0-3-1.333A4.09 4.09 0 0 0 9.833 5c0 .334 0 .667.084.917-3.5-.167-6.5-1.833-8.5-4.333C1 2.25.833 2.917.833 3.667c0 1.417.75 2.667 1.834 3.417-.667 0-1.334-.167-1.834-.5v.083c0 2 1.417 3.667 3.25 4-.333.083-.666.167-1.083.167-.25 0-.5 0-.75-.084.5 1.667 2 2.834 3.833 2.834-1.416 1.083-3.166 1.75-5.083 1.75-.333 0-.667 0-1-.084 1.833 1.167 4 1.834 6.25 1.834 7.583 0 11.667-6.25 11.667-11.667v-.5c.833-.583 1.5-1.333 2.083-2.083Z"></path></svg></span><span class="sr-only">Twitter</span></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer" class="t-p-sm inline-flex items-center text-theme-alt hover:text-theme-primary transition-colors"><span class="w-5 h-5 fill-current"><svg viewBox="0 0 21 24" xmlns="http://www.w3.org/2000/svg"><path d="M21 5.406H0v2.837h21V5.406ZM0 10.813V24l10.5-5.89L21 24V10.812H0ZM21 0H0v2.836h21V0Z"></path></svg></span><span class="sr-only">Substack</span></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer" class="t-p-sm inline-flex items-center text-theme-alt hover:text-theme-primary transition-colors"><span class="w-5 h-5 fill-current"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11 1.982c2.937 0 3.285.01 4.445.064a6.078 6.078 0 0 1 2.042.38c.478.175.91.456 1.265.822.366.355.647.787.823 1.265.243.654.37 1.345.379 2.042.053 1.16.064 1.508.064 4.445 0 2.937-.011 3.285-.064 4.445a6.075 6.075 0 0 1-.379 2.042 3.644 3.644 0 0 1-2.088 2.088 6.05 6.05 0 0 1-2.042.38c-.566.025-.94.04-1.514.05-.603.01-1.428.013-2.931.013-2.937 0-3.285-.01-4.445-.064a6.08 6.08 0 0 1-2.042-.379 3.399 3.399 0 0 1-1.265-.823 3.398 3.398 0 0 1-.823-1.265 6.07 6.07 0 0 1-.379-2.042c-.053-1.16-.064-1.508-.064-4.445 0-2.937.011-3.285.064-4.445a6.07 6.07 0 0 1 .38-2.042c.175-.478.456-.91.822-1.265a3.397 3.397 0 0 1 1.265-.823 6.077 6.077 0 0 1 2.042-.38c1.16-.052 1.508-.063 4.445-.063ZM11 0C8.013 0 7.638.013 6.465.066a8.114 8.114 0 0 0-2.67.51A5.628 5.628 0 0 0 .577 3.8a8.104 8.104 0 0 0-.511 2.67C.013 7.638 0 8.013 0 11c0 1.175.002 1.946.008 2.52.008.885.026 1.303.058 2.015.019.913.192 1.815.511 2.67A5.626 5.626 0 0 0 3.8 21.423c.855.32 1.758.492 2.67.511.452.02.785.035 1.196.045.33.008.71.013 1.241.017.52.003 1.187.004 2.093.004.927 0 1.602-.001 2.127-.004a49.616 49.616 0 0 0 2.408-.062 8.116 8.116 0 0 0 2.67-.51 5.628 5.628 0 0 0 3.218-3.224c.32-.855.492-1.758.511-2.67.053-1.168.066-1.543.066-4.53 0-.74 0-1.318-.003-1.79a52.933 52.933 0 0 0-.063-2.745 8.107 8.107 0 0 0-.511-2.67A5.625 5.625 0 0 0 18.2.577a8.114 8.114 0 0 0-2.67-.511C14.362.013 13.987 0 11 0Zm0 5.352a5.648 5.648 0 1 0 0 11.296 5.648 5.648 0 0 0 0-11.296Zm0 9.316a3.668 3.668 0 1 1 0-7.337 3.668 3.668 0 0 1 0 7.337Zm7.19-9.54a1.32 1.32 0 1 1-2.639 0 1.32 1.32 0 0 1 2.64 0Z"></path></svg></span><span class="sr-only">Instagram</span></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer" class="t-p-sm inline-flex items-center text-theme-alt hover:text-theme-primary transition-colors"><span class="w-5 h-5 fill-current"><svg viewBox="0 0 28.57 20"><path d="M27.97 3.12c-.33-1.23-1.3-2.2-2.53-2.53-2.23-.6-11.16-.6-11.16-.6s-8.93 0-11.16.6C1.89.93.93 1.89.6 3.12 0 5.35 0 10 0 10s0 4.65.6 6.88c.33 1.23 1.3 2.2 2.53 2.53 2.23.6 11.16.6 11.16.6s8.93 0 11.16-.6c1.23-.33 2.2-1.3 2.53-2.53.6-2.23.6-6.88.6-6.88s0-4.65-.6-6.88ZM11.43 14.29V5.72l7.42 4.29-7.42 4.28Z"></path></svg></span><span class="sr-only">YouTube</span></a></li>
        </ul>
        <div class="">
            <!-- <ContactForm/> -->
            <?php include_once('contactform.php');
                createForm();
            ?>
        </div>
        <h3 class="uppercase text-primary font-bold plaak">MARKETPLACE</h3>
    
        <div class="btn-group relative">
			<button data-augmented-ui="tl-round tr-round bl-round br-clip exec" class="btn">
				<div class="flex gap-3 items-center">
					<p>TO MARKETPLACE</p>
			 		<svg xmlns="http://www.w3.org/2000/svg" style="width: 20px" viewBox="0 0 22 22"
						><path d="M0 8h6v6H0V8Zm16 0v6h6V8h-6ZM8 22h6v-6H8v6ZM8 6h6V0H8v6Z"></path></svg>
				</div>
			</button>
			<div
				class="absolute btn-outline"
				data-augmented-ui="tl-round tr-round bl-round br-clip exec border"
			>
				<div class="flex gap-3 items-center">
					<p>TO MARKETPLACE</p>
					<div class="w-[20px] h-[20px]"></div>
				</div>
			</div>
		</div>
    </div>
</div>

<script>
    $('#nav-button').on('click', () => {
        console.log('clicked', this)
        $('#modal').toggleClass('active')
        let active = $('#modal').hasClass('active')
        $('.dots').each((i, el) => {
            console.log(i, el)
            if(active){
                if(i % 2 != 0 || i == 2 || i == 10 || i == 14 || i == 22){
                    $(el).addClass('empty')
                } else
                    $(el).removeClass('empty')
            } else {
                if(i < 5 || i >= 20 || (i >= 10 && i < 15) || i % 2 != 1){
                    $(el).addClass('empty')
                } else
                    $(el).removeClass('empty')
            }
        })
    })
</script>

<style>
    #navbar.solid{
        background: #000;
    }
    #navbar .logo{
        font-size: 16px;
        line-height: 14px;
    }
    #navbar .button{
        background: var(--primary);
        padding: 11px 20px 11px 18px;
        --aug-border-all: 1px;
        --aug-border-bg: #79DDA900;
        --aug-bl: 3px;
        --aug-tl: 3px;
        --aug-tr: 3px;
        --aug-br: 12px;
        transition: 0.2s ease;
    }
    #navbar .button:hover{
        --aug-border-bg: var(--primary);
        background: #79DDA970;
        transition: 0.2s ease;
    }
    #navbar .dots{
        width: 5px; height: 5px;
        background-color: #000;
        transition: 0.2s ease;
    }
    #navbar .dots.empty{
        background-color: #ffffff00;
        transition-delay: var(--delay)
    }
    #navbar .button:hover .dots:not(.empty){
        background-color: #fff;
        transition: 0.2s ease;
    }
    #navbar .dots-grid{
        height: 25px;
        width: 25px;
    }
    #modal{
        background: linear-gradient(to right, #000000ff 30%, #000000a0 100%);
        top: 0;
        left: 0;
        pointer-events: none;
        opacity: 0;
        transition: 0.2s ease;
    }
    #modal.active{
        pointer-events: all;
        opacity: 1;
        transition: 0.2s ease;
    }
    .modal-button{
        color: #fff;
        text-transform: uppercase;
        /* font-size: clamp(2.5rem, 4.5vw + 1rem, 7.5rem); */
        font-size: clamp(2.5rem, 4.5vw + 1rem, 7.5rem);
        font-family: Plaak3, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: 700;
        line-height: 85%;
        letter-spacing: -.01em;
        cursor: pointer;
        transition: 0.2s ease;
    }
    .modal-button.active, .modal-button:hover{
        color: var(--primary);
        transition: 0.2s ease
    }
    .text-theme-alt {
        --tw-text-opacity: 1;
        color: rgb(var(--site-theme-alt) / var(--tw-text-opacity));
    }
    .transition-colors {
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-timing-function: cubic-bezier(.4,0,.2,1);
        transition-duration: 225ms;
    }

    @media only screen and (min-width: 1024px){
        .modal-button{
            font-size: clamp(1.5rem, 2.5vw + 1rem, 5.5rem);
        }
        .logo{
            font-size: 22px;
            line-height: 20px;
        }
    }
    
</style>