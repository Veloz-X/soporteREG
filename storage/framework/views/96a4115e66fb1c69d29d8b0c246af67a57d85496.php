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
                <li>
                    <a target="_blank" href="<?php echo e(route('frontend')); ?>" >
                        <i class="far fa-fw fa-eye"></i>
                        <span><?php echo e(__('Home page')); ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fas fa-fw fa-ticket-alt"></i>
                    <span><?php echo e(_('My tickets')); ?></span></a>
                </li>
                <li>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <?php echo e(__('Logout')); ?>

                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>





<?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/layouts/sidebar.blade.php ENDPATH**/ ?>