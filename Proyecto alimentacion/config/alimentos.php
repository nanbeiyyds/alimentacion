<?php
// 'alimento' => [ 'intro', 'css', 'secciones', 'js' ]

return [
    'aceite' => [
        'intro' => 'alimentos.aceite.secciones.introduccion',

        'css' => [
            'aceite_banner.css',
            'aceite_general.css',
        ],

        'secciones' => [
            [
                'id' => 'valorNutri',
                'titulo' => 'VALOR NUTRICIONAL',
                'vista' => 'alimentos.aceite.secciones.valor-nutricional'
            ],
            [
                'id' => 'ingestaRecomendada',
                'titulo' => 'INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES',
                'vista' => 'alimentos.aceite.secciones.ingesta'
            ],
            [
                'id' => 'racioMedi',
                'titulo' => 'RACIONES Y MEDIDAS CASERAS',
                'vista' => 'alimentos.aceite.secciones.raciones'
            ],
            [
                'id' => 'patoFisio',
                'titulo' => 'PATOLOGÍAS Y FISIOLOGÍAS',
                'vista' => 'alimentos.aceite.secciones.patologias'
            ],
            [
                'id' => 'metodoAnalisis',
                'titulo' => 'MÉTODOS DE ANÁLISIS',
                'vista' => 'alimentos.aceite.secciones.metodos'
            ],
            [
                'id' => 'curiosidades',
                'titulo' => 'CURIOSIDADES',
                'vista' => 'alimentos.aceite.secciones.curiosidades'
            ],
        ],

        'js' => [
            ['type' => 'local', 'path' => 'aceite.js'],
        ],
    ],

    'carne' => [
        'intro' => 'alimentos.carne.secciones.introduccion',

        'css' => [
            'carne_banner.css',
            'carne_general.css',
        ],

        'secciones' => [
            [
                'id' => 'valorNutri',
                'titulo' => 'VALOR NUTRICIONAL',
                'vista' => 'alimentos.carne.secciones.valor-nutricional'
            ],
            [
                'id' => 'ingestaRecomendada',
                'titulo' => 'INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES',
                'vista' => 'alimentos.carne.secciones.ingesta'
            ],
            [
                'id' => 'racioMedi',
                'titulo' => 'RACIONES Y MEDIDAS CASERAS',
                'vista' => 'alimentos.carne.secciones.raciones'
            ],
            [
                'id' => 'patoFisio',
                'titulo' => 'PATOLOGÍAS Y FISIOLOGÍAS',
                'vista' => 'alimentos.carne.secciones.patologias'
            ],
            [
                'id' => 'metodoAnalisis',
                'titulo' => 'MÉTODOS DE ANÁLISIS',
                'vista' => 'alimentos.carne.secciones.metodos'
            ],
            [
                'id' => 'curiosidades',
                'titulo' => 'CURIOSIDADES',
                'vista' => 'alimentos.carne.secciones.curiosidades'
            ],
        ],

        'js' => [
            ['type' => 'local', 'path' => 'carne.js'],
            ['type' => 'non-local', 'path' => 'https://cdn.jsdelivr.net/npm/chart.js'],
        ],
    ],

    'harina' => [
        'intro' => 'alimentos.harina.secciones.introduccion',

        'css' => [
            'harina_banner.css',
            'harina_general.css',
        ],

        'secciones' => [
            [
                'id' => 'valorNutri',
                'titulo' => 'VALOR NUTRICIONAL',
                'vista' => 'alimentos.harina.secciones.valor-nutricional'
            ],
            [
                'id' => 'ingestaRecomendada',
                'titulo' => 'INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES',
                'vista' => 'alimentos.harina.secciones.ingesta'
            ],
            [
                'id' => 'racioMedi',
                'titulo' => 'RACIONES Y MEDIDAS CASERAS',
                'vista' => 'alimentos.harina.secciones.raciones'
            ],
            [
                'id' => 'patoFisio',
                'titulo' => 'PATOLOGÍAS Y FISIOLOGÍAS',
                'vista' => 'alimentos.harina.secciones.patologias'
            ],
            [
                'id' => 'metodoAnalisis',
                'titulo' => 'MÉTODOS DE ANÁLISIS',
                'vista' => 'alimentos.harina.secciones.metodos'
            ],
            [
                'id' => 'curiosidades',
                'titulo' => 'CURIOSIDADES',
                'vista' => 'alimentos.harina.secciones.curiosidades'
            ],
        ],

        'js' => [
            ['type' => 'local', 'path' => 'harina.js'],
            ['type' => 'non-local', 'path' => 'https://cdn.jsdelivr.net/npm/chart.js'],
        ],
    ],

    'huevo' => [
        'intro' => 'alimentos.huevo.secciones.introduccion',

        'css' => [
            'huevo_banner.css',
            'huevo_general.css',
            'huevo_infografia.css',
            'huevo_simulador.css',
        ],

        'secciones' => [
            [
                'id' => 'valorNutri',
                'titulo' => 'VALOR NUTRICIONAL',
                'vista' => 'alimentos.huevo.secciones.valor-nutricional'
            ],
            [
                'id' => 'ingestaRecomendada',
                'titulo' => 'INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES',
                'vista' => 'alimentos.huevo.secciones.ingesta'
            ],
            [
                'id' => 'racioMedi',
                'titulo' => 'RACIONES Y MEDIDAS CASERAS',
                'vista' => 'alimentos.huevo.secciones.raciones'
            ],
            [
                'id' => 'patoFisio',
                'titulo' => 'PATOLOGÍAS Y FISIOLOGÍAS',
                'vista' => 'alimentos.huevo.secciones.patologias'
            ],
            [
                'id' => 'metodoAnalisis',
                'titulo' => 'MÉTODOS DE ANÁLISIS',
                'vista' => 'alimentos.huevo.secciones.metodos'
            ],
            [
                'id' => 'curiosidades',
                'titulo' => 'CURIOSIDADES',
                'vista' => 'alimentos.huevo.secciones.curiosidades'
            ],
        ],
        'js' => [
            ['type' => 'local', 'path' => 'huevo.js'],
        ],
    ],

    'leche' => [
        'intro' => 'alimentos.leche.secciones.introduccion',

        'css' => [
            'leche_banner.css',
            'leche_general.css',
        ],

        'secciones' => [
            [
                'id' => 'valorNutri',
                'titulo' => 'VALOR NUTRICIONAL',
                'vista' => 'alimentos.leche.secciones.valor-nutricional'
            ],
            [
                'id' => 'ingestaRecomendada',
                'titulo' => 'INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES',
                'vista' => 'alimentos.leche.secciones.ingesta'
            ],
            [
                'id' => 'racioMedi',
                'titulo' => 'RACIONES Y MEDIDAS CASERAS',
                'vista' => 'alimentos.leche.secciones.raciones'
            ],
            [
                'id' => 'patoFisio',
                'titulo' => 'PATOLOGÍAS Y FISIOLOGÍAS',
                'vista' => 'alimentos.leche.secciones.patologias'
            ],
            [
                'id' => 'metodoAnalisis',
                'titulo' => 'MÉTODOS DE ANÁLISIS',
                'vista' => 'alimentos.leche.secciones.metodos'
            ],
            [
                'id' => 'curiosidades',
                'titulo' => 'CURIOSIDADES',
                'vista' => 'alimentos.leche.secciones.curiosidades'
            ],
        ],

        'js' => [
            ['type' => 'local', 'path' => 'leche.js'],
            ['type' => 'non-local', 'path' => 'https://cdn.jsdelivr.net/npm/chart.js'],
        ],
    ],

    'pescado' => [
        'intro' => 'alimentos.pescado.secciones.introduccion',

        'css' => [
            'pescado_banner.css',
            'pescado_general.css',
        ],

        'secciones' => [
            [
                'id' => 'valorNutri',
                'titulo' => 'VALOR NUTRICIONAL',
                'vista' => 'alimentos.pescado.secciones.valor-nutricional'
            ],
            [
                'id' => 'ingestaRecomendada',
                'titulo' => 'INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES',
                'vista' => 'alimentos.pescado.secciones.ingesta'
            ],
            [
                'id' => 'racioMedi',
                'titulo' => 'RACIONES Y MEDIDAS CASERAS',
                'vista' => 'alimentos.pescado.secciones.raciones'
            ],
            [
                'id' => 'patoFisio',
                'titulo' => 'PATOLOGÍAS Y FISIOLOGÍAS',
                'vista' => 'alimentos.pescado.secciones.patologias'
            ],
            [
                'id' => 'metodoAnalisis',
                'titulo' => 'MÉTODOS DE ANÁLISIS',
                'vista' => 'alimentos.pescado.secciones.metodos'
            ],
            [
                'id' => 'curiosidades',
                'titulo' => 'CURIOSIDADES',
                'vista' => 'alimentos.pescado.secciones.curiosidades'
            ],
        ],

        'js' => [
            ['type' => 'local', 'path' => 'pescado.js'],
            ['type' => 'non-local', 'path' => 'https://cdn.jsdelivr.net/npm/chart.js'],
        ],
    ],
];