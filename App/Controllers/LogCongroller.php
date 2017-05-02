<?php
 
use Yee\Managers\Controller\Controller;
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\LogModel;

class LogController extends Controller
{

    /**
     * @Route('/logss')
     * @Name('log1')
     */
    public function index()
    {
        $app=$this->getYee(); //$app = new Yee()        

        $app->render('login.twig',$data = array());
    }

     /**
     * @Route('/logs')
     * @Name('log)
     * @Method('Post')
     */
    public function test()
    {
        $app=$this->getYee(); //$app = new Yee()
        $username = $app->request->post('user');
        $password = $app->request->post('pass');
        $usermodel = new LogModel($username,$password);
        $user = $usermodel ->getUserData();

        $user = $usermodel ->validateUser();
        $pass = $usermodel->validatePass();

        if($user != NULL){
            $pass = $usermodel->validatePass();
            if($pass == true){
                $data = array(
                              'username' => $user['Username'],
                              );

                $app->render('department.twig',$data);
            }
            else
            {
            
                 $error = "Wrong data!!!";
                 $data = array(
                        'error'=> $error
                        );
                $app->render('log.twig',$data);
        
            }       
        }           
        else
            {
            
                 $error = "Wrong data!!!";
                 $data = array(
                        'error'=> $error
                        );
                $app->render('log.twig',$data);
        
            }

    }


    /**
     * @Route('/logout')
     * @Name('logout')
     * @Method ('POST')
     */
    public function index()
    {
        $app=$this->getYee(); //$app = new Yee()        

        $app->render('store.twig');
    }
}