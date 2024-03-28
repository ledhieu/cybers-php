<?php function createEpisode($props){
    $href = $props['href'] ?? "#";
    $imgSrc = $props['imgSrc'] ?? "";
    $title = $props['title'] ?? "title";
    $time = $props['time'] ?? "March 01 2024";
    $description = $props['description'] ?? "Description";

    echo <<<EOT
    <a class="block space-y-4" href="$href"
    ><div class="min-w-min">
        <div class="flex pr-sgs">
            <div class="flex border border-theme-primary border-b-0 rounded-t-md overflow-hidden">
                <div class="flex items-center min-w-0 bg-theme-primary px-2 py-1 gap-x-2">
                    <div class="w-[0.5rem] h-[0.5rem] bg-black flex-shrink-0"></div>
                    <h4 class="uppercase font-bold t-ui-sm-fixed text-black text-ellipsis overflow-hidden whitespace-nowrap">
                        $title
                    </h4>
                </div>
                <div class="flex items-center min-w-0 px-2 py-1">
                    <h5 class="uppercase font-bold t-ui-sm text-theme-primary text-ellipsis overflow-hidden whitespace-nowrap">
                        $time
                    </h5>
                </div>
            </div>
        </div>
        <div
            class="border border-theme-primary overflow-hidden rounded-md rounded-tl-none bg-theme-tertiary"
        >
            <div class="relative pt-[62%] overflow-hidden">
                <span
                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"
                    ><img
                        sizes="(min-width: 768px) 50vw, (min-width: 1024px) 30vw, 100w"
                        srcset=""
                        src="$imgSrc"
                        decoding="async"
                        data-nimg="fill"
                        style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;"
                    /></span
                >
            </div>
        </div>
    </div>
    <h4 class="text-white font-display uppercase text-3xl tracking-tight leading-none">
        $description
    </h4></a
>	
EOT;
} ?>