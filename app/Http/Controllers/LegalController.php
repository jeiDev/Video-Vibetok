<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function terms()
    {
        return view('legal.terms');
    }

    public function privacy()
    {
        return view('legal.privacy');
    }

    public function dmca()
    {
        return view('legal.dmca');
    }

    public function howToUse()
    {
        return view('legal.how-to-use');
    }

    public function faq(Request $request)
    {
        $currentCategory = $request->query('category', '');

        $categories = [
            'Todos' => '',
            'Servicio' => 'service',
            'Guía de Descarga' => 'how-to',
            'Dispositivos' => 'devices',
            'Calidad de Video' => 'quality',
            'Solución de Errores' => 'troubleshooting'
        ];

        $faqs = [
            // CATEGORÍA: SERVICIO
            [
                'category_key' => 'service',
                'category_name' => 'Servicio',
                'q' => '¿Es realmente gratuito y sin límites?',
                'a' => 'Sí, puedes descargar tantos videos como quieras de forma totalmente gratuita. No hay límites diarios ni suscripciones ocultas.'
            ],
            [
                'category_key' => 'service',
                'category_name' => 'Servicio',
                'q' => '¿Por qué descargar sin marca de agua?',
                'a' => 'Eliminar el logo de TikTok permite disfrutar del contenido de forma más limpia en otros dispositivos o usarlo como recurso de edición, respetando siempre los derechos del autor.'
            ],

            // CATEGORÍA: CÓMO DESCARGAR
            [
                'category_key' => 'how-to',
                'category_name' => 'Guía de Descarga',
                'q' => '¿Cómo obtengo el enlace del video de TikTok?',
                'a' => 'Abre el video en TikTok, toca el botón "Compartir" y selecciona "Copiar enlace". Luego pégalo en nuestra web.'
            ],
            [
                'category_key' => 'how-to',
                'category_name' => 'Guía de Descarga',
                'q' => '¿Puedo descargar videos desde la aplicación de TikTok?',
                'a' => 'Nuestra herramienta es una aplicación web. Debes copiar el enlace desde la app de TikTok y usar tu navegador preferido para realizar la descarga.'
            ],

            // CATEGORÍA: COMPATIBILIDAD
            [
                'category_key' => 'devices',
                'category_name' => 'Dispositivos',
                'q' => '¿Funciona en iPhone / iOS?',
                'a' => 'Sí. En versiones modernas de iOS (13+), puedes descargar directamente con Safari. El video se guardará en la aplicación "Archivos".'
            ],
            [
                'category_key' => 'devices',
                'category_name' => 'Dispositivos',
                'q' => '¿Puedo usarlo en mi teléfono Android?',
                'a' => 'Totalmente. Solo pega el enlace en navegadores como Chrome o Firefox en tu móvil y la descarga comenzará automáticamente.'
            ],
            [
                'category_key' => 'devices',
                'category_name' => 'Dispositivos',
                'q' => '¿Funciona en computadoras (PC/Mac)?',
                'a' => 'Sí, es compatible con todos los navegadores modernos como Chrome, Edge, Safari y Firefox.'
            ],

            // CATEGORÍA: CALIDAD Y ARCHIVOS
            [
                'category_key' => 'quality',
                'category_name' => 'Calidad de Video',
                'q' => '¿Se pierde calidad al quitar la marca de agua?',
                'a' => 'No. Nuestro sistema localiza el archivo original en los servidores de TikTok y te lo entrega en la máxima calidad disponible (HD).'
            ],
            [
                'category_key' => 'quality',
                'category_name' => 'Calidad de Video',
                'q' => '¿Puedo convertir un video de TikTok a MP3?',
                'a' => 'Sí, tras procesar el enlace, verás una opción específica para descargar solo el audio en formato MP3.'
            ],

            // CATEGORÍA: PRIVACIDAD Y SEGURIDAD
            [
                'category_key' => 'security',
                'category_name' => 'Privacidad',
                'q' => '¿Ustedes guardan copias de los videos que descargo?',
                'a' => 'No almacenamos ningún video en nuestros servidores. Solo servimos de puente entre TikTok y tu dispositivo para garantizar tu privacidad.'
            ],
            [
                'category_key' => 'security',
                'category_name' => 'Privacidad',
                'q' => '¿Es necesario registrarse o dar datos personales?',
                'a' => 'En absoluto. No pedimos correos electrónicos, nombres ni tarjetas de crédito.'
            ],

            // CATEGORÍA: SOLUCIÓN DE PROBLEMAS
            [
                'category_key' => 'troubleshooting',
                'category_name' => 'Solución de Errores',
                'q' => 'El video se reproduce pero no se descarga, ¿qué hago?',
                'a' => 'Si el video se abre en una pestaña nueva, haz clic derecho (o mantén presionado en móvil) y selecciona "Guardar video como...".'
            ],
            [
                'category_key' => 'troubleshooting',
                'category_name' => 'Solución de Errores',
                'q' => 'Me sale un error de "Enlace no válido"',
                'a' => 'Asegúrate de que el video sea público. Si el video fue borrado o es de una cuenta privada, nuestro sistema no podrá acceder a él.'
            ],
            [
                'category_key' => 'troubleshooting',
                'category_name' => 'Solución de Errores',
                'q' => '¿Por qué la descarga tarda tanto?',
                'a' => 'La velocidad depende de tu conexión a internet y del tamaño del video original. Los videos de 10 minutos de TikTok pueden tardar un poco más en procesarse.'
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
