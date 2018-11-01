<?php
namespace App\library\classes;
use Illuminate\Support\Facades\Log;
use Mail;
use App;
use Config;
use Lang;
use Auth;
use Conekta\Conekta;
use Conekta\Charge;
use Conekta\Order;
use Conekta\Customer;
use Conekta\Handler;
use Conekta\ResourceNotFoundError;
use \Conekta\Exceptions;
use Conekta\PaymentSource;
use Conekta\PaymentMethod;
use Conekta\ConektaResource;
use \Exception;

class conektaClass
{
    public function __construct(){
        Log::info("[conektaClass][constructor]");

        Conekta::setApiKey("key_UxsyCGrnay324YfQZg7gLA");
        Conekta::setApiVersion("2.0.0");
    }

    public function customerDeleteCard($customer_id, $payment_source_id){
        //delete card to an existing customer

        $customer = Customer::find($customer_id);
        $source = $customer->deletePaymentSourceById($payment_source_id);

        Log::info("[conektaClass][customerAddCard] customer array: ");
        Log::info($customer);
        Log::info("[conektaClass][customerAddCard] source array: ");
        Log::info($source);

        return $source;

    }

    public function customerAddCard($customer_id, $token_id){

      //add another card to an existing customer

      $customer = Customer::find($customer_id);
      $source = $customer->createPaymentSource(array(
        'token_id' => $token_id,
        'type'     => 'card'
      ));

      Log::info("[conektaClass][customerAddCard] customer array: ");
      Log::info($customer);
      Log::info("[conektaClass][customerAddCard] source array: ");
      Log::info($source);

      return $source;
    }

    public function createCustomer($name, $email, $phone, $token){

      try {
        $customer = Customer::create(
          array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "payment_sources" => array(
              array(
                  "type" => "card",
                  "token_id" => $token
              )
            )//payment_sources
          )//customer
        );
      } catch (ProccessingError $error){
        return View('conektaTest.payment',array('message'=>$e->getMessage()));
      } catch (ParameterValidationError $error){
        return View('conektaTest.payment',array('message'=>$e->getMessage()));
      } catch (Handler $error){
        return View('conektaTest.payment',array('message'=>$e->getMessage()));
      }

      return $customer;

    }

    public function createOrderMudanza($cliente, $tarjeta, $pedido_mudanza){


      Log::info("[conektaClass][createOrderMudanza] pedido_mudanza: ". $pedido_mudanza["monto_total"]);

      $precio = "".$pedido_mudanza["monto_total"]."00";

      $valid_order =
        array(
            "line_items" => array(
              array(
                "name" => "Servicio de Mudanza",
                "unit_price" => $precio,
                "quantity" => 1
              )//first line_item
            ), //line_items
            "shipping_lines" => array(
              array(
                "amount" => 1,
                 "carrier" => "VASH"
              )
            ), //shipping_lines - physical goods only

            "currency" => "MXN",
            "customer_info" => array(
              "customer_id" => $cliente[0]->c_conekta_customer_id
            ), //customer_info
            "shipping_contact" => array(
              "address" => array(
                "street1" => $pedido_mudanza["deAddress"],
                "street2" => $pedido_mudanza["aAddress"],
                "postal_code" => "14100",
                "country" => "MX"
              )//address
            ), //shipping_contact - required only for physical goods
            //"metadata" => array("reference" => "12987324097", "more_info" => "lalalalala"),
            "charges" => array(
                array(
                    "payment_method" => array(
                       "type" => "card",
                       "payment_source_id" => $tarjeta[0]->pagos_source_id
                    ) //payment_method - use customer's <code>default</code> - a card
                ) //first charge
            ) //charges
          );

        $order = null;


        $obj = new \stdclass();

        try {
          $order = Order::create($valid_order);
        } catch (ProcessingError $e){
          $obj->message = (string)$e->getMessage();
          $obj->success = "false";
          return $obj;
        } catch (ParameterValidationError $e){
          $obj->message = (string)$e->getMessage();
          $obj->success = "false";
          return $obj;
        } catch (Handler $e){
          $obj->message = (string)$e->getMessage();
          $obj->success = "false";
          return $obj;
        }

        $obj->id = $order["id"];
        $obj->success = "true";

        return $obj;

    }


}
