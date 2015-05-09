<div class="navigation-bar ">
    <div class="navigation-bar-content container">
        <a href="#" class="element"><span class="icon-accessibility"></span> SMK Karya Pembangunan <sup></sup></a>
        <span class="element-divider"></span>

        <a class="element1 pull-menu" href="#"></a>
        <ul class="element-menu">
            <?php $role=$this->session->userdata('id_role');
            $header=$this->db->query("select*from adm_menu join adm_akses on adm_akses.id_menu=adm_menu.id_menu where id_role='$role' and sub='0' and status='1'")->result();
            foreach($header as $header){
              $sub=$header->id_menu;
              $count=$this->db->query("select*from adm_menu join adm_akses on adm_akses.id_menu=adm_menu.id_menu where id_role='$role' and sub='$sub' and status='1'")->num_rows();
              if($count==0){
              ?>
            <li><a class="dropdown-toggle" href="<?php echo base_url()?><?php echo $header->controllers.'/'.$header->function;?>">
                    <?php echo $header->nama_menu;?> 
                </a>
            </li>
              <?php }else {?>
            <li>
                <a href="#" class="dropdown-toggle"><?php echo $header->nama_menu;?></a>
                <ul class="dropdown-menu" data-role="dropdown">
                <?php $sub_menu=$this->db->query("select*from adm_menu where sub='$sub'")->result();
                  foreach($sub_menu as $sm){?>
                  <li><a href="<?php echo base_url()?><?php echo $sm->controllers.'/'.$sm->function;?>"><?php echo $sm->nama_menu;?></a></li>
                <?php
                  }
                  ?>
                    
                </ul>
            </li>
              <?php }} ?>
            <!--<li>
                <a class="dropdown-toggle" href="#">Base CSS</a>
                
            </li>
            <li>
                <a class="dropdown-toggle"  href="#">Components</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="tiles.html">Tiles</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Navigation</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="navbar.html">Navigation Bar</a></li>
                            <li><a href="menus.html">Menus</a></li>
                            <li><a href="fluent-menu.html">Fluent Menu</a></li>
                            <li><a href="sidebar.html">Sidebar</a></li>
                            <li><a href="tab-control.html">Tab Control</a></li>
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="buttons.html#_set">Button Set</a></li>
                            <li><a href="buttons.html#_breadcrumbs">Breadcrumbs</a></li>
                            <li><a href="wizard.html">Wizard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Visualisation</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="rating.html">Rating</a></li>
                            <li><a href="progress-bar.html">Progress Bar</a></li>
                            <li><a href="scroll.html">Scroll Bar</a></li>
                            <li><a href="slider.html">Slider</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="treeview.html">TreeView</a></li>
                            <li><a href="lists.html">Lists</a></li>
                            <li><a href="hint.html">Hint</a></li>
                            <li><a href="balloon.html">Balloon</a></li>
                            <li><a href="notices.html">Notices</a></li>
                            <li><a href="stepper.html">Stepper</a></li>
                            <li><a href="panels.html">Panel</a></li>
                            <li><a href="streamer.html">Streamer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Date and Time</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="datepicker.html">DatePicker</a></li>
                            <li><a href="times.html">Times</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Information</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="window.html">Window</a></li>
                            <li><a href="dialog.html">Dialog</a></li>
                            <li><a href="notify.html">Notify</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Third-party</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="dataTables.html">DataTables</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="dropdown-toggle"  href="#">Community</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li class="disabled"><a href="http://blog.metroui.net">Blog</a></li>
                    <li class="disabled"><a href="http://forum.metroui.net">Community Forum</a></li>
                    <li class="divider"></li>
                    <li><a href="https://github.com/olton/Metro-UI-CSS">Github</a></li>
                    <li class="divider"></li>
                    <li><a href="https://github.com/olton/Metro-UI-CSS/blob/master/LICENSE">License</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle fg-yellow">Examples</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="examples.html">Top page</a></li>
                    <li class="divider"></li>

                    <li>
                        <a href="#" class="dropdown-toggle">General</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="examples.html#__table__">Table</a></li>
                            <li><a href="examples.html#__form__">Form</a></li>
                            <li><a href="examples.html#__buttons__">Buttons</a></li>
                            <li><a href="examples.html#__image__">Images</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">Navigation</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="examples.html#__navbar__">Navigation bar</a></li>
                            <li><a href="examples.html#__dropdown__">Dropdown menu</a></li>
                            <li><a href="examples.html#__sidebar__">Sidebar</a></li>
                            <li><a href="examples.html#__tabs__">Tab control</a></li>
                            <li><a href="examples.html#__accordion__">Accordion</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">Visualization</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="examples.html#__tile__">Tiles</a></li>
                            <li><a href="examples.html#__rating__">Rating</a></li>
                            <li><a href="examples.html#__progress__">Progress bar</a></li>
                            <li><a href="examples.html#__scroll__">Scroll bar</a></li>
                            <li><a href="examples.html#__slider__">Slider</a></li>
                            <li><a href="examples.html#__carousel__">Carousel</a></li>
                            <li><a href="examples.html#__tree__">Tree view</a></li>
                            <li><a href="examples.html#__lists__">List view</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">Visualization 2</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="examples.html#__hint__">Hint</a></li>
                            <li><a href="examples.html#__balloon__">Balloon</a></li>
                            <li><a href="examples.html#__notice__">Notice</a></li>
                            <li><a href="examples.html#__calendar__">Calendar</a></li>
                            <li><a href="examples.html#__times__">Countdown &amp; Times</a></li>
                            <li><a href="examples.html#__window__">Windows</a></li>
                            <li><a href="examples.html#__streamer__">Streamer</a></li>
                            <li><a href="examples.html#__panel__">Panel</a></li>
                            <li><a href="examples.html#__stepper__">Stepper</a></li>
                        </ul>
                    </li>
                </ul>
            </li>-->
        </ul>
                    <?php $log=$this->session->userdata('login'); if(empty($log)){?>
                    <div class="no-tablet-portrait place-right">
                        <span class="element-divider"></span>
                        <div class="element place-right">
                            <a class="dropdown-toggle" id="createFlatWindow" href="#"><span class="icon-cog"></span> Login</a>                            
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="no-tablet-portrait">
                        <span class="element-divider"></span>
                        <!--<a class="element brand" href="#"><span class="icon-spin"></span></a>
                        <a class="element brand" href="#"><span class="icon-printer"></span></a>
                        <span class="element-divider"></span>

                        <!--<div class="element input-element">
                            <form>
                                <div class="input-control text">
                                    <input type="text" placeholder="Search...">
                                    <button class="btn-search"></button>
                                </div>
                            </form>
                        </div>-->

                        <div class="element place-right">
                            <a class="dropdown-toggle" href="#"><span class="icon-cog"></span></a>
                            <ul class="dropdown-menu place-right" data-role="dropdown">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Ganti Password</a></li>
                                <li><a href="#">Logout</a></li>
                                
                            </ul>
                        </div>
                        <span class="element-divider place-right"></span>
                        <button class="element image-button image-left place-right">
                            Sergey Pimenov
                            <img src="<?php echo base_url()?>docs/images/me.jpg">
                        </button>
                    </div>
                    <?php } ?>
    </div>
</div>
<script type="text/javascript">
                        $("#createFlatWindow").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: "<i class='icon-user-3'></i>",
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<form class="user-input" method="POST" action="<?php echo base_url()?>login/do_login">' +
                                            '<label>Login</label>' +
                                            '<div class="input-control text"><input type="text" name="username"><button class="btn-clear"></button></div>' +
                                            '<label>Password</label>'+
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                                            
                                            '<div class="form-actions">' +
                                            '<button class="button success">Login</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("User login");
                                    $.Dialog.content(content);
                                }
                            });
                        });
</script>
