<?php

namespace App\Controller;

use src\helpers\DataToRenderFormer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {
        $store_photos = [
            [ 'bg' => "https://fotomix.by/image/catalog/photo/shop-photo/fotomix-store-1.jpg", 'active' => 'active' ],
            [ 'bg' => "https://fotomix.by/image/catalog/photo/shop-photo/fotomix-store-2.jpg", 'active' => ''],
            [ 'bg' => "https://fotomix.by/image/cachewebp/catalog/photo/shop-photo/banners/02-858x298.webp", 'active' => '']
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
            'about_main_text' => "Мы специализированный магазин. Высокий уровень обслуживания и скидки для постоянных клиентов! Работаем для вас с 2006 года. Наш магазин расположен в центре города, в котором можно протестировать товар и получить профессиональную консультацию.

            Сделав заказ в нашем магазине, Вы можете быть уверены в защите своих прав потребителя и реально работающей гарантии. Оформляем все необходимые документы: гарантийный талон, чек, копия чека, печать и реквизиты продавца/сервисного центра.",
            'controller_name' => "AboutController",
            'header' => "О нас",
            'sub_header' => "Почему стоит покупать у нас",
            'why_buy_from_us' => "По качану",
            'law_info' => "Оказание услуг: ИП Чугунов Александр Александрович УПН: 191791483 Регистрирующий орган: Минский горисполком. P/С BY14UNBS30131015700000000933 в ЗАО \"БСБ БАНК\" г. Минск, пр. Победителей 23/3 УПН 807000069",
            'store_photos' => $store_photos,
            'laptop_producers' => $laptop_producers,
            'pc_producers' => $pc_producers,
            'keyboards' => $keyboards,
            'mice' => $mice,
            'headphones' => $headphones,
            'footer_blocks' => $footer_blocks
        ];

        $data = DataToRenderFormer::addCategories($data);

        return $this->render('user/about/main.html.twig', $data);
    }
}
