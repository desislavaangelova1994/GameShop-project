<?php
use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\StoreModel;
use App\Models\LogModel;

class StoreController extends Controller
{

    

    /**
     * @Route('/gameshop')
     * @Name('index')
     */

    public function index()
    {
        $app=$this->getYee(); //$app = new Yee()

        $app->render('store.twig');
    }

    /**
     * @Route('/action')
     * @Name('action.choice')
     */

    public function action()
    {
        $app=$this->getYee(); //$app = new Yee()

        $app->render('action.twig');
    }

    /**
     * @Route('/fantasy')
     * @Name('fantasy.choice')
     */

    public function fantasy()
    {
        $app=$this->getYee(); //$app = new Yee()

        $app->render('fantasy.twig');
    }

    /**
     * @Route('/beating')
     * @Name('beating.choice')
     */

    public function beating()
    {
        $app=$this->getYee(); //$app = new Yee()

        $app->render('beating.twig');
    }

     /**
     * @Route('/register')
     * @Name('registering')
     */

    public function register()
    {
        $app=$this->getYee(); //$app = new Yee()

        $app->render('register.twig');
    }

     /**
     * @Route('/log')
     * @Name('loginform')
     */

    public function log()
    {
        $app=$this->getYee(); //$app = new Yee()
        
        $_SESSION['islogged'] = true;
        
        $app->render('log.twig');
    }


    /**
     * @Route('/logged')
     * @Name('logged')
     * @Method('POST')
     */

     public function logg()
    {
        $app=$this->getYee(); //$app = new Yee()

        $username = $app->request->post('user');
        $password = $app->request->post('pass');

        $usermodel = new LogModel( $username, $password );
        $user = $usermodel ->login();

        if($user == true)
        {

            
            $user = $usermodel->getUserData();
           
            $data = array(
                        'user' => $user
                        );

            $app->render('loged.twig',$data);
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
     */
    public function logout()
    {
        $app=$this->getYee(); //$app = new Yee() 
              
        session_destroy();
            
        $app->redirect ('/gameshop' );
    }

    /**
     * @Route('/aboutus')
     * @Name('logout')
     */
    public function about()
    {
        $app=$this->getYee(); //$app = new Yee() 
        
            
        $app->render('about1.twig' );
    }

    /**
     * @Route('/services')
     * @Name('logout')
     */
    public function services()
    {
        $app=$this->getYee(); //$app = new Yee() 
        
            
        $app->render('services.twig' );
    }


    /**
     * @Route('/registration')
     * @Name('registered')
     * @Method('POST')
     */

    public function login()
    {
        $app=$this->getYee(); //$app = new Yee()

        $name = $app->request()->post('name');
        $email = $app->request()->post('email');
        $username = $app->request()->post('username');
        $password = $app->request()->post('password');

        $StoreModel = new StoreModel($name,$email,$username,$password);


        $firstname = $StoreModel ->check($name);
        $mail = $StoreModel ->checkEmail($email);
        $user = $StoreModel ->checkUsername($username);
        $pass = $StoreModel ->checkPassword($password);



        if($firstname && $mail && $user && $pass == true)
        {   
         $StoreModel ->insertRegisters();

         $success = "Sucessfully registered!";

         $data = array(
             'Success'=> $success,
             );
         $app->render('store.twig',$data);
        }
        else{
         $error = 'Please enter the correct data';

         $data = array(
            'Error'=>$error
            );
         $app->render('register.twig',$data);
        }

    }

}