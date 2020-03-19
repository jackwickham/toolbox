//<?php

use IPS\Application;
use IPS\Db;
use IPS\Db\Exception;
use IPS\Helpers\Form\Select;
use IPS\Http\Url;
use IPS\Output;
use IPS\Request;
use IPS\toolbox\DevCenter\Dev;
use IPS\toolbox\DevCenter\Schema;
use IPS\toolbox\DevCenter\Sources;
use IPS\toolbox\Form;
use IPS\toolbox\Proxy\Generator\Proxy;

use const IPS\ROOT_PATH;

if (!defined('\IPS\SUITE_UNIQUE_KEY')) {
    header(($_SERVER[ 'SERVER_PROTOCOL' ] ?? 'HTTP/1.0') . ' 403 Forbidden');
    exit;
}

class toolbox_hook_developer extends _HOOK_CLASS_
{

    public function execute($command = 'do')
    {
        $appKey = Request::i()->appKey;
        Output::i()->jsVars[ 'dtdevplus_table_url' ] = (string)$this->url->setQueryString(['appKey' => $appKey]);
        parent::execute($command);
    }

    public function manage()
    {
        Sources::menu();
        parent::manage();
    }

//    public function addVersionQuery()
//    {
//        Output::i()->jsFiles = array_merge(Output::i()->jsFiles, Output::i()->js('admin_query.js', 'toolbox', 'admin'));
//
//        $tables = Db::i()->query('SHOW TABLES');
//        $t = [];
//        $t[ 0 ] = 'Select Table';
//
//        foreach ($tables as $table) {
//            $foo = array_values($table);
//            $t[ $foo[ 0 ] ] = $foo[ 0 ];
//        }
//
//        $form = Form::create()->formPrefix('dtdevplus_')->attributes(
//            ['data-controller' => 'ips.admin.dtdevplus.query']
//        )->formId('add_version_query')->removePrefix(false);
//        $opts = [
//            'options' => [
//                0            => 'Select One',
//                'addColumn'  => 'Add Column',
//                'dropColumn' => 'Drop Column',
//                'code'       => 'Code Box',
//            ],
//        ];
//        $toggles = [
//            'code'       => [
//                'code',
//            ],
//            'dropColumn' => [
//                'ext_table',
//                'ext_field',
//            ],
//            'addColumn'  => [
//                'ext_table',
//                'add_column',
//                'type',
//                'length',
//                'decimals',
//                'default',
//                'comment',
//                'allow_null',
//                'unsigned',
//                'zerofill',
//                'auto_increment',
//                'binary',
//                'binary',
//                'values',
//            ],
//        ];
//        $form->add('select', 'select')->options($opts)->toggles($toggles)->required();
//        $val = static function ($val) {
//            /* Check it starts with \IPS\Db::i()-> */
//            $val = trim($val);
//            if (mb_substr($val, 0, 14) !== '\IPS\Db::i()->') {
//                throw new DomainException('versions_query_start');
//            }
//
//            /* Check there's only one query */
//            if (mb_substr($val, -1) !== ';') {
//                $val .= ';';
//            }
//            if (mb_substr_count($val, ';') > 1) {
//                throw new DomainException('versions_query_one');
//            }
//
//            /* Check our Regex will be okay with it */
//            preg_match('/^\\\IPS\\\Db::i\(\)->(.+?)\(\s*[\'"](.+?)[\'"]\s*(,\s*(.+?))?\)\s*;$/', $val, $matches);
//            if (empty($matches)) {
//                throw new DomainException('versions_query_format');
//            }
//
//            /* Run it if we're adding it to the current working version */
//            if (Request::i()->id === 'working') {
//                try {
//                    try {
//                        if (@eval($val) === false) {
//                            throw new DomainException('versions_query_phperror');
//                        }
//                    } catch (ParseError $e) {
//                        throw new DomainException('versions_query_phperror');
//                    }
//                } catch (Exception $e) {
//                    throw new DomainException($e->getMessage());
//                }
//            }
//        };
//        $form->add('code', 'TextArea')->value('\IPS\Db::i()->')->required()->options(['size' => 45])->validation($val);
//
//        if (!isset(Request::i()->dtdevplus_code) || Request::i()->dtdevplus_code !== 'code') {
//            $form->add('ext_table', 'select')->required()->options(['options' => $t, 'parse' => 'raw']);
//            $form->add('ext_field', 'select')->options(['options' => [], 'userSuppliedInput' => true]);
//
//            $ints = [
//                'add_column',
//                'length',
//                'allow_null',
//                'default',
//                'comment',
//                'sunsigned',
//                'zerofill',
//                'auto_increment',
//            ];
//
//            $decfloat = [
//                'add_column',
//                'length',
//                'decimals',
//                'allow_null',
//                'default',
//                'comment',
//                'sunsigned',
//                'zerofill',
//            ];
//
//            $dates = [
//                'add_column',
//                'allow_null',
//                'default',
//                'comment',
//            ];
//
//            $char = [
//                'add_column',
//                'length',
//                'allow_null',
//                'default',
//                'comment',
//                'binary',
//            ];
//
//            $text = [
//                'add_column',
//                'allow_null',
//                'comment',
//                'binary',
//            ];
//
//            $binary = [
//                'add_column',
//                'length',
//                'allow_null',
//                'default',
//                'comment',
//            ];
//
//            $blob = [
//                'add_column',
//                'allow_null',
//                'comment',
//            ];
//
//            $enum = [
//                'add_column',
//                'values',
//                'allow_null',
//                'default',
//                'comment',
//            ];
//
//            $toggles = [
//                'TINYINT'    => $ints,
//                'SMALLINT'   => $ints,
//                'MEDIUMINT'  => $ints,
//                'INT'        => $ints,
//                'BIGINT'     => $ints,
//                'DECIMAL'    => $decfloat,
//                'FLOAT'      => $decfloat,
//                'BIT'        => [
//                    'columns',
//                    'length',
//                    'allow_null',
//                    'default',
//                    'comment',
//                ],
//                'DATE'       => $dates,
//                'DATETIME'   => $dates,
//                'TIMESTAMP'  => $dates,
//                'TIME'       => $dates,
//                'YEAR'       => $dates,
//                'CHAR'       => $char,
//                'VARCHAR'    => $char,
//                'TINYTEXT'   => $text,
//                'TEXT'       => $text,
//                'MEDIUMTEXT' => $text,
//                'LONGTEXT'   => $text,
//                'BINARY'     => $binary,
//                'VARBINARY'  => $binary,
//                'TINYBLOB'   => $blob,
//                'BLOB'       => $blob,
//                'MEDIUMBLOB' => $blob,
//                'BIGBLOB'    => $blob,
//                'ENUM'       => $enum,
//                'SET'        => $enum,
//
//            ];
//            $form->add('type', 'select')->options(['options' => Db::$dataTypes])->toggles($toggles);
//
//            $form->add('add_column')->required();
//            $form->add('add_column', 'stack');
//            $form->add('length', 'number')->value(255);
//            $form->add('allow_null', 'yn');
//            $form->add('decimals', 'number');
//            $form->add('default', 'TextArea');
//            $form->add('comment', 'TextArea');
//            $form->add('sunsigned', 'yn');
//            $form->add('zerofill', 'yn');
//            $form->add('auto_increment', 'yn');
//            $form->add('binary', 'yn');
//            $form->add('values', 'stack');
//        }
//
//        /* If submitted, add to json file */
//        if ($vals = $form->values()) {
//            /* Get our file */
//            $version = Request::i()->id;
//            $json = $this->_getQueries($version);
//            $install = $this->_getQueries('install');
//            if ($vals[ 'dtdevplus_select' ] !== 'code') {
//                $type = $vals[ 'dtdevplus_select' ];
//                $table = $vals[ 'dtdevplus_ext_table' ];
//                if ($type === 'dropColumn') {
//                    $column = $vals[ 'dtdevplus_ext_field' ];
//                    $json[] = ['method' => $type, 'params' => [$table, $column]];
//                    Db::i()->dropColumn($table, $column);
//                } else {
//                    $column = $vals[ 'dtdevplus_add_column' ];
//                    $schema = [];
//                    $schema[ 'name' ] = $vals[ 'dtdevplus_add_column' ];
//                    $schema[ 'type' ] = $vals[ 'dtdevplus_type' ];
//
//                    if (isset($vals[ 'dtdevplus_length' ]) && $vals[ 'dtdevplus_length' ]) {
//                        $schema[ 'length' ] = $vals[ 'dtdevplus_length' ];
//                    } else {
//                        $schema[ 'length' ] = null;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_decimals' ]) && $vals[ 'dtdevplus_decimals' ]) {
//                        $schema[ 'decimals' ] = $vals[ 'dtdevplus_decimals' ];
//                    } else {
//                        $schema[ 'decimals' ] = null;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_values' ]) && count($vals[ 'dtdevplus_values' ])) {
//                        $schema[ 'values' ] = $vals[ 'dtdevplus_values' ];
//                    } else {
//                        $schema[ 'values' ] = null;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_allow_null' ]) && $vals[ 'dtdevplus_allow_null' ]) {
//                        $schema[ 'allow_null' ] = true;
//                    } else {
//                        $schema[ 'allow_null' ] = false;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_default' ]) && $vals[ 'dtdevplus_default' ]) {
//                        $schema[ 'default' ] = $vals[ 'dtdevplus_default' ];
//                    } else {
//                        $schema[ 'default' ] = null;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_comment' ]) && $vals[ 'dtdevplus_comment' ]) {
//                        $schema[ 'comment' ] = $vals[ 'dtdevplus_comment' ];
//                    } else {
//                        $schema[ 'comment' ] = '';
//                    }
//
//                    if (isset($vals[ 'dtdevplus_sunsigned' ]) && $vals[ 'dtdevplus_sunsigned' ]) {
//                        $schema[ 'unsigned' ] = $vals[ 'dtdevplus_sunsigned' ];
//                    } else {
//                        $schema[ 'unsigned' ] = false;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_zerofill' ]) && $vals[ 'dtdevplus_zerofill' ]) {
//                        $schema[ 'zerofill' ] = $vals[ 'dtdevplus_zerofill' ];
//                    } else {
//                        $schema[ 'zerofill' ] = false;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_auto_increment' ]) && $vals[ 'dtdevplus_auto_increment' ]) {
//                        $schema[ 'auto_increment' ] = $vals[ 'dtdevplus_auto_increment' ];
//                    } else {
//                        $schema[ 'auto_increment' ] = false;
//                    }
//
//                    if (isset($vals[ 'dtdevplus_binary' ]) && $vals[ 'dtdevplus_binary' ]) {
//                        $schema[ 'binary' ] = $vals[ 'dtdevplus_auto_increment' ];
//                    } else {
//                        $schema[ 'binary' ] = false;
//                    }
//
//                    if ($type === 'addColumn') {
//                        $json[] = ['method' => $type, 'params' => [$table, $schema]];
//                        $install[] = ['method' => $type, 'params' => [$table, $schema]];
//                        $this->_writeQueries('install', $install);
//                        Db::i()->addColumn($table, $schema);
//                    } else {
//                        if ($type === 'changeColumn') {
//                            $json[] = ['method' => $type, 'params' => [$table, $column, $schema]];
//                            Db::i()->changeColumn($table, $column, $schema);
//                        }
//                    }
//                }
//            } else {
//                /* Work out the different parts of the query */
//                $val = trim($vals[ 'dtdevplus_code' ]);
//                if (mb_substr($val, -1) !== ';') {
//                    $val .= ';';
//                }
//
//                preg_match('/^\\\IPS\\\Db::i\(\)->(.+?)\(\s*(.+?)\s*\)\s*;$/', $val, $matches);
//
//                /* Add it on */
//                $json[] = [
//                    'method' => $matches[ 1 ],
//                    'params' => eval('return array( ' . $matches[ 2 ] . ' );'),
//                ];
//            }
//
//            /* Write it */
//            $this->_writeQueries($version, $json);
//
//            /* Redirect us */
//            Output::i()->redirect(
//                Url::internal(
//                    "app=core&module=applications&controller=developer&appKey={$this->application->directory}&tab=versions&root={$version}"
//                )
//            );
//        }
//
//        Output::i()->output = $form;
//    }

