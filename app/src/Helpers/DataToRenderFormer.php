<?php

namespace src\helpers;

class DataToRenderFormer
{
    public static function &addControllerName(array &$data): array
    {
        $data['services'] = [
            ['name' => 'Установка ПО и ОС', 'price' => '100'],
            ['name' => 'Расширенная гарантия', 'price' => '120'],
            ['name' => 'Обклейка защитной пленкой', 'price' => '150'],
            ['name' => 'Гравировка клавиатуры', 'price' => '100'],
            ['name' => 'Установка пленки на экран', 'price' => '50'],
            ['name' => 'Нанесение рисунка на корпус', 'price' => '25']
        ];

        return $data;
    }

    public static function &addTabs(array &$data): array
    {
        $data['tabs'] = [
            ['name' => "description", 'body' => "Описание", 'active' => "active"],
            ['name' => "characteristics", 'body' => "Характеристики", 'active' => ""],
            ['name' => "delivery", 'body' => "Доставка", 'active' => ""],
            ['name' => "reviews", 'body' => "Обзоры", 'active' => ""]
        ];

        return $data;
    }

    public static function &addTabsContent(array &$data): array
    {
        $data['tabs_content'] = [
            ['body' => "Здесь будет описание товара", 'id' => 'description', 'active' => "active"],
            ['body' => "Здесь будут характеристики товара", 'id' => 'characteristics', 'active' => ""],
            ['body' => "Здесь будут условия доставки товара", 'id' => 'delivery', 'active' => ""],
            ['body' => "Здесь будут обзоры товара", 'id' => 'reviews', 'active' => ""],
        ];

        return $data;
    }

    public static function &addRecommendations(array &$data): array
    {
        $data['recommendations'] = [
            ['name' => 'MacBook Air 2022', 'bg' => 'https://shared.cdn.smp.schibsted.com/v2/images/7c91d2ee-bda4-4fc9-a5d4-e6fb152e2409?fit=crop&format=auto&h=2250&w=4000&s=cd062f3c3009aca9839940e52588abe5b24a6f74', 'description' => "Компания Apple обновила линейку самых доступных ноутбуков MacBook Air, установив в эти устройства новейший процессор Apple M2. Однако новый процессор – это ещё не всё. Ведь не просто так авторитетные западные издания назвали текущее обновление самым крупным за всю историю существования линейки ноутбуков Air. На недавно прошедшей презентации Apple действительно впечатлила преданных фанатов, представив не только обновлённый MacBook Air, но и версию Pro. Однако нас сейчас интересует самый доступный лэптоп производителя из Купертино."],
            ['name' => 'ThinkPad X1 E14 Gen 2', 'bg' => 'https://laptopmedia.com/wp-content/uploads/2021/01/lenovothinkpade14gen2featured.jpg', 'description' => "Второе поколение ThinkPad E14 оснащается двухканальной RAM, процессорами AMD Ryzen 4000 и чуточку уменьшенным в размерах корпусом. Без минусов не обошлось, но по большинству критериев оценки этот ноутбук заслуживает яркую зелёную галочку. В числе очевидных плюсов - умеренная цена."],
            ['name' => 'DELL XPS', 'bg' => 'https://www.digitaltrends.com/wp-content/uploads/2022/05/dell-xps-15-9520-top-down-angle-view-e1654014360979.jpg', 'description' => "13,4-дюймовый сенсорный дисплей с разрешением Ultra HD (3840 x 2400), 60 Гц, светопоглощающим покрытием с защитой от грязи, цветовой гаммой 90% DCI-P3, яркостью 450 нит, широким углом обзора, низким уровнем синего свечения, узкой рамкой, технологией Eyesafe®, покрытием Corning Gorilla Glass 5."],
            ['name' => 'Lenovo Legion', 'bg' => 'https://static.lenovo.com/ww/campaigns/2022/legion-brand/lenovo-campaign-legion-brand-agnostic-feature-2-5-series.jpg', 'description' => "Lenovo Legion - это линейка игровых ноутбуков, которую китайский производитель успешно развивает на протяжении нескольких последних лет. Очередным ее пополнением стал Lenovo Legion 5 15ACH6A, который оснащен процессором AMD Ryzen 5 5600H на базе архитектуры Zen3 и видеокартой AMD Radeon RX 6600M с 8 ГБ видеопамяти."]
        ];

        return $data;
    }

