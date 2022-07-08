<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create(
            [
                'category_id' => 1,
                'image' => '/images/content/reactjs.png',
                'title' => 'Introducción a ReactJS.',
                'description' => 'Aprende a manejar la libreria de Facebook.',
                'content' => 'React te ayuda a crear interfaces de usuario interactivas de forma sencilla. Diseña vistas simples para cada estado en tu aplicación, y React se encargará de actualizar y renderizar de manera eficiente los componentes correctos cuando los datos cambien.
                Las vistas declarativas hacen que tu código sea más predecible, por lo tanto, fácil de depurar.',
                'date_limit' => '2022-07-14'
            ]
        );
        Content::create(
            [
                'category_id' => 1,
                'image' => '/images/content/angular.png',
                'title' => 'Angular avanzado.',
                'description' => 'Aprende a manejar la libreria de Google.',
                'content' => 'Angular es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google, que se utiliza para crear y mantener aplicaciones web de una sola página.',
                'date_limit' => '2022-07-14'
            ]
        );
        Content::create(
            [
                'category_id' => 1,
                'image' => '/images/content/vue.png',
                'title' => 'Fundamentos de Vue',
                'description' => 'El Framework de JavaScript progresivo.',
                'content' => 'Vue.js es un framework de JavaScript de código abierto para la construcción de interfaces de usuario y aplicaciones de una sola página. Fue creado por Evan You, y es mantenido por él y por el resto de los miembros activos del equipo central que provienen de diversas empresas como Netlify y Netguru.',
                'date_limit' => '2022-08-01'
            ]
        );
        Content::create(
            [
                'category_id' => 2,
                'image' => '/images/content/php.png',
                'title' => 'Introducción a PHP',
                'description' => 'Lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web.',
                'content' => 'PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.​ Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.',
                'date_limit' => '2022-08-30'
            ]
        );
        Content::create(
            [
                'category_id' => 2,
                'image' => '/images/content/node.png',
                'title' => 'Node de cero a experto',
                'description' => 'Es un JavaScript runtime built basado en el motor de JavaScript V8 de Chrome.',
                'content' => 'Node.js es un entorno en tiempo de ejecución multiplataforma, de código abierto, para la capa del servidor basado en el lenguaje de programación JavaScript, asíncrono, con E/S de datos en una arquitectura orientada a eventos y basado en el motor V8 de Google.',
                'date_limit' => '2022-07-30'
            ]
        );
        Content::create(
            [
                'category_id' => 3,
                'image' => '/images/content/photoshop.png',
                'title' => 'Photoshop profesional',
                'description' => 'Aprende a utilizar la herramienta de fotos como un profesional.',
                'content' => 'Adobe Photoshop es un editor de fotografías desarrollado por Adobe Systems Incorporated. Usado principalmente para el retoque de fotografías y gráficos, su nombre en español significa taller de fotos. Es conocido mundialmente.',
                'date_limit' => '2022-07-30'
            ]
        );
    }
}
