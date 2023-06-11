<?php

?>
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-5 wthree_banner_bottom_left">
            <div class="video-img">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                </a>
            </div>
            <!-- pop-up-box -->
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!--//pop-up-box -->
            <div id="small-dialog" class="mfp-hide">
                <iframe src="https://www.youtube.com/embed/PZKFwlGM0JY"></iframe>
                 
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
        </div>
        <div class="col-md-7 wthree_banner_bottom_right">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Sueteres</a>
                    </li>
                    <li role="presentation">
                        <a href="#chamarras" role="tab" id="chamarras-tab" data-toggle="tab" aria-controls="chamarras">Chamarras</a>
                    </li>
                    <li role="presentation">
                        <a href="#camisas" role="tab" id="camisas-tab" data-toggle="tab" aria-controls="camisas">Camisas</a>
                    </li>
                    <li role="presentation">
                        <a href="#blusas" role="tab" id="blusas-tab" data-toggle="tab" aria-controls="blusas">Blusas</a>
                    </li>
                    <li role="presentation">
                        <a href="#vestidos" role="tab" id="vestidos-tab" data-toggle="tab" aria-controls="vestidos">Vestidos</a>
                    </li>
                    <li role="presentation">
                        <a href="#pantalones" role="tab" id="pantalones-tab" data-toggle="tab" aria-controls="pantalones">Pantalones</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showSueteresProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <?php for ($i = 1; $i <= 8; ++$i): ?>
                                            <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                        <?php endfor; ?>
                                    </div>
                                    <div style="margin-top: 10px; margin-bottom: 10px">
                                        <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                        <h3> $ <?php echo $mobile['price'];?></h3>
                                    </div>
                                    <div class="" style="margin-top: 10px">
                                        <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="chamarras" aria-labelledby="chamarras-tab">
                        <div class="agile_ecommerce_tabs">
                            <div class="agile_ecommerce_tabs">
                                <?php $allPro = $productObject->showChamarrasProduct(); if ($allPro): ?>
                                    <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                    <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                                <?php endfor; ?>
                                            </div>
                                            <div style="margin-top: 10px; margin-bottom: 10px">
                                                <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                                <h3> $ <?php echo $mobile['price'];?></h3>
                                            </div>
                                            <div class="" style="margin-top: 10px">
                                                <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="blusas" aria-labelledby="blusas-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showBlusasProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> $ <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vestidos" aria-labelledby="vestidos-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showVestidosProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> $ <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="camisas" aria-labelledby="camisas-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showCamisasProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> $ <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                   
                    <div role="tabpanel" class="tab-pane fade" id="pantalones" aria-labelledby="pantalones-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showPantalonesProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> $ <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		<div class="clearfix"> </div>


    </div>
</div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
