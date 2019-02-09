<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'SCGP',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>SCGP</b>CPT',

    'logo_mini' => '<b>C</b>PT',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'black',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => False,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */
    // https://fontawesome.com/icons?from=io

    'menu' => [
        'Menu de Navegação',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Home',
            'url'         => 'home',
            'icon'        => 'home',
            'label'       => 4,
            'label_color' => 'success',
        ],      

                // Planejamento Semanal
                [
                    'text'    => 'Planejamento Semanal',
                    'icon'    => 'clipboard',
                    'submenu' => [
                        [
                            'text' => 'Minhas Tarefas',
                            'url'  => 'home',
                            'icon' => 'file',
                        ],
                        [
                            'text' => 'Hoje',
                            'url'  => 'admin/settings',
                            'icon' => 'file',
                        ],
                        [
                            'text' => 'Tarefas do setor',
                            'url'  => 'admin/settings',
                            'icon' => 'file',
                        ],                
                    ],
                ],
                // Planejamento Semanal

                // Gerenciamento de erros
                [
                    'text'    => 'Gerência de erros',
                    'icon'    => 'exclamation-triangle',
                    'submenu' => [
                        [
                            'text' => 'Adicionar',
                            'url'  => 'admin/settings',
                            'icon' => 'file',
                        ],
                        [
                            'text' => 'Listar',
                            'url'  => 'admin/settings',
                            'icon' => 'file',
                        ],
                
                    ],
                ],
                // Gerenciamento de erros

                

                // Monitoramento de Projetos
                [
                    'text'        => 'Monitoramento',
                    'url'         => 'projects',
                    'icon'        => 'check-square',
                ],
                // Monitoramento de Projetos
                
                 // Reuniões
                 [
                    'text'    => 'Reuniões',
                    'icon'    => 'share',
                    'submenu' => [

                //Reunião semanal
                [
                    'text'    => 'Semanal',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Criar',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'Listar',
                            'url'     => '#',
                        ],
                    ],
                ], // Reunião semanal


                //Reunião de Retrospectiva
                [
                    'text'    => 'Retrospectiva',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Criar',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'Listar',
                            'url'     => '#',
                        ],
                    ],
                ], // Reunião de Retrospectiva

                
                    ],
                ],
                // Reuniões 
                
                        // Adminastração de Projetos
        [
            'text'    => 'Projetos',
            'icon'    => 'cog',
            'submenu' => [


                //Cadastrar Projetos
                [
                    'text'    => 'Cadastrar',
                    'url'     => '#',
                    'submenu' => [
                        //Cadastrar setores
                        [
                            'text'        => 'Setores',
                            'url'         => 'projects/create/sector',
                            'icon'        => 'file',
                            'label'       => 4,
                            'label_color' => 'success',
                        ],
                        //Cadastrar setores
                        //Cadastrar tipo do projeto
                        [
                            'text'        => 'Tipo do projeto',
                            'url'         => '/projects/create/typeprojects',
                            'icon'        => 'file',
                            'label'       => 4,
                            'label_color' => 'success',
                        ],
                        //Cadastrar tipo do projeto
                        //Cadastrar área de projeto
                        [
                            'text'        => 'Área de projeto',
                            'url'         => '/projects/create/areaprojects',
                            'icon'        => 'file',
                            'label'       => 4,
                            'label_color' => 'success',
                        ],
                        //Cadastrar área de projeto

                    ],
                ],
                //Criar Projeto
                [
                    'text'        => 'Criar Aula/Curso',
                    'url'         => 'projects/create',
                    'icon'        => 'file',

                ],
                //Criar Projeto
                //Listar Projeto
                [
                    'text'        => 'Listar Projetos',
                    'url'         => 'projects',
                    'icon'        => 'file',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                //Listar Projeto


            ],

            
        ],
        // Produtividade Mensal
        [
            'text'        => 'Produtividade Mensal',
            'url'         => 'admin/pages',
            'icon'        => 'clipboard',
        ],
        // Produtividade Mensal
        // Adminastração de Projetos

                'Gestão',

                        // Configurações da Conta
                [
                    'text'    => 'Conta',
                    'icon'    => 'address-card',
                    'submenu' => [
                        [
                            'text' => 'Perfil',
                            'url'  => 'admin/settings',
                            'icon' => 'user',
                        ],
                        [
                            'text' => 'Mudar a senha',
                            'url'  => 'admin/settings',
                            'icon' => 'lock',
                        ],
                
                    ],
                ], // Configurações da Conta

                  // listar colaborador
                  [
                    'text'        => 'Usuários cadastrados ',
                    'url'         => 'users',
                    'icon'        => 'clipboard',
                ],
                // listar colaborador  

                        // Ficha do colaborador
                        [
                            'text'        => 'Ficha',
                            'url'         => 'admin/pages',
                            'icon'        => 'clipboard',
                        ],
                        // Ficha do colaborador  

               // Manual de Padronização
               [
                'text'    => 'Manual',
                'icon'    => 'book',
                'submenu' => [
                    [
                        'text' => 'Cinegrafia',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],
                    [
                        'text' => 'Sonoplastia',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],
                    [
                        'text' => 'Computação gráfica',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],
                    [
                        'text' => 'Edição',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],  
                    [
                        'text' => 'Controle de qualidade',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],                     
                    [
                        'text' => 'Autoração',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],                     
                    [
                        'text' => 'Backup',
                        'url'  => 'admin/settings',
                        'icon' => 'file',
                    ],                      
                    

                ],
            ], // Manual de Padronização


        'Admin',
        [
            'text'        => 'Overview',
            'url'         => 'admin/pages',
            'icon'        => 'globe',
            'label'       => 4,
            'label_color' => 'success',
        ], 

        // Gerencia de Usuários
        [
            'text'    => 'Gerência de Usuários',
            'icon'    => 'address-card',
            'submenu' => [
                //Gerenciar usuário
                [
                    'text'    => 'Gerenciar usuários',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Criar',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'Listar',
                            'url'     => '#',
                        ],
                    ],
                ],

                //Gerenciar permissoes
                [
                    'text'        => 'Gerenciar permissoes',
                    'url'         => 'admin/pages',
                    'icon'        => 'file',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                //Gerenciar permissoes

                //Perfil de acesso (role)
                [
                    'text'        => 'Perfil de acesso',
                    'url'         => 'admin/pages',
                    'icon'        => 'file',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                //Perfil de acesso (role)


            ],
        ],
        // Gerencia de Usuários

        // Adminastração de Projetos
        [
            'text'    => 'Projetos',
            'icon'    => 'cog',
            'submenu' => [


                //Cadastrar Projetos
                [
                    'text'    => 'Cadastrar',
                    'url'     => '#',
                    'submenu' => [
                        //Cadastrar setores
                        [
                            'text'        => 'Setores',
                            'url'         => 'admin/pages',
                            'icon'        => 'file',
                            'label'       => 4,
                            'label_color' => 'success',
                        ],
                        //Cadastrar setores
                        //Cadastrar tipo do projeto
                        [
                            'text'        => 'Tipo do projeto',
                            'url'         => 'admin/pages',
                            'icon'        => 'file',
                            'label'       => 4,
                            'label_color' => 'success',
                        ],
                        //Cadastrar tipo do projeto
                        //Cadastrar área de projeto
                        [
                            'text'        => 'Área de projeto',
                            'url'         => 'admin/pages',
                            'icon'        => 'file',
                            'label'       => 4,
                            'label_color' => 'success',
                        ],
                        //Cadastrar área de projeto

                    ],
                ],
                //Criar Projeto
                [
                    'text'        => 'Criar Projeto',
                    'url'         => 'projects/create',
                    'icon'        => 'file',

                ],
                //Criar Projeto
                //Listar Projeto
                [
                    'text'        => 'Listar Projetos',
                    'url'         => 'admin/pages',
                    'icon'        => 'file',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                //Listar Projeto


            ],
        ],
        // Adminastração de Projetos

        // Relatórios
        [
            'text'    => 'Relatórios',
            'icon'    => 'signal',
            'submenu' => [

                //Listar 
                [
                    'text'        => 'Lista01',
                    'url'         => 'admin/pages',
                    'icon'        => 'file',

                ],
                //Listar 
                //Listar 
                [
                    'text'        => 'Lista02',
                    'url'         => 'admin/pages',
                    'icon'        => 'file',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                //Listar 


            ],
        ],
        // Relatórios


    ],




    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
