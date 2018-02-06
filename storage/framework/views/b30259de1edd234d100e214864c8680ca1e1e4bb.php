<div class="navigation-menu">
    <div class="container">
        <div class="row">
            <div class="navbar menubar">
                <ul class="slimmenu">
                    <li <?php echo e(Request::segment(1) == '' ? 'class=active' : ''); ?>><a href="<?php echo e(url('/')); ?>"><?php echo e(trans('menu.dashboard')); ?></a>

                    </li>
                    <?php
                        $active = (Request::segment(1) == 'languagemanager' || Request::segment(1) == 'region' || Request::segment(1) == 'country' || Request::segment(1) == 'tags_and_taxonomy' || Request::segment(1) == 'taxonomy' || Request::segment(1) == 'tag') ? 'active' : '';
                    ?>
                    <li class="<?php echo e($active); ?>">
                        <a href="javascript:void(0);"  role="button" aria-haspopup="false" aria-expanded="false"><?php echo e(trans('menu.configuration')); ?> <span class="caret"></span></a>
                        <ul>
                          
                            <?php
                                $active = (Request::segment(1) == 'region') ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('region.index')); ?>"><?php echo e(trans('menu.region_manager')); ?></a></li>
                            <?php
                                $active = (Request::segment(1) == 'country') ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('country.index')); ?>"><?php echo e(trans('menu.country_manager')); ?></a></li>
                            <?php
                                $active = (Request::segment(1) == 'tags_and_taxonomy' || Request::segment(1) == 'taxonomy' || Request::segment(1) == 'tag') ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>"><a href="javascript:void(0);"><?php echo e(trans('menu.tags_and_taxonomy')); ?></a>
                                <ul>
                                    <?php
                                        $active = (Request::segment(1) == 'taxonomy') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('taxonomy.index')); ?>"><?php echo e(trans('menu.taxonomies')); ?></a></li>
                                    <?php
                                        $active = (Request::segment(1) == 'tag') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('tag.index')); ?>"><?php echo e(trans('menu.tags')); ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <?php
                        $active = (Request::segment(1) == 'users' || Request::segment(1) == 'roles' || Request::segment(1) == 'permission') ? 'active' : '';
                    ?>
                    <li class="<?php echo e($active); ?>">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo e(trans('menu.users')); ?> <span class="caret"></span></a>
                        <ul>
                            <?php
                                $active = (Request::segment(1) == 'users') ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('users.index')); ?>"><?php echo e(trans('menu.manageusers')); ?></a></li>
                            <?php
                                $active = (Request::segment(1) == 'roles') ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('roles.index')); ?>"><?php echo e(trans('menu.manageuserstype')); ?></a></li>
                            <?php
                                $active = (Request::segment(1) == 'permission') ? 'active' : '';
                            ?>
                           
                        </ul>
                    </li>
                    <?php
                        $active = ( Request::segment(2) == 'create' || Request::segment(1) == 'photoalbum' || Request::segment(1) == 'photocategory' || Request::segment(1) == 'videoalbum' || Request::segment(1) == 'videocategory') ? 'active' : '';
                    ?>
                    <li class="<?php echo e($active); ?>"><a href="#" role="button" aria-haspopup="false" aria-expanded="false"><?php echo e(trans('menu.intranet')); ?><span class="caret"></span></a>
                        <ul>
                            <?php
                                $active = (Request::segment(1) == 'photoalbum' || Request::segment(1) == 'photocategory' || Request::segment(1) == 'videoalbum' || Request::segment(1) == 'videocategory') ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo e(trans('menu.gallery')); ?> </a>

                                <ul>
                                    <?php
                                        $active = (Request::segment(1) == 'photoalbum' || Request::segment(1) == 'photocategory') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>">
                                        <a href="<?php echo e(route('photoalbum.categories')); ?>"><?php echo e(trans('menu.photo_gallery')); ?></a>
                                        <ul>
                                            <?php
                                                $active = (Request::segment(1) == 'photoalbum' && Request::segment(2) == '') ? 'active' : '';
                                            ?>
                                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('photoalbum.index')); ?>"><?php echo e(trans('menu.albums_list')); ?></a></li>
                                            <?php
                                                $active = (Request::segment(1) == 'photocategory') ? 'active' : '';
                                            ?>
                                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('photocategory.index')); ?>"><?php echo e(trans('menu.photo_category_list')); ?></a></li>
                                        </ul>
                                    </li>

                                    <?php
                                        $active = (Request::segment(1) == 'videoalbum' || Request::segment(1) == 'videocategory') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>">
                                        <a  href="<?php echo e(route('videoalbum.categories')); ?>"><?php echo e(trans('menu.video_gallery')); ?></a>
                                        <ul>
                                            <?php
                                                $active = (Request::segment(1) == 'videoalbum' && Request::segment(2) == '') ? 'active' : '';
                                            ?>
                                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('videoalbum.index')); ?>"><?php echo e(trans('menu.video_list')); ?></a></li>
                                            <?php
                                                $active = (Request::segment(1) == 'videocategory') ? 'active' : '';
                                            ?>
                                            <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('videocategory.index')); ?>"><?php echo e(trans('menu.video_category_list')); ?></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                        
                        
                            
                        
                    

                    <?php
                        $active = (Request::segment(1) == 'contacts' || Request::segment(1) == 'company' || Request::segment(1) == 'contact') ? 'active' : '';
                    ?>
                    <li class="<?php echo e($active); ?>">
                        <a href="<?php echo e(route('contacts.index')); ?>" role="button" aria-haspopup="false" aria-expanded="false"><?php echo e(trans('menu.contacts')); ?> <span class="caret"></span></a>
                        <ul>
                            <?php
                                $active = (Request::segment(2) == 'grantees' || Request::segment(2) == 'ngos' || Request::segment(2) == 'cbos' || Request::segment(2) == 'others' || (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'grantee')) ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>">
                                <a href="<?php echo e(route('company.grantees')); ?>"><?php echo e(trans('menu.grantees')); ?></a>
                                <ul>
                                    <?php
                                        $active = (Request::segment(2) == 'ngos') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('company.ngos')); ?>"><?php echo e(trans('menu.ngos')); ?></a></li>
                                    <?php
                                        $active = (Request::segment(2) == 'cbos') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('company.cbos')); ?>"><?php echo e(trans('menu.cbos')); ?></a></li>
                                    <?php
                                        $active = (Request::segment(2) == 'others') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('company.others')); ?>"><?php echo e(trans('menu.others')); ?></a></li>
                                    <?php
                                        $active = (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'grantee') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('company.create',array('type'=>'grantee'))); ?>"><?php echo e(trans('menu.addnewgrantee')); ?></a></li>
                                </ul>
                            </li>
                            <?php
                                $active = (Request::segment(2) == 'vendors' || (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'vendor')) ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>">
                                <a href="<?php echo e(route('company.vendors')); ?>"><?php echo e(trans('menu.vendors')); ?></a>
                                <ul>
                                    <?php
                                        $active = (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'vendor') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('company.create',array('type'=>'vendor'))); ?>"><?php echo e(trans('menu.addnewvendors')); ?></a></li>
                                </ul>
                            </li>
                            <?php
                                $active = (Request::segment(2) == 'sgps' || (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'sgp')) ? 'active' : '';
                            ?>
                            <li class="<?php echo e($active); ?>">
                                <a href="<?php echo e(route('company.sgps')); ?>"><?php echo e(trans('menu.sgps')); ?></a>
                                <ul>
                                    <?php
                                        $active = (Request::segment(1) == 'company' && Request::segment(2) == 'create'  && Request::segment(3) == 'sgp') ? 'active' : '';
                                    ?>
                                    <li class="<?php echo e($active); ?>"><a href="<?php echo e(route('company.create',array('type'=>'sgp'))); ?>"><?php echo e(trans('menu.addnewsgp')); ?></a></li>
                                </ul>
                            </li>
                            
                                
                                
                                    
                                    
                                    
                                
                            

                        </ul>
                    </li>
                    
                    
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <a class="icon-search-mobile" href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                    <div class="input-group dropdown-menu">
                        <input type="text" class="form-control" placeholder="<?php echo e(trans('menu.search')); ?>" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
