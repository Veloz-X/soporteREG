<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('my_account')); ?>">
                <img src="<?php echo e(asset(setting('app_logo'))); ?>" />
            </a>
        </div>
        <div class="header__pane ml-auto"></div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <ul class="header-menu nav text-capitalize">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="<?php echo e(route('frontend')); ?>">
                        <i class="fas fa-book fa-fw"></i>
                        <span><?php echo e(__('knowledge_base')); ?></span>
                    </a>
                </li>
                <?php if(Auth()->User()->isEmployee()): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    <i class="fas fa-tachometer-alt fa-fw"></i>
                    <span><?php echo e(__('Dashboard')); ?></span>
                </a>
                </li>
                <?php endif; ?>

                <?php if(isDemo()): ?>
                    <li>
                        <a class="btn btn-success text-white btn-sm mr-3" href="#">
                            <?php echo e(__('Buy NOW')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="app-header-right">
            <ul class="header-menu nav text-capitalize">
                <v-notifications class="pt-2"></v-notifications>
                <li class="nav-item dropdown no-arrow d-lg-inline text-center text-white ml-3 rounded bg-light">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" width="24" src="<?php echo e(Auth::user()->avatar()); ?>">
                        <span class="ml-2 text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo e(route('my_account.profile')); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            <?php echo e(__('Profile')); ?>

                        </a>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            <?php echo e(__('Logout')); ?>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"><?php echo csrf_field(); ?></form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/my_account/layouts/header.blade.php ENDPATH**/ ?>