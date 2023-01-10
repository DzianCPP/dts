<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use src\helpers\DataToRenderFormer;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue/{category}/{producer}', name: 'app_catalogue')]
    public function index(string $category, string $producer): Response
    {
        $products = $this->getProducts($category, $producer);

        $data = [
            'controller_name' => self::class,
            'products' => $products
        ];

        $data = DataToRenderFormer::addDiscountBock($data);
        $data = DataToRenderFormer::addProducers($data);
        $data = DataToRenderFormer::addRecommendations($data);
        $data = DataToRenderFormer::addFooters($data);
        $data = DataToRenderFormer::addDiscountBock($data);
        $data = DataToRenderFormer::addPromoProduct($data);
        $data = DataToRenderFormer::addCategories($data);
        
        return $this->render('user/catalogue/main.html.twig', $data);
    }

    private function getProducts(string $category, string $producer): array
    {
        if ($category == "laptops") {
            if ($producer == "Apple") {
                return [
                    [
                        'name' => 'Apple MacBook Air 2020',
                        'bg' => "https://o.aolcdn.com/images/dar/5845cadfecd996e0372f/7439281cb6208c4e6147bc11b5f55037f592b03f/aHR0cHM6Ly9tZWRpYS1tYnN0LXB1Yi11ZTEuczMuYW1hem9uYXdzLmNvbS9jcmVhdHItdXBsb2FkZWQtaW1hZ2VzLzIwMjAtMDMvMjI4NjcyMTAtNzJhOC0xMWVhLWFmOGYtNGYxMjhkZWY2MmM4",
                        'description' => "Совсем недавно — в первой декаде июня — Apple представила ноутбуки на базе новой SoC Apple M2, и вот мы уже можем оценить эту разработку в нашей тестовой лаборатории. К нам приехала модель MacBook Air (Mid 2022) в младшей конфигурации, и помимо обновленного чипа она интересна также новым дизайном — впервые за годы облик Air существенно изменился."
                    ],
                    [
                        'name' => 'Apple MacBook Air 2022',
                        'bg' => "https://i.pcmag.com/imagery/reviews/01mBttlv1qMiXYpc1bfOj1h-1..v1657726621.jpg",
                        'description' => "Совсем недавно — в первой декаде июня — Apple представила ноутбуки на базе новой SoC Apple M2, и вот мы уже можем оценить эту разработку в нашей тестовой лаборатории. К нам приехала модель MacBook Air (Mid 2022) в младшей конфигурации, и помимо обновленного чипа она интересна также новым дизайном — впервые за годы облик Air существенно изменился."
                    ],
                    [
                        'name' => 'Apple MacBook Pro 2020',
                        'bg' => "https://helios-i.mashable.com/imagery/reviews/061Q21UjycZF78LVtPVwH0z/hero-image.fill.size_1248x702.v1623389554.jpg",
                        'description' => "В основе Macbook Pro 13” 2022 года выпуска лежит новый чипсет Apple M2. Он включает 8-ядерный центральный процессор: четыре ядра отвечают за высокую производительность, остальные — за энергоэффективность. Графический процессор оснащен 10 ядрами, что больше на два по сравнению с предыдущим поколением M1."
                    ],
                    [
                        'name' => 'Apple MacBook Pro 2020',
                        'bg' => "https://helios-i.mashable.com/imagery/reviews/061Q21UjycZF78LVtPVwH0z/hero-image.fill.size_1248x702.v1623389554.jpg",
                        'description' => "В основе Macbook Pro 13” 2022 года выпуска лежит новый чипсет Apple M2. Он включает 8-ядерный центральный процессор: четыре ядра отвечают за высокую производительность, остальные — за энергоэффективность. Графический процессор оснащен 10 ядрами, что больше на два по сравнению с предыдущим поколением M1."
                    ],
                    [
                        'name' => 'Apple MacBook Air 2022',
                        'bg' => "https://i.pcmag.com/imagery/reviews/01mBttlv1qMiXYpc1bfOj1h-1..v1657726621.jpg",
                        'description' => "Совсем недавно — в первой декаде июня — Apple представила ноутбуки на базе новой SoC Apple M2, и вот мы уже можем оценить эту разработку в нашей тестовой лаборатории. К нам приехала модель MacBook Air (Mid 2022) в младшей конфигурации, и помимо обновленного чипа она интересна также новым дизайном — впервые за годы облик Air существенно изменился."
                    ],
                    [
                        'name' => 'Apple MacBook Pro 2020',
                        'bg' => "https://helios-i.mashable.com/imagery/reviews/061Q21UjycZF78LVtPVwH0z/hero-image.fill.size_1248x702.v1623389554.jpg",
                        'description' => "В основе Macbook Pro 13” 2022 года выпуска лежит новый чипсет Apple M2. Он включает 8-ядерный центральный процессор: четыре ядра отвечают за высокую производительность, остальные — за энергоэффективность. Графический процессор оснащен 10 ядрами, что больше на два по сравнению с предыдущим поколением M1."
                    ],
                    [
                        'name' => 'Apple MacBook Air 2022',
                        'bg' => "https://i.pcmag.com/imagery/reviews/01mBttlv1qMiXYpc1bfOj1h-1..v1657726621.jpg",
                        'description' => "Совсем недавно — в первой декаде июня — Apple представила ноутбуки на базе новой SoC Apple M2, и вот мы уже можем оценить эту разработку в нашей тестовой лаборатории. К нам приехала модель MacBook Air (Mid 2022) в младшей конфигурации, и помимо обновленного чипа она интересна также новым дизайном — впервые за годы облик Air существенно изменился."
                    ],
                    [
                        'name' => 'Apple MacBook Pro 2020',
                        'bg' => "https://helios-i.mashable.com/imagery/reviews/061Q21UjycZF78LVtPVwH0z/hero-image.fill.size_1248x702.v1623389554.jpg",
                        'description' => "В основе Macbook Pro 13” 2022 года выпуска лежит новый чипсет Apple M2. Он включает 8-ядерный центральный процессор: четыре ядра отвечают за высокую производительность, остальные — за энергоэффективность. Графический процессор оснащен 10 ядрами, что больше на два по сравнению с предыдущим поколением M1."
                    ]
                ];
            }
    
            if ($producer == "Lenovo") {
                return [
                    [
                        'name' => 'Lenovo ThinkPad E14 Gen 2',
                        'bg' => "https://static.1k.by/images/productsimages/ip/big/pp4/7/4431746/i2f2ac545d.jpg",
                        'description' => "Intel Core i7 1165G7 (2800 МГц), 14'' (1920x1080), (512 Гб) SSD, 16384 Мб DDR4, веб-камера, 1.64 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkPad X1 Carbon',
                        'bg' => "https://static.1k.by/images/products/ip/big/pp1/4/4573113/ifa200b2f2.jpg",
                        'description' => "Intel Core i5 1135G7 (2400 МГц), 14'' (1920x1200), (256 Гб) SSD, 16384 Мб LPDDR4X, веб-камера, 1.133 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkBook 15',
                        'bg' => "https://static.1k.by/images/products/ip/big/pp8/2/4348011/i69fafd874.jpg",
                        'description' => "Intel Core i5 1135G7 (2400 МГц), 15.6'' (1920x1080), (512 Гб) SSD, 8192 Мб DDR4, веб-камера, 1.7 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkBook 15',
                        'bg' => "https://static.1k.by/images/products/ip/big/pp8/2/4348011/i69fafd874.jpg",
                        'description' => "Intel Core i5 1135G7 (2400 МГц), 15.6'' (1920x1080), (512 Гб) SSD, 8192 Мб DDR4, веб-камера, 1.7 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkPad E14 Gen 2',
                        'bg' => "https://static.1k.by/images/productsimages/ip/big/pp4/7/4431746/i2f2ac545d.jpg",
                        'description' => "Intel Core i7 1165G7 (2800 МГц), 14'' (1920x1080), (512 Гб) SSD, 16384 Мб DDR4, веб-камера, 1.64 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkPad X1 Carbon',
                        'bg' => "https://static.1k.by/images/products/ip/big/pp1/4/4573113/ifa200b2f2.jpg",
                        'description' => "Intel Core i5 1135G7 (2400 МГц), 14'' (1920x1200), (256 Гб) SSD, 16384 Мб LPDDR4X, веб-камера, 1.133 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkBook 15',
                        'bg' => "https://static.1k.by/images/products/ip/big/pp8/2/4348011/i69fafd874.jpg",
                        'description' => "Intel Core i5 1135G7 (2400 МГц), 15.6'' (1920x1080), (512 Гб) SSD, 8192 Мб DDR4, веб-камера, 1.7 кг"
                    ],
                    [
                        'name' => 'Lenovo ThinkBook 15',
                        'bg' => "https://static.1k.by/images/products/ip/big/pp8/2/4348011/i69fafd874.jpg",
                        'description' => "Intel Core i5 1135G7 (2400 МГц), 15.6'' (1920x1080), (512 Гб) SSD, 8192 Мб DDR4, веб-камера, 1.7 кг"
                    ]
                ];
            }
        }
    }
}
