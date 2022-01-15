<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('dashboard')); ?>">
                <img src="<?php echo e(asset(setting('app_logo'))); ?>" />
            </a>
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
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any('manage_articles','manage_categories','manage_employees','manage_customers')): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <?php echo e(__('new')); ?> <i class="fa fa-angle-down mx-2"></i>
                    </a>
                    <div class="dropdown-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_articles')): ?>
                        <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>#/articles/new"><?php echo e(__('article')); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_categories')): ?>
                        <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>#/categories"><?php echo e(__('category')); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_employees')): ?>
                        <a class="dropdown-item" href="<?php echo e(route('dashboard.employees')); ?>"><?php echo e(__('employee')); ?></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_customers')): ?>
                        <a class="dropdown-item" href="<?php echo e(route('dashboard.customers')); ?>"><?php echo e(__('customer')); ?></a>
                        <?php endif; ?>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
            <search-bar :searchtype="['articles','tickets', 'customers', 'categories']" placeholder="<?php echo e(__('Search for')); ?>"></search-bar>
        </div>
        <div class="app-header-right">
            <ul class="header-menu nav text-capitalize">

                <?php if(isDemo()): ?>
                    <li>
                        <a class="btn btn-success text-white btn-sm mr-3" href="#">
                            <?php echo e(__('Buy NOW')); ?>

                        </a>
                    </li>
                <?php endif; ?>

                <v-notifications></v-notifications>
                <li class="nav-item dropdown bg-light rounded">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mx-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                        <img class="img-profile rounded-circle" width="24" src="<?php echo e(Auth::user()->avatar()); ?>">
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo e(route('dashboard.profile')); ?>">
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
</div><?php /**PATH /home/fastbrao/soporte.recargaloya.com/resources/views/dashboard/layouts/header.blade.php ENDPATH**/ ?>