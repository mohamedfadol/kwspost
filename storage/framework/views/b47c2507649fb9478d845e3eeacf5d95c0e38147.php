<div>
    <?php if($paginator->hasPages()): ?>
        <nav>
            <ul class="pagination">
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link"><?php echo app('translator')->get('pagination.previous'); ?></span>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <button type="button" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></button>
                    </li>
                <?php endif; ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item">
                        <button type="button" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next"><?php echo app('translator')->get('pagination.next'); ?></button>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link"><?php echo app('translator')->get('pagination.next'); ?></span>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\kwspost\vendor\livewire\livewire\src\views\pagination\simple-bootstrap.blade.php ENDPATH**/ ?>