    public static function &addProducers(array &$data): array
    {
        $data['laptop_producers'] = ["Apple", "Lenovo"];
        $data['pc_producers'] = ["Lenovo", "Apple"];
        $data['keyboards'] = ["Logitech", "SVEN"];
        $data['mice'] = ["Apple", "Lenovo"];
        $data['headphones'] = ["SONY", "WIRELESS"];

        return $data;
    }

    public static function &addFooters(array &$data): array
    {
        $data['footer_blocks'] = [
            ['header' => 'Информация', 'links' => ["О нас", "Контакты", "Доставка"]],
            ['header' => 'Поддержка', 'links' => ["Сервисы", "Ремонт", "Задать вопрос"]],
            ['header' => 'Дополнительно', 'links' => ["Условия соглашения", "Политика безопасности"]],
            ['header' => 'Личный кабинет', 'links' => ["Профиль", "Отложенное", "Корзина"]]
        ];

        return $data;
    }

    public static function &addDiscountBock(array &$data): array
    {
        $data['discount_block'] = [
            'header' => "СКИДКА!",
            'bg' => "https://images.macrumors.com/t/q-5kInZZC0CU3HsHL3HyBIHYWKQ=/1600x0/article-new/2022/06/M2-MacBook-Air-2022-Feature0012.jpg",
            'product_name' => "MacBook Air 2022",
            'product_description' => "MacBook Air 2022 самый мощный продукт во всей линейке Air. Его характеристики очень существенны и впечатляют, не смотря на то, что внешне, практически, не произошло никаких изменений.",
            'discount_size' => 50
        ];

        return $data;
    }

    public static function &addPromoProduct(array &$data): array
    {
        $data['promo_product'] = [
            'ad_bg' => "https://cdn.pocket-lint.com/r/s/1201x/assets/images/143319-laptops-review-review-lenovo-thinkpad-x1-carbon-hdr-review-image1-dawkcj1vss.jpg",
            'product_name' => "Lenovo ThinkPad X1 Carbon",
            'product_description' => "Новый эталон среди ультрабуков для бизнеса. ThinkPad X1 Carbon 2017 – уже 5-е поколение супер-портативных бизнес-ноутбуков. Теперь в нём новейший процессор Kaby Lake, а также полностью переработан корпус, и добавлены современные порты. Супер компактный корпус сочетается с мощным i7, который полноценно и долго работает в автономном режиме. А клавиатура стала лучшей в своём классе.",
            'product_times_bought' => 50,
            'old_price' => 3500,
            'current_price' => 3000
        ];

        return $data;
    }

    public static function &addCategories(array &$data): array
    {
        $data['categories'] = [
            [
                'name' => 'Ноутбуки',
                'slug' => 'laptops',
                'producers' => ["Apple", "Lenovo"]
            ],
            [
                'name' => 'ПК',
                'slug' => 'pcs',
                'producers' => ["ASUS", "Lenovo"]
            ],
            [
                'name' => 'Клавиатуры',
                'slug' => 'keyboards',
                'producers' => ["Logitech", "SVEN"]
            ],
            [
                'name' => 'Мыши',
                'slug' => 'mice',
                'producers' => ["Logitech", "SVEN"]
            ],
            [
                'name' => 'Наушники',
                'slug' => 'headphones',
                'producers' => ["Logitech", "SVEN"]
            ],
        ];

        return $data;
    }

    public static function &addDeliveryBodyText(array &$data): array
    {
        $data['body_text'] = [
            'header' => "Информация о доставке",
            'p1' => " В нашем интернет-магазине работает собственная служба доставки заказов как для покупателей в столице, так и за её пределами.",
            'minsk' => "Минск",
            'p2' => "Стоимость доставки  – бесплатно. Срок доставки – в течение дня.",
            'self_take' => "Самовывоз",
            'p3' => "Вы можете забрать оформленный заказ в нашем магазине в самом центре столицы по адресу: ст.м. Площадь Победы, ул.Киселёва, д.4 (вывеска FOTOMIX)Выдача товара производится: ПН-СБ с 10.00 до 19.00.",
            'mail' => "Доставка по Беларуси",
            'p4' => "Отправка заказов в другие города осуществляется транспортной компанией с оплатой при получении. Если вашего города нет в списке, достаточно позвонить на любой номер магазина, и наши менеджеры дадут всю необходимую информацию. Стоимость доставки по Беларуси уточняйте у менеджеров. Время доставки согласовывается менеджером при подтверждении заказа. В случае каких-либо изменений мы в обязательном порядке согласуем новый интервал с покупателем."
        ];
        
        return $data;
    }
}
