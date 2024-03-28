<script>
	export let data;
</script>

<div class="bg-black ">
    <img
        class=" w-screen h-screen z-[-2] top-0 object-cover"
        src="/static/assets/1.webp"
        style="filter: saturate(0)"
    />

    <div class="flex w-full justify-end pt-Header-height px-20">
        <div class="flex flex-col font-display text-xxxs text-theme-primary leading-none gap-y-2 drop-shadow-[0_0_8px_rgba(255,73,184,0.45)]"><div class="flex flex-col"><span>DOC INFO \\</span><span>9,684<!-- --> CHARACTERS</span></div><div class="flex flex-col"><span>AVERAGE READ TIME</span><span>[<!-- -->10<!-- --> BLOXS]</span></div></div>
    </div>
    <div class="px-5 lg:px-20 pt-5 lg:pt-10 pb-Header-height">
        <div class="relative border-b border-current text-theme-primary">
            <div class="absolute left-0 top-full w-px h-1.5 bg-current"></div>
            <div class="flex items-center gap-x-2.5 t-ui-lg pb-2.5">
                <p class="text-current uppercase"
                style="font-size: 14px; line-height: 10px">Background</p>
            </div>
        </div>
        <h3 class="text-primary mt-5 title" style="
        "
        >
            The earth is frozen. Locked in a modern ice age. The world governments had come together with a plan to save humanity by moving everyone into the metaverse. It had been called "The Paradigm Shift". The first ten thousand volunteers, ready to light the way, were called CyberBrokers. Everything went wrong. Two centuries later, a complacent human race copes with a great awakening.

            This is the story of The Paradigm Lost.
        </h3>

        <div class="grid grid-cols-12 gap-x-sgs gap-y-sgs text-white mt-20">
            <div class="col-span-12 md:col-start-2 md:col-span-10 lg:col-start-5 lg:col-span-7 xl:col-start-6 xl:col-span-6 space-y-10">
                <div class="h-5 w-full bg-stripes-theme"></div>
                <div class="relative heading-main heading-inset">
                    <div class="heading-inner">
                        <h3 class="t-lc-md" style="letter-spacing: .2em;">Chapter 001</h3>
                        <h3 class="t-h2">Project Paradigm</h3>
                    </div>
                </div>
                <p style="" class="paragraph">"I hate my job."
                    
                    Spice sighed and lifted her eyes from the ground to the pile of gray ice and frozen sleet blocking her way. It was her week to clear the snow off the solar drives outside the compound. And, as usual, it seemed like the worst storm had waited until it was her turn.
                    
                    "Why didn't the snows ever come around during Sybil's week?" Resigned and eager to get back to her rig, Spice snatched up a broom, gripping it like a spear in her mitten-wrapped hands, and jabbed the plastic end at the packed snow blocking the doorway. Even having their entrance sheltered beneath a low overhang never seemed to help much with the drifts. Especially after a bad storm.
                    
                    Chunks chipped away with each stab, and soon a hole large enough to crawl through manifested. Bright sunshine poured in from the opening accompanied by the whistle of bitter cold. After tossing the broom outside, Spice pulled herself out through the dark tunnel, and into the crisp morning air.
                    
                    Damn, it was cold.</p>
            </div>
        </div>
    </div>
</div>
<style>
    .heading-main.heading-inset .heading-inner {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .heading-inner::before {
        top: 0;
        border-bottom: 1px solid rgb(var(--primary-rgb) / 1);
    }
    .heading-inner::after{
        bottom: 0;
        border-top: 1px solid rgb(var(--primary-rgb) / 1);
    }
    .heading-inner::after, .heading-inner::before {
        --size: 0.5rem;
        content: "";
        position: absolute;
        left: 0;
        width: var(--size);
        height: var(--size);
        border-right: 1px solid rgb(var(--primary-rgb) / 1);
    }
    .title{
        line-height: 85%;
        letter-spacing: -.01em;
        font-size: 40px
    }
    .paragraph{
        font-size: 16px; 
        line-height: 160%;
    }
    @media only screen and (min-width: 1024px){
        .title{
            line-height: 85%;
            letter-spacing: -.01em;
            font-size: 60px
        }
        .paragraph{
            font-size: 20px; 
            line-height: 160%;
        }
    }
</style>