<?php


use App\Model\HomedItems;
use Illuminate\Database\Seeder;

class HomedItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $data = [

            [
                'name' => "Chicken Shawarma Wrap",
                'category' => "Wrap",
                'base_price' => '4.99'
            ],

            [
                'name' => "Lamb Shawarma Wrap",
                'category' => "Wrap",
                'base_price' => '5.50'
            ],

            [
                'name' => "Chicken Shish Kebab Wrap",
                'category' => "Wrap",
                'base_price' => '5.99'
            ],

            [
                'name' => "Kofta Wrap",
                'category' => "Wrap",
                'base_price' => '5.50'
            ],

            [
                'name' => "Lamb Shish Kebab Wrap",
                'category' => "Wrap",
                'base_price' => '6.50'
            ],

            [
                'name' => "Mix Shawarma Wrap",
                'category' => "Wrap",
                'base_price' => '5.50'
            ],

            [
                'name' => "Chicken Zinger Burger",
                'category' => "Burgers",
                'base_price' => '6.00'
            ],

            [
                'name' => "Fish Burger",
                'category' => "Burgers",
                'base_price' => '4.50'
            ],

            [
                'name' => "Veg Burger",
                'category' => "Burgers",
                'base_price' => '4.50'
            ],
            
            [
                'name' => "Beef Burger Regular",
                'category' => "Burgers",
                'base_price' => '5.50'
            ],

            [
                'name' => "Beef Burger Large",
                'category' => "Burgers",
                'base_price' => '6.99'
            ],

            [
                'name' => "Chicken Fillet Burger Regular",
                'category' => "Burgers",
                'base_price' => '4.50'
            ],

            [
                'name' => "Chicken Fillet Burger Large",
                'category' => "Burgers",
                'base_price' => '5.99'
            ],

            [
                'name' => "Chicken Curry",
                'category' => "Curry",
                'base_price' => '6.99'
            ],
            
            [
                'name' => "Lamb Curry",
                'category' => "Curry",
                'base_price' => '7.50'
            ],

            [
                'name' => "Biryani",
                'category' => "Curry",
                'base_price' => '6.99'
            ],
            
            [
                'name' => "Okra Curry",
                'category' => "Curry",
                'base_price' => '6.50'
            ],

            [
                'name' => " Beans Curry",
                'category' => "Curry",
                'base_price' => '6.50'
            ],

            [
                'name' => "Auvergne curry",
                'category' => "Curry",
                'base_price' => '6.50'
            ],
            
            [
                'name' => "Chicken Shish Kebab Regular",
                'category' => "Grilled",
                'base_price' => '6.50'
            ],

            [
                'name' => "Chicken Shish Kebab large",
                'category' => "Grilled",
                'base_price' => '8.99'
            ],

            [
                'name' => "Lamb Shish Kebab Regular",
                'category' => "Grilled",
                'base_price' => '6.99'
            ],

            [
                'name' => "Lamb Shish Kebab large",
                'category' => "Grilled",
                'base_price' => '9.99'
            ],

            [
                'name' => "Kofta Kebab Regular",
                'category' => "Grilled",
                'base_price' => '6.50'
            ],

            [
                'name' => "Kofta Kebab large",
                'category' => "Grilled",
                'base_price' => '8.99'
            ],

            [
                'name' => "Mixed Shish Kebab Large",
                'category' => "Grilled",
                'base_price' => '9.99'
            ],

            [
                'name' => "Mixed Grilled Large",
                'category' => "Grilled",
                'base_price' => '12.99'
            ],

            [
                'name' => " Full chicken grilled",
                'category' => "Grilled",
                'base_price' => '9.99'
            ],

            [
                'name' => "Half  chicken grilled",
                'category' => "Grilled",
                'base_price' => '6.99'
            ],

            [
                'name' => "Grilled salmon",
                'category' => "Grilled",
                'base_price' => '7.99'
            ],

            [
                'name' => "Halloumi Aubergine",
                'category' => "Grilled",
                'base_price' => '5.99'
            ],

            [
                'name' => "Large Mix Grill",
                'category' => "Grilled",
                'base_price' => '22.99'
            ],

            [
                'name' => "Chicken shawarma",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],

            [
                'name' => "Lamb shawarma",
                'category' => "Shawarma",
                'base_price' => '6.99'
            ],            

            [
                'name' => "Buffalo shawarma chicken",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],

            [
                'name' => "Buffalo shawarma Lamb",
                'category' => "Shawarma",
                'base_price' => '7.50'
            ],

            [
                'name' => "shawarma special",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],

            [
                'name' => "Mix Shawarma",
                'category' => "Shawarma",
                'base_price' => '6.99'
            ],

            [
                'name' => "BBQ wings",
                'category' => "Sides",
                'base_price' => '4.00'
            ],

            [
                'name' => "Chicken Dippers",
                'category' => "Sides",
                'base_price' => '4.00'
            ],
            
            [
                'name' => "Garlic bread",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Chicken nuggets",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Ponds fried cheese",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Fried mushrooms",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Onion rings",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Mozzarella sticks",
                'category' => "Sides",
                'base_price' => '3.50'
            ],

            [
                'name' => "Potato wedges",
                'category' => "Sides",
                'base_price' => '3.50'
            ],

            [
                'name' => "Falafel",
                'category' => "Sides",
                'base_price' => '4.50'
            ],

            [
                'name' => " Kubba",
                'category' => "Sides",
                'base_price' => '4.50'
            ],

            [
                'name' => "Rice",
                'category' => "Sides",
                'base_price' => '3.99'
            ],

            [
                'name' => "Chips Regular",
                'category' => "Sides",
                'base_price' => '2.50'
            ],

            [
                'name' => "Chips Large",
                'category' => "Sides",
                'base_price' => '3.50'
            ],

            [
                'name' => "Dips",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Fattoush",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Chicken Caesar salad",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Green salad",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Tabula",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Greek salad",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Hummus",
                'category' => "Cold mezze",
                'base_price' => '3.50'
            ],

            [
                'name' => "Moutabil",
                'category' => "Cold mezze",
                'base_price' => '3.50'
            ],

            [
                'name' => "Coleslaw",
                'category' => "Cold mezze",
                'base_price' => '3.50'
            ],

            [
                'name' => "Mix olives",
                'category' => "Cold mezze",
                'base_price' => '3.50'
            ],

            [
                'name' => "Jagic",
                'category' => "Cold mezze",
                'base_price' => '3.50'
            ],

            [
                'name' => "Margherita Pizza 7",
                'category' => "Pizza",
                'base_price' => '.99'
            ],

            [
                'name' => "Margherita Pizza 9",
                'category' => "Pizza",
                'base_price' => '5.99'
            ],

            [
                'name' => "Margherita Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.00'
            ],

            [
                'name' => "Margherita Pizza 15",
                'category' => "Pizza",
                'base_price' => '10'
            ],

            [
                'name' => "Free Choice Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Free Choice Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Free Choice Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Free Choice Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Hawaiian Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Hawaiian Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Hawaiian Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Hawaiian Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Classic Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Classic Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Classic Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Classic Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "American Hot Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "American Hot Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "American Hot Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "American Hot Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "BBQ Feast Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "BBQ Feast Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "BBQ Feast Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "BBQ Feast Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "BBQ Chicken Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "BBQ Chicken Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "BBQ Chicken Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "BBQ Chicken Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Chicken Supreme Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Supreme Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Chicken Supreme Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Chicken Supreme Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Vegetarian Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Vegetarian Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Vegetarian Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Vegetarian Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Vegetarian hot Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Vegetarian hot Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Vegetarian hot Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Vegetarian hot Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Vegetarian Sweet Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Vegetarian Sweet Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Vegetarian Sweet Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Vegetarian Sweet Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Meat Lovers Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Meat Lovers Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Meat Lovers Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Meat Lovers Pizzaa 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Pepperoni Plus Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Pepperoni Plus Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Pepperoni Plus Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Pepperoni Plus Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Pepperoni Lovers Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Pepperoni Lovers Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Pepperoni Lovers Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Pepperoni Lovers Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Seafood Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Seafood Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Seafood Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Seafood Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Arian Special Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Arian Special Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Arian Special Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Arian Special Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Spinach Lovers Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Spinach Lovers Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Spinach Lovers Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Spinach Lovers Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Arian Continental Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Arian Continental Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Arian Continental Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Arian Continental Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Beefeater Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beefeater Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Beefeater Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Beefeater Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "New York Style Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "New York Style Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "New York Style Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "New York Style Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Chicken Hot Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Hot Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Chicken Hot Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Chicken Hot Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Maxican Hot Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Maxican Hot Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Maxican Hot Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Mexican Hot Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Chicken Donner Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Donner Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Chicken Donner Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Chicken Donner Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Lamb Donner Pizza 7",
                'category' => "Pizza",
                'base_price' => '5.00'
            ],

            [
                'name' => "Lamb Donner Pizza 9",
                'category' => "Pizza",
                'base_price' => '7.00'
            ],

            [
                'name' => "Lamb Donner Pizza 12",
                'category' => "Pizza",
                'base_price' => '9.99'
            ],

            [
                'name' => "Lamb Donner Pizza 15",
                'category' => "Pizza",
                'base_price' => '12.99'
            ],

            [
                'name' => "Daily deal ",
                'category' => "Special deals",
                'base_price' => '5.50'
            ],

            [
                'name' => "Family platter",
                'category' => "Special deals",
                'base_price' => '39.99'
            ],

            [
                'name' => "Mix grill family deal",
                'category' => "Special deals",
                'base_price' => '44.99'
            ],

            [
                'name' => "Cakes",
                'category' => "Desserts",
                'base_price' => '3.20'
            ],

            [
                'name' => "Ice creams",
                'category' => "Ice creams",
                'base_price' => '3.30'
            ],

            [
                'name' => "Ice cream Fruits salad ",
                'category' => "Ice creams",
                'base_price' => '5.30'
            ]

        ];
        
        foreach($data as $data)
        {
            HomedItems::forceCreate($data);
        }

        
    }
}
