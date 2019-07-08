<?php

$lang = [
    '__app_toolbox'                                  => 'Dev Toolbox',
    'menutab__devtools'                              => 'Dev Toolbox',
    'menutab__devtools_icon'                         => 'wrench',
    'toolbox_apps_built'                             => 'Apps built',
    'menu__toolbox_settings'                         => 'Dev Toolbox',
    'menu__toolbox_settings_settings'                => 'Settings',
    'ext__menu'                                      => 'Add menus to the DevBar',
    'ext__settings'                                  => 'Settings for the other apps to add to the settings in dt base (so we aren\'t using if appIsenable checks, which makes the code ugly)',
    'ext__Headerdoc'                                 => 'adds the "Headerdoc" extension to your app to gain features such as class commenting, adding blank index.html\'s to all the folders in your app or skiping files or entire directories in the build process. the name is misleading :P',
    'ext__SourcesForm'                               => 'this is experimental atm, nothing to see here.',
    'ext__ProxyHelpers'                              => 'add "properties" to the Data\\Store or Request class thru here.',
    'dtdevfolder_apps_select'                        => 'Select Application',
    'dtdevfolder_app'                                => 'Application',
    'dtdevfolder_app_desc'                           => 'Select which application to generate the Dev Folder for.',
    'dtdevfolder_type'                               => 'Type',
    'dtdevfolder_type_desc'                          => 'Choose everything to recreate the entire Dev Folder, or select which part of the Dev folder you wish to recreate.',
    'dtdevfolder_type_lang'                          => 'Language',
    'dtdevfolder_type_js'                            => 'Javascript',
    'dtdevfolder_type_template'                      => 'Templates',
    'dtdevfolder_type_email'                         => 'Email Templates',
    'dtdevfolder_type_all'                           => 'Everything',
    'dtdevfolder_type_select'                        => 'Select Type',
    'dtdevfolder_return_javascript'                  => 'Javascript Files Generated',
    'dtdevfolder_return_templates'                   => 'Template Files Generated',
    'dtdevfolder_return_email'                       => 'Email Template Files Generated',
    'dtdevfolder_return_lang'                        => 'Language Strings Generated',
    'dtdevfolder_queue_title'                        => 'Generating Dev Files',
    'dtdevfolder_total_done'                         => 'Processing %s of %s',
    'dtdevfolder_completed'                          => 'Dev folder generated for %s',
    'menu__dtdevfolder_devplus'                      => 'Dev Folder Generator',
    'menu__dtdevfolder_devplus_devplus'              => 'Applications',
    'dtdevfolder_title'                              => 'Application Dev Folder Generator',
    'dtdevfolder_plugins_title'                      => 'Plugins Dev Folder Generator',
    'dtdevfolder_plugin_upload'                      => 'Plugin XML',
    'dtdevfolder_plugins_done'                       => 'The Dev Folder for %s has been generated!',
    'menu__dtdevfolder_view_plugins'                 => 'Plugins',
    'dtdevplus_ext_use_default'                      => 'Use Default',
    'dtdevplus_ext_use_default_desc'                 => 'Will ignore all other settings on the page and build and IPS/App extensions skeleton!',
    'menu__toolbox_devfolder'                        => 'DevFolder Creator',
    'menu__toolbox_devfolder_applications'           => 'Applications',
    'menu__toolbox_devfolder_plugins'                => 'Plugins',
    'menu__toolbox_code'                             => "Code Analyzer",
    'menu__dtcode_view'                              => 'Code Analyzer',
    'menu__toolbox_code_analyzer'                    => 'Analyzer',
    'dtcode_app'                                     => 'Applications',
    'dtcode_app_desc'                                => 'Choose which app you wish to analyze.',
    'dtcode_queue_complete'                          => "Step: %s<br> complete: %s out of %s",
    'dtcode_langs_php'                               => 'Unused language strings: lang.php (%s)',
    'dtcode_langs_php_desc'                          => 'Language strings that are defined but do not appear to be in use. Lang.php',
    'dtcode_jslangs_php'                             => 'Unused language strings: jslang.php (%s)',
    'dtcode_jslangs_php_desc'                        => 'Language strings that are defined but do not appear to be in use. jslang.php',
    'dtcode_langs_verify'                            => 'Missing Lang Definitions (%s)',
    'dtcode_langs_verify_desc'                       => 'Language strings that are in use, but are not defined in the language files',
    'dtcode_settings_check'                          => 'Unused Settings (%s)',
    'dtcode_settings_check_desc'                     => 'Settings that are defined but do not appear to be in use.',
    'dtcode_settings_verify'                         => 'Missing Setting Definitions (%s)',
    'dtcode_settings_verify_desc'                    => 'Settings in use but do not appear not to have been created in the dev center for the application.',
    'dtcode_results'                                 => 'Results',
    'dtcode_results_app'                             => 'Results for %s',
    'dtcode_no_autoload'                             => 'no autoload.php found in this location, try again.',
    'dtcode_path'                                    => 'Vendor Path',
    'dtcode_path_desc'                               => "Path to composer's vendor folder, this app requires symfony/finder min. version 4.0 to be installed to function.",
    'dtcode_error'                                   => 'This application requires symfony/finder, please use composer to install it and then point to the directory that contains the autoload.php for composer. to install "composer require symfony/finder" (any version above 4.0 should suffice)',
    'dtcode_missing_class'                           => 'Symfony/Finder is missing, please install with composer.',
    '__app_dtcontent'                                => 'Dev Toolbox: Content Generator',
    'menu__toolbox_content'                          => 'Content Generator',
    'menu__toolbox_content_content'                  => 'Generator',
    'dtcontent_type'                                 => 'Content Type',
    'dtcontent_limit'                                => 'Limit',
    'dtcontent_passwords'                            => 'Random Passwords',
    'dtcontent_passwords_desc'                       => 'if enabled, passwords will be randomize, otherwise username is used.',
    'dtcontent_group'                                => 'Group',
    'dtcontent_group_desc'                           => 'Select the group you wish to make the members for.',
    'dtcontent_club'                                 => 'Randomly join available clubs',
    'dtcontent_progress'                             => '%s out of %s',
    'dtcontent_completed'                            => '%s creation completed',
    'dtcontent_rangeStart'                           => 'Start Date',
    'dtcontent_rangeStart_desc'                      => 'The earliest date to generate content for',
    'dtcontent_rangeEnd'                             => 'End Date',
    'dtcontent_rangeEnd_desc'                        => 'The latest date to generate content for',
    'toolbox_tab'                                    => 'General',
    'toolbox_debug_templates'                        => 'Debug Templates',
    'toolbox_debug_templates_desc'                   => 'Writes templates to disk allowing template error messages to be tracked. this will not work correctly if the IPS\DEBUG_TEMPLATES is set to true in the constants.php',
    'dtdevplus_select'                               => 'Action',
    'dtdevplus_table'                                => 'Table',
    'dtdevplus_add_column'                           => 'Column',
    'dtdevplus_length'                               => 'Length',
    'dtdevplus_decimals'                             => 'Decimals',
    'dtdevplus_default'                              => 'Default',
    'dtdevplus_comment'                              => 'Comment',
    'dtdevplus_allow_null'                           => 'Allow Null',
    'dtdevplus_sunsigned'                            => 'Unsigned',
    'dtdevplus_zerofill'                             => 'ZeroFill',
    'dtdevplus_auto_increment'                       => 'Auto-Increment',
    'dtdevplus_binary'                               => 'Binary',
    'dtdevplus_unsigned'                             => 'Value',
    'dtdevplus_values'                               => 'Values',
    'dtdevplus_columns'                              => 'Table Column',
    'dtdevplus_code'                                 => 'Query Box',
    'dtdevplus_content_item_class'                   => 'Item Class',
    'dtdevplus_traits'                               => 'Traits',
    'dtdevplus_subnode_class'                        => 'Subnode Class',
    'dtdevplus_traitName'                            => 'Trait Name',
    'dtdevplus_interfaceName'                        => 'Interface Name',
    'dtdevplus_created'                              => 'Created %s Class: %s has been created successfully!',
    'dtdevplus_type'                                 => 'Class Type',
    'dtdevplus_type_desc'                            => 'Class type, Class for a regular class. Node for a \\IPS\\Node\\Model class. Content Item for a \\IPS\\Content\\Item class. Content Item Comment Class for a \\IPS\\Content\\Comment class.',
    'dtdevplus_namespace'                            => 'Namespace',
    'dtdevplus_namespace_desc'                       => 'Namespace for the class, leave blank if not a subclass. Class: \\IPS\\myapp, SubClass: \\IPS\\myapp\\ParentClass',
    'dtdevplus_className'                            => 'Class Name',
    'dtdevplus_className_desc'                       => 'do not include the underscore( _ ). This will also be the file\'s name.',
    'dtdevplus_extends'                              => 'Extends',
    'dtdevplus_extends_desc'                         => 'Does this class extend another class? if yes, please use the FQN here.',
    'dtdevplus_implements'                           => 'Implements',
    'dtdevplus_implements_desc'                      => 'will this class implement any interface classes? Use the FQN.',
    'dtdevplus_dev_class'                            => 'Sources',
    'dtdevplus_dev_folder'                           => 'Dev Folder',
    'dtdevplus_dev_lang'                             => 'Languages',
    'dtdevplus_class_type'                           => 'Class Type',
    'dtdevplus_class_type_desc'                      => 'Class type, Class for a regular class. Node for a \\IPS\\Node\\Model class. Content Item for a \\IPS\\Content\\Item class. Content Item Comment Class for a \\IPS\\Content\\Comment class.',
    'dtdevplus_class_namespace'                      => 'Namespace',
    'dtdevplus_class_namespace_desc'                 => 'Namespace for the class, leave blank if not a subclass. Class: \\IPS\\myapp, SubClass: \\IPS\\myapp\\ParentClass',
    'dtdevplus_class_className'                      => 'Class Name',
    'dtdevplus_class_className_desc'                 => 'do not include the underscore( _ ). This will also be the file\'s name.',
    'dtdevplus_class_extends'                        => 'Extends',
    'dtdevplus_class_extends_desc'                   => 'Does this class extend another class? if yes, please use the FQN here.',
    'dtdevplus_class_implements'                     => 'Additional Interfaces',
    'dtdevplus_class_implements_desc'                => 'Needing to implement interface files not listed? Use the FQN.',
    'dtdevplus_classes_class_no_exist'               => 'This class already exist in this namespace.',
    'dtdevplus_classes_extended_class_no_exist'      => 'The extended class does not exist!',
    'dtdevplus_class_created'                        => 'Created %s Class: %s has been created successfully!',
    'dtdevplus_class_db_error'                       => 'Created %s Class: %s has been created successfully! however the some of the scaffolding couldn\'t be created, please check manually!',
    'dtdevplus_classes_no_blank'                     => 'Can\'t be blank!',
    'dtdevplus_class_item_node_class'                => 'Node Class',
    'dtdevplus_class_item_node_class_desc'           => 'Enter the node class for Item class you are about to create.',
    'dtdevplus_class_node_item_missing'              => 'Node Class doesn\'t exists.',
    'dtdevplus_class_database'                       => 'Table Name',
    'dtdevplus_class_database_desc'                  => 'Defined the name of the Table,If left blank, will create the table with the class name.',
    'dtdevplus_class_prefix'                         => 'Prefix',
    'dtdevplus_class_prefix_desc'                    => 'Define the prefix for the Table, leave blank if you don\'t want to use a prefix. prefix will have _ (underscore) appended to the end.',
    'dtdevplus_class_content_item_class'             => 'Item Class',
    'dtdevplus_class_content_item_class_desc'        => 'if the node has an item class, you can define it here. leave blank if the node will not use an item class',
    'dtdevplus_class_traits'                         => 'Additional Traits',
    'dtdevplus_class_traits_desc'                    => 'If you need to use addition traits not listed? use the FQN here',
    'dtdevplus_class_subnode_class'                  => 'Subnode Class',
    'dtdevplus_class_subnode_class_desc'             => 'If the node uses a sub-node, define it here.',
    'dtdevplus_class_traitName'                      => 'Trait Name',
    'dtdevplus_class_interfaceName'                  => 'Interface Name',
    'dtdevplus_classes_implemented_no_interface'     => 'One of your implemented interface classes does not exist!',
    'dtdevplus_classes_type_no_selection'            => 'Please select a type!',
    'dtdevplus_class_exists'                         => 'This class exists already in this namespace!',
    'dtdevplus_class_reserved'                       => 'The name appears to be a PHP reserved keyword, please change it and try again!',
    'dtdevplus_class_trait_exists'                   => 'This trait exists in this namespace!',
    'dtdevplus_class_interface_exists'               => 'This interface exists in this namespace!',
    'dtdevplus_class_no_blank'                       => 'Can not be blank!',
    'dtdevplus_class_extended_class_no_exist'        => 'Can\'t extend with this class, as it doesn\'t exist!',
    'dtdevplus_class_implemented_no_interface'       => '%s interface doesn\'t exist, please check and try again!',
    'dtdevplus_class_no_trait'                       => '%s trait doesn\'t exist, please check and try again!',
    'dtdevplus_class_type_no_selection'              => 'You must select a class type!',
    'dtdevplus_class_comment_class'                  => 'Comment Class',
    'dtdevplus_class_review_class'                   => 'Review Class',
    'dtdevplus_class_interface_implements_node'      => 'IPS Interfaces',
    'dtdevplus_class_interface_implements_node_desc' => 'Check which interfaces to implement for your class.',
    'dtdevplus_class_interface_implements_item'      => 'IPS Interfaces',
    'dtdevplus_class_interface_implements_item_desc' => 'Check which interfaces to implement for your class.',
    'dtdevplus_class_ips_traits_node'                => 'IPS Traits',
    'dtdevplus_class_ips_traits_node_desc'           => 'Check which traits to use for you class.',
    'dtdevplus_class_ips_traits_item'                => 'IPS Traits',
    'dtdevplus_class_ips_traits_item_desc'           => 'Check which traits to use for you class.',
    'dtdevplus_class_scaffolding_create'             => 'Create Scaffolding?',
    'dtdevplus_class_scaffolding_create_desc'        => 'If enabled, will create database/modules/controllers and lang strings (where applicable)',
    'dtdevplus_dev_type'                             => 'Type',
    'dtdevplus_dev_type_desc'                        => 'Select the type of file you want to create.',
    'dtdevplus_dev_html_group'                       => 'Group',
    'dtdevplus_dev_js_group'                         => 'Group',
    'dtdevplus_dev_html_group_desc'                  => 'Select the group the file is to be added too.',
    'dtdevplus_dev_group_manual'                     => 'Add Group',
    'dtdevplus_dev_group_manual_desc'                => 'If you want to add a new group.',
    'dtdevplus_dev_group_manual_folder'              => 'Group Folder',
    'dtdevplus_dev_group_manual_location'            => 'Group Location',
    'dtdevplus_dev_group_manual_location_desc'       => 'Location for the group.',
    'dtdevplus_dev_filename'                         => 'Filename',
    'dtdevplus_dev_filename_desc'                    => 'the filename.',
    'dtdevplus_dev_arguments'                        => 'Template Parameters',
    'dtdevplus_dev_arguments_desc'                   => 'Parameters for the template, do not include the $ as apart of it.',
    'dtdevplus_dev_widgetname'                       => 'Widget Name',
    'dtdevplus_dev_widgetname_desc'                  => 'this is the part that is used with the data-ips portion of it."',
    'dtdevplus_lang__val'                            => 'Language Value',
    'dtdevplus_lang__key'                            => 'Language Key',
    'dtdevplus_lang__no_js'                          => 'File',
    'dtdevplus_ext_class'                            => 'Class Name',
    'dtdevplus_ext_table'                            => 'Table ',
    'dtdevplus_ext_field'                            => 'Field',
    'dtdevplus_ext_field_desc'                       => 'Please select the field that contains the file/image location.',
    'dtdevplus_ext_table_desc'                       => 'Select the table that contains the information for the filestorage file/img',
    'dtdevplus_ext_title_FileStorage_header'         => 'Create FileStorage Extension',
    'dtdevplus_ext_title_ContentRouter_header'       => 'Create ContentRouter Extension',
    'dtdevplus_ext_module'                           => 'Module',
    'dtdevplus_ext_classRouter'                      => 'Router Classes',
    'dtdevplus_ext_classRouter_desc'                 => 'Only provide the class name, no need to provide the full FQN.',
    'dtdevplus_ext_title_CreateMenu_header'          => 'Create CreateMenu Extension',
    'dtdevplus_ext_key'                              => 'Item Key',
    'dtdevplus_ext_key_desc'                         => 'language key for the item',
    'dtdevplus_ext_link'                             => 'Query String',
    'dtdevplus_ext_link_desc'                        => 'Query string for URL::Internal.',
    'dtdevplus_ext_seo'                              => 'Furl Template',
    'dtdevplus_ext_seo_desc'                         => 'Add a furl key here, or leave blank',
    'dtdevplus_ext_seoTitle'                         => 'SEO Title',
    'dtdevplus_ext_seoTitle_desc'                    => 'if the furl template has a Title component.',
    'dtdevplus_skip_files'                           => 'Files Skip',
    'dtdevplus_skip_files_desc'                      => 'This is a global setting for DT Dev Center Plus, if your app uses the headerdoc extension and you want a global list of files to skip, add them here.',
    'dtdevplus_skip_dirs'                            => 'Directory Skip',
    'dtdevplus_skip_dirs_desc'                       => 'This is a global setting for DT Dev Center Plus, if your app uses the headerdoc extension and you want a global list of directories to skip, add them here.',
    'dtdevplus_tab'                                  => 'Dev Center Plus',
    'dtdevplus_class_interface_implements_comment'   => 'IPS Interfaces',
    'dtdevplus_dev_group_manual_js'                  => 'Add Group',
    'dtdevplus_dev_group_manual_js_desc'             => 'If you want to add a new group.',
    'dtdevplus_class_useImports'                     => 'Use Imports',
    'dtdevplus_class_useImports_desc'                => 'Will use imports instead of FQN for generated classes and there extends/traits/interfaces.',
    'dtdevplus_class_abstract'                       => 'Abstract Class',
    'dtdevplus_class_abstract_desc'                  => 'Make the class abstract.',
    'dtdevplus_class_final'                          => 'Final Class',
    'dtdevplus_class_final_desc'                     => 'Make the class final.',
    'dtdevplus_table_name'                           => 'Table Name',
    'dtdevplus_schema_imports'                       => 'Table Imports',
    'dtdevplus_class_scaffolding_type'               => 'Scaffolding types',
    'dtdevplus_class_scaffolding_type_desc'          => 'Select which Scaffolding types to create. Database: creates the defined database for this class if it doesn\'t exist. Module, creates the module and controller for this class.(node\'s will have an admin module & controller created, Item\'s will have a front module & controller created.',
    'dtdevplus_menu_title_standard'                  => 'Standard Class',
    'dtdevplus_menu_title_cinterface'                => 'Interface',
    'dtdevplus_menu_title_ctraits'                   => 'Traits',
    'dtdevplus_menu_title_singleton'                 => 'Singleton',
    'dtdevplus_menu_title_ar'                        => 'ActiveRecord',
    'dtdevplus_menu_title_node'                      => 'Node',
    'dtdevplus_menu_title_item'                      => 'Item',
    'dtdevplus_menu_title_comment'                   => 'Item\'s Comment',
    'dtdevplus_menu_title_review'                    => 'Item\'s Review',
    'dtdevplus_menu_title_debug'                     => 'Profiler Debug',
    'dtdevplus_menu_title_memory'                    => 'Profiler Memory',
    'dtdevplus_menu_title_form'                      => 'Form',
    'dtdevplus_class_general_tab'                    => 'General',
    'dtdevplus_class_interfaces_tab'                 => 'Interfaces',
    'dtdevplus_class_traits_tab'                     => 'Traits',
    'dtdevplus_class_subnode'                        => 'Parent Node?',
    'dtdevplus_class_subnode_desc'                   => 'Will this node has a subnode?',
    'dtdevplus_class_parentnode_class'               => 'Parent Node',
    'dtdevplus_class_parentnode_class_desc'          => 'Is this a subnode, if yes, enter parent node\'s FQN here, otherwise leave blank',
    'dtdevplus_class_item_class'                     => 'Item Class',
    'dtdevplus_class_item_class_desc'                => 'If this node has an item class, enter item\'s FQN here, otherwise leave blank.',
    'dtdevplus_sources'                              => 'Create Sources',
    'dtdevplus_devcenter'                            => 'Developer Center',
    'dtdevplus_dev_git_hooks'                        => 'Git HOOKS',
    'dtdevplus_menu_title_template'                  => 'Template',
    'dtdevplus_menu_title_widget'                    => 'JS Widget',
    'dtdevplus_menu_title_module'                    => 'JS Module',
    'dtdevplus_menu_title_controller'                => 'JS Controller',
    'dtdevplus_dev'                                  => 'Create Asset',
    'dtdevplus_dev_templateName'                     => 'Templates',
    'dtdevplus_dev_templateName_desc'                => 'Place a name of the templates you are wanting to create.',
    'dtdevplus_menu_title_jstemplate'                => 'JS Template',
    'dtdevplus_menu_title_jsmixin'                   => 'JS Mixin',
    'dtdevplus_dev__group'                           => 'Group',
    'dtdevplus_dev_mixin'                            => 'Controller',
    'menu__toolbox_settings_cons'                    => 'Change Constants',
    'dtprofiler_enabled_templates'                   => 'Templates',
    'dtprofiler_enabled_js'                          => 'JS',
    'dtprofiler_enabled_jsvars'                      => 'JSVars',
    'dtprofiler_enabled_css'                         => 'CSS',
    'dtprofiler_enabled_execution'                   => 'Execution',
    'dtprofiler_enabled_files'                       => 'Files',
    'dtprofiler_enabled_memory'                      => 'Memory',
    'dtprofiler_profiler_tabs_header'                => 'Profiler Tabs',
    'dtprofiler_enabled_logs'                        => 'Logs',
    'dtprofiler_logs_amount'                         => 'Logs to Show',
    'dtprofiler_logs_amount_desc'                    => 'The number of logs to pull from the database.',
    'dtprofiler_enabled_enivro'                      => 'Environment',
    'dtprofiler_can_use'                             => 'Show To',
    'dtprofiler_can_use_desc'                        => 'The members who can see this when in_dev is set to false (useful for live sites)',
    'dtprofiler_devplus_tab'                         => 'Dev Center Plus',
    'dtprofiler_tab'                                 => 'Profiler',
    'dtprofiler_enabled_executions'                  => 'Execution Times',
    'dtprofiler_show_changes'                        => 'Show Changes',
    'dtprofiler_show_changes_desc'                   => 'Show any changes to files from any apps awaiting to be committed.',
    'dtprofiler_git_data'                            => 'Git Data',
    'dtprofiler_git_data_desc'                       => 'Show basic data from git. must have git installed (gitkraken/sourcetree will not suffice, must have <a href="https://git-scm.com/downloads">Git</a> installed.)',
    'dtprofiler_show_admin'                          => 'Disable In ACP',
    'dtprofiler_show_admin_desc'                     => 'Disable the profiler in the ACP.',
    'dtprofiler_enabled_memory_summary'              => 'Memory Drawer',
    'dtprofiler_enabled_memory_summary_desc'         => 'Show the memory breakdown drawer. (shows a breakdown of memory usage.)',
    'menu__dtproxy_proxy'                            => 'Proxy Class Generator',
    'menu__dtproxy_proxy_proxy'                      => 'Generator',
    'dtproxy_proxyclass_button'                      => 'Start',
    'dtproxy_sidebar'                                => 'Generates proxy classes for IPS/IPS Apps/3rd party apps, This is used for IDE\'s, so useful features such as autocomplete and hinting can be used, since IPS\'s framework is unique.',
    'dtproxy_proxyclass_title'                       => 'Proxy Classes',
    'dtproxy_done'                                   => 'Proxy Classes have been Generated',
    'dtproxy_do_props'                               => 'Proxy Properties',
    'dtproxy_do_props_desc'                          => 'Adds @property/-read/-write to proxy classes, from the helper files/extensions/db tables.',
    'dtproxy_do_constants'                           => 'Proxy Constants',
    'dtproxy_do_constants_desc'                      => "The constants in IPS are defined in array, that get added dynamically in the bootstrapping of the framework, this makes it so most IDE's can not see them, this will build a proxy to them, so they wont appear as undefined in your code.",
    'dtproxy_do_props_doc'                           => 'Proxy Property DocBlock',
    'dtproxy_do_props_doc_desc'                      => 'Will create docblocks from the column definition for proxy props if enabled.',
    'dtproxy_progress'                               => 'Processing %s of %s',
    'dtproxy_do_proxies'                             => 'PHP-Toolbox Metadata',
    'dtproxy_do_proxies_desc'                        => 'if you have the <a target="_blank" href="https://plugins.jetbrains.com/plugin/8133-php-toolbox">PHP-Toolbox</a> plugin installed, this will generated appropriate files to be able to use for various methods.',
    'dtproxy_progress_extra'                         => 'Step Complete: %s, processing %s of %s',
    'dtproxy_tab'                                    => 'Proxy Class Generator',
    'ext__hookHelpers'                               => 'renames _HOOK_CLASS_ to _HOOK_CLASS_app_hook_hookclassname',
    'ext__SpecialHooks'                              => 'with the patched init.php, this will create a specialized hook class in proxy classes and allow hooks to behave like actual extended classes. you can also use the githooks section to remove this when you push to a git repo, and this will be automatically removed when the application gets built (as long as toolbox is installed and enabled).',
    'ext__constants'                                 => 'Allows you to add constants for your app to the change constants section in settings. as well as adding new constants to the "important" tab.',
    'dtdeveplus_table_name'                          => 'Table',
    'module__toolbox_bt'                             => 'Toolbox',
    'dtprofiler_enable_debug'                        => 'Debug',
    'dtprofiler_enable_debug_desc'                   => 'Enable the toolbox\'s debug class.',
    'dtdevplus_menu_title_api'                       => 'API',
    'dtdevplus_class_apiType'                        => 'Type',
    'toolbox_lorem_amount'                           => 'Amount',
    'toolbox_lorem_type'                             => 'Type',
];
