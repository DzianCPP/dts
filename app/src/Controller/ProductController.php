<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use src\helpers\DataToRenderFormer;

class ProductController extends AbstractController
{
    #[Route('/product/{product_id}', name: 'app_product')]
    public function index(): Response
    {
        $tabs = [
            ['name' => "description", 'body' => "Описание", 'active' => "active"],
            ['name' => "characteristics", 'body' => "Характеристики", 'active' => ""],
            ['name' => "delivery", 'body' => "Доставка", 'active' => ""],
            ['name' => "reviews", 'body' => "Обзоры", 'active' => ""]
        ];
        $tabs_content = [
            ['body' => "Здесь будет описание товара", 'id' => 'description', 'active' => "active"],
            ['body' => "Здесь будут характеристики товара", 'id' => 'characteristics', 'active' => ""],
            ['body' => "Здесь будут условия доставки товара", 'id' => 'delivery', 'active' => ""],
            ['body' => "Здесь будут обзоры товара", 'id' => 'reviews', 'active' => ""],
        ];

        $recommendations = [
            [ 'name' => 'MacBook Air 2022', 'bg' => 'https://shared.cdn.smp.schibsted.com/v2/images/7c91d2ee-bda4-4fc9-a5d4-e6fb152e2409?fit=crop&format=auto&h=2250&w=4000&s=cd062f3c3009aca9839940e52588abe5b24a6f74', 'description' => "Компания Apple обновила линейку самых доступных ноутбуков MacBook Air, установив в эти устройства новейший процессор Apple M2. Однако новый процессор – это ещё не всё. Ведь не просто так авторитетные западные издания назвали текущее обновление самым крупным за всю историю существования линейки ноутбуков Air. На недавно прошедшей презентации Apple действительно впечатлила преданных фанатов, представив не только обновлённый MacBook Air, но и версию Pro. Однако нас сейчас интересует самый доступный лэптоп производителя из Купертино."],
            [ 'name' => 'ThinkPad X1 E14 Gen 2', 'bg' => 'https://laptopmedia.com/wp-content/uploads/2021/01/lenovothinkpade14gen2featured.jpg', 'description' => "Второе поколение ThinkPad E14 оснащается двухканальной RAM, процессорами AMD Ryzen 4000 и чуточку уменьшенным в размерах корпусом. Без минусов не обошлось, но по большинству критериев оценки этот ноутбук заслуживает яркую зелёную галочку. В числе очевидных плюсов - умеренная цена."],
            [ 'name' => 'DELL XPS', 'bg' => 'https://www.digitaltrends.com/wp-content/uploads/2022/05/dell-xps-15-9520-top-down-angle-view-e1654014360979.jpg', 'description' => "13,4-дюймовый сенсорный дисплей с разрешением Ultra HD (3840 x 2400), 60 Гц, светопоглощающим покрытием с защитой от грязи, цветовой гаммой 90% DCI-P3, яркостью 450 нит, широким углом обзора, низким уровнем синего свечения, узкой рамкой, технологией Eyesafe®, покрытием Corning Gorilla Glass 5."],
            [ 'name' => 'Lenovo Legion', 'bg' => 'https://static.lenovo.com/ww/campaigns/2022/legion-brand/lenovo-campaign-legion-brand-agnostic-feature-2-5-series.jpg', 'description' => "Lenovo Legion - это линейка игровых ноутбуков, которую китайский производитель успешно развивает на протяжении нескольких последних лет. Очередным ее пополнением стал Lenovo Legion 5 15ACH6A, который оснащен процессором AMD Ryzen 5 5600H на базе архитектуры Zen3 и видеокартой AMD Radeon RX 6600M с 8 ГБ видеопамяти."]
        ];

        $laptop_producers = ["Apple", "Lenovo"];
        $pc_producers = ["Lenovo", "Apple", "Asus"];
        $keyboards = ["Logitech", "SVEN", "Defender", "Apple"];
        $mice = ["Logitech", "SVEN", "Defender", "Apple"];
        $headphones = ["SONY", "WIRELESS", "DEFENDER"];

        $footer_blocks = [
            ['header' => 'Информация', 'links' => ["О нас", "Контакты", "Доставка"]],
            ['header' => 'Поддержка', 'links' => ["Сервисы", "Ремонт", "Задать вопрос"]],
            ['header' => 'Дополнительно', 'links' => ["Условия соглашения", "Политика безопасности"]],
            ['header' => 'Личный кабинет', 'links' => ["Профиль", "Отложенное", "Корзина"]]
        ];

        $discount_block = [
            'header' => "СКИДКА!",
            'bg' => "https://images.macrumors.com/t/q-5kInZZC0CU3HsHL3HyBIHYWKQ=/1600x0/article-new/2022/06/M2-MacBook-Air-2022-Feature0012.jpg",
            'product_name' => "MacBook Air 2022",
            'product_description' => "MacBook Air 2022 самый мощный продукт во всей линейке Air. Его характеристики очень существенны и впечатляют, не смотря на то, что внешне, практически, не произошло никаких изменений.",
            'discount_size' => 50
        ];

        $product = [
            'name' => "MacBook Air 2020",
            'description' => "Этой весной компания Apple представила обновления iPad Pro и MacBook Air, и вот, несмотря на всеобщий карантин, устройства уже поступили в продажу — ну, и добрались до нашей редакции. В этой статье мы подробно расскажем вам про новый MacBook Air, с четырехъядерным процессором в максимальной конфигурации — впервые в истории этой линейки.",
            'current_price' => 3000,
            'old_price' => 3500,
            'available' => "В наличии",
            'photos' => [
                [ 'bg' => "https://www.ixbt.com/img/x780x600/r30/00/02/29/29/Applenewmacbookairfacetimescreen03182020_259168.jpg", 'active' => "active"],
                [ 'bg' => "https://www.ixbt.com/img/x780x600/r30/00/02/29/29/IMG9990.jpg", 'active' => ""],
                [ 'bg' => "https://www.ixbt.com/img/x780x600/r30/00/02/29/29/IMG9997.jpg", 'active' => ""]
            ]
        ];
        
        $data = [
            'controller_name' => 'ProductController',
            'services' => [
                [ 'name' => 'Установка ПО и ОС', 'price' => '100'],
                [ 'name' => 'Расширенная гарантия', 'price' => '120'],
                [ 'name' => 'Обклейка защитной пленкой', 'price' => '150'],
                [ 'name' => 'Гравировка клавиатуры', 'price' => '100'],
                [ 'name' => 'Установка пленки на экран', 'price' => '50'],
                [ 'name' => 'Нанесение рисунка на корпус', 'price' => '25']                
            ],
            'tabs' => $tabs,
            'laptop_producers' => $laptop_producers,
            'pc_producers' => $pc_producers,
            'keyboards' => $keyboards,
            'mice' => $mice,
            'headphones' => $headphones,
            'footer_blocks' => $footer_blocks,
            'tabs_content' => $tabs_content,
            'recommendations' => $recommendations,
            'discount_block' => $discount_block,
            'product' => $product
        ];

        $data = DataToRenderFormer::addCategories($data);

        
        return $this->render('user/product/main.html.twig', $data);
    }
}
