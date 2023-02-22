<div class="winter-sso">
    <a
        href="<?= e($url); ?>"
        class="flex items-center py-0 px-4 m-0 w-full h-12 text-center normal-case bg-transparent bg-none rounded border border-cyan-700 border-solid cursor-pointer"
        style="font-size: 128%;"
    >
        <div class="flex items-center font-sans leading-6 text-cyan-700">
            <div class="flex justify-center items-center w-8 h-8 text-center rounded-full bg-zinc-100">
                <img
                    src="<?= e($logoUrl); ?>"
                    alt="<?= e($logoAlt); ?>"
                    class="block w-5 max-w-full h-5 align-middle"
                />
            </div>
            <div class="mr-0 ml-3 w-px h-6 text-center bg-gray-400"></div>
        </div>
        <div class="flex-1 -ml-9 font-sans leading-6 text-cyan-700">
            <p class="m-0 text-lg font-medium leading-7 cursor-pointer">
                <?= e($label); ?>
            </p>
        </div>
    </a>
</div>
