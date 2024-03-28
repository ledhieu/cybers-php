<div class="flex items-center gap-x-2 upper">
	<button class="connect-button hidden lg:block"
		><span class="connect-button-label uppercase font-bold">no_connection</span>
		<div class="connect-button-text">
			<div class="relative overflow-hidden uper">
                <span class="uppercase" style="font-size: 14px;">connect wallet</span>
			</div>
		</div>
		<svg class="w-auto h-full" viewBox="0 0 146 43"
			><path
				class="connect-graphic-bg"
				d="M82.37,18.5H4.5c-2.21,0-4,1.79-4,4v16c0,2.21,1.82,4,4.03,4H141.47c2.21,0,4.03-1.79,4.03-4V14.99c0-1.59-.63-3.12-1.76-4.24l-8.46-8.46c-1.14-1.14-2.69-1.78-4.31-1.78h-38.61c-2.76,0-5,2.24-5,5V13.5c0,2.76-2.24,5-5,5Z"
			></path><path
				class="connect-graphic-fg"
				d="M141.47,43H4.53c-2.5,0-4.53-2.02-4.53-4.5V22.5c0-2.48,2.02-4.5,4.5-4.5H82.37c2.48,0,4.5-2.02,4.5-4.5V5.5c0-3.03,2.47-5.5,5.5-5.5h38.6c1.76,0,3.41,.69,4.66,1.93l8.46,8.46c1.23,1.23,1.9,2.86,1.9,4.6v23.51c0,2.48-2.03,4.5-4.53,4.5ZM4.5,19c-1.93,0-3.5,1.57-3.5,3.5v16c0,1.93,1.58,3.5,3.53,3.5H141.47c1.95,0,3.53-1.57,3.53-3.5V14.99c0-1.47-.57-2.85-1.61-3.89l-8.46-8.46c-1.06-1.06-2.46-1.64-3.95-1.64h-38.6c-2.48,0-4.5,2.02-4.5,4.5V13.5c0,3.03-2.47,5.5-5.5,5.5H4.5Z"
			></path></svg></button
	><button class="connect-button-compact"
		><span class="uppercase connect-button-compact-label">no_connection</span><span
			class="uppercase connect-button-compact-main">Connect <br />Wallet</span
		></button
	><a class="connect-inventory hidden lg:block" href="#" 
		><span class="sr-only">Inventory</span><svg class="w-auto h-full" viewBox="0 0 49 43"
			><path
				class="connect-graphic-bg"
				d="M.5,6.5C.5,3.19,3.19,.5,6.5,.5H42.5c3.31,0,6,2.69,6,6V28.01c0,1.59-.63,3.12-1.76,4.24l-8.49,8.49c-1.13,1.13-2.66,1.76-4.26,1.76H6.5c-3.31,0-6-2.69-6-6V6.5Z"
			></path><path
				class="connect-graphic-fg"
				d="M34,43H6.5c-3.58,0-6.5-2.92-6.5-6.5V6.5C0,2.92,2.92,0,6.5,0H42.5c3.58,0,6.5,2.92,6.5,6.5V28.01c0,1.74-.68,3.37-1.9,4.6l-8.48,8.49c-1.21,1.21-2.89,1.9-4.61,1.9ZM6.5,1C3.47,1,1,3.47,1,6.5v30c0,3.03,2.47,5.5,5.5,5.5h27.5c1.46,0,2.88-.59,3.9-1.61l8.48-8.49c1.04-1.04,1.61-2.42,1.61-3.89V6.5c0-3.03-2.47-5.5-5.5-5.5H6.5Z"
			></path><path
				class="connect-graphic-icon"
				d="M16.5,15.5h5v5h-5v-5Zm10,0h5v5h-5v-5Zm-5-5h5v5h-5v-5Zm0,10h5v5h-5v-5Zm5,5h5v5h-5v-5Zm-10,0h5v5h-5v-5Z"
			></path></svg></a
	>
</div>

<style>
    .connect-button,
    .connect-inventory {
        height: 2.625rem;
    }

    .connect-button-label{
        top: 0;
        font-size: .58rem;
        color: rgb(var(--primary-rgb));
        padding-top: 0.2rem;
    }

    .connect-button-label, 
    .connect-button-text{
        position: absolute;
        left: 0;
        font-family: Plaak, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1;
        --tw-text-opacity: 1;
    }

    .connect-button-text {
        bottom: 0;
        font-size: clamp(.9375rem, .1vw + .9rem, 1.0625rem);
        font-weight: 700;
        letter-spacing: .01em;
        color: rgb(255, 255, 255);
        padding-left: 0.4rem;
        padding-bottom: 0.5rem;
    }

    .connect-graphic-bg {
        fill: rgb(var(--primary-rgb) / .25);
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-timing-function: cubic-bezier(.4,0,.2,1);
        transition-duration: 225ms;
    }
    .connect-graphic-fg, 
    .connect-graphic-icon {
        fill: rgb(var(--primary-rgb) / 1);
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-timing-function: cubic-bezier(.4,0,.2,1);
        transition-duration: 225ms;
    }

    .connect-graphic-bg:hover {
        fill: rgb(var(--primary-rgb) / .35);
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-timing-function: cubic-bezier(.4,0,.2,1);
        transition-duration: 225ms;
    }

    .connect-button-compact {
        display: flex;
        flex-direction: column;
        row-gap: 0.25rem;
    }
    .connect-button-compact-label{
        font-size: 9px;
        width: 100%;
        line-height: 1;
        color: rgb(var(--primary-rgb));
    }

    .connect-button-compact-main{
        height: 32px;
        position: relative;
        display: flex;
        align-items: center;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: -.01em;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        text-align: left;
        color: rgb(255, 255, 255);
        border-radius: 0.25rem;
        border-width: 1px;
        --tw-border-opacity: 1;
        border-color: rgb(var(--primary-rgb) / var(--tw-border-opacity));
        background-color: rgb(var(--primary-rgb) / .25);
        line-height: 95%;
    }
    @media only screen and (min-width: 1024px){
        .connect-button-compact {
            display: none;
        }
    }
</style>