<div class=" px-sms block lg:hidden fixed w-screen h-[40px] z-[20]"
style="background-color: var(--primary); top: var(--site-header-height)">
    <div class="flex w-full uppercase font-bold items-center h-full">
        <p class="mr-auto plaak"><span class="">▪</span> MECHS</p>
        <p class="plaak h-full px-5" style="border-left: 1px solid black; line-height: 40px">
            FILTER</p>
    </div>
</div>

<div class="relative bg-black w-screen min-h-screen pt-Header-height px-sms">
    <div class="fixed top-[40px] left-0 w-full h-[100px] z-10 gradient-bottom"></div>
    <div class="fixed bottom-0 left-0 w-full h-[100px] z-10 gradient-top"></div>
    
    <h1 class="text-primary mt-10 mb-8 lg:mb-2 h1">Models</h1>
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-7">
        <?php for($i = 0; $i < 10; $i++){ ?>
            <a class="card p-2 lg:p-5 uppercase cursor-pointer"
                href="/models0"
                data-augmented-ui="br-clip tl-round tr-round bl-round exe border"
            >
                <img src="/static/assets/bot.webp"/>
                <p class='text-white mt-2 lg:mt-5 lg:mb-2'>Entity of shadow</p>
                <div class="hidden lg:flex text-primary justify-between items-center mb-2">
                    <p>model//</p>
                    <p class="highlight">ravager</p>
                </div>
                <div class="text-primary flex justify-between items-center">
                    <p>Token id//</p>
                    <p class="highlight">1467</p>
                </div>
                <div class="tail mt-5 mb-2"></div>
            </a>
        <?php } ?>
    </div>

    <div class="hidden lg:flex fixed filters z-[11] bottom-10 right-5 gap-2">
        <!-- {#each filters as filter}
            <FilterButton data={filter}></FilterButton>
        {/each}  -->
    </div>
</div>



<style>
    .card{
        background: rgb(var(--primary-rgb) / 0);
        transition: 0.2s ease;
        --aug-border-all: 1px;
        --aug-border-bg: #ffffff50;
        --aug-tl: 10px;
        --aug-tr: 10px;
        --aug-br: 15px;
        --aug-bl: 10px;
    }
    .card:hover{
        background: rgb(var(--primary-rgb)/0.2);
    }
    .tail {
        height: 1px;
        --tw-bg-opacity: 1;
        background-color: rgb(var(--primary-rgb) / var(--tw-bg-opacity));
        width: 95%;
    }
    .card p{
        line-height: 15px;
    }
    .highlight{
        background: var(--primary);
        color: black;
        padding: 2px 5px 2px 5px;
        line-height: 15px!important;;
    }
    
    @media only screen and (min-width: 1024px){
        .card{
            --aug-br: 40px;
        }
    }
    
</style>