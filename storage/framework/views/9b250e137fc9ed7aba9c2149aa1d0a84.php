<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="">
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="<?php echo e($post->image); ?>">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a href="#" class="bg-red-600 
                text-white 
                rounded-xl px-3 py-1 text-sm mr-3">
                Laravel
            </a>
            <p class="text-gray-500 text-sm"><?php echo e($post->published_at); ?></p>
        </div>
        <a href="#" class="text-xl font-bold text-gray-900"><?php echo e($post->title); ?></a>
    </div>

</div><?php /**PATH C:\xampp\htdocs\uni-happenings\resources\views/components/posts/post-card.blade.php ENDPATH**/ ?>