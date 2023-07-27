<div class="sticky bottom-0 w-full left-0 right-0 flex items-center justify-between bg-red">
    <div class="flex w-full px-4 text-center text-white dark:bg-neutral-600">
    <button class='w-full flex justify-center items-center' wire:click="$emit('toggleSearch')">
            <svg class="h-8 w-8 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h4v4m-2-3.586L7.707 7.707a1 1 0 00-1.414 1.414l4.243 4.243M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
                <!-- ICÔNE WISHLIST -->
                <button class='hover:bg-pale-pink w-full flex justify-center' wire:click="redirectToWishlist">
                    <!-- BLANCHE -->
                    <svg viewBox="-10 0 90 67.5" class="w-14 h-14"  xmlns="http://www.w3.org/2000/svg">
                        <path stroke='#fff' stroke-width='0.8' d="M66 4.7C64.8 3.6 63.3 3 61.7 3H15.2c-3.3 0-6 2.7-6 6v47H3.3c-.6 0-1 .4-1 1v4c0 1.6.6 3.1 1.7 4.2C5.2 66.4 6.7 67 8.3 67H60c1.9 0 3.7-.8 4.9-2.3 1.2-1.4 1.8-3.3 1.5-5.2L63.7 44c-.3-1.7-1.7-3-3.5-3h-2.4V14.9h8.9c.6 0 1-.4 1-1V9c0-1.7-.6-3.1-1.7-4.3zM8.3 65c-1.1 0-2-.4-2.8-1.2-.7-.7-1.2-1.7-1.2-2.8v-3h36.1l-.3 1.6c-.3 1.9.2 3.8 1.5 5.2l.3.3H8.3zm53.4-20.7 2.5 15.5c.2 1.3-.2 2.6-1 3.6S61.1 65 59.8 65H46.5c-1.3 0-2.5-.6-3.4-1.6-.8-1-1.2-2.3-1-3.6l2.5-15.5c.1-.7.8-1.3 1.5-1.3h14c.9 0 1.5.6 1.6 1.3zM46.2 41c-1.2 0-2.3.6-2.9 1.6h-14c-.6 0-1 .4-1 1s.4 1 1 1h13.4L40.8 56H11.2V9c0-2.2 1.8-4 4-4h42.1c-.9 1-1.5 2.4-1.5 4v32h-9.6zm19.5-28.1h-7.9V9c0-2.1 1.5-3.7 3.6-3.9h.1c1.1-.1 2.2.3 3 1.1.7.7 1.2 1.7 1.2 2.8v3.9z" style="paint-order: stroke; fill: rgb(255, 255, 255);" />
                        <path stroke='#fff' stroke-width='0.8' d="M22.6 11h-4.4c-1.3 0-2.3 1-2.3 2.3v4.4c0 1.3 1 2.3 2.3 2.3h4.4c1.3 0 2.3-1 2.3-2.3v-4.4c0-1.3-1-2.3-2.3-2.3zm.3 6.7c0 .2-.1.3-.3.3h-4.4c-.2 0-.3-.1-.3-.3v-4.4c0-.2.1-.3.3-.3h4.4c.2 0 .3.1.3.3v4.4zM50.1 12.6H29.2c-.6 0-1 .4-1 1s.4 1 1 1H50c.6 0 1-.4 1-1s-.4-1-.9-1zM29.2 18.4h9.4c.6 0 1-.4 1-1s-.4-1-1-1h-9.4c-.6 0-1 .4-1 1s.5 1 1 1zM22.6 26h-4.4c-1.3 0-2.3 1-2.3 2.3v4.4c0 1.3 1 2.3 2.3 2.3h4.4c1.3 0 2.3-1 2.3-2.3v-4.4c0-1.3-1-2.3-2.3-2.3zm.3 6.7c0 .2-.1.3-.3.3h-4.4c-.2 0-.3-.1-.3-.3v-4.4c0-.2.1-.3.3-.3h4.4c.2 0 .3.1.3.3v4.4zM50.1 27.6H29.2c-.6 0-1 .4-1 1s.4 1 1 1H50c.6 0 1-.4 1-1s-.4-1-.9-1zM38.6 31.4h-9.4c-.6 0-1 .4-1 1s.4 1 1 1h9.4c.6 0 1-.4 1-1s-.4-1-1-1zM22.6 41h-4.4c-1.3 0-2.3 1-2.3 2.3v4.4c0 1.3 1 2.3 2.3 2.3h4.4c1.3 0 2.3-1 2.3-2.3v-4.4c0-1.2-1-2.3-2.3-2.3zm.3 6.8c0 .2-.1.3-.3.3h-4.4c-.2 0-.3-.1-.3-.3v-4.4c0-.2.1-.3.3-.3h4.4c.2 0 .3.1.3.3v4.4zM29.2 48.5h9.4c.6 0 1-.4 1-1s-.4-1-1-1h-9.4c-.6 0-1 .4-1 1s.5 1 1 1zM56.4 46.5v3.3c0 1.7-1.4 3.2-3.2 3.2S50 51.6 50 49.9v-3.3c0-.6-.4-1-1-1s-1 .4-1 1v3.3c0 2.9 2.3 5.2 5.2 5.2 2.9 0 5.2-2.3 5.2-5.2v-3.3c0-.6-.4-1-1-1s-1 .4-1 .9z" style="paint-order: fill; fill: rgb(255, 255, 255);" />
                    </svg>
                </button>

                <!-- ICÔNE CELLIERS -->
                <button class="w-full flex justify-center" wire:click="redirectToCellars">
                    <!-- BLANCHE -->
                    <svg viewBox="-20 -7 85 80" class="w-14 h-14"  xmlns="http://www.w3.org/2000/svg">
                        <path stroke='#fff' stroke-width='1' d="M23 0c12.702549 0 23 10.297451 23 23v42c0 .552285-.447715 1-1 1H1c-.552285 0-1-.447715-1-1V23C0 10.297451 10.297451 0 23 0Zm21 24v-1c0-11.59798-9.40202-21-21-21S2 11.40202 2 23v31h7v-9c0-.552285.447715-1 1-1h8v-9c0-.552285.447715-1 1-1h8v-9c0-.552285.447715-1 1-1h16ZM2 56v8h42v-8H2Zm9-10v8h33v-8H11Zm9-10v8h24v-8H20Zm9-10v8h15v-8H29Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, -1.7763568394002505e-15)" />
                    </svg>
                </button>

                <!-- Icône AddBottle -->
             <button class='hover:bg-pale-pink w-full flex justify-center'
              wire:click="redirectToAddBottle">
                    <!-- BLANCHE -->
                    <svg viewBox="-14 -7 80 67.5" class="w-14 h-14"  xmlns="http://www.w3.org/2000/svg">
                        <path stroke='#fff' stroke-width='0.7' d="M21.087 0H2.913A2.917 2.917 0 0 0 0 2.913v18.174A2.917 2.917 0 0 0 2.913 24h18.174A2.917 2.917 0 0 0 24 21.087V2.913A2.917 2.917 0 0 0 21.087 0ZM22 21.087a.915.915 0 0 1-.913.913H2.913A.915.915 0 0 1 2 21.087V2.913A.915.915 0 0 1 2.913 2h18.174a.915.915 0 0 1 .913.913ZM51.087 0H32.913A2.917 2.917 0 0 0 30 2.913v18.174A2.917 2.917 0 0 0 32.913 24h18.174A2.917 2.917 0 0 0 54 21.087V2.913A2.917 2.917 0 0 0 51.087 0ZM52 21.087a.915.915 0 0 1-.913.913H32.913a.915.915 0 0 1-.913-.913V2.913A.915.915 0 0 1 32.913 2h18.174a.915.915 0 0 1 .913.913ZM21.087 30H2.913A2.917 2.917 0 0 0 0 32.913v18.174A2.917 2.917 0 0 0 2.913 54h18.174A2.917 2.917 0 0 0 24 51.087V32.913A2.917 2.917 0 0 0 21.087 30ZM22 51.087a.915.915 0 0 1-.913.913H2.913A.915.915 0 0 1 2 51.087V32.913A.915.915 0 0 1 2.913 32h18.174a.915.915 0 0 1 .913.913Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="53" cy="48.02" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="31" cy="48.07" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="53" cy="35.92" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="51.05" cy="31" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="53" cy="41.97" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="31" cy="35.97" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="38.95" cy="31" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="32.94" cy="53" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="45" cy="31" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <path  stroke='#fff' stroke-width='2' d="M32.9 32h.01a1 1 0 1 0-1.01-.99 1 1 0 0 0 1 .99Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="31" cy="42.02" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <path  stroke='#fff' stroke-width='2' d="M51.1 52h-.01a1 1 0 0 0 0 2h.1a1 1 0 0 0-.09-2Z" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="45.04" cy="53" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <circle  stroke='#fff' stroke-width='2' cx="38.99" cy="53" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                        <path  stroke='#fff' stroke-width='1' d="M47 41h-4v-4a1 1 0 0 0-2 0v4h-4a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0v-4h4a1 1 0 0 0 0-2Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                    </svg>
                </button>
    </div>
</div>


