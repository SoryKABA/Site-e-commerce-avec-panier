<?php

namespace App\Http\Controllers\Cart;

use Exception;
use App\Cart\Carte;
use App\Cart\CinetPay;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CustomerEmail;
use App\Models\Customer;
use App\Models\Order;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    private $carte;
    public function __construct(Carte $carte)
    {
        $this->carte = $carte;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('shop.cart.index', ['cart' => $this->carte]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function showProductsOrder()
    // {
    //     return view('order.product', ['products' => unserialize()])
    // }

    public function payment() {
        
        return view('shop.cart.payment', [
            'carte' => $this->carte,
            'customer' => (new Customer())->all()]);
    }

    public function cartPayment(Request $request) {
       $customer = new Customer();
       $order = new Order();
       $products = [];
       $customers = [];
       $id_transaction = date("YmdHis"); // or $id_transaction = Cinetpay::generateTransId() 
       foreach ($request->request as $key => $value) {
            $customers[$key] = $value;
       }
       $customers["customer_payment"] = $id_transaction;
        try {
            if(1 !=0) {
            $customer_name = $request->customer_name;
            $customer_surname = $request->customer_surname;
            $customer_phone = $request->customer_phone;
            $customer_email = $request->customer_email;
            $description = $request->description;
            $amount = (int)$this->carte->totale();
            $currency = "GNF";
        }else {
            echo "Veuillez passer par le formulaire";
        }
        $i = 0;
        foreach ($this->carte->content() as $product) {
            $products['product_' . $i][] = (new DateTime('now'))->format('d-m-Y H:i:s');
            $products['product_' . $i][] = $customer_phone;
            $products['product_' . $i][] = $customer_email;
            $products['product_' . $i][] = $customer_name . ' ' . $customer_surname;
            $products['product_' . $i][] = $product->model->id;
            $products['product_' . $i][] = $product->model->title;
            $products['product_' . $i][] = $product->model->price;
            $products['product_' . $i][] = $product->qty;
            $products['product_' . $i][] = $product->model->getImage()->getUrl();
            $i++;
        }
        
        //transaction id
        
        
        
        $apikey = "1618973231659ee5754bd7a2.44701477";
        //Veuillez entrer votre siteId
        $site_id = "5867180";
        
        //notify url
        $notify_url = "http://mondomaine.com/notify/";
        //return url
        $return_url = "http://mondomaine.com/notify/";
        $channels = "ALL";
        
        
        $formData = array(
            "transaction_id"=> $id_transaction,
            "amount"=> $amount,
            "currency"=> $currency,
            "customer_surname"=> $customer_name,
            "customer_name"=> $customer_surname,
            "description"=> $description,
            "notify_url" => $notify_url,
            "return_url" => $return_url,
            "channels" => $channels,
            "metadata" => "Joe", // utiliser cette variable pour recevoir des informations personnalisés.
            "alternative_currency" => "XOF",//Valeur de la transaction dans une devise alternative
            //pour afficher le paiement par carte de credit
            "customer_email" => $customer_email, //l'email du client
            "customer_phone_number" => $customer_phone, //Le numéro de téléphone du client
            "customer_address" => "BP 0024", //l'adresse du client
            "customer_city" => "DAKAR", // ville du client
            "customer_country" => "SN",//Le pays du client, la valeur à envoyer est le code ISO du pays (code à deux chiffre) ex : CI, BF, US, CA, FR
            "customer_state" => "SN", //L’état dans de la quel se trouve le client. Cette valeur est obligatoire si le client se trouve au États Unis d’Amérique (US) ou au Canada (CA)
            "customer_zip_code" => "224" //Le code postal du client
        );
        // enregistrer la transaction dans votre base de donnée
        /*  $commande->create(); */
        if ($formData["amount"] !== (int)$request->amount) {
            return back()->with("success", "Veuillez mettre le prix normal");
        }
        
        $CinetPay = new CinetPay($site_id, $apikey);
        $result = $CinetPay->generatePaymentLink($formData);
        $this->carte->destroy();

        if ($result["code"] == '201')
        {
            $url = $result["data"]["payment_url"];
        
            // ajouter le token à la transaction enregistré
            /* $commande->update(); */
            //redirection vers l'url de paiement
            //$customer
            $order->customer_name = $formData['customer_name'] . ' ' . $formData['customer_surname'];
            $order->payment_intent_id = $formData["transaction_id"];
            $order->amount = $formData["amount"];
            $order->payment_created_at = (new DateTime('now'))->format('Y-m-d H:i:s');
            $order->products = serialize($products);

            Mail::send(new CustomerEmail($products, $customers));
            $order->save();
            
            return redirect($url);
        
        }
        } catch (Exception $e) {
        echo $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $duplicata = $this->carte->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->id;
        });
        //dd($duplicata);
        if ($duplicata->isNotEmpty()) {
            return redirect()->route('shop.home')->with('success', 'Le produit a déjà été ajouté');   
        }
        $product = Products::find($request->id);
        $this->carte->add($product->id, $product->title, 1, $product->price)
                ->associate(Products::class);
        return redirect()->route('shop.home')->with('success', 'Le produit a bien été ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success', 'Produit enlevé');
    }
}
