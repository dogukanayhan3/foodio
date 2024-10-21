
<?php
session_start();
if(isset($_SESSION["email"])){
 echo "<h3>".$_SESSION["email"]."</h3>";
    //echo "<a href='cikis.php' syle=color:red; height=100px; background-color:yellow;border:1px solid red;
    //padding:50px 5px;CikisYap</a>";
}
else{
    //echo "Bu Sayfayi Goruntuleme Izniniz Yok";
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-Foodio</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            background-attachment: fixed;
            background-image: url("https://www.tastingtable.com/img/gallery/12-low-carb-fast-food-options-that-wont-ruin-your-diet/intro-1651501665.jpg");
        }

        #title00 a {
            color: white;
            text-decoration: none; 
        }

        div .item_options {
            background-color: #222222;
            color: white;
            padding: 20px;
            margin: 20px;
            border-radius: 12px;
        }

        input {
            background-color: #333333;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        #submit_item {
            background-color: white;
            color: black;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        #pizzas, #burgers, #sandwiches, #chickens, #ourmenu {
            color: white;
            font-family: Argent Cambria, serif;
        }


        @media (min-width: 1300px) {
            .pizzamenu, .burgermenu, .chickensmenu, .sandwichmenu {
                display: grid;
                grid-template-columns: 30% 30% 30%;
                margin-left: 50px;
                gap: 20px;
                align-items: center;
            }
            .menu img {
                width: 300px;
                align-self: center;
                border-radius: 12px;
                padding: 15px;
                background-color: #222222;
            }
            .menu {
                width: fit-content;
                text-align: center;
                background-color: #666666bb;
                border-radius: 20px;
                padding: 20px;
                margin: 20px;
                align-items: center;
                align-self: center;
            }
            .menu-item {
                margin: 50px;
                padding: 10px;
                border: 3px solid white;
                background-color: #333333dd;
                border-radius: 30px;
                align-items: center;
                align-self: center;
            }
        }

        @media (min-width: 769px) and (max-width: 1299px) {
            .pizzamenu, .burgermenu, .chickensmenu, .sandwichmenu {
            display: grid;
            grid-template-columns: 90%;
            margin-left: 50px;
            gap: 20px;
            align-items: center;
            }
            .menu img {
                width: 300px;
                align-self: center;
                border-radius: 12px;
                padding: 15px;
                background-color: #222222;
            }
            .menu {
                width: fit-content;
                text-align: center;
                background-color: #666666bb;
                border-radius: 20px;
                padding: 10px;
                margin: 10px;
                align-items: center;
                align-self: center;
            }
            .menu-item {
  
                margin: 50px;
                padding: 10px;
                border: 3px solid white;
                background-color: #333333dd;
                border-radius: 30px;
                align-items: center;
                align-self: center;
            }
        }

        @media (max-width: 768px) {
            .pizzamenu, .burgermenu, .chickensmenu, .sandwichmenu {
            display: grid;
            grid-template-columns: 90%;
            margin-left: 50px;
            gap: 20px;
            align-items: center;
            }
            .menu img {
                width: 180px;
                align-self: center;
                border-radius: 12px;
                padding: 10px;
                background-color: #222222;
            }
            .menu {
                width: fit-content;
                text-align: center;
                background-color: #666666bb;
                border-radius: 20px;
                padding: 5px;
                margin: 5px;
                align-items: center;
                align-self: center;
            }
            .menu-item {
                margin: 20px;
                padding: 4px;
                border: 2px solid white;
                background-color: #333333dd;
                border-radius: 20px;
                align-items: center;
                align-self: center;
            }
        }
        

    </style>

