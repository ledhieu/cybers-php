<?php function createButton($props) { 
    $href = $props['href'] ?? '#';
    $text = $props['text'] ?? '';
    $classes = $props['classes'] ?? '';

    echo <<<EOT
    <a href="$href" class="btn-group relative $classes">
        <button data-augmented-ui="tl-round tr-round bl-round br-clip exec"
        class="btn z-[1] relative">
            <div class="flex gap-3 items-center">
                <div>$text</div>
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px" viewBox="0 0 22 22"
                    ><path d="M0 8h6v6H0V8Zm16 0v6h6V8h-6ZM8 22h6v-6H8v6ZM8 6h6V0H8v6Z"></path></svg
                >
            </div>
        </button>
        <div
            class="absolute btn-outline z-[0]"
            data-augmented-ui="tl-round tr-round bl-round br-clip exec border"
        >
            <div class="flex gap-3 items-center">
                <div>$text</div>
                <div class="w-[20px] h-[20px]"></div>
            </div>
        </div>
    </a>
EOT;
} ?>