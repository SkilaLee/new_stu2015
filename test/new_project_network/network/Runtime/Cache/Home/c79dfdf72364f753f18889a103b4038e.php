<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/index.css">
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
						<input id="user_name" type="text" name="user_name">
					</div>
					<div id="password_d">
						<img class="l" src="<?php echo (IMG_URL); ?>/pass_img.png">
						<input id="password" type="password" name="password">
					</div>
					<div id="phone_d">
						<img style="float:left;margin:10px 6px 0 0;" src="<?php echo (IMG_URL); ?>/phone.png">
						<input id="phone" type="text" name="phone">
					</div>
					<div id="qq_d">
						<img style="float:left;margin:10px 6px 0 0;" src="<?php echo (IMG_URL); ?>/qq.png">
						<input id="qq" type="text" name="qq">
					</div>
					<div id="behavior_d">
						<img style="float:left;" src="<?php echo (IMG_URL); ?>/behavior.png">
						<div id="post_behavior">
							<a href="">动漫</a>
							<a href="">极客</a>
							<a href="">摄影</a>
							<a href="">吃货</a>
							<a href="">lol</a>
							<a href="">篮球</a>
							<a href="">旅游</a>
							<a href="">电影</a>
							<a href="">学霸</a>
							<a href="">健身</a>
							<a href="">音乐</a>
							<a href="">综艺</a>
						</div>	
					</div>
				</form>
				<a id="login_sub" href="<?php echo (VIEW); ?>/login">登录</a>
				<a id="skip" href="">跳过</a>
				<a id="yes" href="<?php echo (VIEW); ?>/info">确认</a>
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
						<a href="#">首页</a>
					</li>
					<li>
						<a href="map.html">重邮地图</a>
					</li>
					<li>
						<a href="data.html">大数据</a>
					</li>
					<li>
						<a href="page.html">重邮百科</a>
					</li>
					<li>
						<a href="windcolor.html">重邮风采</a>
					</li>
					<li>
						<a href="">大声HI</a>
					</li>
					<li class="last">
						<a href="http://hongyan.cqupt.edu.cn/aboutus/">关于我们</a>
					</li>
					<li id="login">
						<a>新生登录</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="timer">
		<img class="t_bg" src="<?php echo (IMG_URL); ?>/timer_bg.png">
		<div class="timer_container">
			<img class="tree_right" src="<?php echo (IMG_URL); ?>/tree_right.png">
			<img id="cloud01" class="cloud01" src="<?php echo (IMG_URL); ?>/cloud01.png">
			<img id="cloud02" class="cloud02" src="<?php echo (IMG_URL); ?>/cloud02.png">
			<img id="cloud03" class="cloud03" src="<?php echo (IMG_URL); ?>/cloud03.png">
			<img id="cloud04" class="cloud04" src="<?php echo (IMG_URL); ?>/cloud04.png">
			<img id="cloud05" class="cloud05" src="<?php echo (IMG_URL); ?>/cloud05.png">
			<div class="logo" id = "logo"></div>
			<div class="count_down" id = "count_down">
				<div>
					<p>	
						<span>开学倒计时</span>
						<span id="days" class="number">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
						</span>
						<span class="timer">天</span>
						<span id="hour" class="number">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
						</span>
						<span class="timer">时</span>
						<span id="branch" class="number">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
						</span>
						<span class="timer">分</span>
						<span id="seconds" class="number">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
							<img src="<?php echo (IMG_URL); ?>/num0.png">
						</span>
						<span class="timer">秒</span>
					</p>
				</div>
			</div>
			<img class="stone" src="<?php echo (IMG_URL); ?>/stone.png">
			<img class="car" src="<?php echo (IMG_URL); ?>/car.png">
			<img class="shaoma" id="shaoma" src="<?php echo (IMG_URL); ?>/shaoma.png">
			<img class="erweima" src="<?php echo (IMG_URL); ?>/erweima.png">
			<img src="<?php echo (IMG_URL); ?>/line_top.png" alt="" class="line_top">
		</div>
	</div>
	<div class="container">
		<img src="<?php echo (IMG_URL); ?>/ground.png">
		<div class="container_content">
			<div class="map" id="map">
				<div id="showInf">
					<div></div>
					<p>风雨操场</p>
				</div>
				<a id="taiji" class="dibiao" href=""></a>
				<a id="laocao" class="dibiao" href=""></a>
				<a id="fengyu" class="dibiao" href=""></a>
				<a id="sanjiao" class="dibiao" href=""></a>
				<a id="yifu" class="dibiao" href=""></a>
				<a id="newGate" class="dibiao" href=""></a>
				<a id="oldGate" class="dibiao" href=""></a>
				<a id="oldLia" class="dibiao" href=""></a>
				<a id="zidonghua" class="dibiao" href=""></a>
				<img class="line_right01" src="<?php echo (IMG_URL); ?>/line_right01.png">
				<img class="line_left01" src="<?php echo (IMG_URL); ?>/line_left01.png">
				<img class="line_right02" src="<?php echo (IMG_URL); ?>/right_line02.png">
				<p>想了解学校食堂、寝室、图书馆的地理位置？想知道超市、教学楼、注册地点的方位在哪？这里提供重邮2D地图以及街景地图，让你在入学前提前领略学校的风光！</p>
				<a id="d01" class="total" href="map.html">查看详情</a>
			</div>
			<div class="warp">
				<a class="prv" id="prv" href="#">  </a>
				<ul>
					<li style="left:0px;"></li>
					<li style="left:740px;background:blue;"></li>
					<li style="left:1480px;background:green;"></li>
				</ul>
				<a class="nex" id="nex" href="#">  </a>
			</div>
			<div class="inf">
				<div class="show">
					<img src="<?php echo (IMG_URL); ?>/show_t.png">
					<img class="img01" src="<?php echo (IMG_URL); ?>/img01.png">
					<p>
						<span>
							提前了解未来的小伙伴！新生登陆后不仅可以找室友、找同学、找辅导员，还可以找与你志同道合的朋友哦！
						</span>
						<span class="line2">
							可以查看学校里与你同乡的比例、学校男女比例、学院男女比例以及家庭住址到学校距离排名，所在学院各专业去向统计。
						</span>
					</p>
					<a id="d6" class="total know_total" style="margin:36px 22px 0 0" href="data.html">查看详情</a>
				</div>
				<div class="know">
					<img src="<?php echo (IMG_URL); ?>/know_t.png">
					<img class="img02" src="<?php echo (IMG_URL); ?>/img02.png">
					<p>
						<span>
							提供从火车站、机场等到学校的公交路线以及打车大致费用、寝室条件、新生群、班级群、老乡群、学校周围银行、超市、餐馆、酒店住宿等信息。
						</span>
						<span class="line2" style="margin-top:30px">
							没有参加学生组织的大学不是完整的大学！这里可以查看校级组织各部门的简介以及部分学生社团的简介，让你提前了解学校的学生组织！
						</span>
					</p>
					<a id="d5" class="total know_total" href="page.html">查看详情</a>
				</div>
			</div>
			<div class="inf01">
				<img class="tree_car" src="<?php echo (IMG_URL); ?>/tree_car.png">
				<div class="we">
					<p>
						这里有五四之星的风采展示、还有重邮校园美景的照片、更有精彩的重邮原创视频！
					</p>
					<a id="d4" class="total de" href="windcolor.html">查看详情</a>
				</div>
				<div class="hi">
					<p>
						大声HI论坛给新生一个互相交流的平台。让新生在陌生的环境下不再孤单！快来发帖吧！
					</p>
					<a id="d3" class="total de" style="margin:88px 0 60px 114px" href="">查看详情</a>
				</div>
				<div class="about_us">
					<p>
						红岩网校工作站简介。优秀内网展示、以及各种迎新活动专题。
					</p>
					<a id="d2" class="total de" style="margin:114px 0 60px 114px" href="">查看详情</a>
				</div>
				<img class="gg" src="<?php echo (IMG_URL); ?>/gg.png">
				<a id="go_top" href="#"></a>
			</div>
		</div>
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
	<script src="<?php echo (JS_URL); ?>/main.js"></script>
	<script src="<?php echo (JS_URL); ?>/fix.js"></script>
</body>
</html>