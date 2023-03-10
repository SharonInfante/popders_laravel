<?php $__env->startSection('content'); ?>
 <div class="div-content">
    <div class="container flex flex-col bg-stone-50/40 rounded-md max-w-8xl ">
    <h1 class="text-white text-4xl font-bold text-center">Lista de Canciones</h1>
    <a href="<?php echo e(route('addSong.create')); ?>">Añadir canción</a>
    <div class="grid grid-flow-row auto-rows-max">
          <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg mb-6">
              <div class="bg-white px-4 pt-3 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <a href="<?php echo e(route('playlist.index')); ?>"><img class="rounded-full h-12 w-12" src="<?php echo e(asset('img/avatares/natalia.png')); ?>" alt="avatar"></a>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-base font-semibold leading-4 text-gray-900" id="modal-title">Canciones de Natalia</h3>
                    <div class="mt-2">
                        <a class="text-sm" href="<?php echo e(route('songDescription.show', $song->id_song)); ?>">Título: <?php echo e($song->title); ?></a>
                        <p class="text-sm">Artista: <?php echo e($song->artist); ?></p>
                        <p class="text-sm">Género: <?php echo e($song->genre); ?></p>
                        <p class="text-sm">Url: <?php echo e($song->url); ?></p>
                        <form action="<?php echo e(route('addSong.store')); ?>" method="POST">
                            <div class="flex items-center">
                                <input id="status" name="status" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="status" class="ml-2 block text-sm text-gray-900">Escuchada</label>
                              </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-2 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" class="mr-3 mt-1 inline-flex w-full justify-center rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 sm:ml-3 sm:w-auto">Editar</button>
                <button type="button" class="mr-3 mt-1 inline-flex w-full justify-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 sm:ml-3 sm:w-auto">Eliminar</button>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\popders_laravel\popders_laravel\resources\views//playlist.blade.php ENDPATH**/ ?>