    protected function _manageDevFolder()
    {
        return Dev::i()->form();
    }

    protected function _manageSchemaImports()
    {
        $schema = $this->_getSchema();

        return Schema::i()->form($schema, $this->application);
    }

    protected function _manageGitHooks()
    {
        $app = ROOT_PATH . '/applications/' . $this->application->directory . '/';
        $git = $app . '.git/';

        if (is_dir($git)) {
            if (isset(Request::i()->hookType)) {
                $gitPath = $git . 'hooks/';
                $type = Request::i()->hookType;
                $hook = $gitPath = $gitPath . $type;
                $app = $this->application->directory;
                switch ($type) {
                    case 'pre-commit':
                        if (!is_file($hook)) {
                            $content = <<<'EOF'
#!/usr/bin/php
<?php
require "/home/michael/public_html/dev/init.php";
$gitHooks = (new \IPS\toolbox\GitHooks( ["toolbox"] ) )->removeSpecialHooks(true);
EOF;
                            file_put_contents($hook, $content);
                        }
                        break;
                    case 'post-commit':
                        if (!is_file($hook)) {
                            $content = <<<'EOF'
#!/usr/bin/php
<?php
require "/home/michael/public_html/dev/init.php";
$gitHooks = (new \IPS\toolbox\GitHooks( ["toolbox"] ) )->writeSpecialHooks(true);
EOF;
                            file_put_contents($hook, $content);
                        }
                        break;
                }
            }
            $url = Url::internal(
                "app=core&module=applications&controller=developer&appKey={$this->application->directory}&tab=GitHooks"
            );
            $precommit = $url->setQueryString(['hookType' => 'pre-commit']);
            $html = <<<EOF
<div class="ipsGrid ipsPad">
    <div class="ipsGrid_span1 ipsPad">Pre-Commit </div>
    <div class="ipsGrid_span2 ipsPad"><a class="ipsButton ipsButton_fullWidth ipsButton_important" href="{$precommit}">add</a></div>
    <div class="ipsGrid_span9 ipsPad">Adds a pre-commit hook for git, this is useful if you are using the specialHooks extension for dtproxy.</div>
</div>
EOF;
        } else {
            $html = <<<EOF
<div class="ipsPad">No Git repo found for this application</div>
EOF;
        }

        return $html;
    }

    protected function _writeJson($file, $data)
    {
        if (($file === ROOT_PATH . "/applications/{$this->application->directory}/data/settings.json") && Application::appIsEnabled(
                'toolbox'
            )) {
            Proxy::i()->generateSettings();
        }

        parent::_writeJson($file, $data);
    }

    protected function dtgetFields()
    {
        $table = Request::i()->table;
        $fields = Db::i()->query("SHOW COLUMNS FROM " . Db::i()->real_escape_string(Db::i()->prefix . $table));
        $f = [];
        foreach ($fields as $field) {
            $f[ array_values($field)[ 0 ] ] = array_values($field)[ 0 ];
        }

        $data = new Select(
            'dtdevplus_ext_field', null, false, [
            'options'           => $f,
            'parse'             => false,
            'userSuppliedInput' => true,
        ], null, null, null, 'js_dtdevplus_ext_field'
        );

        $send[ 'error' ] = 0;
        $send[ 'html' ] = $data->html();
        Output::i()->json($send);
    }



}
