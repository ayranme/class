// 登录
public function login()
{
    //密码加密并从数据库查找记录
    $map['username'] = input('post.a');
    $map['password'] = md5(input('post.b'));
    $user=db('user')->where($where)->find();
    //验证成功则保存session
    if ($user) {
        unset($user["psd"]);
        session("user", $user['id']);
        //根据不同权限跳转
        if($user['quanxian'] == 0){
            $this->redirect('Module1/index/index');
        }
        elseif ($user['quanxian'] == 1) {
          $this->redirect('MOdule2/index/index');
        }
        else{
          $this->redirect('Module3/index/index');
        }
    }else{
        print_r ('error!');
        return false;
    }
}
--------------------- 
作者：正版小火炉 
来源：CSDN 
原文：https://blog.csdn.net/bcfdsagbfcisbg/article/details/78579628 
版权声明：本文为博主原创文章，转载请附上博文链接！