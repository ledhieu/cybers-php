<?php function createForm(){
    echo <<<EOT
<div class="flex gap-1.5 mb-5">
    <div class="w-4 bg-stripes-theme flex-shrink-0"></div>
    <div class="space-y-2">
        <h3 class="t-ui-lg-fixed text-primary" style="font-size: 30px; line-height: 25px">Subscribe now</h3>
        <p class="text-theme-alt t-p-md-fixed leading-none text-white">Bring The Paradigm Lost to your Inbox</p>
    </div>
</div>

<div class="subscribe-form">
    <form class="ui-input flex relative">
        <input class="plaak text-white w-full autofill:text-fill-black autofill:bg-transparent autofill:!bg-yellow-200" 
            type="email" 
            placeholder="Email" 
            value=""
            style="font-size: 20px">
        <div class="flex absolute right-0 inset-y-0">
            <button class="uppercase text-theme-primary t-ui-md cursor-pointer py-2 pl-2"><div>
                <div class="relative overflow-hidden">
                    <span class="text-primary font-bold plaak" style="font-size: 20px">SUBMIT</span>
                    <!-- <div class="absolute inset-0 w-full h-full whitespace-nowrap text-left"><span>SUBMIT</span></div> -->
                </div>
            </button>
        </div>
    </form>
    <p class="text-white-30 t-ui-sm mt-3 plaak" style="font-size: 20px">Keep up with the latest news and content.</p>
</div>

<style>
    /* Input */
    .ui-input input {
        display: block;
        height: 2.5rem;
        width: 100%;
        font-size: clamp(.9375rem, .1vw + .9rem, 1.0625rem);
        font-weight: 500;
        line-height: 145%;
        background-color: transparent;
        border-bottom-width: 1px;
        --tw-border-opacity: 1;
        border-color: rgb(var(--primary-rgb) / var(--tw-border-opacity));
    }
    .ui-input input {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }
    .ui-input:after {
        content: "";
        position: absolute;
        left: 0;
        top: 100%;
        width: 1px;
        --tw-bg-opacity: 1;
        background-color: rgb(var(--primary-rgb) / var(--tw-bg-opacity));
        height: 5px;
    }
</style>
EOT;
}?>