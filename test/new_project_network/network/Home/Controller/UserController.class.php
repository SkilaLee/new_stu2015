<?php
namespace Home\Controller;
use Think\Controller;
//Controller父类:ThinkPHP/Library/Think/Controller.class.php
class UserController extends Controller {
    //登陆
	public function login() {
		$user_id = I('post.user_name','','htmlspecialchars');
		// $phone = I('post.phone','','htmlspecialchars');
		// $qq = I('post.qq','','htmlspecialchars');
        $password =  I('post.password','','htmlspecialchars');
        // $psw=md5(hash('sha256',(I('post.password','','htmlspecialchars')>>(I('post.password','','htmlspecialchars')%3)).substr(I('post.password','','htmlspecialchars'),1,3)));   
        //  加密方式:md5(hash('sha256',($idcard['idcard']>>($idcard['idcard']%3)).substr($idcard['idcard'],1,3)));

 		
       	$User = M("stu_login"); // 实例化new_login对象
        $map['stu_tzs'] = $user_id;
        $map['login_psw']  = $password;
        // 把查询条件传入查询方法
        $res = $User->where($map)->select(); 
        if($res) {//用户存在
        	session_start();
            $_SESSION["user_id"]=$user_id;
            $this->ajaxReturn(true);
		} else {
            $this->ajaxReturn(false);
		}


    //     //by 陈彩
    //     if(isset($_POST['user_name']) && isset($_POST['password'])){
    //         //匹配出非数字字符，错误，匹配不出2015+后四位数字和身份证后6位，错误。
    //         $user_name = $_POST['user_name'];
    //         $password = $_POST['password'];
    //         $regular = array(
    //             'p1' => array( //pattern username
    //                 0 => '/^2015\d{4}$/',
    //                 1 => '/\W/'
    //                 ),
    //             'p2' => array(
    //                 0 => '/^\d{5}[0-9xX]$/', //pattern password
    //                 1 => '/\W/'
    //                 ),
    //             's' => array( //subject
    //                 0 => $user_name,
    //                 1 => $password
    //                 )
    //             );
    //         $match = array();
    //         for($i=0;$i<2;$i++){
    //             preg_match($regular['p1'][$i],$regular['s'][0],$match[$i]);
    //             preg_match($regular['p2'][$i],$regular['s'][1],$match[$i+2]);
    //         }
    //         if(($match[0]&&$match[2]) && ($match[1]==0&&$match[3]==0)){

    //             // $psw=md5(hash('sha256',($idcard['idcard']>>($idcard['idcard']%3)).substr($idcard['idcard'],1,3)));  
    //             $User = M("stu_login"); // 实例化new_login对象
    //             $map['stu_tzs'] = $user_name;
    //             $map['login_psw']  = $password;
    //             // 把查询条件传入查询方法
    //             $res = $User->where($map)->select(); 
    //         var_dump($res); 
    //             if ($res>0) { //返回一个字符串
    //                 session_start();
    //                 $_SESSION["user_id"]=$user_name;
    //                 echo 'true';
    //             }else{
    //                 echo 'false';
    //             }
    //         }else{
    //              echo 'false';
    //         }
    //     }else{
    //         echo 'false';
    //     }



    }
    public function finish() {      //完善信息
        session_start();
        if (!isset($_SESSION['user_id'])) {
             $stu_tzs = 20150354;
         } else {
            $stu_tzs = $_SESSION['user_id'];
         }
        $stu_info['stu_phone'] = I('post.stu_tel','','htmlspecialchars');
        $stu_info['stu_qq'] = I('post.stu_qq','','htmlspecialchars');
        $hobby_arr = array(
            'hobby_one' => I('post.beh_arr0','','htmlspecialchars'),
            'hobby_two' => I('post.beh_arr1','','htmlspecialchars'),
            'hobby_three' => I('post.beh_arr2','','htmlspecialchars')
            );
        $stu['stu_tzs'] = $stu_tzs;
        $Hobby = M('stu_hobby');
        $Hobby->where($stu)->save($hobby_arr);
        $Info = M('stu_info');
        $Info->where($stu)->save($stu_info);
        $All = M('stu');
        $All->where($stu)->save($stu_info);
        // print_r($stu_tzs);
    }

