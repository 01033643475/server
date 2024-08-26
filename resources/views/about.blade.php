 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">


     <title>Document</title>
     <style>
         html {
             scroll-behavior: smooth;
         }

         .footer {
             background-color: #0044cc;
             color: #ffffff;
             padding: 40px 0;
         }

         .footer a {
             color: #ffffff;
             text-decoration: none;
         }

         .footer a:hover {
             text-decoration: underline;
         }

         .footer .social-icons svg {
             fill: #ffffff;
             transition: fill 0.3s ease;
         }

         .footer .social-icons svg:hover {
             fill: #cccccc;
         }

         .footer .newsletter-form input {
             border: none;
             border-radius: 0;
             padding: 10px;
             width: calc(100% - 40px);
         }

         .footer .newsletter-form button {
             border-radius: 0;
             border: none;
             background-color: #0066cc;
             color: #ffffff;
             padding: 10px;
             cursor: pointer;
             transition: background-color 0.3s ease;
         }

         .footer .newsletter-form button:hover {
             background-color: #0044cc;
         }

         .footer .footer-links ul {
             list-style: none;
             padding: 0;
         }

         .footer .footer-links ul li {
             margin-bottom: 10px;
         }

         .footer .footer-links ul li a {
             font-size: 14px;
         }
     </style>
     <style>
         .product-list {
             display: flex;
             flex-wrap: wrap;
             justify-content: space-between;
             margin: 0 auto;
             padding: 20px;
             max-width: 1200px;
             /* أقصى عرض للصفحة */
         }

         .product-miniature {
             flex: 1 1 calc(16.66% - 20px);
             /* 16.66% لكل عنصر (6 عناصر في الصف) مع مراعاة المسافات */
             box-sizing: border-box;
             margin-bottom: 20px;
             background: #fff;
             border: 1px solid #ddd;
             border-radius: 8px;
             padding: 10px;
             transition: transform 0.3s ease;
         }

         .product-miniature:hover {
             transform: translateY(-10px);
             /* تأثير عند التمرير على المنتج */
         }

         .thumbnail-inner img {
             width: 100%;
             height: auto;
             display: block;
             border-radius: 8px;
         }

         .product-description {
             padding: 10px 0;
             text-align: center;
         }

         .product-title {
             font-size: 1.1rem;
             font-weight: 600;
             color: #333;
             margin-bottom: 10px;
         }

         .product-price-and-shipping {
             font-size: 1rem;
             color: #28a745;
             margin-bottom: 10px;
         }

         .comments_note .star {
             background: url('star.png') no-repeat;
             width: 18px;
             height: 18px;
             display: inline-block;
         }
     </style>
     <style>
         /* قاعدة البطاقة */
         .ProductCard {
             background-color: #fff;
             border-radius: 8px;
             box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
             overflow: hidden;
             position: relative;
             width: 240px;
             margin: 10px;
         }

         /* تنسيق الصورة */
         .ProductCard__Thumb {
             width: 100%;
             height: auto;
             object-fit: cover;
         }

         /* تنسيق تفاصيل البطاقة */
         .ProductCard__Details {
             padding: 16px;
             border-top: 1px solid #e5e8ec;
         }

         /* تنسيق العلامات الترويجية */
         .ProductCard__PromoLabel {
             background-color: #007aff;
             /* اللون الأساسي للعلامة الترويجية */
             color: #fff;
             padding: 4px 8px;
             border-radius: 4px;
             font-size: 12px;
             position: absolute;
             top: 10px;
             left: 10px;
             z-index: 10;
         }

         /* تنسيق العلامة الترويجية "Bestseller" */
         .ProductCard__PromoLabel--bestseller {
             background-color: #007aff;
             /* اللون الأساسي */
         }

         /* تنسيق العلامة الترويجية "40% Off Interest" */
         .ProductCard__PromoLabel--discount {
             background-color: #f0f0f0;
             /* اللون الخلفي */
         }

         /* زر الإضافة إلى قائمة الأمنيات */
         .ProductCard__favorite {
             background-color: #f0f0f0;
             color: #007aff;
             width: 40px;
             height: 40px;
             border-radius: 50%;
             position: absolute;
             top: 10px;
             right: 10px;
             display: flex;
             align-items: center;
             justify-content: center;
             z-index: 10;
         }

         /* النصوص والعناوين */
         .ProductCard__Details .name {
             font-size: 14px;
             color: #333;
             font-weight: 600;
             margin: 0;
             text-decoration: none;
         }

         /* السعر والعرض */
         .ProductCard__Price {
             font-size: 16px;
             color: #007aff;
             font-weight: bold;
         }

         .ProductCard__Installments {
             font-size: 12px;
             color: #666;
         }

         /* تحسين التوافق مع جميع الأجهزة */
         @media (max-width: 768px) {
             .ProductCard {
                 width: 100%;
                 margin: 0 auto;
             }
         }

         /* تنسيق الزر "Compare Product" */
         .ProductCard__CompareButton {
             width: 100%;
             padding: 8px;
             text-align: center;
             font-size: 14px;
             border-radius: 8px;
             background-color: #f0f0f0;
             color: #007aff;
             display: flex;
             align-items: center;
             justify-content: center;
             margin-top: auto;
             display: none;
             /* افتراضيًا مخفي، يمكن عرضه حسب الحاجة */
         }

         /* تنسيق عناصر التقييم والشعار */
         .ProductCard__RayaPlusLogo {
             height: 20px;
             margin-left: 8px;
         }

         .product-rating {
             height: 18px;
             margin-right: 8px;
         }

         /* تخصيص خاصية التمرير */
         .swiper-slide {
             width: 240px;
             box-sizing: border-box;
         }
     </style>
     <style>
         .OffersBanners {
             padding: 20px;
             background-color: #f5f5f5;
         }

         .OfferCard {
             position: relative;
             border-radius: 10px;
             overflow: hidden;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
         }

         .OfferCard__Link {
             display: block;
             position: relative;
         }

         .OfferCard picture img {
             width: 100%;
             height: auto;
             object-fit: cover;
         }

         .slider {
             display: flex;
             overflow-x: auto;
             padding: 10px 0;
             gap: 10px;
         }

         .OfferCard.relative {
             flex: 1;
             min-width: 212px;
         }

         .OfferCard__Triangle {
             position: absolute;
             bottom: 20px;
             left: 50%;
             transform: translateX(-50%);
             width: 40px;
             height: 40px;
             background: white;
             border-radius: 50%;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
             display: flex;
             align-items: center;
             justify-content: center;
         }

         .OfferCard__Scrolldown {
             position: absolute;
             bottom: 10px;
             left: 50%;
             transform: translateX(-50%);
             background-color: #007aff;
             color: white;
             padding: 10px;
             border-radius: 5px;
             text-align: center;
         }

         .OfferCard__Scrolldown svg {
             width: 20px;
             height: 20px;
         }

         @media (max-width: 768px) {
             .slider {
                 flex-direction: column;
             }

             .OfferCard.relative {
                 margin: 10px 0;
             }

             .OfferCard__Triangle {
                 display: none;
             }
         }

         .navbar {
             background-color: #007aff;
             padding: 15px;
             border-radius: 10px;
         }

         .navbar-brand img {
             height: 50px;
         }

         .search-bar {
             flex: 1;
             margin: 0 20px;
         }

         .search-bar input {
             width: 100%;
             padding: 10px;
             border-radius: 5px;
             border: 1px solid #ccc;
         }

         .nav-items {
             display: flex;
             justify-content: space-evenly;
             background-color: blue;
         }

         .nav-items a {
             color: white;
             text-decoration: none;
             padding: 10px 15px;
             border-radius: 5px;
             transition: background-color 0.3s;
         }

         .nav-items a:hover {
             background-color: #0056b3;
         }
     </style>
     <style>
         .card {
             transition: transform 0.3s ease, box-shadow 0.3s ease;
         }

         .card:hover {
             transform: translateY(-5px);
             box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
         }

         .product-image {
             max-height: 150px;
             overflow: hidden;
             display: flex;
             justify-content: center;
             align-items: center;
         }

         .product-image img {
             object-fit: contain;
         }

         .custom-link {
             font-size: 18px;
             color: #007bff;
             font-weight: bold;
             text-decoration: none;
             padding: 10px 20px;
             border: 2px solid #007bff;
             border-radius: 5px;
             transition: background-color 0.3s, color 0.3s, border-color 0.3s;
         }

         .custom-link:hover {
             background-color: #007bff;
             color: #ffffff;
             border-color: #0056b3;
         }
     </style>
 </head>

 <body>

     @include('navbar')
     <span style="    display: flex;
    justify-content: center;">
         <div class="all" style="    overflow: hidden;">
             <br>
             <section class="container mx-auto OffersBanners">
                 <div class="relative mx-6 OfferCard lg:mx-0" sort="1">
                     <a href="/en/guest-installments" class="OfferCard__Link"
                         aria-label="navigate to /guest-installments">
                         <picture>
                             <source
                                 srcset="https://api-rayashop.freetls.fastly.net/media/offers/1714395551160.jpg?format=webp&amp;width=1200"
                                 media="(min-width: 768px)">
                             <source
                                 srcset="https://api-rayashop.freetls.fastly.net/media/offers/171439555828.jpg?format=webp&amp;width=600"
                                 media="(max-width: 767px)">
                             <img src="https://api-rayashop.freetls.fastly.net/media/offers/1714395551160.jpg"
                                 alt="Offer Image">
                         </picture>
                     </a>
                 </div>
                 <div class="slider">
                     <div class="relative OfferCard" sort="2">
                         <a href="/en/zero-interest-zero-down-payment" class="OfferCard__Link"
                             aria-label="navigate to /zero-interest-zero-down-payment">
                             <picture>
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1723119650271.jpg?format=webp&amp;width=1200"
                                     media="(min-width: 768px)">
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1723119655538.jpg?format=webp&amp;width=600"
                                     media="(max-width: 767px)">
                                 <img src="https://api-rayashop.freetls.fastly.net/media/offers/1723119650271.jpg"
                                     alt="Offer Image">
                             </picture>
                         </a>
                     </div>
                     <div class="relative OfferCard" sort="3">
                         <a href="/en/custom-pages/z-zone" class="OfferCard__Link"
                             aria-label="navigate to /custom-pages/z-zone">
                             <picture>
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1723119739816.jpg?format=webp&amp;width=1200"
                                     media="(min-width: 768px)">
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1723119743312.jpg?format=webp&amp;width=600"
                                     media="(max-width: 767px)">
                                 <img src="https://api-rayashop.freetls.fastly.net/media/offers/1723119739816.jpg"
                                     alt="Offer Image">
                             </picture>
                         </a>
                     </div>
                     <div class="relative OfferCard" sort="4">
                         <a href="/en/super-sale" class="OfferCard__Link" aria-label="navigate to /super-sale">
                             <picture>
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1722500902466.jpg?format=webp&amp;width=1200"
                                     media="(min-width: 768px)">
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1722500864169.jpg?format=webp&amp;width=600"
                                     media="(max-width: 767px)">
                                 <img src="https://api-rayashop.freetls.fastly.net/media/offers/1722500902466.jpg"
                                     alt="Offer Image">
                             </picture>
                         </a>
                         <div class="OfferCard__Triangle">
                             <svg xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                 <use href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-large-banner-triangle"></use>
                             </svg>
                         </div>
                         <a href="#categories" class="OfferCard__Scrolldown" aria-label="Scroll down">
                             <svg xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                 <use href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-mouse"></use>
                             </svg>
                         </a>
                     </div>
                     <div class="relative OfferCard" sort="5">
                         <a href="/en/televisions-super-sale-offers" class="OfferCard__Link"
                             aria-label="navigate to /televisions-super-sale-offers">
                             <picture>
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1723973311286.jpg?format=webp&amp;width=1200"
                                     media="(min-width: 768px)">
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1723973342179.jpg?format=webp&amp;width=600"
                                     media="(max-width: 767px)">
                                 <img src="https://api-rayashop.freetls.fastly.net/media/offers/1723973311286.jpg"
                                     alt="Offer Image">
                             </picture>
                         </a>
                     </div>
                     <div class="relative OfferCard" sort="6">
                         <a href="/en/taksety-application" class="OfferCard__Link"
                             aria-label="navigate to /taksety-application">
                             <picture>
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/171439765478.jpg?format=webp&amp;width=1200"
                                     media="(min-width: 768px)">
                                 <source
                                     srcset="https://api-rayashop.freetls.fastly.net/media/offers/1714397684177.jpg?format=webp&amp;width=600"
                                     media="(max-width: 767px)">
                                 <img src="https://api-rayashop.freetls.fastly.net/media/offers/171439765478.jpg"
                                     alt="Offer Image">
                             </picture>
                         </a>
                     </div>
                 </div>
             </section>


             <section id="categories" class="container mx-auto w-full px-6 md:px-0 mt-12 lg:mt-10 lg:pt-4">
                 <div class="swiper-container overflow-hidden">
                     <div class="swiper-wrapper flex gap-4">
                         @foreach ($hp as $item)
                             <a href="/en/product-link-{{ $item->id }}"
                                 class="swiper-slide flex flex-col gap-2.5 CategoryCard transition-transform transform hover:scale-105">
                                 <div
                                     class="bg-transparent CategoryCard__imageWrapper rounded-lg overflow-hidden shadow-lg">
                                     <picture>
                                         <source srcset="{{ $item->img }}?format=webp&amp;width=115">
                                         <img style="text-align: center" src="{{ $item->img }}"
                                             alt="{{ $item->title }}" role="presentation" decoding="async"
                                             class="object-cover w-full h-full">
                                     </picture>
                                 </div>
                                 <p class="font-medium text-center px-2.5 text-primary-700">{{ $item->title }}</p>
                             </a>
                         @endforeach
                     </div>
                     <div class="card-footer text-center mt-6">
                         <a href="{{ url('hp') }}"
                             class="btn btn-outline-primary btn-sm transition-colors hover:bg-primary-600 hover:text-white">
                             Show More
                         </a>
                     </div>
                 </div>
             </section>





             <div class="im"
                 style="    background-color: azure;
    margin-top: 20px;
    width: 1194px;
    position: relative;
    left: 300px;">
                 <h2 style="    left: 40%;position: relative;">laptop shop</h2>
                 <p style="    position: relative; left: 150px; font-size: larger;">High-resolution laptop products for
                     sale</p>
                 <a href=""style="    position: relative; left: 40%; font-size: larger; font-weight: 500;">Explore
                     page laptops ></a>
             </div>
             <br>
             <div class="swiper-container product-list" style="overflow: hidden">
                 <div class="swiper-wrapper">
                     @foreach ($dell as $item)
                         <div class="swiper-slide">
                             <article class="product-miniature js-product-miniature">
                                 <div class="product-container">
                                     <div class="thumbnail-container">
                                         <div class="thumbnail-inner">
                                             <a href="https://compuscience.com.eg/en/home/3616-1507-hp-envy-x360-2-in-1-14-es0013dx-intel-core-i5-1335u-8gb-ssd-512gb-intel-iris-xe-graphics-14-fhd-ips.html#/72-installment_plans-cash"
                                                 class="thumbnail product-thumbnail d-block">
                                                 <img src="{{ $item->img }}" alt="HP ENVY x360 2-in-1 14-es0013dx"
                                                     class="img-fluid img_1 lazyloaded">
                                             </a>
                                             <ul class="product-flags">
                                                 <li class="product-flag discount">{{ $item->type }}</li>
                                             </ul>
                                             <div class="button-container">
                                                 <!-- أزرار الإجراءات هنا -->
                                             </div>
                                         </div>
                                     </div>
                                     <div class="product-description">
                                         <p class="h3 product-title"><a href="#">{{ $item->title }}</a></p>
                                         <div class="product-price-and-price">
                                             <span class="regular-price"> price ({{ $item->price }})</span>
                                             <span class="price current-price-company">{{ $item->Company }}</span>
                                         </div>
                                         <div class="product-price-and-ratings">
                                             <span class="price current-price-ratings">{{ $item->ratings }}</span>
                                         </div>
                                         <div class="comments_note">
                                             <div class="star_content clearfix">
                                                 <div class="star"></div>
                                                 <div class="star"></div>
                                                 <div class="star"></div>
                                                 <div class="star"></div>
                                                 <div class="star"></div>
                                             </div>
                                             <div class="card-footer text-center">
                                                 <button class="btn btn-outline-primary btn-sm"><a class="nav-link"
                                                         href="{{ url('dell') }}">show</a>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </article>
                         </div>
                     @endforeach

                 </div>
             </div>
             <button
                 style="    background-color: antiquewhite;
    width: 200px;
    margin: 20px;position: relative;
    left: 45%;"
                 class="btn btn-outline-primary btn-sm w-full transition-all duration-300 hover:bg-primary-600 hover:text-white hover:border-primary-600">
                 <a class="nav-link text-decoration-none text-primary-600 hover:text-white"
                     href="{{ url('dell') }}">
                     Show More
                 </a>
             </button>
             {{-- ///// --}}
             <div class="container-fluid" style="
    margin: 0 auto;
    padding: 20px;
    max-width: 1381px;">
                 <h1 style="    position: relative;
    left: 45%;">Our Top</h1>

                 <div class="swiper-container">
                     <div class="swiper-container">
                         <div class="swiper-wrapper">
                             @foreach ($mac as $item)
                                 <div class="swiper-slide">
                                     <div class="card h-100">
                                         <h5 class="card-header text-center">{{ $item->type }}</h5>
                                         <div class="card-body">
                                             <div class="product-image mb-3">
                                                 <img src="{{ $item->img }}" class="img-fluid"
                                                     alt="Product Image">
                                             </div>
                                             <h6 class="card-title text-center">{{ $item->title }}</h6>
                                             <p class="text-primary text-center font-weight-bold">price
                                                 ({{ $item->price }})
                                             </p>
                                             <p style="color: red" class=" text-center small">discount
                                                 {{ $item->discount }}</p>
                                         </div>
                                         <div class="card-footer text-center">
                                             <button class="btn btn-outline-primary btn-sm"><a class="nav-link"
                                                     href="{{ url('mac') }}">show</a>
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach

                         </div>

                         <!-- أزرار التنقل إذا لزم الأمر -->
                         <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div>
                     </div>

                 </div>
                 <div class="card-footer text-center">


                     {{-- ////// --}}
                     <div data-v-c1f5cf88="" class="text-center md:text-left"
                         style="    background-color: azure;  width: 80%;  position: relative;  left: 10%;">
                         <header data-v-c1f5cf88="" class="text-primary-700 font-bold text-xl md:text-3.4xl">
                             About Raya Elite
                         </header>
                         <p data-v-c1f5cf88="" class="text-secondary-500 text-base mt-2.5 md:mt-3.5">Elevate your
                             corporate
                             experience with Raya Elite. Simplify installments with one credit limit approval of up to
                             500,000LE.
                             Unlock exclusive benefits, including seamless maintenance requests and daily offers. Apply
                             now
                             for
                             the ultimate Elite experience.</p>
                         <a href="http://" class="custom-link">Page Tablet</a>c
                     </div>
                     <div class="container-fluid"
                         style="justify-content: center;

    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 auto;
    padding: 20px;
    max-width: 1381px;">
                         <h1 style="    position: relative;
    left: 45%;">Apple Offers</h1>
                         <div class="swiper-container">
                             <div class="swiper-wrapper">
                                 @foreach ($microsoft as $item)
                                     <div class="swiper-slide">
                                         <div class="card h-100 shadow-sm border-0">
                                             <h5 class="card-header text-center bg-primary text-white">Our Top Offers
                                             </h5>
                                             <div class="card-body d-flex flex-column">
                                                 <div class="product-image mb-3 text-center">
                                                     <img src="{{ $item->img }}" class="img-fluid rounded"
                                                         alt="Product Image">
                                                 </div>
                                                 <h6 class="card-title text-center text-secondary">{{ $item->title }}
                                                 </h6>
                                                 <p class="text-success text-center font-weight-bold">small watch</p>
                                                 <p style="color:rgb(4, 0, 255)" class=" text-center small">price
                                                     ({{ $item->price }})
                                                 </p>
                                                 <p style="color:red" class=" text-center small">
                                                     discount ({{ $item->discount }})</p>
                                                 <p class="text-muted text-center small">
                                                     shipping ({{ $item->shipping }})</p>
                                                 <p style="color:darkviolet" class="text-center small">
                                                     location ({{ $item->location }})</p>
                                                 <p style="color:rebeccapurple" class=" text-center small">seller
                                                     ({{ $item->seller }})
                                                 </p>

                                                 <div class="text-center mt-auto">
                                                     <!-- تقييم المنتج -->
                                                     <div class="rating mb-3">
                                                         <span class="fa fa-star checked"></span>
                                                         <span class="fa fa-star checked"></span>
                                                         <span class="fa fa-star checked"></span>
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card-footer text-center bg-light border-0">
                                                 <button style="    width: 150px; font-size: large;"
                                                     class="btn btn-primary btn-sm rounded-pill"><a class="nav-link"
                                                         href="{{ url('microsoft') }}">show</a>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                             <!-- أزرار التنقل إذا لزم الأمر -->
                             <div class="swiper-button-next"></div>
                             <div class="swiper-button-prev"></div>
                         </div>
                     </div>

                     <div class="container-fluid" style="
    margin: 0 auto;
    padding: 20px;">
                         <h1 style="    position: relative;
    left: 45%;">Saving Offers</h1>
                         <div class="swiper-container">
                             <div class="swiper-wrapper">
                                 @foreach ($toshiba as $item)
                                     <div class="swiper-slide">
                                         <div class="card h-100 shadow-sm border-0">
                                             <div class="position-absolute top-0 start-0 mt-3 ms-3 z-index-10">
                                                 <span class="badge bg-success text-white">{{ $item->watch }} Off
                                                     watch</span><br>
                                                 <span class="badge bg-danger text-white mt-2">{{ $item->seller }}
                                                     seller</span>
                                             </div>
                                             <button title="Add to wishlist"
                                                 class="btn btn-light position-absolute top-0 end-0 m-2 rounded-circle">
                                                 <i class="fas fa-heart"></i>
                                             </button>
                                             <a href="#" class="d-block bg-light text-center p-3 rounded-top">
                                                 <img src="{{ $item->img }}" alt="Product Image"
                                                     class="img-fluid">
                                             </a>
                                             <div class="card-body">
                                                 <h6 class="card-title text-center text-secondary">{{ $item->title }}
                                                 </h6>
                                                 <p class="text-success text-center font-weight-bold">price
                                                     ({{ $item->price }})
                                                     <span
                                                         class="text-muted text-decoration-line-through ms-2">{{ $item->shipping }}</span>
                                                 </p>
                                                 <p class="text-muted text-center small">location
                                                     ({{ $item->location }})</p>
                                             </div>
                                             <div class="card-footer text-center bg-light border-0">
                                                 <button class="btn btn-primary btn-sm rounded-pill w-100"> <a
                                                         class="nav-link" href="{{ url('toshiba') }}">show</a>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                             <!-- أزرار التنقل إذا لزم الأمر -->
                             <div class="swiper-button-next">
                             </div>
                             <div class="swiper-button-prev"></div>
                         </div>
                     </div>
                     <img style="    width: 1393px;
    position: relative;
    left: 0px;" data-v-59a0d867=""
                         src="https://api-rayashop.freetls.fastly.net/media/offers/1723103752922.jpg" alt=""
                         fetchpriority="low" loading="lazy" decoding="async"
                         class="w-full h-full object-cover loading inline-block">

                     <br>

                     <div class="container-fluid" style="max-width: 1381px; padding: 20px;">
                         <h1 class="text-center">Apple Offers</h1>
                         <div class="swiper-container" style="    overflow: hidden;
">
                             <div class="swiper-wrapper">
                                 @foreach ($samsong as $item)
                                     <div class="swiper-slide" style="width: 240px;">
                                         <div class="px-0">
                                             <div class="card h-100">
                                                 <div class="position-absolute top-0 start-0 p-2 z-1">
                                                     <span class="badge bg-primary mb-1">shipping
                                                         {{ $item->shipping }}</span>
                                                     <span class="badge bg-primary">{{ $item->range }}
                                                         range</span>
                                                 </div>
                                                 <button type="button"
                                                     style="background-color: navajowhite; width: 50px; height: 50px;"
                                                     class="btn btn-light position-absolute top-0 end-0 m-2 rounded-circle">
                                                     <i class="bi bi-heart"></i>
                                                     <!-- أيقونة مفضلة من Bootstrap Icons -->
                                                 </button>
                                                 <a href="/en/toshiba-55-inchframeless-4k-uhd-smart-qled-tv-with-built-in-receiver-55qs3500e-2"
                                                     class="d-block bg-light p-3">
                                                     <img src="{{ $item->img }}" class="card-img-top"
                                                         alt="Toshiba 55 Inch Frameless 4K UHD Smart QLED TV">
                                                 </a>
                                                 <div class="card-body">
                                                     <h5 class="card-title text-primary">
                                                         {{ $item->title }}
                                                         <div
                                                             class="d-flex justify-content-between align-items-center mb-2">
                                                             <img src="data:image/svg+xml;charset=utf-8,..">
                                                         </div>
                                                         <div class="d-flex align-items-baseline">
                                                             <span class="fw-bold text-primary fs-5">EGP
                                                                 {{ $item->price }}</span>
                                                         </div>
                                                         <p class="text-muted small">
                                                             {{ $item->location }}</p>
                                                 </div>
                                                 <div class="card-footer bg-transparent border-0">
                                                     <button class="btn btn-outline-secondary w-100"> <a
                                                             class="nav-link"
                                                             href="{{ url('samsung') }}">show</a></button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach

                             </div>
                         </div>
                     </div>

                     <br>




                     <div class="footer">
                         <footer class="bg-primary text-light">
                             <a href="https://api.whatsapp.com/send?phone=21033643475&amp;text=%D8%A3%D9%87%D9%84%D8%A7%D9%8B+%D8%B1%D8%A7%D9%8A%D8%A9"
                                 target="_blank" aria-label="contact us with whatsapp"
                                 class="position-relative d-inline-block">
                                 <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"
                                     class="icon sprite-icons">
                                     <use href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-chat">
                                     </use>
                                 </svg>
                             </a>
                             <div class="container">
                                 <div class="row">
                                     <div class="col-lg-3 col-md-6 mb-4">
                                         <h3 class="font-weight-bold">About Raya</h3>
                                         <ul class="footer-links">
                                             <li><a href="/en/about">Who we are</a></li>
                                             <li><a href="/en/stores">Store Locator</a></li>
                                             <li><a href="/en/loyalty">Raya Plus</a></li>
                                             <li><a href="/en/elite-info">Raya Elite</a></li>
                                             <li><a href="https://www.rayashopng.com" target="_blank"
                                                     rel="noopener">Raya
                                                     Nigeria</a></li>
                                         </ul>
                                     </div>
                                     <div class="col-lg-3 col-md-6 mb-4">
                                         <h3 class="font-weight-bold">Customer Support</h3>
                                         <ul class="footer-links">
                                             <li><a href="/en/request-maintenance">Request/Track
                                                     Maintenance</a></li>
                                             <li><a href="/en/faqs">FAQs</a></li>
                                             <li><a href="https://api.whatsapp.com/send?phone=201110119900&amp;text=%D8%A3%D9%87%D9%84%D8%A7%D9%8B+%D8%B1%D8%A7%D9%8A%D8%A9"
                                                     target="_blank" rel="noopener">Live Chat</a></li>
                                             <li><a href="/en/contact">Contact us</a></li>
                                             <li><a href="tel:19900">Call 19900</a></li>
                                         </ul>
                                     </div>
                                     <div class="col-lg-3 col-md-6 mb-4">
                                         <h3 class="font-weight-bold">More</h3>
                                         <ul class="footer-links">
                                             <li><a href="/en/zero-interest-zero-down-payment">Installment
                                                     offers</a></li>
                                             <li><a href="/en/terms">Terms & Conditions</a></li>
                                             <li><a href="/en/installments">Taksety Terms &
                                                     Conditions</a></li>
                                             <li><a href="/en/privacy">Privacy Policy</a></li>
                                         </ul>
                                     </div>
                                     <div class="col-lg-3 col-md-6 mb-4">
                                         <h3 class="font-weight-bold">Stay in the know</h3>
                                         <p>Subscribe to our newsletter</p>
                                         <form class="newsletter-form">
                                             <input type="email" placeholder="E-mail (ex@gmail.com)"
                                                 aria-label="Email Address">
                                             <button type="submit" aria-label="Send Email">
                                                 <svg width="15" height="15"
                                                     xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                                     <use
                                                         href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-send-email">
                                                     </use>
                                                 </svg>
                                             </button>
                                         </form>
                                     </div>
                                 </div>
                                 <div class="text-center">
                                     <ul class="social-icons list-inline mb-4">
                                         <li class="list-inline-item"><a
                                                 href="https://www.instagram.com/rayashop.official/"
                                                 aria-label="Follow us on Instagram">
                                                 <svg width="24" height="24"
                                                     xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                                     <use
                                                         href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-instagram">
                                                     </use>
                                                 </svg></a></li>
                                         <li class="list-inline-item"><a
                                                 href="https://www.facebook.com/RayaShopOfficial"
                                                 aria-label="Like us on Facebook">
                                                 <svg width="24" height="24"
                                                     xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                                     <use
                                                         href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-facebook">
                                                     </use>
                                                 </svg></a></li>
                                         <li class="list-inline-item"><a
                                                 href="https://www.linkedin.com/company/rayashop-com/mycompany/"
                                                 aria-label="Follow us on LinkedIn">
                                                 <svg width="24" height="24"
                                                     xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                                     <use
                                                         href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-linkedin">
                                                     </use>
                                                 </svg></a></li>
                                         <li class="list-inline-item"><a
                                                 href="https://api.whatsapp.com/send?phone=201110119900&amp;text=%D8%A3%D9%87%D9%84%D8%A7%D9%8B+%D8%B1%D8%A7%D9%8A%D8%A9"
                                                 target="_blank" aria-label="contact us on whatsapp">
                                                 <svg width="24" height="24"
                                                     xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons">
                                                     <use
                                                         href="/_nuxt/8000dd8e27d902dbb35bfaa920a25261.svg#i-whatsapp">
                                                     </use>
                                                 </svg></a></li>
                                     </ul>
                                 </div>
                                 <p class="text-center text-light py-4 mb-0">© 2024 - Raya Shop | All
                                     Rights Reserved</p>
                             </div>
                         </footer>
                     </div>











                 </div>
     </span>

     <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

     <script>
         var swiper = new Swiper('.swiper-container', {
             slidesPerView: 6, // عرض 6 عناصر في وقت واحد
             spaceBetween: 15, // المسافة بين العناصر
             loop: true, // تفعيل الحركة الدائرية
             autoplay: {
                 delay: 2000, // التأخير بين كل تمرير (2000ms = 2 ثواني)
                 disableOnInteraction: false, // استمرار التشغيل التلقائي بعد التفاعل مع السلايدر
             },
             breakpoints: {
                 1200: {
                     slidesPerView: 6,
                 },
                 992: {
                     slidesPerView: 4,
                 },
                 768: {
                     slidesPerView: 3,
                 },
                 576: {
                     slidesPerView: 2,
                 },
                 0: {
                     slidesPerView: 1,
                 }
             }
         });
     </script>

     <script>
         var swiper = new Swiper('.swiper-container', {
             slidesPerView: 6, // عرض 6 عناصر في وقت واحد
             spaceBetween: 15, // المسافة بين العناصر
             loop: true, // تفعيل الحركة الدائرية
             autoplay: {
                 delay: 2000, // التأخير بين كل تمرير (2000ms = 2 ثواني)
                 disableOnInteraction: false, // استمرار التشغيل التلقائي بعد التفاعل مع السلايدر
             },
             breakpoints: {
                 1200: {
                     slidesPerView: 6,
                 },
                 992: {
                     slidesPerView: 4,
                 },
                 768: {
                     slidesPerView: 3,
                 },
                 576: {
                     slidesPerView: 2,
                 },
                 0: {
                     slidesPerView: 1,
                 }
             }
         });
     </script>


 </body>

 </html>
