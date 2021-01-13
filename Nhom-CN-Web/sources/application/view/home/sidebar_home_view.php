<div class="col-md-4 well-sm sideB contentHomePage">
    <div>
        <ul class="nav nav-tabs" id="navtabs">
            <li class="active linktabs text-center"><a href="#tab-1" id="linksa" class="linksa" role="tab" data-toggle="tab">Top Tuần</a></li>
            <li class="linktabs text-center"><a href="#tab-2" class="linksa" role="tab" data-toggle="tab">Top Tháng</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <ul id="ullist_lablestory">
                  <?php foreach ($content['getViewLastWeek'] as $key => $top): ?>
                    <li class="toptruyen"> <span class="num"><?php echo $key+1 ?> </span><a href="?c=details&id=<?php echo $top['id'] ?>" class="textread"><?php echo $top['name_comic'] ?></a><span class="more1">Đọc: <?php echo  $top['LogID'] ?> </span></li>
                <?php endforeach ?>
<!--                             <li class="toptruyen">
                            <span class="num">1 </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread">Thuần Tình Nha Đầu Hoả Lạt Lạt </a><span class="more1">Đọc: 6775846 </span></li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li> -->
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-2">
                        <ul id="ullist_lablestory">
                            <p>tab-2</p>
                            <?php foreach ($content['getViewLastMonth'] as $key => $top): ?>
                                <li class="toptruyen"> <span class="num"><?php echo $key+1 ?> </span><a href="?c=details&id=<?php echo $top['id'] ?>" class="textread"><?php echo $top['name_comic'] ?></a><span class="more1">Đọc: <?php echo  $top['LogID'] ?> </span></li>
                            <?php endforeach ?>
<!--                             <li class="toptruyen"> <span class="num">1 </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread">Thuần Tình Nha Đầu Hoả</a><span class="more1">Đọc: 6775846 </span></li>
                            <li class="toptruyen">
                            <span class="num">1 </span><a href="http://st.thichtruyentranh.com/images/icon-m/0030/nguoi-yeu-khat-mau-cua-toi1481986720.jpg" class="textread">Thuần Tình Nha Đầu Hoả Lạt Lạt </a><span class="more1">Đọc: 6775846 </span></li>
                            <li
                            class="toptruyen"><span id="test34">Text</span></li>
                            <li>Item 4</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>