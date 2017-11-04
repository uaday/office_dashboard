<?php
/**
 * Created by PhpStorm.
 * User: Sudipta
 * Date: 11/5/2017
 * Time: 12:45 AM
 */
?>

<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Dashboard</h2>
    </div>
</div>
<section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-contract"></i></div>
                            <strong>Total Project</strong>
                        </div>
                        <div class="number dashtext-1">8</div>
                    </div>
                    <div class="progress">
                        <div role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0"
                             aria-valuemax="100" class="progress-bar dashbg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-contract"></i></div>
                            <strong>Complete Project</strong>
                        </div>
                        <div class="number dashtext-2">3</div>
                    </div>
                    <div class="progress">
                        <div role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0"
                             aria-valuemax="100" class="progress-bar dashbg-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-paper-and-pencil"></i></div>
                            <strong>Running Project</strong>
                        </div>
                        <div class="number dashtext-3">5</div>
                    </div>
                    <div class="progress">
                        <div role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0"
                             aria-valuemax="100" class="progress-bar dashbg-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-writing-whiteboard"></i></div>
                            <strong>Upcoming Project</strong>
                        </div>
                        <div class="number dashtext-4">1</div>
                    </div>
                    <div class="progress">
                        <div role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                             aria-valuemax="100" class="progress-bar dashbg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="margin-bottom-sm">
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-lg-6">
                <div class="stats-with-chart-1 block">
                    <div class="title"><strong class="d-block">Our Total Application User</strong><span class="d-block"></span>
                    </div>
                    <div class="row d-flex align-items-end justify-content-between">
                        <div class="col-4">
                            <div class="text"><strong class="d-block dashtext-3">1650</strong><span class="d-block">October 2017</span>
                                <small class="d-block">1520</small>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="bar-chart chart">
                                <canvas id="salesBarChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="col-lg-">-->
<!--                <div class="messages-block block">-->
<!--                    <div class="title"><strong>New Messages</strong></div>-->
<!--                    <div class="messages">-->
<!--                        <a href="#" class="message d-flex align-items-center">-->
<!--                            <div class="content"><strong class="d-block">Admin</strong><span class="d-block">Today Scrum meeting at 11.00 AM.</span>-->
<!--                                <small class="date d-block">10:00am</small>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="message d-flex align-items-center">-->
<!--                            <div class="content"><strong class="d-block">Admin</strong><span class="d-block">Weekly Meeting at 6.00 AM.</span>-->
<!--                                <small class="date d-block">10:00am</small>-->
<!--                            </div>-->
<!--                        </a><a href="#" class="message d-flex align-items-center">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-lg-6">
                <div class="stats-3-block block d-flex">
                    <div class="stats-3"><strong class="d-block">90 Days</strong><span class="d-block">Brac Consultancy</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 70%; height: 2px" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                        </div>
                    </div>
                    <div class="stats-3 d-flex justify-content-between text-center">
                        <?php
                        $date1=date_create("2017-11-09");
                        $date=date('Y-m-d');
                        $date2=date_create($date);
                        $diff=date_diff($date2,$date1);
                        $diff_day=$diff->format("%R%a");
                        ?>
                        <div class="item"><strong class="d-block strong-sm">2017-11-09</strong><span class="d-block span-sm">Submission</span>

                        </div>
                        <div class="item"><strong class="d-block strong-sm"><?= $diff_day?></strong><span class="d-block span-sm">Days Left</span>
                        </div>
                    </div>
                </div>
                <div class="stats-3-block block d-flex">
                    <div class="stats-3"><strong class="d-block">100 Days</strong><span class="d-block">Sajida Home Care</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 60%; height: 2px" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                        </div>
                    </div>
                    <div class="stats-3 d-flex justify-content-between text-center">
                        <?php
                        $date1=date_create("2017-12-01");
                        $date=date('Y-m-d');
                        $date2=date_create($date);
                        $diff=date_diff($date2,$date1);
                        $diff_day=$diff->format("%R%a");
                        ?>
                        <div class="item"><strong class="d-block strong-sm">2017-12-01</strong><span class="d-block span-sm">Submission</span>

                        </div>
                        <div class="item"><strong class="d-block strong-sm"><?= $diff_day?></strong><span class="d-block span-sm">Days Left</span>
                        </div>
                    </div>
                </div>
                <div class="stats-3-block block d-flex">
                    <div class="stats-3"><strong class="d-block">90 Days</strong><span class="d-block">Momenta V 1.2</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 45%; height: 2px" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                        </div>
                    </div>
                    <div class="stats-3 d-flex justify-content-between text-center">
                        <?php
                        $date1=date_create("2017-12-05");
                        $date=date('Y-m-d');
                        $date2=date_create($date);
                        $diff=date_diff($date2,$date1);
                        $diff_day=$diff->format("%R%a");
                        ?>
                        <div class="item"><strong class="d-block strong-sm">2017-12-05</strong><span class="d-block span-sm">Submission</span>

                        </div>
                        <div class="item"><strong class="d-block strong-sm"><?= $diff_day?></strong><span class="d-block span-sm">Days Left</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer__block block no-margin-bottom">
        <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom"><?php echo date('Y')?> &copy; Design & Develop By <a href="http://www.appinionbd.com/" target="_blank">Appinion BD Limited</a>.
            </p>
        </div>
    </div>
</footer>
