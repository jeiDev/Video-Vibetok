<?php

namespace App\Http\Controllers\Legal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $currentCategory = $request->query('category', '');

        $categories = [
            __('faq.category_all') => '',
            __('faq.category_service') => 'service',
            __('faq.category_how_to') => 'how-to',
            __('faq.category_devices') => 'devices',
            __('faq.category_quality') => 'quality',
            __('faq.category_troubleshooting') => 'troubleshooting'
        ];

        $faqs = [
            // CATEGORÍA: SERVICIO
            [
                'category_key' => 'service',
                'category_name' => __('faq.category_service'),
                'q' => __('faq.faq_service_1_q'),
                'a' => __('faq.faq_service_1_a')
            ],
            [
                'category_key' => 'service',
                'category_name' => __('faq.category_service'),
                'q' => __('faq.faq_service_2_q'),
                'a' => __('faq.faq_service_2_a')
            ],

            // CATEGORÍA: CÓMO DESCARGAR
            [
                'category_key' => 'how-to',
                'category_name' => __('faq.category_how_to'),
                'q' => __('faq.faq_how_to_1_q'),
                'a' => __('faq.faq_how_to_1_a')
            ],
            [
                'category_key' => 'how-to',
                'category_name' => __('faq.category_how_to'),
                'q' => __('faq.faq_how_to_2_q'),
                'a' => __('faq.faq_how_to_2_a')
            ],

            // CATEGORÍA: COMPATIBILIDAD
            [
                'category_key' => 'devices',
                'category_name' => __('faq.category_devices'),
                'q' => __('faq.faq_devices_1_q'),
                'a' => __('faq.faq_devices_1_a')
            ],
            [
                'category_key' => 'devices',
                'category_name' => __('faq.category_devices'),
                'q' => __('faq.faq_devices_2_q'),
                'a' => __('faq.faq_devices_2_a')
            ],
            [
                'category_key' => 'devices',
                'category_name' => __('faq.category_devices'),
                'q' => __('faq.faq_devices_3_q'),
                'a' => __('faq.faq_devices_3_a')
            ],

            // CATEGORÍA: CALIDAD Y ARCHIVOS
            [
                'category_key' => 'quality',
                'category_name' => __('faq.category_quality'),
                'q' => __('faq.faq_quality_1_q'),
                'a' => __('faq.faq_quality_1_a')
            ],
            [
                'category_key' => 'quality',
                'category_name' => __('faq.category_quality'),
                'q' => __('faq.faq_quality_2_q'),
                'a' => __('faq.faq_quality_2_a')
            ],

            // CATEGORÍA: SOLUCIÓN DE PROBLEMAS
            [
                'category_key' => 'troubleshooting',
                'category_name' => __('faq.category_troubleshooting'),
                'q' => __('faq.faq_troubleshooting_1_q'),
                'a' => __('faq.faq_troubleshooting_1_a')
            ],
            [
                'category_key' => 'troubleshooting',
                'category_name' => __('faq.category_troubleshooting'),
                'q' => __('faq.faq_troubleshooting_2_q'),
                'a' => __('faq.faq_troubleshooting_2_a')
            ],
            [
                'category_key' => 'troubleshooting',
                'category_name' => __('faq.category_troubleshooting'),
                'q' => __('faq.faq_troubleshooting_3_q'),
                'a' => __('faq.faq_troubleshooting_3_a')
            ]
        ];

        $filteredFaqs = collect($faqs);

        if ($currentCategory !== '') {
            $filteredFaqs = $filteredFaqs->where('category_key', $currentCategory);
        }

        return view('legal.faq', [
            'faqs' => $filteredFaqs,
            'categories' => $categories,
            'currentCategory' => $currentCategory
        ]);
    }
}
