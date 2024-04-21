<!DOCTYPE html>
<html lang="ro-RO">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kebab de pui</title>
      <meta name="csrf-param" content="_csrf">
      <meta name="csrf-token" content="UV5AYmOdRdRlQw1mkEtPwX5LnZzvzT3Qw3k_t0Wlkes3byg4K6ovpzYSd1XlHmKxLg_E6pyPBbSnM3HBKJ36hg==">
      <link href="styles.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body itemscope="" class="loaded">
      <div class="navbar">
         <div class="navbar-inner">
            <div class="container">
               <ul class="nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">Contact</a></li>
                  <div id="cart" class="cart">
                     <div id="cart-content" class="cart-content"></div>
                     <li><button class="cart-button" onclick="toggleCart()">Cart</button></li>
                  </div>
               </ul>
            </div>
         </div>
      </div>
      <div class="content-block">
      <div class="content-part">
         <!-- Content Page Start -->
         <div class="content single-shop-content clearfix">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6 col-md-6 image-wraper">
                     <div itemscope=""><img src="src/kebab.jpeg" alt="kebab" title="kebab" itemprop="contentUrl"></div>
                     <style>
                        .disclaimer{
                        display: block;
                        margin: 20px 0 0;
                        font-size: 12px;
                        max-width: 600px;
                        }
                     </style>
                     <p class="disclaimer">** Fotografiile produselor de pe site sunt doar cu titlu de prezentare. Ne străduim să vă oferim o inspirație vizuală care reflectă dragostea noastră pentru arta culinară. Vă rugăm să rețineți că produsele noastre pot diferi față de fotografiile prezentate, deoarece obiectivul nostru principal este să vă oferim cel mai proaspăt gust și calitate deosebită pentru fiecare produs pe care il preparam cu mare drag.</p>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <div class="single-shop-right  col-xs-12">
                        <div class="single-shop-caption">
                           <h1 class="product-title" itemprop="name">Kebab de pui</h1>
                           Lavaș, carne de pui, cartofi pai, varză, castraveți murați, roșii, sos alb, sos roșu.                    
                        </div>
                        <div class="topping">
                           <div class="row">
                              <div class="col-xs-6">
                                 <h3 class="topping-heading">
                                    <span class="topping-heading-image" style="background-image: url('src/plus.svg')"></span>
                                    Topping-uri
                                 </h3>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="1">
                                 Cașcaval - 17 MDL                                            <input type="checkbox" value="17" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="4">
                                 Carne de pui - 22 MDL                                            <input type="checkbox" value="22" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="7">
                                 Ciuperci - 17 MDL                                            <input type="checkbox" value="17" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="8">
                                 Ardei iute                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="9">
                                 Ceapă                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                              </div>
                              <div class="col-xs-6">
                                 <h3 class="fara-heading">
                                    <img class="fara-heading-image" src="src/minus.png "></img>
                                    Fara
                                 </h3>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="16">
                                 Sos alb                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="15">
                                 Castraveți                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="13">
                                 Roșii                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="12">
                                 Cartofi pai                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="11">
                                 Ketchup                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                                 <label class="topping-cbx" data-action="attach-addon" data-product-id="4" data-addon-id="14">
                                 Varză                                            <input type="checkbox" value="0" onchange="handleCheckboxChange(this)">
                                 <span class="checkmark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="bay col-12">
                           <div class="row" style="width: 100%;">
                              <div id="pricePerPcs" class="price col-xs-4 "> 
                                 <span>
                                 84 MDL                                </span>            
                              </div>
                              <div class="col-xs-3">
                                 <span class="weight">
                                    <div class="properties-widget widget-w0" itemprop="propertiesList" itemscope="" itemtype="http://schema.org/ItemList">
                                       <div id="pg-6" class="object-property-group active">
                                          <dl itemprop="itemListElement" itemscope="" itemtype="http://schema.org/NameValueStructure">
                                             <dt itemprop="name"></dt>
                                             <meta itemprop="main" content="True">
                                             <dd itemprop="value">400g</dd>
                                          </dl>
                                       </div>
                                    </div>
                                    <!-- /properties-widget -->
                                 </span>
                              </div>
                              <div class="col-xs-5">
                                 <form action="{{ route('cart.add') }}" method="post">
                                    <!-- @csrf -->
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <label for="quantity">Cantitate:</label>
                                    <input type="number" name="quantity" id="quantity" value="1" min="1">
                                    <button type="submit" class="add-to-cart-btn">Adaugă în coș</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="cart.js"></script>
   </body>
</html>
