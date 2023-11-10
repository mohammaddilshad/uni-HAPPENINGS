<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <a href="<?php echo e(route("home")); ?>">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </a>
        
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <li>
                    <a class="flex space-x-2 items-center hover:text-orange-900 text-sm text-orange-500"
                        href="http://127.0.0.1:8000">
                        Home
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-orange-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Happenings
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-orange-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        About Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-orange-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-orange-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Terms
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        <?php if(auth()->guard()->guest()): ?>
            <?php echo $__env->make('layouts.partials.header-right-guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
            <?php echo $__env->make('layouts.partials.header-right-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</header><?php /**PATH C:\xampp\htdocs\uni-happenings\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>