</head>
<body>
    
    <div class="navbar-title">
        <strong id="title00"><a href="foodio-home.html">foodio</a></strong>
    </div>

    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu-page.php">Menu</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="login.php">Sign-In/Sign-Up</a></li>
        <li><a href="process-form.php">About</a></li>
    </ul>


    <div class="menu">
        <h1 id="ourmenu">OUR MENU</h1>
        <div class="menu-item">
            <legend id="pizzas"><h1>PIZZAS</h1></legend>

            <div id="Margherita" class="pizzamenu">

                <div id="col">
                    <img src="https://images.ctfassets.net/nw5k25xfqsik/64VwvKFqxMWQORE10Tn8pY/200c0538099dc4d1cf62fd07ce59c2af/20220211142754-margherita-9920.jpg" width="300" alt="margherita pizza">
                </div>

                <div id="col" class="item_options">
                    <h2>Margherita</h2>
                    <p>
                        Indulge in the classic simplicity of our Margherita Pizza, a timeless favorite. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'Margherita', 'https:\\images.ctfassets.net/nw5k25xfqsik/64VwvKFqxMWQORE10Tn8pY/200c0538099dc4d1cf62fd07ce59c2af/20220211142754-margherita-9920.jpg')">
                        <div class="item_options"> 
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Tomato Sauce
                                <input type="checkbox" name="extra_tomato_sauce">
                            </label>
                            <br>
                            <label>Extra Mozarella
                                <input type="checkbox" name="extra_mozarella">
                            </label>
                            <br>
                        </div>
                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Basil
                                <input type="checkbox" name="remove_basil">
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>1 Person
                                <input type="radio" name="size" value="1person" checked="checked">
                            </label>
                            <br>
                            <label>2 People
                                <input type="radio" name="size" value="2people">
                            </label>
                            <br>
                            <label>4 People
                                <input type="radio" name="size" value="4people">
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>
            
            <hr>

            <div id="Bolognese" class="pizzamenu">
                <div id="col">
                    <img src="https://thumbs.dreamstime.com/b/pizza-bolognese-made-excellent-chunky-pasta-sauce-beef-pork-lots-vegetables-tons-flavor-131576393.jpg" width="300" alt="bolognese pizza">
                </div>
                <div id="col" class="item_options">
                    <h2>Bolognese</h2>
                    <p>
                        Experience the perfect fusion of Italian classics with our Bolognese Pizza. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'Bolognese', 'https:\\thumbs.dreamstime.com/b/pizza-bolognese-made-excellent-chunky-pasta-sauce-beef-pork-lots-vegetables-tons-flavor-131576393.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Bolognese Sauce
                                <input type="checkbox" name="extra_bolognese_sauce">
                            </label>
                            <br>
                            <label>Extra Mozarella
                                <input type="checkbox" name="extra_mozarella">
                            </label>
                            <br>
                            <label>Extra Parmesan
                                <input type="checkbox" name="extra_parmesan">
                            </label>
                            <br>
                            <label>Extra Asiago Cheese
                                <input type="checkbox" name="extra_asiago">
                            </label>
                            <br>

                        </div>
                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Mushrooms
                                <input type="checkbox" name="remove_mushrooms">
                            </label>
                            <br>
                            <label>Bell Peppers
                                <input type="checkbox" name="remove_bellpeppers">
                            </label>
                            <br>
                            <label>Caramelized Onions
                                <input type="checkbox" name="remove_onions">
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>1 Person
                                <input type="radio" name="size" value="1person" checked="checked">
                            </label>
                            <br>
                            <label>2 People
                                <input type="radio" name="size" value="2people">
                            </label>
                            <br>
                            <label>4 People
                                <input type="radio" name="size" value="4people">
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>

            <div id="Hawaiian" class="pizzamenu">
                <div id="col">
                    <img src="https://recipes.net/wp-content/uploads/2020/03/dominos-copycat-hawaiian-pizza-recipe.jpg" width="300" alt="hawaiian pizza">
                </div>
                    <div id="col" class="item_options">
                    <h2>Hawaiian</h2>
                    <p>
                        Embark on a tropical flavor journey with our Hawaiian Pizza. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'Hawaiian', 'https:\\recipes.net/wp-content/uploads/2020/03/dominos-copycat-hawaiian-pizza-recipe.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Ham
                                <input type="checkbox" name="extra_ham">
                            </label>
                            <br>
                            <label>Extra Bacon
                                <input type="checkbox" name="extra_bacon">
                            </label>
                            <br>
                            <label>Extra Mozarella
                                <input type="checkbox" name="extra_mozarella">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Pineapple
                                <input type="checkbox" name="remove_pineapple">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>1 Person
                                <input type="radio" name="size" value="1person" checked="checked">
                            </label>
                            <br>
                            <label>2 People
                                <input type="radio" name="size" value="2people">
                            </label>
                            <br>
                            <label>4 People
                                <input type="radio" name="size" value="4people">
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>

            <div id="MeatFeast" class="pizzamenu">
                <div id="col">
                    <img src="https://lodough.co/cdn/shop/articles/pizza---meat-feast-new.jpg?v=1573049926" width="300" alt="meat feast pizza">
                </div>
                <div id="col" class="item_options">
                    <h2>Meat Feast</h2>
                    <p>
                        Dive into a carnivorous delight with our Meat Feast Pizza, a hearty choice for meat lovers. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'MeatFeast', 'https://lodough.co/cdn/shop/articles/pizza---meat-feast-new.jpg?v=1573049926')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Beef
                                <input type="checkbox" name="extra_beef">
                            </label>
                            <br>
                            <label>Extra Pepperoni
                                <input type="checkbox" name="extra_pepperoni">
                            </label>
                            <br>
                            <label>Extra Sausage
                                <input type="checkbox" name="extra_sausage">
                            </label>
                            <br>
                            <label>Extra Bacon
                                <input type="checkbox" name="extra_bacon">
                            </label>
                            <br>
                            <label>Extra Cheddar
                                <input type="checkbox" name="extra_cheddar">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Bacon
                                <input type="checkbox" name="remove_bacon">
                            </label>
                            <br>
                            <label>Sausage
                                <input type="checkbox" name="remove_sausage">
                            </label>
                            <br>
                            <label>Pepperoni
                                <input type="checkbox" name="remove_pepperoni">
                            </label>
                            <br>
                            <label>Beef
                                <input type="checkbox" name="remove_pepperoni">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>1 Person
                                <input type="radio" name="size" value="1person" checked="checked">
                            </label>
                            <br>
                            <label>2 People
                                <input type="radio" name="size" value="2people">
                            </label>
                            <br>
                            <label>4 People
                                <input type="radio" name="size" value="4people">
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <legend id="burgers"><h1>BURGERS</h1></legend>


            <div id="SmashBurger" class="burgermenu">
                <div id="col">
                    <img src="https://www.sunset.com/wp-content/uploads/goldburger-smash-burger.jpg" width="300" alt="smash burger">
                </div>
                <div id="col" class="item_options">
                    <h2>Smash Burger</h2>
                    <p>
                        Satisfy your cravings with our Smash Burger, a culinary masterpiece that redefines the classic burger experience. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'SmashBurger', 'https://www.sunset.com/wp-content/uploads/goldburger-smash-burger.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Patty
                                <input type="checkbox" name="extra_patty">
                            </label>
                            <br>
                            <label>Extra American Cheese
                                <input type="checkbox" name="extra_american_cheese">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>American Cheese
                                <input type="checkbox" name="remove_cheese">
                            </label>
                            <br>
                            <label>Onion
                                <input type="checkbox" name="remove_onion">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>
            
            <hr>

            <div id="CheeseBurger" class="burgermenu">
                <div id="col">
                    <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2019/06/cheeseburger-one-cikan-yemekcom.jpg" width="300" alt="cheese burger">
                </div>
                <div id="col" class="item_options">
                    <h2>Cheese Burger</h2>
                    <p>
                        Savor the timeless taste of our Cheeseburger - a succulent, seasoned beef patty draped in melted Cheddar and American cheese.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'CheeseBurger', 'https://cdn.yemek.com/mnresize/1250/833/uploads/2019/06/cheeseburger-one-cikan-yemekcom.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Patty
                                <input type="checkbox" name="extra_patty">
                            </label>
                            <br>
                            <label>Extra American Cheese
                                <input type="checkbox" name="extra_american_cheese">
                            </label>
                            <br>
                            <label>Extra Cheddar Cheese
                                <input type="checkbox" name="extra_cheddar_cheese">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>American Cheese
                                <input type="checkbox" name="remove_american_cheese">
                            </label>
                            <br>
                            <label>Cheddar Cheese
                                <input type="checkbox" name="remove_cheddar_cheese">
                            </label>
                            <br>
                            <label>Lettuce
                                <input type="checkbox" name="remove_lettuce">
                            </label>
                            <br>
                            <label>Tomato
                                <input type="checkbox" name="remove_tomato">
                            </label>
                            <br>
                            <label>Onion
                                <input type="checkbox" name="remove_onion">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>

            <div id="ChickenBurger" class="burgermenu">
                <div id="col">
                    <img src="https://riogarden.com.tr/wp-content/uploads/2022/12/CHICKENBURGER-FANTA-COCA-COLA.png" width="300" alt="chicken burger">
                </div>
                <div id="col" class="item_options">
                    <h2>Chicken Burger</h2>
                    <p>
                        Delight in our Chicken Burger, where succulent, grilled chicken takes the spotlight. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'ChickenBurger', 'https://riogarden.com.tr/wp-content/uploads/2022/12/CHICKENBURGER-FANTA-COCA-COLA.png')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Chicken
                                <input type="checkbox" name="extra_patty">
                            </label>
                            <br>
                            <label>Extra Cheddar Cheese
                                <input type="checkbox" name="extra_cheddar_cheese">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Cheddar Cheese
                                <input type="checkbox" name="remove_cheddar_cheese">
                            </label>
                            <br>
                            <label>Lettuce
                                <input type="checkbox" name="remove_lettuce">
                            </label>
                            <br>
                            <label>Tomato
                                <input type="checkbox" name="remove_tomato">
                            </label>
                            <br>
                            <label>Mayo
                                <input type="checkbox" name="remove_mayo">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>

            <div id="MediterraneanBurger" class="burgermenu">
                <div id="col">
                    <img src="https://d1c8xu194km6ge.cloudfront.net/assets/321984/Mediterranean_Burger_-147_HD1280.jpg" width="300" alt="mediterranean burger">
                </div>
                <div id="col" class="item_options"> 
                    <h2>Mediterranean Burger</h2>
                    <p>
                        This culinary delight features a seasoned lamb patty infused with Mediterranean herbs and spices, 
                        topped with creamy feta cheese.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'MediterraneanBurger', 'https://d1c8xu194km6ge.cloudfront.net/assets/321984/Mediterranean_Burger_-147_HD1280.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Lamb Patty
                                <input type="checkbox" name="extra_lamb_patty">
                            </label>
                            <br>
                            <label>Extra Feta Cheese
                                <input type="checkbox" name="extra_feta_cheese">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Feta Cheese
                                <input type="checkbox" name="remove_feta_cheese">
                            </label>
                            <br>
                            <label>Cucumber
                                <input type="checkbox" name="remove_cucumber">
                            </label>
                            <br>
                            <label>Tomato
                                <input type="checkbox" name="remove_tomato">
                            </label>
                            <br>
                            <label>Tzatziki Sauce
                                <input type="checkbox" name="remove_tzatziki">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>
        </div>


        <div class="menu-item">
            <legend id="chickens"><h1>FRIED CHICKENS</h1></legend>

            <div id="Tenders" class="chickensmenu">
                <div id="col">
                    <img src="https://glutenfreecuppatea.co.uk/wp-content/uploads/2020/11/air-fryer-chicken-tenders-recipe-featured.jpg" width="300" alt="tenders">
                </div>
                <div id="col" class="item_options">
                    <h2>Chicken Tenders</h2>
                    <p>
                        Indulge in our Chicken Tenders, made with succulent strips of tender chicken breast, perfectly seasoned and crisply fried to golden perfection.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'Tenders', 'https://glutenfreecuppatea.co.uk/wp-content/uploads/2020/11/air-fryer-chicken-tenders-recipe-featured.jpg')">
                        <div class="item_options">
                            <strong>Add Sauces</strong>
                            <hr>
                            <label>BBQ Sauce
                                <input type="checkbox" name="extra_bbq">
                            </label>
                            <br>
                            <label>Honey Mustard
                                <input type="checkbox" name="extra_honey_mustard">
                            </label>
                            <br>
                            <label>Mayo
                                <input type="checkbox" name="extra_mayo">
                            </label>
                            <br>
                            <label>Ketchup
                                <input type="checkbox" name="extra_ketchup">
                            </label>
                            <br>
                            <label>Hot Sauce
                                <input type="checkbox" name="extra_hot">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>4 Pieces
                                <input type="radio" name="size" value="4pcs" checked="checked">
                            </label>
                            <br>
                            <label>8 Pieces
                                <input type="radio" name="size" value="8pcs">
                            </label>
                            <br>
                            <label>12 Pieces
                                <input type="radio" name="size" value="12pcs">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>


            <div id="HotTenders" class="chickensmenu">
                <div id="col">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/delish-flamin-hot-chicken-tenders-still001-1523049262.jpg" width="300" alt="hot tenders">
                </div>
                <div id="col" class="item_options">
                    <h2>Hot Chicken Tenders</h2>
                    <p>
                        Spice up your taste buds with our Hot Chicken Tenders, featuring tender strips of chicken breast coated in a bold and flavorful hot sauce.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event,'HotTenders','https://hips.hearstapps.com/hmg-prod/images/delish-flamin-hot-chicken-tenders-still001-1523049262.jpg')">
                        <div class="item_options">
                            <strong>Add Sauces</strong>
                            <hr>
                            <label>BBQ Sauce
                                <input type="checkbox" name="extra_bbq">
                            </label>
                            <br>
                            <label>Honey Mustard
                                <input type="checkbox" name="extra_honey_mustard">
                            </label>
                            <br>
                            <label>Mayo
                                <input type="checkbox" name="extra_mayo">
                            </label>
                            <br>
                            <label>Ketchup
                                <input type="checkbox" name="extra_ketchup">
                            </label>
                            <br>
                            <label>Hot Sauce
                                <input type="checkbox" name="extra_hot">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>4 Pieces
                                <input type="radio" name="size" value="4pcs" checked="checked">
                            </label>
                            <br>
                            <label>8 Pieces
                                <input type="radio" name="size" value="8pcs">
                            </label>
                            <br>
                            <label>12 Pieces
                                <input type="radio" name="size" value="12pcs">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>



            <div id="Cajun" class="chickensmenu">
                <div id="col">
                    <img src="https://food-images.files.bbci.co.uk/food/recipes/cajun_chicken_wedges_61950_16x9.jpg" width="300" alt="cajun chicken">
                </div>
                <div id="col" class="item_options">
                    <h2>Cajun Chicken</h2>
                    <p>
                        Savor the robust flavors of our Cajun Chicken, showcasing tender chicken breasts generously seasoned with a zesty blend of Cajun spices.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event,'Cajun', 'https://food-images.files.bbci.co.uk/food/recipes/cajun_chicken_wedges_61950_16x9.jpg')">
                        <div class="item_options">
                            <strong>Add Sauces</strong>
                            <hr>
                            <label>BBQ Sauce
                                <input type="checkbox" name="extra_bbq">
                            </label>
                            <br>
                            <label>Honey Mustard
                                <input type="checkbox" name="extra_honey_mustard">
                            </label>
                            <br>
                            <label>Mayo
                                <input type="checkbox" name="extra_mayo">
                            </label>
                            <br>
                            <label>Ketchup
                                <input type="checkbox" name="extra_ketchup">
                            </label>
                            <br>
                            <label>Hot Sauce
                                <input type="checkbox" name="extra_hot">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>4 Pieces
                                <input type="radio" name="size" value="4pcs" checked="checked">
                            </label>
                            <br>
                            <label>8 Pieces
                                <input type="radio" name="size" value="8pcs">
                            </label>
                            <br>
                            <label>12 Pieces
                                <input type="radio" name="size" value="12pcs">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>



            <div id="PopcornChicken" class="chickensmenu">
                <div id="col">
                    <img src="https://www.paintthekitchenred.com/wp-content/uploads/2022/03/Air-fryer-popcorn-chicken-L1-Paint-the-Kitchen-Red-scaled.jpg" width="300" alt="popcorn chicken">
                </div>
                <div id="col" class="item_options">
                    <h2>Popcorn Chicken</h2>
                    <p>
                        Indulge in the crave-worthy goodness of our Popcorn Chicken, featuring bite-sized, 
                        golden-fried chicken pieces that are irresistibly crispy on the outside and tender on the inside. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event,'PopcornChicken','https://www.paintthekitchenred.com/wp-content/uploads/2022/03/Air-fryer-popcorn-chicken-L1-Paint-the-Kitchen-Red-scaled.jpg')">
                        <div class="item_options">
                            <strong>Add Sauces</strong>
                            <hr>
                            <label>BBQ Sauce
                                <input type="checkbox" name="extra_bbq">
                            </label>
                            <br>
                            <label>Honey Mustard
                                <input type="checkbox" name="extra_honey_mustard">
                            </label>
                            <br>
                            <label>Mayo
                                <input type="checkbox" name="extra_mayo">
                            </label>
                            <br>
                            <label>Ketchup
                                <input type="checkbox" name="extra_ketchup">
                            </label>
                            <br>
                            <label>Hot Sauce
                                <input type="checkbox" name="extra_hot">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>4 Pieces
                                <input type="radio" name="size" value="4pcs" checked="checked">
                            </label>
                            <br>
                            <label>8 Pieces
                                <input type="radio" name="size" value="8pcs">
                            </label>
                            <br>
                            <label>12 Pieces
                                <input type="radio" name="size" value="12pcs">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>
        </div>


        <div class="menu-item">
            <legend id="sandwiches"><h1>SANDWICHES</h1></legend>

            <div id="CheeseBaconSandwich" class="sandwichmenu">
                <div id="col">
                    <img src="https://idahopotato.com/uploads/media/IPC_PotatoBaconBombSandwich_rgb_v2.jpg" width="300" alt="cheese bacon sandwich">
                </div>
                <div id="col" class="item_options">
                    <h2>Cheese Bacon Sandwich</h2>
                    <p>
                        Savor the irresistible combination of our Cheese Bacon creation, featuring smoky bacon strips and topped with a rich blend of melted cheeses. 
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'CheeseBaconSandwich', 'https://idahopotato.com/uploads/media/IPC_PotatoBaconBombSandwich_rgb_v2.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Bacon
                                <input type="checkbox" name="extra_bacon">
                            </label>
                            <br>
                            <label>Extra Mozarella Cheese
                                <input type="checkbox" name="extra_mozarella_cheese">
                            </label>
                            <br>
                            <label>Extra Cheddar Cheese
                                <input type="checkbox" name="extra_cheddar_cheese">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Cheddar Cheese
                                <input type="checkbox" name="remove_cheddar_cheese">
                            </label>
                            <br>
                            <label>Tomato
                                <input type="checkbox" name="remove_tomato">
                            </label>
                            <br>
                            <label>Mozarella Cheese
                                <input type="checkbox" name="remove_mozarella">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>6 inches
                                <input type="radio" name="size" value="6in">
                            </label>
                            <br>
                            <label>12 inches
                                <input type="radio" name="size" value="12in" checked="checked">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>




            <div id="PhillySteakSandwich" class="sandwichmenu">
                <div id="col">
                    <img src="https://www.mashed.com/img/gallery/easy-philly-cheesesteak-recipe/l-intro-1650996375.jpg" width="300" alt="philly steak sandwich">
                </div>
                <div id="col" class="item_options">
                    <h2>Philly Steak Sandwich</h2>
                    <p>
                        Indulge in the savory goodness of our Philly Steak Sandwich, a delectable creation that stars thinly sliced, tender steak piled high on a fresh and fluffy roll.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event,'PhillySteakSandwich','https://www.mashed.com/img/gallery/easy-philly-cheesesteak-recipe/l-intro-1650996375.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Steak
                                <input type="checkbox" name="extra_bacon">
                            </label>
                            <br>
                            <label>Extra Cheddar Cheese
                                <input type="checkbox" name="extra_cheddar_cheese">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Cheddar Cheese
                                <input type="checkbox" name="remove_cheddar_cheese">
                            </label>
                            <br>
                            <label>Bell Peppers
                                <input type="checkbox" name="remove_peppers">
                            </label>
                            <br>
                            <label>Onion
                                <input type="checkbox" name="remove_onion">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>6 inches
                                <input type="radio" name="size" value="6in">
                            </label>
                            <br>
                            <label>12 inches
                                <input type="radio" name="size" value="12in" checked="checked">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>




            <div id="FocacciaSandwich" class="sandwichmenu">
                <div id="col">
                    <img src="https://mojo.generalmills.com/api/public/content/lMSAWwr470aCY0V8AKnsDw_gmi_hi_res_jpeg.jpeg?v=51bb923e&t=466b54bb264e48b199fc8e83ef1136b4" width="300" alt="focaccia sandwich">
                </div>
                <div id="col" class="item_options">
                    <h2>Focaccia Sandwich</h2>
                    <p>
                        Experience the artistry of our Focaccia Sandwich, a culinary masterpiece that begins with freshly baked focaccia bread.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event,'FocacciaSandwich','https://mojo.generalmills.com/api/public/content/lMSAWwr470aCY0V8AKnsDw_gmi_hi_res_jpeg.jpeg?v=51bb923e&t=466b54bb264e48b199fc8e83ef1136b4')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Steak
                                <input type="checkbox" name="extra_bacon">
                            </label>
                            <br>
                            <label>Extra Mozarella Cheese
                                <input type="checkbox" name="extra_mozarella_cheese">
                            </label>
                            <br>
                            <label>Extra Vegetables
                                <input type="checkbox" name="extra_vegetables">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Vegetables
                                <input type="checkbox" name="remove_vegetables">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="white">White Bread</option>
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>6 inches
                                <input type="radio" name="size" value="6in">
                            </label>
                            <br>
                            <label>12 inches
                                <input type="radio" name="size" value="12in" checked="checked">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>

            <hr>



            <div id="VeggieSandwich" class="sandwichmenu">
                <div id="col">
                    <img src="https://nuttinelli.com/wp-content/uploads/2020/01/Easy_Veggie_Sandwich.jpg" width="300" alt="veggie sandwich">
                </div>
                <div id="col" class="item_options">
                    <h2>Veggie Sandwich</h2>
                    <p>
                        Delight in our Veggie Sandwich, a plant-based sensation crafted with care.
                    </p>
                </div>
                <div id="col">
                    <form id="orderForm" onsubmit="addToCart(event, 'VeggieSandwich', 'https://nuttinelli.com/wp-content/uploads/2020/01/Easy_Veggie_Sandwich.jpg')">
                        <div class="item_options">
                            <strong>Add Extras</strong>
                            <hr>
                            <label>Extra Avocado
                                <input type="checkbox" name="extra_avocado">
                            </label>
                            <br>
                            <label>Extra Tofu
                                <input type="checkbox" name="extra_tofu">
                            </label>
                            <br>
                            <label>Extra Vegetables
                                <input type="checkbox" name="extra_vegetables">
                            </label>
                        </div>

                        <div class="item_options">
                            <strong>Remove Ingredients</strong>
                            <hr>
                            <label>Avocado
                                <input type="checkbox" name="remove_avocado">
                            </label>
                            <br>
                            <label>Tofu
                                <input type="checkbox" name="remove_tofu">
                            </label>
                        </div>
                
                        <div class="item_options">
                            <strong>Bread Type</strong>
                            <hr>
                            <label>
                                <select id="breadSelection" name="breadSelection">
                                    <option value="wholegrain">Whole Grain Bread</option>
                                    <option value="sourdough">Sourdough Bread</option>
                                    <option value="glutenfree">Gluten-Free Bread</option>
                                </select>
                            </label>
                        </div>
                        <div class="item_options">
                            <strong>Size</strong>
                            <hr>
                            <label>6 inches
                                <input type="radio" name="pcs" value="6in">
                            </label>
                            <br>
                            <label>12 inches
                                <input type="radio" name="pcs" value="12in" checked="checked">
                            </label>
                        </div>
                        <br>
                        <input id="submit_item" type="submit" name="add_to_cart" value="Add To Cart">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="addToCart-menu.js"></script>
    
</body>

<footer class="footer">
    <div>
        Ceng361 Project - 2023
    </div> 
</footer>
</html>