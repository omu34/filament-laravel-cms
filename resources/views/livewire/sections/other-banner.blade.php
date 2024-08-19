<div class="pt-16 relative w-full h-[350px] sm:h-[400px] lg:h-[500px] bg-cover bg-top" :style="'background-image: url(\'' + slide + '\');'">
    <div class="absolute inset-0 bg-black opacity-65"></div>
    <div class="text-white relative w-full h-full px-16 lg:px-64 py-10 sm:py-28 lg:py-48">
        <div class="flex flex-col items-start justify-center h-full gap-3 md:gap-6">
            <h1 x-text="title"></h1>
            <p class="text-white" x-text="subTitle"></p>
        </div>
    </div>
</div>
