let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCart = document.querySelector('.listCart');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})
let products = [
    {
        id: 1,
        name: 'Sausage Pizza',
        image: 'pizza.png',
        price:  1500
    },
    {
        id: 2,
        name: 'Pasta',
        image: 'pasta.jpg',
        price: 1200
    },
    {
        id: 3,
        name: 'Lasagna',
        image: 'lasagna.jpg',
        price: 1450
    },
    {
        id: 4,
        name: 'Avocado Toast',
        image: 'avocado toast.jpg',
        price: 690
    },
    {
        id: 5,
        name: 'Grilled Steak',
        image: 'Grilled Steak.jpg',
        price: 850
    },
    {
        id: 6,
        name: 'Green Chilie Cheeseburger',
        image: 'Green Chile Cheeseburgers.jpg',
        price: 890
    },
    {
        id: 7,
        name: 'Prawn Dumpling Laksa',
        image: 'PrawnDumplingLaksa.jpg',
        price: 1800
    },
    {
        id: 8,
        name: 'Shrimp-Avocado Quinoa Bowls',
        image: 'Lemon-Chili Shrimp Avocado Quinoa Bowls.jpg',
        price: 1800
    },
    {
        id: 9,
        name: 'Sushi Burritos',
        image: 'Sushi burritos.jpg',
        price: 1400
    },
   {
        id: 10,
        name: 'Tacos',
        image: 'Tacos.jpg',
        price: 890
    },
   {
        id: 11,
        name: 'Acai Bowl',
        image: 'Acai Bowls.jpg',
        price:  1200
    },
    {
        id: 12,
        name: 'Baked Mussels',
        image: 'baked-mussels.jpg',
        price: 2500
    },
    {
        id: 13,
        name: 'Caviar',
        image: 'caviar.jpg',
        price: 2800
    },
    {
        id: 14,
        name: 'Croissants',
        image: 'croissants.jpg',
        price: 800
    },
    {
        id: 15,
        name: 'Fries',
        image: 'Fries.webp',
        price: 750
    },
    {
        id: 16,
        name: 'Macarons',
        image: 'Macarons.jpg',
        price: 200
    },
    {
        id: 17,
        name: 'Cappuccino',
        image: 'Cappuccino.jpg',
        price: 800
    },
    {
        id: 18,
        name: 'Chai',
        image: 'chai.jpg',
        price: 490
    },
    {
        id: 19,
        name: 'Coconut Water',
        image: 'coconut water.jpg',
        price: 800
    },
    {
        id: 20,
        name: 'Coconut Ice-Cream ',
        image: 'Coconut-Ice-Cream.jpg',
        price: 1200
    },
    {
        id: 21,
        name: 'Coffee Mellow',
        image: 'coffee mellow.jpg',
        price: 990
    },
    {
        id: 22,
        name: 'Fruit Infused Water',
        image: 'Fruit Infused Water.jpg',
        price: 890
    },
    {
        id: 23,
        name: 'Kombucha',
        image: 'Kombucha.jpeg',
        price: 890
    },
    {
        id: 24,
        name: 'Matcha Latte',
        image: 'Matcha-latte.jpg',
        price: 1000
    },
    {
        id: 25,
        name: 'Pumpkin Spice Latte',
        image: 'pumpkin spice latte.jpg',
        price: 1100
    },
    {
        id: 26,
        name: 'Smoothies',
        image: 'Smoothies.jpg',
        price: 980
    },
    {
        id: 27,
        name: 'Mix-Veg Juice',
        image: 'veg juice.jpg',
        price: 1000
    },
    {
        id: 28,
        name: 'Badam Milk',
        image: 'badam milk.webp',
        price: 490
    },
    {
        id: 29,
        name: 'Boba Tea',
        image: 'boba tea.jpg',
        price: 980
    },
    {
        id: 30,
        name: 'Sparkling Water',
        image: 'sparkling water.jpg',
        price: 500
    },
    
   
];
let listCarts  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCart(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCart(key){
    if(listCarts[key] == null){
        // copy product form list to list card
        listCarts[key] = JSON.parse(JSON.stringify(products[key]));
        listCarts[key].quantity = 1;
    }
    reloadCart();
}
function reloadCart(){
    listCart.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCarts.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})"><</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">></button>
                </div>`;
                listCart.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCarts[key];
    }else{
        listCarts[key].quantity = quantity;
        listCarts[key].price = quantity * products[key].price;
    }
    reloadCart();
}
