<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use src\helpers\DataToRenderFormer;

class MainPageController extends AbstractController
{
    #[Route('/main', name: 'app_main_page')]
    public function index(): Response
    {
        $cards = [
            [
                'ad_bg' => "https://cdn.pocket-lint.com/r/s/1201x/assets/images/143319-laptops-review-review-lenovo-thinkpad-x1-carbon-hdr-review-image1-dawkcj1vss.jpg",
                'product_name' => "Lenovo ThinkPad X1 Carbon",
                'product_description' => "Новый эталон среди ультрабуков для бизнеса. ThinkPad X1 Carbon 2017 – уже 5-е поколение супер-портативных бизнес-ноутбуков. Теперь в нём новейший процессор Kaby Lake, а также полностью переработан корпус, и добавлены современные порты. Супер компактный корпус сочетается с мощным i7, который полноценно и долго работает в автономном режиме. А клавиатура стала лучшей в своём классе.",
                'product_times_bought' => 50
            ],
            [
                'ad_bg' => "https://www.extremetech.com/wp-content/uploads/2017/10/SurfaceBook2-640x353.jpg",
                'product_name' => "SurfaceBook 2",
                'product_description' => "Устройство принадлежит к премиальному сегменту, поэтому высочайшее качество сборки и неплохая эргономика делают его приятным в использовании. Но большие габариты могут понравится не всем.",
                'product_times_bought' => 1100
            ]
        ];

        $discount_block = [
            'header' => "СКИДКА!",
            'bg' => "https://images.macrumors.com/t/q-5kInZZC0CU3HsHL3HyBIHYWKQ=/1600x0/article-new/2022/06/M2-MacBook-Air-2022-Feature0012.jpg",
            'product_name' => "MacBook Air 2022",
            'product_description' => "MacBook Air 2022 самый мощный продукт во всей линейке Air. Его характеристики очень существенны и впечатляют, не смотря на то, что внешне, практически, не произошло никаких изменений.",
            'discount_size' => 50
        ];

        $recommendations = [
            [ 'name' => 'MacBook Air 2022', 'bg' => 'https://shared.cdn.smp.schibsted.com/v2/images/7c91d2ee-bda4-4fc9-a5d4-e6fb152e2409?fit=crop&format=auto&h=2250&w=4000&s=cd062f3c3009aca9839940e52588abe5b24a6f74', 'description' => "Компания Apple обновила линейку самых доступных ноутбуков MacBook Air, установив в эти устройства новейший процессор Apple M2. Однако новый процессор – это ещё не всё. Ведь не просто так авторитетные западные издания назвали текущее обновление самым крупным за всю историю существования линейки ноутбуков Air. На недавно прошедшей презентации Apple действительно впечатлила преданных фанатов, представив не только обновлённый MacBook Air, но и версию Pro. Однако нас сейчас интересует самый доступный лэптоп производителя из Купертино."],
            [ 'name' => 'ThinkPad X1 E14 Gen 2', 'bg' => 'https://laptopmedia.com/wp-content/uploads/2021/01/lenovothinkpade14gen2featured.jpg', 'description' => "Второе поколение ThinkPad E14 оснащается двухканальной RAM, процессорами AMD Ryzen 4000 и чуточку уменьшенным в размерах корпусом. Без минусов не обошлось, но по большинству критериев оценки этот ноутбук заслуживает яркую зелёную галочку. В числе очевидных плюсов - умеренная цена."],
            [ 'name' => 'DELL XPS', 'bg' => 'https://www.digitaltrends.com/wp-content/uploads/2022/05/dell-xps-15-9520-top-down-angle-view-e1654014360979.jpg', 'description' => "13,4-дюймовый сенсорный дисплей с разрешением Ultra HD (3840 x 2400), 60 Гц, светопоглощающим покрытием с защитой от грязи, цветовой гаммой 90% DCI-P3, яркостью 450 нит, широким углом обзора, низким уровнем синего свечения, узкой рамкой, технологией Eyesafe®, покрытием Corning Gorilla Glass 5."],
            [ 'name' => 'Lenovo Legion', 'bg' => 'https://static.lenovo.com/ww/campaigns/2022/legion-brand/lenovo-campaign-legion-brand-agnostic-feature-2-5-series.jpg', 'description' => "Lenovo Legion - это линейка игровых ноутбуков, которую китайский производитель успешно развивает на протяжении нескольких последних лет. Очередным ее пополнением стал Lenovo Legion 5 15ACH6A, который оснащен процессором AMD Ryzen 5 5600H на базе архитектуры Zen3 и видеокартой AMD Radeon RX 6600M с 8 ГБ видеопамяти."]
        ];

        $new_products = [
            [ 'name' => 'Apple iPad 2022', 'bg' => "https://cdn.pocket-lint.com/r/s/x1920/assets/images/160390-tablets-review-apple-ipad-air-2022-review-great-becomes-greater-image1-4n9wextkpq.jpg", 'description' => "Дисплей: 10,9 дюйма, Liquid Retina IPS LCD, 1640×2360 пикселей, 500 нит. Процессор: Apple A14 Bionic. Оперативная память: не указано. Внутренняя память: 64 ГБ, 256 ГБ.", 'offer' => "Скидка 50% до конца января!"],
            [ 'name' => 'Lenovo ThinkPad X1 Nano', 'bg' => "https://i0.wp.com/cdnssl.ubergizmo.com/wp-content/uploads/2021/04/lenovo-thinkpad-x1-nano-review_16_in-hand.jpg", 'description' => "13-дюймовый экран разрешением 2160 х 1350 пикселей выдаёт яркость 450 нит и обеспечивает 100% охват цветовой гаммы sRGB. В ноутбуке может быть установлен процессор вплоть до Core i7-1160G7, оперативная память 16 ГБ и SSD ёмкостью до 1ТБ.", 'offer' => "Скидка 50% до конца января!"],
            [ 'name' => 'Dell XPS Dev Edition', 'bg' => "https://article-imgs.scribdassets.com/4edaimscjk6a26zj/images/fileXWX3WNOV.jpg", 'description' => "Ноутбук XPS™ 13 Developer Edition сочетает производительность с мобильностью ноутбука XPS 13 под управлением Ubuntu 12.04LTS для создания клиентско-облачного решения для разработчиков. 33,7cm (13,3″) | 1,37kg.", 'offer' => "Скидка 50% до конца января!"],
            [ 'name' => 'Apple iPad 2022', 'bg' => "https://s.yimg.com/os/creatr-uploaded-images/2022-05/6b9229d0-cfa4-11ec-bf7f-45f44cc59181", 'description' => "Не пропустите ни одной детали и отточите свое сверхчеловеческое мастерство на дисплеях стандарта FHD с частотой обновления до 240 Гц, яркостью до 500 нит и покрытием цветового пространства sRGB 100%. Насладитесь объемным звуком и всегда будьте в курсе текущей ситуации в игре благодаря акустической системе Harman Kardon® с поддержкой технологии Dolby Atmos® для наушников.", 'offer' => "Скидка 50% до конца января!"],

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
        
        $data = [
            'controller_name' => 'MainPageController',
            'cards' => $cards,
            'discount_block' => $discount_block,
            'recommendations' => $recommendations,
            'new_products' => $new_products,
            'laptop_producers' => $laptop_producers,
            'pc_producers' => $pc_producers,
            'keyboards' => $keyboards,
            'mice' => $mice,
            'headphones' => $headphones,
            'footer_blocks' => $footer_blocks
        ];
        $data = DataToRenderFormer::addCategories($data);

        
        return $this->render('user/main/main.html.twig', $data);
    }
}
