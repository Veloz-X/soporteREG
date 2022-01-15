<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div> 
    <div class="scrollbar-sidebar pt-2">
        <div class="app-sidebar__inner scrollbar-container">
            <ul class="vertical-nav-menu">

                <?php $__currentLoopData = backendMenu('sidebar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($item['permissions']) != 0 ): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies($item['permissions'])): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                    <li  <?php if($item['sub_items']): ?> class="has-child collapse show" <?php endif; ?> >

                        <?php if($item['sub_items']): ?>
                            
                            <a class="collapsed text-truncate item-header" href="#item-<?php echo e($item['name']); ?>" data-toggle="collapse">
                                <i class="<?php echo e($item['icon']); ?>"></i>
                                <span><?php echo e(__($item['name'])); ?></span>
                            </a>
                            
                        <?php else: ?>
                            <?php if( isset($item['vue_route']) ): ?>
                            <a href="<?php echo e(route('dashboard').$item['vue_route']); ?>">
                                <i class="<?php echo e($item['icon']); ?>"></i>
                                <span><?php echo e(__($item['name'])); ?></span>
                            </a>
                            <?php else: ?>
                            <a 
                                href="<?php if($item['route']): ?> <?php echo e(route($item['route'])); ?> <?php else: ?> <?php echo e($item['route']); ?><?php endif; ?>"
                                <?php if($item['target']): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?> >
                                <i class="<?php echo e($item['icon']); ?>"></i>
                                <span><?php echo e(__($item['name'])); ?></span>
                            </a>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if($item['sub_items']): ?>

                        <ul class="collapse" id="item-<?php echo e($item['name']); ?>" aria-expanded="false">
                            <li>
                            <a 
                            href="<?php if($item['route']): ?> <?php echo e(route($item['route'])); ?> <?php else: ?> <?php echo e($item['route']); ?><?php endif; ?>"
                            <?php if($item['target']): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
                            >
                            <i class="<?php echo e($item['icon']); ?>"></i>
                            <span> <?php if(isset($item['label'])): ?> <?php echo e(__($item['name'])); ?><?php else: ?> <?php echo e(__($item['name'])); ?> <?php endif; ?> </span>
                             </a>
                            </li>
                       
                        <?php $__currentLoopData = $item['sub_items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($subitem['permissions']) != 0 ): ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies($subitem['permissions'])): ?>
                                    <?php continue; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <li>
                            <a 
                                href="<?php if($subitem['route']): ?> <?php echo e(route($subitem['route'])); ?> <?php else: ?> <?php echo e($subitem['route']); ?><?php endif; ?>"
                                <?php if($subitem['target']): ?> target="<?php echo e($subitem['target']); ?>" <?php endif; ?>
                                >
                                <i class="<?php echo e($subitem['icon']); ?>"></i>
                                <span><?php echo e(__($subitem['name'])); ?></span>
                            </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <li>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <span><?php echo e(__('Logout')); ?></span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>