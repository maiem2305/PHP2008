
<div class="col-md-4 well-sm sideB">
            <div class="titlesideB"><span class="glyphicon glyphicon-th"> </span>
                <h3 class="text-center pdh3">Truyện mới cập nhập</h>
                </div>
                <div class="list-ct-mâng">
                    <div class="sideB-ctRight">
                       <ul class="ulListstory_right">
                        <?php foreach ($sidebar['getUpdate'] as $key => $value): ?>
                        <li>
                            <div class="divthumb"><a href="?c=details&id=<?php echo $value['id'] ?>" title="<?php echo $value['name_comic'] ?>"><img alt="<?php echo $value['images'] ?>" src="<?php echo IMG_PATH_UPLOAD.$value['images'] ?>" /></a></div>
                            <div class="newsContent"><a class="tile" href="?c=details&id=<?php echo $value['id'] ?>" title="<?php echo $value['name_comic'] ?>"><?php echo $value['name_comic'] ?></a> 
                                <?php $cut = explode(", ",$value['category']); ?>
                                <span>Thể loại: 
                                    <?php foreach ($cut as $key => $cut1): ?>
                                        <a href="?c=action&m=category&cat=<?php echo $cut1 ?>" title="<?php echo $cut1 ?>"><?php echo $cut1 ?></a>, 
                                     <?php endforeach ?>
                                </span>
                                 <span>Tác giả: <a href="?c=action&m=authors&author=<?php echo $value['name_author'] ?>" rel="nofollow" title="Thiên Tằm Thổ Đậu"><?php echo $value['name_author'] ?></a></span></div>
                        </li>
                        <?php endforeach ?>
                        <!-- <li>
                            <div class="divthumb"><a href="/ubel-blatt/969.html" title="Ubel Blatt"><img alt="Ubel Blatt" src="http://st.thichtruyentranh.com/images/icon-m/0009/ubel-blatt1416857322.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/ubel-blatt/969.html" title="Ubel Blatt">Ubel Blatt</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/fantasy.html" title="Fantasy">Fantasy</a>, <a href="/seinen.html" title="Seinen">Seinen</a>, <a href="/magic.html" title="Magic">Magic</a></span> <span>Tác giả: <a href="/tac-gia/shiono-etorouji.html" rel="nofollow" title="Shiono Etorouji">Shiono Etorouji</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/nguoi-trong-giang-ho/4887.html" title="Người trong giang hồ"><img alt="Người trong giang hồ" src="http://st.thichtruyentranh.com/images/icon-m/0023/nguoi-trong-giang-ho1420477150.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/nguoi-trong-giang-ho/4887.html" title="Người trong giang hồ">Người trong giang hồ</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/manhua.html" title="Manhua">Manhua</a>, <a href="/martial-arts.html" title="Martial Arts">Martial Arts</a></span> <span>Tác giả: <a href="/tac-gia/nguu-lao.html" rel="nofollow" title="Ngưu Lão">Ngưu Lão</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/ane-naru-mono/7948.html" title="Ane Naru Mono"><img alt="Ane Naru Mono" src="http://st.thichtruyentranh.com/images/icon-m/0012/ane-naru-mono1467558708.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/ane-naru-mono/7948.html" title="Ane Naru Mono">Ane Naru Mono</a> <span>Thể loại: <a href="/ecchi.html" title="Ecchi">Ecchi</a>, <a href="/romance.html" title="Romance">Romance</a>, <a href="/shounen.html" title="Shounen">Shounen</a>, <a href="/slice-of-life.html" title="Slice of Life">Slice of Life</a>, <a href="/supernatural.html" title="Supernatural">Supernatural</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/dau-chien-cuong-trieu/9056.html" title="Đấu Chiến Cuồng Triều"><img alt="Đấu Chiến Cuồng Triều" src="http://st.thichtruyentranh.com/images/icon-m/0032/dau-chien-cuong-trieu1515394116.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/dau-chien-cuong-trieu/9056.html" title="Đấu Chiến Cuồng Triều">Đấu Chiến Cuồng Triều</a> <span>Thể loại: <a href="/adult.html" title="Adult">Adult</a>, <a href="/fantasy.html" title="Fantasy">Fantasy</a>, <a href="/manhua.html" title="Manhua">Manhua</a></span> <span>Tác giả: <a href="/tac-gia/kho-lau-tinh-linh.html" rel="nofollow" title="Khô Lâu Tinh Linh">Khô Lâu Tinh Linh</a></span></div>
                        </li>
                        <li>
                            <div class="divthumb"><a href="/tu-chan-tu-van-nien/8516.html" title="Tu Chân Tứ Vạn Niên"><img alt="Tu Chân Tứ Vạn Niên" src="http://st.thichtruyentranh.com/images/icon-m/0004/tu-chan-tu-van-nien1476437584.jpg" /></a></div>
                            <div class="newsContent"><a class="tile" href="/tu-chan-tu-van-nien/8516.html" title="Tu Chân Tứ Vạn Niên">Tu Chân Tứ Vạn Niên</a> <span>Thể loại: <a href="/action.html" title="Action">Action</a>, <a href="/adventure.html" title="Adventure">Adventure</a>, <a href="/fantasy.html" title="Fantasy">Fantasy</a>, <a href="/manhua.html" title="Manhua">Manhua</a></span></div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div></div>