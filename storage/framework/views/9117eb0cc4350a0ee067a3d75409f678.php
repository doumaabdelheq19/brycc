<form method="POST" action="<?php echo e(route('search.results')); ?>">
    <?php echo csrf_field(); ?>
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form><?php /**PATH C:\xampp\htdocs\final-project\resources\views/search/index.blade.php ENDPATH**/ ?>