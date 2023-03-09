<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 04/02/2020 - 6:55 PM
 */
?>
<section id="why-us" class="why-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">
                <div class="content" data-aos="fade-up">
                    <h3><?php elang('server_rules'); ?>, <strong><?php elang('read_before_register'); ?></strong></h3>
                    <p>
                        <?php elang('read_our_rules'); ?>
                    </p>
                </div>
                <div class="accordion-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> <?php elang('rule'); ?>
                                <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                <!-- <p>
                                    <?php elang('rule'); ?>
                                </p> -->
                                <p>
                                    首先欢迎你的加入！此服务是基于azerothcore搭建的wlk3.35版本的私人服务。默认官服设定基本不会有大的改动。
                                    <!-- <?php elang('edit_on'); ?> <b>"/template/advance/tpl/rules.php"</b>. -->
                                </p>
                                <p>
                                  由于是私人服务，本意是为自己和朋友提供一个心灵的乌托邦。所以不必刻意对外宣传。当然可以邀请自己信任的朋友一起加入其中。这也是我开这个服务的初衷。
                                  </p>
                                  <p>
                                  由于是个人搭建，本服务不盈利，不商业化，不提供任何定制化的服务。
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>
                                <?php elang('rule'); ?> <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                                <p>
                                    <!-- <?php elang('rule'); ?> 2 -->
                                    QQ交流群：<code>168451710</code>
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span>
                                <?php elang('rule'); ?> <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                <p>
                                    <!-- <?php elang('rule'); ?> 3 -->
                                  服务器信息 CUP：X86 N5095 ARM 8G 电信千兆
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 align-items-stretch"
                 style='background-image: url("<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/invincible.png");background-size: auto 100%;background-position: center;background-repeat: no-repeat;'
                 data-aos="zoom-in">
            </div>
        </div>
    </div>
</section>