    public function data() {    //数据展示

        session_start();
        if (!isset($_SESSION['user_id'])) {
             $stu_tzs = 20150354;
         } else {
            $stu_tzs = $_SESSION['user_id'];
         }


        // //查室友roomie
        $Info = M("stu_info"); 
        $sql = 'SELECT * FROM stu_info WHERE stu_tzs in (SELECT a.stu_tzs FROM stu_dorm as a,(SELECT * FROM stu_dorm WHERE stu_tzs = '.$stu_tzs.') as b where a.dorm_ban = b.dorm_ban and a.dorm_num = b.dorm_num)';
        $roomie = $Info->query($sql);
        //性别转换
        for ($i=0; $i < count($roomie); $i++) { 
            if ($roomie[$i]['stu_tzs'] == $stu_tzs) {
                $unset_roomie = $i;
            }
            if ($roomie[$i]['stu_gender'] == 0) {
                $roomie[$i]['stu_gender'] = '女';
            } else {
                $roomie[$i]['stu_gender'] = '男';
            }
            if ($roomie[$i]['stu_phone'] == NULL) {
                $roomie[$i]['stu_phone'] = '暂无信息';
            } 
            if ($roomie[$i]['stu_qq'] == NULL) {
                $roomie[$i]['stu_qq'] = '暂无信息';
            } 
        }
        unset($roomie[$unset_roomie]);
        $this->assign('roomie',$roomie);

        
        //找同学
        $sql = 'SELECT * from stu_info where stu_class in (select stu_class from stu_info where stu_tzs = '.$stu_tzs.')';
        $classmate = $Info->query($sql);
        
        //性别转换
        for ($i=0; $i < count($classmate); $i++) { 
            if ($classmate[$i]['stu_tzs'] == $stu_tzs) {
                $unset_mate = $i;
            }
            if ($classmate[$i]['stu_gender'] == 0) {
                $classmate[$i]['stu_gender'] = '女';

            } else {
                $classmate[$i]['stu_gender'] = '男';
            }
            if ($classmate[$i]['stu_phone'] == NULL) {
                $classmate[$i]['stu_phone'] = '暂无信息';
            } 
            if ($classmate[$i]['stu_qq'] == NULL) {
                $classmate[$i]['stu_qq'] = '暂无信息';
            } 
        }
        unset($classmate[$unset_mate]);
        $this->assign('classmate',$classmate);

        //找辅导员
        $Tch = M("stu_teacher");
        $sql = 'SELECT * FROM stu_teacher WHERE tch_sch in (SELECT stu_sch FROM stu_info WHERE stu_tzs = '.$stu_tzs.')';
        $teacher = $Tch->query($sql);


        $this->assign('teacher',$teacher);


        //找朋友
        
        $Friend = M('stu_hobby');
        $sql1 = 'SELECT * FROM stu_hobby WHERE stu_tzs = '.$stu_tzs.'';
        $stu_hobby = $Friend->query($sql1);
        //取出该生的兴趣的代号，取出来的东西存储在$stu_hobby 键名变为0 1 2 ,键值不变

        // $stu_hobby = array(
        //     0 -> '';//兴趣1  ''分号中的内容为0-12,即各兴趣的代号
        //     1 -> '';//兴趣2
        //     2 -> '';//兴趣3
        //     );
        if ($stu_hobby[0]['hobby_one'] != '') {
            if ($stu_hobby[0]['hobby_two'] != '') {
                if ($stu_hobby[0]['hobby_one'] != '') {
                    $stu_hobby[0]['hobby_three'] = '';
                }
            } else {
                $stu_hobby[0]['hobby_two'] = '';
                $stu_hobby[0]['hobby_three'] = '';
            }
        } else {
            $stu_hobby[0]['hobby_one'] = '您还没有填入兴趣爱好,快去完善信息吧';
            $stu_hobby[0]['hobby_two'] = '';
            $stu_hobby[0]['hobby_three'] = '';
        }

           
            
        $stu_hobby;//此为该生的兴趣爱好。格式同上

        /*下面为志同道合人*/
        $sql2 = 'SELECT * FROM stu_info WHERE stu_tzs in (SELECT a.stu_tzs FROM stu_hobby as a,(SELECT * FROM stu_hobby WHERE stu_tzs= '.$stu_tzs.' ) as b WHERE (a.hobby_one = b.hobby_one and a.hobby_two = b.hobby_two and a.hobby_three = b.hobby_three))';
        //取出来的即为志同道合人的信息
        $friend_info = $Friend->query($sql2);
        for ($i=0; $i < count($friend_info); $i++) { 
            if ($friend_info[$i]['stu_tzs'] == $stu_tzs) {
                $unset = $i;
            }
            if ($friend_info[$i]['stu_gender'] == 0) {
                $friend_info[$i]['stu_gender'] = '女';
            } else {
                $friend_info[$i]['stu_gender'] = '男';
            }
            if ($friend_info[$i]['stu_phone'] == NULL) {
                $friend_info[$i]['stu_phone'] = '暂无信息';
            } 
            if ($friend_info[$i]['stu_qq'] == NULL) {
                $friend_info[$i]['stu_qq'] = '暂无信息';
            } 
        }
        unset($friend_info[$unset]);

        $hobby = $stu_hobby[0];
        if (empty($friend_info)) {
            $empty = '还没有和你有相同爱好的小伙伴哦~';
        }
        $this->assign('empty',$empty);
        $this->assign('hobby',$hobby);
        $this->assign('friend_info',$friend_info);



        // //  同乡比例    by 李泽月
        //实例化
        $Home = M("stu_home"); 
        //同乡townee
        
        $map['stu_tzs'] = $stu_tzs;
        $address = $Home->field('stu_address')->where($map)->select();
        $add['stu_address'] = $address[0]['stu_address'];
        $townee = $Home->field('stu_gender')->where($add)->select();
        //$townee = $Home->query("SELECT `stu_gender` FROM `stu_home` WHERE (`stu_address` = (SELECT stu_address FROM `stu_home` WHERE `stu_tzs` = ".$stu_tzs."));");
        
        $all_people = $Home->count(`id`);
        $all_townee = count($townee);
        $other_people = $all_people - $all_townee;
        //同乡比例$scale
        $townee_scale = $all_townee/$all_people;
        //同乡内男女比例
        $man_num = 0;
        for ($i=0; $i < $all_townee; $i++) {   //同乡中男同学的人数
            if ($townee[$i]['stu_gender'] == 1) {
                $man_num = $man_num +1;
            } 
        }
        $girl_num = $all_townee - $man_num;
        //男性比例$man_scale
        $man_scale = $man_num/$all_townee;

        //取前四位 
        $$townee_scale = round($townee_scale*100,2);
        // print_r($$townee_scale);
        //老乡比例
        $townee_info['townee'] = $all_townee;   //同乡人数
        $townee_info['other'] = $other_people;  //其他人数
        $townee_info['scale'] = $$townee_scale;   //同乡占得比例
        $this->assign('townee_info',$townee_info);   
        //男女比例
        $sex_scale['man'] = $man_num;   //男生人数
        $sex_scale['girl'] = $girl_num;   //女生人数
        // $sex_scale['scale'] = $man_scale;
        $this->assign('sex_scale',$sex_scale);   
        //籍贯名
        $this->assign('address',$address[0]['stu_address']);


        //所在学院男女比例 
        $stu['stu_tzs'] = $stu_tzs;
        $major = $Info->field('stu_sch')->where($stu)->select();
        
        $sch['stu_sch'] = $major[0]['stu_sch'];
        $stu_gender = $Info->field('stu_gender')->where($sch)->select();
        $all_stu = count($stu_gender);

        $boy_num = 0;
        for ($i=0; $i < $all_stu; $i++) {   //同学院中男同学的人数
            if ($stu_gender[$i]['stu_gender'] == 1) {
                $boy_num = $boy_num +1;
            } 
        }
        $lady_num = $all_stu - $body_num;

        //学校男女比例         据说是固定的,所以这段作废
        
        /*$gender['stu_gender'] = 1;
        $all_students = count($Info->field('id')->select());
        $all_man_num = $Info->field('id')->where($gender)->select();
        $all_boy = count($all_man_num);
        $all_girl = $all_students - $all_boy;

        $scale_sch['boy_num'] = $all_boy;
        $scale_sch['girl_num'] = $all_girl;
        $this->assign('scale_sch',$scale_sch);  */ 
        //同年同月
        $sql = 'SELECT stu_cons,count(a.id),b.* FROM stu_info as a,(SELECT stu_birth FROM stu_info WHERE stu_tzs = '.$stu_tzs.') as b WHERE floor(a.stu_birth/100) = floor(b.stu_birth/100);';
        $birth = $Info->query($sql); //同年同月的人数
        $birth_day = $birth[0]['stu_birth'];
        $year = substr($birth_day,0,4);
        $month = substr($birth_day,4,2);
        $cons_name = $birth[0]['stu_cons'];
        switch ($cons_name) {
            case 1:
                $cons_name = '水瓶座';
                break;
            case 2:
                $cons_name = '双鱼座';
                break;
            case 3:
                $cons_name = '白羊座';
                break;
            case 4:
                $cons_name = '金牛座';
                break;
            case 5:
                $cons_name = '双子座';
                break;
            case 6:
                $cons_name = '巨蟹座';
                break;
            case 7:
                $cons_name = '狮子座';
                break;
            case 8:
                $cons_name = '处女座';
                break;
            case 9:
                $cons_name = '天秤座';
                break;
            case 10:
                $cons_name = '天蝎座';
                break;
            case 11:
                $cons_name = '射手座';
                break;
            case 12:
                $cons_name = '摩羯座';
                break;
            
            default:
                echo "...";
                break;
        }

        $birth_num = $birth[0]['count(a.id)'];

        $other_birth = $all_people - $birth_num;   

        $birthday['year'] = $year;
        $birthday['month'] = $month;
        $birthday['birth_num'] = $birth_num;
        $birthday['other_num'] = $other_birth;
        $this->assign('birthday',$birthday); 

        //星座
        $sql = 'SELECT count(a.id) FROM stu_info as a,(SELECT * FROM stu_info WHERE stu_tzs = '.$stu_tzs.') as b WHERE a.stu_cons = b.stu_cons';
        $same_cons = $Info->query($sql);
        $same_cons_num = $same_cons[0]['count(a.id)'];
        $other_cons_num = $all_people - $same_cons_num;

        $cons_num['cons_name'] = $cons_name;
        $cons_num['same_num'] = $same_cons_num;
        $cons_num['other_num'] = $other_cons_num;
        $this->assign('cons_num',$cons_num); 
        // print_r($cons_num);
        


        //毕业去向
        
        switch ($sch['stu_sch']) {
            case '通信学院':
                $content = '通信学院的出国升学率为22.3%，灵活就业率为0.48%，待就业率为2.08%，就业率为97.92%';
                $rem_major = $all_stu * 0.3;
                break;
            case '计算机学院':
                $content = '计算机学院的出国升学率为36.18%，灵活就业率为1.37%，待就业率为7.85%，就业率为92.15%';
                $rem_major = $all_stu * 0.25;
                break;
            case '光电学院':
                $content = '光电学院的出国升学率为23.40%，灵活就业率为0.00%，待就业率为5.53%，就业率为94.47%';
                $rem_major = $all_stu * 0.3;
                break;
            case '自动化学院':
                $rem_major = $all_stu * 0.25;
                $content = '自动化学院的出国升学率为17.25%，灵活就业率为0.00%，待就业率为1.4%，就业率为98.6%';
                break;
            case '理学院':
                $rem_major = $all_stu * 0.1;
                $content = '理学院的出国升学率为14.56%，灵活就业率为2.53%，待就业率为5.06%，就业率为94.94%';
                break;
            case '生物学院':
                $content = '生物学院的出国升学率为23.51%，灵活就业率为0.37%，待就业率为4.48%，就业率为95.52%';
                $rem_major = $all_stu * 0.25;
                break;
            case '经管学院':
                $content = '经管学院的出国升学率为9.3%，灵活就业率为0.00%，待就业率为5.09%，就业率为94.91%';
                $rem_major = $all_stu * 0.35;
                break;
            case '体育学院':
                $content = '体育学院的出国升学率为11.67%，灵活就业率为0.00%，待就业率为1.69%，就业率为98.31%';
                $rem_major = $all_stu * 0.1;
                break;
            case '外国语学院':
                $content = '外国语学院的出国升学率为15.63%，灵活就业率为0.00%，待就业率为0.00%，就业率为100%';
                $rem_major = $all_stu * 0.4;
                break;
            case '先进制造学院':
                $rem_major = $all_stu * 0.25;
                $content = '先进制造学院的出国升学率为10.53%，灵活就业率为0.00%，待就业率为0.00%，就业率为100%';
                break;
            case '传媒学院':
                $content = '传媒学院的出国升学率为10.88%，灵活就业率为4.26%，待就业率为0.00%，就业率为100%';
                $rem_major = $all_stu * 0.5;
                break;
            case '软件学院':
                $rem_major = $all_stu * 0.1;
                $content = '软件学院的出国升学率为7.38%，灵活就业率为1.48%，待就业率为0.00%，就业率为100%';
                break;
            case '半导体学院':
                $content = '半导体学院的出国升学率为19.57%，灵活就业率为0.00%，待就业率为0.00%，就业率为100%';
                $rem_major = $all_stu * 0.3;
                break;
            case '法学院':
                $content = '法学院的出国升学率为32.85%，灵活就业率为0.00%，待就业率为0.00%，就业率为100%';
                $rem_major = $all_stu * 0.3;
                break;
            default:
                $content = '你所在的学院还没有数据哦~';
                break;
        }
        $this->assign('content',$content); 
        $rem_major_lady = $all_stu - $rem_major;
        //学院男女比例,脱单比例
        $scale_major['rem_major_boy'] = $rem_major;
        $scale_major['rem_major_lady'] = $rem_major_lady;

        $scale_major['boy_num'] = $boy_num;
        $scale_major['lady_num'] = $lady_num;
        $this->assign('scale_major',$scale_major); 


        $this->display('data');
    }
    // public function message() {
    //     $Msg = M('stu_msg');
    //     $msg_info = $Msg->field()->select();
    //     $this->assign('msg_info',$msg_info); 

    // }
}