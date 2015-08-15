<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/page.css">
</head>
<body>
    <div id="wap">  
    </div>
    <div id="login_page_father">
        <img src="<?php echo (IMG_URL); ?>/login_bg.png">
        <a id="close" href=""></a>
            <div id="login_content">
                <img id="login_logo" src="<?php echo (IMG_URL); ?>/new.png">
                <form action="" method="post">
                    <div id="user_name_d">
                        <img class="l" src="<?php echo (IMG_URL); ?>/login_img.png">
                        <input id="user_name" type="text">
                    </div>
                    <div id="password_d">
                        <img class="l" src="<?php echo (IMG_URL); ?>/pass_img.png">
                        <input id="password" type="password">
                    </div>
                    <div id="phone_d">
                        <img style="float:left;margin:10px 6px 0 0;" src="<?php echo (IMG_URL); ?>/phone.png">
                        <input id="phone" type="text">
                    </div>
                    <div id="qq_d">
                        <img style="float:left;margin:10px 6px 0 0;" src="<?php echo (IMG_URL); ?>/qq.png">
                        <input id="qq" type="text">
                    </div>
                    <div id="behavior_d">
                        <img style="float:left;" src="<?php echo (IMG_URL); ?>/behavior.png">
                        <div>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </div>  
                    </div>
                </form>
                <a id="login_sub" href="">登录</a>
                <a id="skip" href="">跳过</a>
                <a id="yes" href="">确认</a>
                <p id="warming">
                    你输入的帐号/密码格式有误
                </p>
            </div>
        </div>
    <div class="big_header">
        <div class="header" id="header">
            <div class="header_container">
                <ul class="nav">
                    <li class="cqupt">
                        <img src="<?php echo (IMG_URL); ?>/cqupt.png">
                        <img src="<?php echo (IMG_URL); ?>/cqupt_f.png">
                    </li>
                    <li class="index">
                        <a href="index.html">首页</a>
                    </li>
                    <li class="map">
                        <a>重邮地图</a>
                    </li>
                    <li>
                        <a href="data.html">大数据</a>
                    </li>
                    <li class="page_t">
                        <a href="page.html">重邮百科</a>
                    </li>
                    <li>
                        <a href="windcolor.html">重邮风采</a>
                    </li>
                    <li>
                        <a href="">大声HI</a>
                    </li>
                    <li class="last">
                        <a href="">关于我们</a>
                    </li>
                    <li id="login1">
                        <a>新生登录</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header" id="H">
            <div class="header_container">
                <ul class="nav">
                    <li class="cqupt">
                        <img src="<?php echo (IMG_URL); ?>/cqupt.png">
                        <img src="<?php echo (IMG_URL); ?>/cqupt_f.png">
                    </li>
                    <li class="index">
                        <a href="index.html">首页</a>
                    </li>
                    <li class="map">
                        <a href="map.html">重邮地图</a>
                    </li>
                    <li>
                        <a href="data.html">大数据</a>
                    </li>
                    <li class="page_t">
                        <a href="page.html">重邮百科</a>
                    </li>
                    <li>
                        <a href="windcolor.html">重邮风采</a>
                    </li>
                    <li>
                        <a href="">大声HI</a>
                    </li>
                    <li class="last">
                        <a href="">关于我们</a>
                    </li>
                    <li id="login2">
                        <a>新生登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="timer">
        <img src="<?php echo (IMG_URL); ?>/maptimerbg.png">
        <div class="timer_container">
            <img id="cloud01" class="cloud01" src="<?php echo (IMG_URL); ?>/cloud01.png">
            <img id="cloud02" class="cloud02" src="<?php echo (IMG_URL); ?>/cloud03.png">
            <img id="cloud03" class="cloud03" src="<?php echo (IMG_URL); ?>/cloud04.png">
            <img id="cloud04" class="cloud04" src="<?php echo (IMG_URL); ?>/cloud05.png">
            <div class="logo"></div>
            <img class="car" src="<?php echo (IMG_URL); ?>/car.png">
            <img src="<?php echo (IMG_URL); ?>/hotball.png"class="hotball">
            <img class="line"src="<?php echo (IMG_URL); ?>/map_line.png">
        </div>
    </div>
    <div class="container">
        <img src="<?php echo (IMG_URL); ?>/mapground.png">
        <div class="container_content">
            <img class="line_right01" src="<?php echo (IMG_URL); ?>/line_right01.png">
            <div class="mapwrapper">
                <a class="active" id = "btu_2D">新生攻略</a>
                <a id = "btu_3D">学生组织</a>
                <img src="<?php echo (IMG_URL); ?>/know_t.png" alt="" class="maptitle">
                <img src="<?php echo (IMG_URL); ?>/mapbg.png" class= "mapbg">
                <div class = "mapstatic">
                    <div id="D2map" class="page">
                        <div class="page_top">
                            <ul class="page_ul" id="page_ul">
                                <li class="page_li_first"><a >入学须知</a></li>
                                <li class="page_li"><a class="page_active">群号信息</a></li>
                                <li class="page_li"><a >乘车路线</a></li>
                                <li class="page_li"><a >校车</a></li>
                                <li class="page_li"><a>宿舍情况</a></li>
                                <li class="page_li"><a>衣食住行</a></li>
                            </ul>
                        </div>
                        <div class="page_mid_big" id="page_choose">
                            <div class="page_mid" style="display:none;">
                                <div class="page_mid_mid">
                                    <ul class="page_mid_mid_ul" style="width:912px;">
                                        <li ><p><strong>入群须知 : 见附件 </strong></p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" >
                                <div style="height:515px" id="people">
                                    <div class="page_num" style="display:block;">
                                        <ul class="page_mid_ul">
                                            <p ><strong class="setleft">学院新生群 : </strong></p>                                   
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>新生总群：303821503</p></li>
                                                    <li><p>经济管理学院：459689369</p></li>
                                                    <li><p>自动化学院：453671920</p></li>
                                                    <li><p>理学院：246216079</p></li>
                                                    <li><p>国际学院：464307703</p></li>
                                                </ul>
                                            </li>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>通信与信息工程学院：131831930</p></li>
                                                    <li><p>软件工程学院：457898785</p></li>
                                                    <li><p>传媒艺术学院：415452505</p></li>
                                                    <li><p>外国语学院：162910856</p></li>
                                                    <li><p>生物信息学院：451968160</p></li>
                                                </ul>
                                            </li>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>光电工程学院：118702707</p></li>
                                                    <li><p>计算机科学与技术学院：462513975</p></li>
                                                    <li><p>法学院：157289160</p></li>
                                                    <li><p>先进制造工程学院：457395819</p></li>
                                                    <li><p>体育学院：456870764</p></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        
                                        <ul class="page_mid_ul_bottom">
                                            <p><strong class="setleft">老乡群 : </strong></p>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>山西老乡群：119738941</p></li>
                                                    <li><p>黑龙江老乡群：316348915</p></li>
                                                    <li><p>安徽老乡群：463237050</p></li>
                                                    <li><p>陕西老乡群：193388613</p></li>
                                                    <li><p>四川老乡群1：142604890</p></li>
                                                    <li><p>四川老乡群2：249923354</p></li>
                                                </ul>
                                            </li>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>四川老乡群3：312946618</p></li>
                                                    <li><p>浙江老乡群1：247010642</p></li>
                                                    <li><p>浙江老乡群2：335964763</p></li>
                                                    <li><p>贵州老乡群：452210260</p></li>
                                                    <li><p>山东老乡群1：335450652</p></li>
                                                    <li><p>山东老乡群2：384043802</p></li>
                                                </ul>
                                            </li>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>广东老乡群：113179139</p></li>
                                                    <li><p>河南老乡群1：310222276</p></li>
                                                    <li><p>河南老乡群2：251311309</p></li>
                                                    <li><p>宁夏老乡群：319432002</p></li>
                                                    <li><p>湖南老乡群：204491110</p></li>
                                                    <li><p>云南老乡群：472124132</p></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="page_num" style="display:none">
                                        <ul class="page_mid_ul">                        
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>天津老乡群：8690505</p></li>
                                                    <li><p>湖北老乡群：33861584</p></li>
                                                    <li><p>河北老乡群：464458638</p></li>
                                                    <li><p>吉林老乡群： 118060379</p></li>
                                                    <li><p>甘肃老乡群1：304901053</p></li>
                                                </ul>
                                            </li>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>广西老乡群1：466937402</p></li>
                                                    <li><p>北京老乡群：143833720</p></li>
                                                    <li><p>福建老乡群：456665777</p></li>
                                                    <li><p>海南老乡群：329752458</p></li>
                                                    <li><p>甘肃老乡群2：155724412</p></li>
                                                </ul>
                                            </li>
                                            <li class="page_mid_li">
                                                <ul>
                                                    <li><p>广西老乡群2：9651531</p></li>
                                                    <li><p>新疆老乡群：248052400</p></li>
                                                    <li><p>辽宁老乡群：134489031</li>
                                                    <li><p>青海老乡群：282597612</p></li>
                                                    <li><p></p></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                    </div>                                    
                                </div>
                                <div class="page_bottom" style="margin-top:15px;">
                                    <ul class="page_bottom_ul" id="people_btn">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" style="display:none;">
                                <div class="page_mid_mid">
                                    <ul class="page_mid_mid_ul">
                                        <li><p><strong>从车站报到期间，我校将在重庆市菜园坝火车站和龙头寺火车站设新生接待站，接待站有同学负责引导新生到指定地点乘车。</strong> </p></li>
                                        <li></li>
                                        <li><p><strong>乘车参考路线 : </strong></p></li>
                                        <li><p><strong>重庆江北机场（距离学校约40公里）：</strong>可乘机场大巴至上清寺后转乘108路公交车至南坪，再转乘346或347路公交车到学校；或乘轻轨三号线到南坪，再转乘346或347路公交车到学校；直接打车到校费用约为70元。</p></li>
                                        <li></li>
                                        <li><p><strong>龙头寺火车站、重庆北站（距离学校约20公里）：</strong>可乘323路或168路公交车至南坪，转乘346或347路公交车至学校：或乘轻轨三号线到南坪，再转乘346或347路公交车到学校；直接打车到校费用约40元。</p></li>
                                        <li></li>
                                        <li><p><strong>菜园坝火车站、汽车站（距离学校约12公里）：</strong>可在菜园坝广场乘347路公交车至学校；直接打车到校费用约为25元。</p></li>
                                        <li><p><strong>朝天门码头（距离学校约9公里）：</strong>可乘车至南坪后转乘346或347路公交车至学校；直接打车到校费用约为20元。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul">
                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" style="display:none;">
                                <div class="page_mid_mid">
                                    <ul class="page_mid_mid_ul">
                                        <li><p><strong>校车路线 : </strong>校车从八十万出发，经过数字图书馆到达新校门站，再由樱花大道到达三教，再右转到风雨操场后往上直行到达留学生楼，由留学生楼后依次经过五教、八教、经管学院，之后进入宿舍区，校车将依次经过20、23、19、22、18、17、21栋宿舍楼后达到红高粱食堂上方，然后从红高粱向下行驶，到达15、16、24栋宿舍楼，然后来到大学城食堂，再依次经过25、26、27、28、29、31、30、32栋宿舍楼，直行到达大西北食堂和乐购便利店，经过11、12栋宿舍楼，路过情人坡，向下行驶到10、9、8宿舍楼，最后从信科大厦回到始发站。 </p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul">
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" style="display:none;">
                                <div class="page_mid_mid" id="room">
                                    <ul class="page_mid_mid_ul" style="display:block">
                                        <li><p><strong>宿舍情况 : </strong>今年大一新生根据专业班级按照姓氏分配在宿舍楼1、5、6、8-12、15-20、22-30、32栋。床铺的长宽大致为80cm*200cm。 </p></li>
                                        <li></li>
                                        <li><p>其中1、5、6是学校现存最老的寝室。住宿条件比较差。其中1栋是女生宿舍，5、6栋是男生宿舍。整体情况是每层楼设有公用的卫生间、洗澡间，这也就意味着每个寝室都没有独立卫生间，没有阳台。寝室一般都是4人间（每个寝室有2个高低床，一张大书桌、4个凳子和两个供大家放东西的柜台）。虽然室内环境简陋，但是位置十分优越。处于校园中心，上课、生活都极其便利。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p>8-12栋位于学校情人坡旁边，是学校标准的4人间，上床下桌，配有阳台，独立卫生间。楼栋周边环境一流，食堂与超市一应俱全，为学习生活提供不少的便利。</p></li>
                                        <li></li>
                                        <li><p>15-20栋分布在太极运动场的南边与东边。周边有学校的兴业院食堂及众多的超市、商铺，校车从这里穿过。寝室内部均设有独立卫生间，并在一些楼层设有洗衣机供大家使用，根据每栋宿舍不同，楼层不同分为4人间、6人间两种。4人间基本情况与8-12栋一样，而6人间则是上下铺与上床下桌的混搭。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p>22-24屹立于悠悠重邮高处，周边风景秀丽，无论冬夏，绿色永存，每至冬季，一旁还有腊梅香气飘来。楼栋门前不时还会有校车等路过，其周边有“千喜鹤”、“好食基”、“红高粱”等食堂，还有重邮阳光超市、叮当超市、华生园等购物场所，交通便利，可以尽情满足同学们的平日生活需求。此外，楼栋内部住宿条件优越，环境较好，22栋全部为4人间寝室,23及24全部为6人间寝室，且有独立的阳台、卫浴。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none;">
                                        <li><p>25-30在学校的东南方向，周边分布有“千喜鹤”、“好食基”食堂。宿舍基本为6人间基本情况与22-24相同且有独立的阳台、卫浴，床铺是上下铺与上床下桌的混搭。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>

                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="room_btn">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="page_mid" style="display:none;">
                                <div class="page_mid_mid" id="eat">
                                    <ul class="page_mid_mid_ul" style="display:block">
                                        <li><p><strong>学校附近衣食住行 : </strong> </p></li>
                                        <li><p><strong>【银行】</strong></p></li>
                                        <li><p>在校内，中心食堂对面有农业银行、工商银行、建设银行、交通银行设置的ATM取款机；在校外，新校门处有农业银行服务大厅，同学们在开学的时候需要到这里去激活学校为每人配发的农行卡，在老校门处有邮政储蓄银行服务大厅，对面还有重庆农村商业银行。学校附近的银行大致就是这么多，请有需要的同学提前准备好噢。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【超市】</strong></p></li>
                                        <li><p>初来乍到的同学们肯定需要购买各种生活必需品，学校内外有大大小小十几个小卖部超市，下面为大家简单介绍主要的几个超市：</p></li>
                                        <li><p><strong>雅客来超市：</strong>在19栋宿舍楼下面，规模较大，有各种各样的生活用品、零食、水果、饮料等等，种类比较齐全；</p></li>
                                        <li><p><strong>15栋宿舍楼商业街：</strong>分布在15栋宿舍楼下面的一条商业街，有大大小小好几家小卖部、蛋糕店、奶茶店等等，另外，领取快递的地方也都主要集中在这里。</p></li>
                                        <li></li>
                                        <li><p><strong>乐购：</strong>位于大西北食堂（12栋宿舍楼背面）对面，也是一家较大的超市，种类都比较齐全。</p></li>
                                        <li><p><strong>渝芳百货：</strong>在老校门出门右转即到，有各种各样同学们需要的商品，价格也比较实惠，同学们可以去采购对比一下。</p></li>
                                        <li><p><strong>新世纪百货 : </strong>位置在新校门右转农业银行旁，比较大型的超市，商品种类要比学校里面的更加齐全。</p></li>
                                        <li><p><strong>永辉超市（黄桷垭店）：</strong>学校附近最大的超市，但是位置离学校比较远，位于黄桷垭小学对面，距离学校大约600米，适合周末进行大采购。</p></li>               
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none">
                                        <li><p>末进行大采购。</p></li>
                                        <li><p><strong>【吃住】</strong></p></li>
                                        <li><p>刚来报道的同学们大都是在父母的陪同下来学校的，肯定会关心饮食以及住宿问题，学校老校门对面有著名的“堕落街”，里面有各式各样好吃又便宜的餐馆小店，脆皮鸡、小面、孃孃汤圆、汤锅等等，总有一家适合你；来重庆当然少不了吃火锅，学校附近有好几家火锅店，距离近，价格实在，还不快来一饱口福。学校里面有重邮宾馆，但是价格偏高，标间大约在200/晚，条件还可以；如果觉得贵的话还可以考虑老校门对面 潘阿姨的旅社，价格大约在50/晚，价格实惠。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="eat_btn">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="D3map"  >
                        <div class="page_top">
                            <ul class="page_ul" id="an_page_ul">
                                <li class="stu_li"><a >团委直属部门</a></li>
                                <li class="stu_li"><a>校学生会</a></li>
                                <li class="stu_li"><a>科技联合会</a></li>
                                <li class="stu_li"><a >社团联合会</a></li>
                                <li class="stu_li"><a class="stu_li_active">青年志愿者协会</a></li>
                                <li class="stu_li"><a>大学生艺术团</a></li>
                                <li class="stu_li"><a>社团</a></li>
                            </ul>
                        </div>
                        <div class="page_mid_big" >
                            <div class="an_page_mid" style="display:none;">
                                <div class="page_mid_mid" id="part_1">
                                    <ul class="page_mid_mid_ul" style="display:block">
                                        <li ><p><strong> 【办公室】</strong></p></li>
                                        <li><p>团委办公室是与团委老师之间沟通的媒介，是团委老师的有力助手。主要负责日常公文的起草、书写，会议安排、会议签到、记录，团委各类文件的收集、整理和归档；其次负责团委办公用品的采购、保管和维护；为团委各项工作顺利开展做好后勤保障，同时及时向上级报告团委的工作情况，传达上级团组织的文件精神，协调学院团总支之间日常工作的开展。做好机要文件的管理和团委印章的保管使用工作及团委考勤纪录，团委工作日志的书写，做好团委期末总结、年度总结和报送工作。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【组织部】</strong></p></li>
                                        <li><p>主要负责团委日常的团务工作，组织和开展各种团委活动，加强全校基础团组织建设，加强与基层团组织的联系，经常了解基层团支部的组织建设情况，对各团支部活动的开展进行指导、监督、检查与帮助。同时作为上级党组织和广大团员之间的纽带，协助学生“推优入党”工作的进行。同时组织部还负责团费收缴工作、团员证的颁发、组织关系的接转；及做好团员证的年度注册，团员档案的归档；全面掌握全院共青团组织的情况（分团委、团支部数量及人员构成，专兼职团干部的数量、比例等），及时进行团员登记和团员及团干部变动情况调查统计工作，年底上报团市委组织部。开展达标创优活动，评选“红旗分团委”、“优秀团支部”、“优秀团员”、“优秀团员”、“ 优秀团干部”“十佳五四红旗团支部”等。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【宣传部】</strong></p></li>
                                        <li><p>宣传部是动力团委的宣传阵地，是以党的思想方针和政策为工作中心，是宣传我院学生工作、服务各项活动的形象窗口，根据有关</p></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none">
                                        <li ><p>指示，结合适宜时机，突出宣传党团的思想理论、方针及政策，做好宣传工作。 组织校园各种征文活动，利用橱窗、板报等宣传党的政策、先进人物事迹和学校、国内的重大活动。负责团内简报的编辑出版和发行、对大型活动的宣传报导，向新闻单位发送稿件等。总结青年工作经验，宣传工作典型，创造良好的校园舆论环境。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【调研部】</strong></p></li>
                                        <li><p>其主要职责是结合校团委实际工作需求，及时广泛的了解同学们身边发生的事情，切实的反映问题并关注社会热点，以前瞻性的目光发现问题，采用科学严谨的态度，以问卷、座谈和走访为主要调查方式，进行系统的量化分析，形成科学的调查报告，为团务工作的开展提供有参考价值的信息与科学合理的建议。通过这样一个“提出--解决--反馈”的良性循环搭建学生与老师、学校交流、沟通的平台，为学生排忧解难，在以促进学生个人全面发展为目标的基础上，为学校构建良好的育人环境提供科学的依据。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="part_btn_1">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="an_page_mid" style="display:none;">
                                <div class="page_mid_mid" id="part_2">
                                    <ul class="page_mid_mid_ul"   style="display:block">
                                        <li ><p>重庆邮电大学学生会是由校党委、市学联领导，由校团委具体指导的群众性组织。 重庆邮电大学学生会以“全心全意为同学服务”为宗旨，充分发挥同学主人翁精神，加强学风建设，营造浓厚的读书氛围，以提高学生综合素质、推进校园文化建设为目标，创建了一批深受同学们喜爱的科技文化活动，积极营造校园爱心氛围，结合校园实际，积极加强大学生法制观念，维护大学生合法权益，开展文体活动，丰富校园文化生活。利用现有资源，打造网络交流平台，通过编撰刊物，展示理论成果。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【办公室】</strong></p></li>
                                        <li><p>办公室是学生会的重要机构，是主席团的重要助手，担当着学生会工作的规划者和监督者的角色，是各部门、各学院学生会强有力的援助机构和统筹机构。办公室负责协助主席团了解和掌握学生会工作情况；协助主席起草计划、文件、总结；加强校学生会与各学院学生会的联系，建立和完善上报机制；向主席团提供有关信息、情况、依据；加强学生会各部门之间的联系，做好学生会工作大事记的收集、整理工作；负责学生会规章制度的建设工作；负责学生会档案的编写和整理工作；负责安排学生会各类会议，确立议程，并督促检查会议决定的执行情况；负责学生会财务的管理工作；接待来访人员等工作。同时还致力于加强与其他各高校学生会、研究生会、中学学生会的联系。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【学习部】</strong></p></li>
                                        <li><p>学习部作为学生会与学生学习息息相关的部门担负着弘扬学术、倡导学业、营造校园学术氛围的基本职能。学习部在学年伊始就会迎来她的第一个也是最重要的品牌活动——校园“新生演讲赛”。除此之外，学习部还以“学术”为中心开展多种丰富的活动,</p></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none">
                                        <li ><p>如“读书月系列活动”、“信科杯”辩论赛等等。在这些活动中，“学习”不再是枯燥乏味的代名词，学习部以重邮特有的活力营造出浓郁而活泼的学习氛围，拓宽同学们的视野，丰富校园文化，为全校师生搭建了一个提高综合素质，繁荣人文气息的平台，使同学们能够开心地游弋于学术的海洋。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【生活部】</strong></p></li>
                                        <li><p>大家生活的精彩就是生活部工作的目标。生活部旨在引领校园文化生活，关爱大学生活。生活部在同学生活服务方面开展一系列活动丰富大家的校园生活，依托“校园厨艺大赛”等精品活动，着力加强校园餐饮文化的监督。爱是一个“于无声处听惊雷”的概念，生活部用它事无巨细的精神、无微不至的工作态度为同学们铺成了一条通向舒适生活的大道，把温暖直接送到了大家的心窝里。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【文娱部】</strong></p></li>
                                        <li><p>文娱部作为学生会开展文娱活动的部门、担任着丰富校园文化的重任。文娱部以“丰富校园文化生活，活跃校园文艺氛围，引导校园文化”为目标，锐意创新、辛勤付出，开展着一个个精彩纷呈的文娱活动，并努力把这些活动打造成精品。文娱部主要负责策划、承办校园“十大歌手赛”、“舞蹈大赛”等全校性的大型文娱活动。在文娱部的活动中永远不变的主体也就只有一个――那就是“学生”，这也造就了文娱部为所有对于舞台有着美好憧憬的同学服务，为大家打造一个展现自我风采，释放自我激情平台。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【女生部】</strong></p></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none">
                                        <li ><p>女生部作为学生会服务女同学的重要部门，以关爱女生、服务女生为宗旨，以各种活动与服务为契机，坚持以“服务女生，关心女生，加强男女生之间的交流”为宗旨，关心女生成长，展现女生魅力，给重邮女生提供一个展现自我的平台，以此来锻炼女生的能力，提高女生的整体素质，最终达到提高校园整体文化品味的目的。同时，女生部又给男生和女生的沟通搭起一座桥梁，让男生和女生在交流中感受每一分的温情与感动，寻找生活中的纯真与浪漫，形成男女和谐的校园文化氛围。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【体育部】</strong></p></li>
                                        <li><p>体育部作为学生会开展体育活动的部门，体育部的责任不仅仅是办好品牌活动、为重邮体育人服务，更重要的是向每一位同学传播体育文化，从点滴处做起，为每一个重邮人都能拥有健康的身体而做出贡献。体育部宣扬运动强身为核心，全力打造校内体育文化，搭建体育交流平台，提高全校体育水平，丰富校园文化生活，展现当代大学生和大学教师的朝气和活力。促进校园精神文明建设的发展是体育部办好每一届赛事的根本宗旨。体育部的理念在大型团体体育赛事——“青春杯”系列体育赛事中贯穿始终，那就是：弘扬体育精神，让更多的同学参与体育、热爱体育，塑造更加完美的重邮人！</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【自律权益部】</strong></p></li>
                                        <li><p>自律权益部是学生会大家庭中的年轻部门，以维护学生权益、宣传法制、倡导精神文明、提高同学们的法制知识与自我防范意识为主要任务，并与学校保卫处等相关职能部门密切合作，共同致力于我校精神文明建设，扛起了重邮学生会新形象的一面大旗。我们的工作面向同学们日常生活学习中所遭遇的侵权事件和不合理现象，涉及到校园生活的方方面面。双向联系同学和学校，建立沟通</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul"  style="display:none">
                                        <li ><p>的桥梁；针对反应热点，进行重点攻关，代表同学与学校相关部门交涉，争取合法权益，促进学校决策的优化；普及维权知识，唤起自主维权的意识。</p></li>
                                        <li></li>
                                        <li><p><strong>【宣传部】</strong></p></li>
                                        <li><p>宣传部肩负着学生会的常规宣传工作，负责规范管理校园文化宣传阵地。宣传部作为学生会面向全校的一个窗口，辅助学生会的活动前期宣传。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="part_btn_2">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li"><a>3</a></li>
                                        <li class="page_bottom_li"><a>4</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="an_page_mid" style="display:none;">
                                <div class="page_mid_mid" id="part_3">
                                    <ul class="page_mid_mid_ul"  style="display:block">
                                        <li ><p>重庆邮电大学科技联合会简称科联、是在校团委指导下，和校学生会齐名组织承办重庆邮电大学所有在校学生科技活动的校级学生组织。 我们以“挑战杯”为龙头，以“学生科技文化节”和“创业计划大赛”为特色品牌，以学生科技沙龙为支柱，并打造了“十佳学生科技标兵”评选等一系列学生课外科技活动，并且我们长期举办各种有益于学生发展的各种生活IT沙龙以及讲座。 重庆邮电大学学生科技联合会，我们以引领重邮校园的科技时尚，浓厚校园的科技创新氛围为己任，力图打造重庆高校中科技活动组织的第一品牌。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>【办公室】</strong></p></li>
                                        <li><p>负责制定、完善科联制度和管理规范；负责科联内部联络和部门协调；负责物资管理、值班管理、档案管理；组织进行科联干部干事培训、交流、考核；制作《学生科技联合会工作简报》（每月一期）。</p></li>
                                        <li></li>
                                        <li><p><strong>【竞赛活动部】</strong></p></li>
                                        <li><p>负责全校性学生学术科技创新创业竞赛活动的组织开展；组织学生参加校外各级各类学术科技创新创业竞赛活动；组织开展学生科创成果展。</p></li>
                                        <li></li>
                                        <li><p><strong>【项目管理部】</strong></p></li>
                                        <li><p>收集校内外学生科技创新创业项目信息；负责学生科技创新创业项目的申报、立项、管理、监督；考评各学院学生科技协会工作情况；负责学生科技创新基地的管理。</p></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none">
                                        <li ><p><strong>【科技人文部】 </strong></p></li>
                                        <li><p>负责“科技•创新•成才”论坛、学生学术科技沙龙、科技创新创业讲座的组织、审批和管理工作；组织学术交流活动、科普知识宣传活动；负责学生学术科技沙龙基地的管理。</p></li>
                                        <li></li>
                                        <li><p><strong>【宣传部】</strong></p></li>
                                        <li><p>负责科联及各项活动的校内外宣传；制作《科创之星》；负责科联各类文字、图片信息的编辑、整理及对外发布。</p></li>
                                        <li><p><strong>【信息部】</strong></p></li>
                                        <li><p>负责开发、建设、维护科联网站；为网上学术科技创新创业活动搭建网络平台；制作科创活动视频、音频资料。</p></li>
                                        <li><p><strong>【对外合作部】</strong></p></li>
                                        <li><p>与其他兄弟高校学生科创组织建立友好联系，加强合作交流，积极协助开展校际活动；经调查了解定期形成《校内外学生科创活动情况报告》；开展能塑造和拓展科联影响力的各类活动。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="part_btn_3">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="an_page_mid" style="display:none;">
                                <div class="page_mid_mid">
                                    <ul class="page_mid_mid_ul" >
                                        <li ><p>社团联合会在校团委的直接指导下，管理社团工作、服务社团发展的学生组织，旗下管辖着涵盖文学学术、实践服务、艺术文化、爱好兴趣、体育运动等功能丰富、类型兼备的各类学生社团组织。它以充分调动众多社团及其会员的积极性和创造性，全面开展有深度、有内涵、有品位、有价值、有意义的社团活动，不断丰富校园文化生活，提高当代大学生的学习能力、实践能力、组织能力和创新能力为目标。 作为青年自组织，学生社团是培养和发展大学生兴趣爱好的广阔平台，是培养学生自我教育、自我管理、自我服务的有效形式，是构建“一体两翼”学校团建大格局的重要组成部分，是凝聚青年、丰富校园文化、培育和传承大学精神的重要载体，目前，能否建设好高校的社团已经成为一个高校是否具有活力和文化氛围的重要标志之一。学生社团遍布全国高校校园的各个角落，扮演着丰富校园文化生活、提升校园文化品位、引领校园文化时尚的重要角色。社团联合会扮演着对各社团服务和管理的双重角色，对学生社团的发展起着至关重要的作用。 部门设置 学生社团联合会的基本下属机构有：办公室、策划部、宣传部、监督管理部、考评部、外联部、财务部、新闻采编部、公关部。不同的学校还会设立不同的一些部门，如网络部、媒体部等。 社团联合会一般为主席，副主席，各部部长，委员，干事的层层管理组织。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="an_page_mid" >
                                <div class="page_mid_mid" id="part_4">
                                    <ul class="page_mid_mid_ul" style="display:block">
                                        <li ><p>重庆邮电大学青年志愿者协会成立于2014年6月，其前身是共青团重庆邮电大学委员会社会实践与志愿服务部。主要负责学校社会实践工作和青年志愿者工作的组织与协调，对各团支部的相关活动进行指导和监督；协助团委完成“三下乡”暑期社会实践活动、“12•5国际志愿者日”志愿服务周系列活动、“优秀青年志愿者服务队”评选、“校园文明建设”及共青团城乡市民学校等相关工作。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>重庆邮电大学青年志愿者协会的主要志愿活动有：</strong></p></li>
                                        <li><p><strong>“12•5国际志愿者日”志愿服务周：</strong></p></li>
                                        <li><p>1985年12月17日，第四十届联合国大会通过决议，从1986年起，每年的12月5日为“国际促进经济和社会发展志愿人员日”，简称国际志愿人员日（IVD）。其目的是敦促各国政府通过庆祝活动唤起更多的人以志愿者的身份从事社会发展和经济建设事业。</p></li>
                                        <li></li>
                                        <li><p>而在每年的12.5来临之际，在团委的统一部署下，重庆邮电大学青年志愿者协会联合13个学院青年志愿者协会在一周左右时间内开展大大小小各种类型活动，传播志愿者文化，弘扬志愿服务精神。其中重庆邮电大学青年志愿者协会的“换客大行动”已经成为每年国际志愿者日的常规活动，已经举办过两届的“换客大行动”得到了学校师生的一致好评。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>共青团城乡市民学校：</strong></p></li>
                                        <li><p>走进社区，以志愿服务的方式开办“城乡社区共青团市民学校”（以下简称“市民学校”），是团市委组织我市各级共青团组织积极参与社会管理，促进社会和谐的新探索。高校共青团组织作为广大热血青年的聚集地，更应该积极的行动起来。</p></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul" style="display:none">
                                        <li ><p>为了让青年志愿者在“市民学校”建设中发挥更大的作用，进一步推动青年志愿者服务社区的能力。重庆邮电大学团委积极响应团市委号召，结合实际，先后与南岸区、渝中区、大渡口区等16个社区的“市民学校”进行了合作共建，帮助社区组建少儿艺术团、开展卫生保健、英语教学、电器维修、计算机技能培训、宣传中国传统文化等。此外，红岩网校工作站作为重庆市首批“青春倡廉示范岗”也积极参与“市民学校”共建。现志愿者注册人数达15821人。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>全国大学生志愿者暑期文化科技卫生“三下乡”社会实践活动：</strong></p></li>
                                        <li><p>我校每年都会依据团中央、团市委对“三下乡”活动具体指导思想，根据我校实际情况，开展暑期“三下乡”社会实践活动。让同学们以此为契机，将平日在学校所学知识，送进社区、送进农村和山区，促进当地文化、科技、卫生的发展。我校已连续数年获得“三下乡”优秀组织单位称号。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>大型赛会志愿服务：</strong></p></li>
                                        <li><p>去年，我校青年志愿者先后为中国（重庆）国际云计算博览会、重庆市学生联合会第四次代表大会、重庆邮电大学第一届董事会第四次董事大会提供志愿服务，得到了活动主办方、团市委、校方的一致好评。</p></li>
                                        <li></li>
                                        <li><p><strong>敬老助老活动：</strong></p></li>
                                        <li><p>我校一直开展“敬老助老”系列活动，主题突出人文关怀，以“关爱老人、构建和谐”为宗旨，以学院、班级为单位，尤其注重对我校退休老教师的一对一帮扶活动，大力推行“老吾老以及人之老”的道德风尚。</p></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="part_btn_4">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="an_page_mid" style="display:none;">
                                <div class="page_mid_mid">
                                    <ul class="page_mid_mid_ul" >
                                        <li ><p>重庆邮电大学大学生艺术团是在校团委直接指导管理下的学生艺术团体，肩负组织学校重大文艺活动，代表学校对外联谊，演出和参加省市文艺大赛的重任。秉承“服务同学，锻炼自我”的宗旨，以丰富校园文化生活，陶冶情操，加强与其他院校艺术交流与沟通，为校宣传争光，活跃人文气氛等为前提，要求每个成员在艺术实践中以高标准、严要求的态度约束自己。 大学生艺术团由管乐团、合唱团、舞蹈团、曲艺团组成。主要承担着我校各项大型演出任务，组织编排各项文艺节目，为有文艺特长的同学搭建良好的交流和展示平台，每个分团都有固定的训练时间和专业指导老师。近年来，大学生艺术团一次次圆满完成学校交给的各项文艺演出任务，并锻炼和培养了一批批艺术人才。为我校大学生文艺素质的培养，树立了一面旗帜。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="an_page_mid" style="display:none;">
                                <div class="page_mid_mid" id="part_5">
                                    <ul class="page_mid_mid_ul" style="display:block">
                                        <li ><p><strong>实践技能类（28）： </strong></p></li>
                                        <li><p>电子协会、通信软件协会、电子竞技协会、信息安全协会、3S协会、软件技术与应用协会、硬件技术与应用协会、Linux协会、机器人协会、推理协会、科幻协会、半导体协会、科技创新协会 、天文爱好者协会、电子商务协会、金融协会、创业者协会、市场营销协会、ERP协会、政法论坛协会、辩论协会、闪客协会、数字媒体协会、数学建模协会、航模协会、 物联网协会 、数码协会、TG精英社。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>理论学习类（9）：</strong></p></li>
                                        <li><p>科技论文讲习社、生命科学协会、数学俱乐部、翻译协会、CSDN俱乐部、舆论与传播协会、红色社团、历史协会、物理协会。</p></li>
                                        <li><p><strong>文艺拓展类（27）：</strong></p></li>
                                        <li><p>象棋协会、东方舞蹈协会、桌游协会、饮食文化协会、兰亭书社、中国传统文化交流协会、动漫协会、南山文学社、摄影协会、电影协会、重邮剧社、音乐协会、民族乐器协会、街舞协会、瑜伽协会、西乐社、龙影棍道协会、外文剧社、英语俱乐部、b-box协会、骆驼社、诵读协会、天元围棋协会、吉他社、百闻茶道社、魔方社、汉韵新樱协会。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li><p><strong>体育竞技类（12）：</strong></p></li>
                                        <li><p>足球协会、篮球协会、武术协会、乒乓球协会、网球协会、羽毛球协会、柔道协会、健美操协会、跆拳道协会、健身健美协会、体育舞蹈协会、素质拓展协会。</p></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <ul class="page_mid_mid_ul"  style="display:none">
                                        <li ><p><strong>公益服务类（12）： </strong></p></li>
                                        <li><p>网络志愿者协会、识途社、爱心社、心理协会、国防教育协会、坚守者协会、动物保护协会、三农协会、大学生消费者协会、就业与公共关系协会、学生消防志愿者协会。</p></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="page_bottom">
                                    <ul class="page_bottom_ul" id="part_btn_5">
                                        <li class="page_bottom_li_special"><a ><</a></li>
                                        <li class="page_bottom_li"><a id="an_page_bottom_spe">1</a></li>
                                        <li class="page_bottom_li"><a>2</a></li>
                                        <li class="page_bottom_li_special"><a>></a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div> 
                <img src="<?php echo (IMG_URL); ?>/grass.png" class = "grass">
            </div>
        </div>
        <a id="go_top" href="#"></a>
    </div> 
    <div class="footer">
        <div class="footer_content">
            <p class="b">
                <a href="">
                    关于红岩网校
                </a>    
                <span>|</span>    
                <a href="">
                    网站地图
                </a>    
                <span>|</span>   
                <a href="">
                    指出错误
                </a>    
                <span>|</span>    
                <a href="">
                    管理入口
                </a>    
                <span>|</span>
            </p>
            <p>
                本网站由红岩网校工作站负责开发，管理，不经红岩网校委员会书面同意，不得进行转载
            </p>
            <p style="padding-bottom:46px;">
                地址：重庆市南岸区崇文路2号（重庆邮电大学内） 400065 E-mail :redrock@cqupt.edu.cn (023-62461084)
            </p>
        </div>
    </div>
    <script src="<?php echo (JS_URL); ?>/demo.js"></script>
    <script src="<?php echo (JS_URL); ?>/page.js"></script>
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=d84d6d83e0e51e481e50454ccbe8986b"></script>
</body>
</html>