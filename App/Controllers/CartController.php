<?php
use Yee\Yee;
use Yee\Managers\Controller\Controller;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;
use App\Models\CartModel;


class CartController extends Controller
{
    /**
     * @Route('/cart/:id')
     * @Name('shoppingcart')
     * @Method('POST')
     */

    public function cart($id)
    {
        $app=$this->getYee(); //$app = new Yee()

        $Id = $id;

        if (!isset($_SESSION['islogged'])) {
            $app->redirect("/");
        }else
        {
            $CartModel = new CartModel();
            $add = $CartModel->publishById($Id);

            $selectId = $CartModel->selectId();            

            $data = array(
                        'content' => $add
                        );

            $app->render('cart.twig', $data);
        
        }

        
    }

}