<?php get_header(); ?>
    <section class="w-full relative block bg-[url(./img/bgblobs.svg)] bg-no-repeat bg-cover bg-bottom flex flex-col items-center justify-center" id="hero">
      <div class="items-center justify-center w-10/12 md:grid md:grid-cols-2 flex flex-col gap-2">
        <div class="flex flex-col gap-4 w-auto">
          <h1 class="text-[#310C4F] font-black text-2xl md:text-7xl font-sans text text-wrap">
            Cuentos infantiles en Kamishibai
          </h1>
          <p class="max-w-96">
            Mediante la literatura vincularemos amorosamente a niñ@s con su entorno natural.
          </p>
          <a class="flex max-w-xs rounded-lg px-8 py-4 bg-[#E9E66B] text-[#4D266C] items-center justify-center gap-2">
              Ver Más <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"><path d="m18 8 4 4m0 0-4 4m4-4H2"></path></svg>
          </a>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/img/butai.webp" alt="Butai">
      </div>
    </section>

    <!-- Cuenta Cuentos -->
    <div class="w-full flex flex-row items-center justify-center py-4 my-4 relative">
      <div class="absolute z-0 w-full h-auto object-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/decorador.avif" alt="Decorador">
      </div>
      <div class="items-center justify-center w-10/12 md:grid md:grid-cols-2 flex flex-col gap-2 relative z-10">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentacuentos.webp" alt="Cuenta Cuentos">
        <div class="flex flex-col gap-4">
          <h2 class="text-[#310C4F] font-black text-4xl shadow-xl shadow-white font-sans">
            Cuenta Cuentos
          </h2>
          <p>
            En Ikigai, llevamos la magia de la narración de cuentos a un nivel completamente nuevo con la técnica del Kamishibai. Esta antigua forma de contar historias japonesa combina teatro y arte visual para sumergir a los pequeños en un viaje lleno de color y emociones.
          </p>
          <a class="flex flex-row w-auto rounded-lg px-8 py-4 bg-[#E9E66B] text-[#4D266C]  items-center justify-center gap-2">
            Ver Más <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor"><path d='m18 8 4 4m0 0-4 4m4-4H2'/></svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Fotos -->
    <section class="w-full">
      <img src="<?php bloginfo('template_directory'); ?>/img/tiraimagenes.avif" alt="Imagenes cuenta cuentos" class="w-full">
    </section>

    <!-- Distribuidores -->
    <section class="grid grid-cols-3 gap-1">
      <div class="flex items-center justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentos/b1.jpg">
      </div>
      <div class="flex items-center justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentos/b2.jpg">
      </div>
      <div class="flex items-center justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentos/b3.jpg">
      </div>
      <div class="flex items-center justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentos/b4.jpg">
      </div>
      <div class="flex items-center justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentos/b5.jpg">
      </div>
      <div class="flex items-center justify-center">
        <img src="<?php bloginfo('template_directory'); ?>/img/cuentos/b6.jpg">
      </div>
    </section>

    <!-- Galería -->
    <section id="gallery" class="flex w-full flex-row items-center justify-center my-10 p-10">
      
    </section>

    <!-- Instagram -->
    <section class="w-full flex flex-row justify-center items-center">
      
    </section>

<?php get_footer(); ?>
