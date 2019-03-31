<?php return [
    'plugin'      => [
        'name'        => 'Shopaholic',
        'description' => '🛍️ Бесплатный eCommerce-плагин с большим набором расширений.',
    ],
    'field'       => [
        'vendor_code'         => 'Артикул',
        'price'               => 'Цена',
        'old_price'           => 'Старая цена',
        'quantity'            => 'Количество',
        'brand'               => 'Бренд',
        'offer'               => 'Товарные предложения',
        'currency'            => 'Валюта',
        'check_offer_active'  => 'Проверять наличие активных торговых предложений при получении списка активных товаров.',
        'additional_category' => 'Дополнительные категории',
        'promo_block_type'    => 'Промо-блок со списком товаров',
        'promo_block'         => 'Промо-блок',
        'category_parent_id'  => 'ID родительской категории',
        'product_id'          => 'ID товара',
        'rate'                => 'Курс',
        'tax_is_global'       => 'Налог будет применяться ко всем товарам',
        'tax_percent'         => 'Процент налога',
        'tax'                 => 'Налог',
        'without_tax'         => 'Без налога',
        'with_tax'            => 'С налогом',
        'countries'           => 'Страны',
        'states'              => 'Регионы',
        'main_price_type'     => 'Основная цена',
        'price_include_tax'   => 'Цена включает в себя налоги',
        'discount_price'      => 'Значение скидки',
    ],
    'settings'             => [
        'formula_calculate_discount_from_price'      => 'Формула подсчета скидки для цен с налогами',
        'formula_calculation_from_backend_price'     => 'Скидка вычитается из заданной цены (по-умолчанию)',
        'formula_calculation_from_price_without_tax' => 'Скидка вычитается из цены без налога',
        'formula_calculation_from_price_with_tax'    => 'Скидка вычитается из цены с налогом',
        'product_slug' => 'Поле для генерации URL (по умолчанию)',
        'product_slug_types' => [
            'name'      => 'Название товара',
            'id'     => 'ID товара',
        ]
    ],
    'menu'        => [
        'main'                      => 'Каталог',
        'categories'                => 'Категории',
        'product'                   => 'Товары',
        'brands'                    => 'Бренды',
        'shop_catalog'              => 'Каталог товаров',
        'shop_category'             => 'Категория товаров',
        'all_shop_categories'       => 'Все категории товаров',
        'promo_block'               => 'Промо-блоки',
        'promo'                     => 'Промо-акции',
        'price_type'                => 'Типы цен',
        'price_type_description'    => 'Управление типами цен',
        'currency'                  => 'Валюта',
        'currency_description'      => 'Управление валютами',
        'tax'                       => 'Налоги',
        'tax_description'           => 'Управление налогами',
        'configuration'             => 'Настройки каталога',
        'main_settings'             => 'Основные параметры',
        'main_settings_description' => 'Основные параметры вашего каталога',
    ],
    'tab'         => [
        'offer'       => 'Торговые предложения',
        'price'       => 'Цены',
        'permissions' => 'Shopaholic',
        'settings'    => 'Конфигурация каталога',
        'taxes'       => 'Налоги',
        'settings_product' => 'Настройки товаров'
    ],
    'category'    => [
        'name'         => 'категории',
        'list_title'   => 'Список категорий',
        'import_title' => 'Импорт категорий',
        'export_title' => 'Экспорт категорий',
    ],
    'brand'       => [
        'name'         => 'бренда',
        'list_title'   => 'Список брендов',
        'import_title' => 'Импорт брендов',
        'export_title' => 'Экспорт брендов',
    ],
    'product'     => [
        'name'         => 'товара',
        'list_title'   => 'Список товаров',
        'import_title' => 'Импорт товаров',
        'export_title' => 'Экспорт товаров',
    ],
    'offer'       => [
        'name'         => 'торгового предложения',
        'list_title'   => 'Список торговых предложений',
        'import_title' => 'Импорт торговых предложений',
        'export_title' => 'Экспорт торговых предложений',
    ],
    'promo_block' => [
        'name'       => 'промо-блока',
        'list_title' => 'Список промо-блоков',
    ],
    'price_type'  => [
        'name'       => 'типа цен',
        'list_title' => 'Список типов цен',
    ],
    'currency'    => [
        'name'       => 'валюты',
        'list_title' => 'Список валют',
    ],
    'tax'         => [
        'name'       => 'налога',
        'list_title' => 'Список налогов',
    ],
    'country'     => [
        'name'       => 'страны',
        'list_title' => 'Список стран',
    ],
    'state'       => [
        'name'       => 'региона',
        'list_title' => 'Список регионов',
    ],
    'component'   => [

        //Product components
        'product_page_name'            => 'Страница товара',
        'product_page_description'     => 'Получить данные для страницы товара',
        'product_data_name'            => 'Данные товара',
        'product_data_description'     => 'Получить данные товара по ID',
        'product_list_name'            => 'Список товаров',
        'product_list_description'     => 'Получить список товаров',

        //Brand components
        'brand_page_name'              => 'Страница бренда',
        'brand_page_description'       => 'Получить данные для страницы бренда',
        'brand_data_name'              => 'Данные бренда',
        'brand_data_description'       => 'Получить данные бренда по ID',
        'brand_list_name'              => 'Список брендов',
        'brand_list_description'       => 'Получить список брендов',

        //Promo block components
        'promo_block_page_name'        => 'Страница промо-блока',
        'promo_block_page_description' => 'Получить данные для страницы промо-блока',
        'promo_block_data_name'        => 'Данные промо-блока',
        'promo_block_data_description' => 'Получить данные промо-блока по ID',
        'promo_block_list_name'        => 'Список промо-блоков',
        'promo_block_list_description' => 'Получить список промо-блоков',

        //Category components
        'category_page_name'           => 'Страница категории',
        'category_page_description'    => 'Получить данные для страницы категории',
        'category_data_name'           => 'Данные категории',
        'category_data_description'    => 'Получить данные категории по ID',
        'category_list_name'           => 'Список категорий',
        'category_list_description'    => 'Получить дерево категорий',

        //Currency components
        'currency_list_name'           => 'Список валют',
        'currency_list_description'    => '',

        //Common components
        'breadcrumbs_name'             => 'Хлебные крошки',
        'breadcrumbs_description'      => 'Получить данные для формирования хлебных крошек каталога',

        //Components settings
        'product_list_sorting'         => 'Сортировка по умолчанию',
        'sorting_no'                   => 'Без сортировки',
        'sorting_price_desc'           => 'Дорогие',
        'sorting_price_asc'            => 'Дешёвые',
        'sorting_new'                  => 'Новые',
        'sorting_popularity_desc'      => 'Популярные',
        'sorting_rating_desc'          => 'Высокий рейтинг',
        'sorting_rating_asc'           => 'Низкий рейтинг',
        'sorting_date_begin_asc'       => 'Дата начала (ASC)',
        'sorting_date_begin_desc'      => 'Дата начала (DESC)',
        'sorting_date_end_asc'         => 'Дата окончания (ASC)',
        'sorting_date_end_desc'        => 'Дата окончания (DESC)',
    ],
    'permission'  => [
        'category'    => 'Управление категориями',
        'brand'       => 'Управление брендами',
        'product'     => 'Управление товарами',
        'settings'    => 'Управление настройками',
        'promo_block' => 'Управление промо-блоками',
        'currency'    => 'Управление валютами',
        'tax'         => 'Управление налогами',
        'price_type'  => 'Управление типами цен',
    ],
    'message'     => [
        'import_additional_category_info' => 'Укажите через запятую список дополнительных категорий товаров.',
    ],
    'button'      => [
        'import_offer_button' => 'Импортировать предложения из CSV',
    ],
];
