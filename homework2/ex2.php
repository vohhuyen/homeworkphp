<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .showsp{
            display: flex;
            margin: 20px 0;
        }
        .card{
            border: 1px solid #3333;
        }
        .title1{
            background: orange;
        }
        .title2{
            background: cornflowerblue;
        }
        .title1, .title2{
            height: 50px;
            width: 100%;
            border-radius: 15px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .title1 i, .title2 i{
            font-size: 10px;
        }
        .title1 h3, .title2 h3{
            padding: 0 5px;
        }


        .star_yellow{
            color: #E3E80B;
            padding: 0;
        }
        .star_grey{
            color: #D1CDCD;
        }
        .img-product{
            margin-top: 15px;
            width: 300px;
            height: 300px;
            background-size: cover;
        }
        .product_name{
            font-size: 20px;
            padding: 5px 0;
            margin-left: 15px;
            margin-top: 15px;
        }
        .price{
            color: red;
            font-size: 20px;
            margin-left: 15px;
        }
        .product_evalute{
            justify-content: space-between;
            font-size: 15px;
            margin-left: 15px;
        }
        button{
            float: right;
            margin-right: 15px;
            margin-bottom: 15px;
            border-radius: 20px;
            padding: 10px;
            border: 1px solid #3333;
            background: white;
        }
    </style>
</head>
<body>
<?php
    $product = array(
        'featuredProducts' => array(
            'fp01' => array(
                'img' => 'https://cf.shopee.vn/file/b6a5bfb3569596296c06cd500e9b1f92',
                'name' => 'Nokia black future',
                'price' => '280.000',
                'star' => 5,
                'evalua' => 9999
            ),
            'fp02' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/118143/huawei-nova-2i-hh-600x600-600x600.jpg',
                'name' => 'Huawei Nova 2i',
                'price' => '3.990.000',
                'star' => 4,
                'evalua' => 804
            ),
            'fp03' => array(
                'img' => 'https://p-vn.ipricegroup.com/uploaded_8258afdf9d2d0e2341fd21e2cb6b8698.jpg',
                'name' => 'Xiaomi Redmi Note 5',
                'price' => '5.690.000',
                'star' => 4,
                'evalua' => 372
            ),
            'fp04' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/143465/xiaomi-redmi-5-plus-600x600.jpg',
                'name' => 'Xiaomi Redmi 5 Plus 4GB',
                'price' => '4.790.000',
                'star' => 4,
                'evalua' => 347
            ),
            'fp05' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg',
                'name' => 'Itel it2123',
                'price' => '160.000',
                'star' => 5,
                'evalua' => 302
            ),
        ),
        'productsNew' => array(
            'pn01' => array(
                'img' => 'https://p-vn.ipricegroup.com/uploaded_8258afdf9d2d0e2341fd21e2cb6b8698.jpg',
                'name' => 'Xiaomi Redmi Note 5',
                'price' => '5.690.000',
                'star' => 4,
                'evalua' => 372
            ),
            'pn02' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/103401/mobiistar-lai-zumbo-s2-300-300x300.jpg',
                'name' => 'Mobiistar Zumbo S2 Dual',
                'price' => '2.850.000',
                'star' => 4,
                'evalua' => 104
            ),
            'pn03' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/151637/mobiistar-b310-orange-600x600.jpg',
                'name' => 'Mobiistar B310',
                'price' => '260.000',
                'star' => 5,
                'evalua' => 87
            ),
            'pn04' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/193989/itel-it2161-1.jpg',
                'name' => 'Itel it2161',
                'price' => '170.000',
                'star' => 5,
                'evalua' => 33
            ),
            'pn05' => array(
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/192002/oppo-realme-2-pro-black-600x600.jpg',
                'name' => 'Realme 2 Pro 8GB/128GB',
                'price' => '6.990.000',
                'star' => 5,
                'evalua' => 16
            ),
        )
        );
?>
    <div class="content-top">
        <div class="title1">
            <i class="fa-solid fa-star"></i>
            <h3>NỔI BẬT NHẤT</h3>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="showsp">
            <?php 
                foreach($product['featuredProducts'] as $key => $products){
                    echo '
                <div class="card">
                    <div class="product_img">
                        <img class="img-product" src="'.$products['img'].'" alt="phone">
                    </div>           
                    <div class="product_name">
                        <span><b>'.$products['name'].'</b></span>
                    </div>
                    <div class="product_price">
                        <b class="price">'.$products['price'].'</b>
                    </div>
                    <div class="product_evalute"> ';
                        for($x=0; $x < 5; $x++){
                            if($x < $products['star']) echo '<i class="fa-solid fa-star star_yellow"></i>';
                            else echo '<i class="fa-solid fa-star star_grey"></i>';
                        }
                    echo '
                        <span>'.$products['evalua'].' đáng giá</span>
                    </div> 
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
                ';
                }
            ?>
        </div>
    </div>
    <div class="content-top">
        <div class="title2">
            <i class="fa-solid fa-star"></i>
            <h3>SẢN PHẨM MỚI</h3>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="showsp">
            <?php 
                foreach($product['productsNew'] as $key => $products){
                    echo '
                <div class="card">
                    <div class="product_img">
                        <img class="img-product" src="'.$products['img'].'" alt="phone">
                    </div>           
                    <div class="product_name">
                        <span><b>'.$products['name'].'</b></span>
                    </div>
                    <div class="product_price">
                        <b class="price">'.$products['price'].'</b>
                    </div>
                    <div class="product_evalute"> ';
                        for($x=0; $x < 5; $x++){
                            if($x < $products['star']) echo '<i class="fa-solid fa-star star_yellow"></i>';
                            else echo '<i class="fa-solid fa-star star_grey"></i>';
                        }
                    echo '
                        <span>'.$products['evalua'].' đáng giá</span>
                    </div> 
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
                ';
                }
            ?>
        </div>
    </div>
</body>
</html>