<?php

declare(strict_types=1);

namespace Yiisoft\Db\Sqlite\Tests\Provider;

use Yiisoft\Db\Expression\Expression;
use Yiisoft\Db\Tests\Support\AnyValue;

final class SchemaProvider extends \Yiisoft\Db\Tests\Provider\SchemaProvider
{
    public static function columns(): array
    {
        return [
            [
                [
                    'int_col' => [
                        'type' => 'integer',
                        'dbType' => 'integer',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'int_col2' => [
                        'type' => 'integer',
                        'dbType' => 'integer',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => 1,
                    ],
                    'tinyint_col' => [
                        'type' => 'tinyint',
                        'dbType' => 'tinyint(3)',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 3,
                        'precision' => 3,
                        'scale' => null,
                        'defaultValue' => 1,
                    ],
                    'smallint_col' => [
                        'type' => 'smallint',
                        'dbType' => 'smallint(1)',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 1,
                        'precision' => 1,
                        'scale' => null,
                        'defaultValue' => 1,
                    ],
                    'char_col' => [
                        'type' => 'char',
                        'dbType' => 'char(100)',
                        'phpType' => 'string',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 100,
                        'precision' => 100,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'char_col2' => [
                        'type' => 'string',
                        'dbType' => 'varchar(100)',
                        'phpType' => 'string',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 100,
                        'precision' => 100,
                        'scale' => null,
                        'defaultValue' => 'something',
                    ],
                    'char_col3' => [
                        'type' => 'text',
                        'dbType' => 'text',
                        'phpType' => 'string',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'float_col' => [
                        'type' => 'double',
                        'dbType' => 'double(4,3)',
                        'phpType' => 'double',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 4,
                        'precision' => 4,
                        'scale' => 3,
                        'defaultValue' => null,
                    ],
                    'float_col2' => [
                        'type' => 'double',
                        'dbType' => 'double',
                        'phpType' => 'double',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => 1.23,
                    ],
                    'blob_col' => [
                        'type' => 'binary',
                        'dbType' => 'blob',
                        'phpType' => 'resource',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'numeric_col' => [
                        'type' => 'decimal',
                        'dbType' => 'decimal(5,2)',
                        'phpType' => 'double',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 5,
                        'precision' => 5,
                        'scale' => 2,
                        'defaultValue' => 33.22,
                    ],
                    'time' => [
                        'type' => 'timestamp',
                        'dbType' => 'timestamp',
                        'phpType' => 'string',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => '2002-01-01 00:00:00',
                    ],
                    'bool_col' => [
                        'type' => 'boolean',
                        'dbType' => 'tinyint(1)',
                        'phpType' => 'boolean',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 1,
                        'precision' => 1,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'bool_col2' => [
                        'type' => 'boolean',
                        'dbType' => 'tinyint(1)',
                        'phpType' => 'boolean',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 1,
                        'precision' => 1,
                        'scale' => null,
                        'defaultValue' => true,
                    ],
                    'ts_default' => [
                        'type' => 'timestamp',
                        'dbType' => 'timestamp',
                        'phpType' => 'string',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => new Expression('CURRENT_TIMESTAMP'),
                    ],
                ],
                'tableName' => 'type',
            ],
            [
                [
                    'id' => [
                        'type' => 'integer',
                        'dbType' => 'integer',
                        'phpType' => 'integer',
                        'primaryKey' => true,
                        'allowNull' => false,
                        'autoIncrement' => true,
                        'enumValues' => null,
                        'size' => null,
                        'precision' => null,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'type' => [
                        'type' => 'string',
                        'dbType' => 'varchar(255)',
                        'phpType' => 'string',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 255,
                        'precision' => 255,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                ],
                'animal',
            ],
        ];
    }

    public static function columnsTypeBit(): array
    {
        return [
            [
                [
                    'bit_col_1' => [
                        'type' => 'boolean',
                        'dbType' => 'bit(1)',
                        'phpType' => 'boolean',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 1,
                        'precision' => 1,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'bit_col_2' => [
                        'type' => 'boolean',
                        'dbType' => 'bit(1)',
                        'phpType' => 'boolean',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 1,
                        'precision' => 1,
                        'scale' => null,
                        'defaultValue' => true,
                    ],
                    'bit_col_3' => [
                        'type' => 'integer',
                        'dbType' => 'bit(32)',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 32,
                        'precision' => 32,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'bit_col_4' => [
                        'type' => 'integer',
                        'dbType' => 'bit(32)',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 32,
                        'precision' => 32,
                        'scale' => null,
                        'defaultValue' => 1,
                    ],
                    'bit_col_5' => [
                        'type' => 'bigint',
                        'dbType' => 'bit(64)',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => false,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 64,
                        'precision' => 64,
                        'scale' => null,
                        'defaultValue' => null,
                    ],
                    'bit_col_6' => [
                        'type' => 'bigint',
                        'dbType' => 'bit(64)',
                        'phpType' => 'integer',
                        'primaryKey' => false,
                        'allowNull' => true,
                        'autoIncrement' => false,
                        'enumValues' => null,
                        'size' => 64,
                        'precision' => 64,
                        'scale' => null,
                        'defaultValue' => 1,
                    ],
                ],
            ],
        ];
    }

    public static function constraints(): array
    {
        $constraints = parent::constraints();

        $constraints['1: primary key'][2]->name(null);
        $constraints['1: check'][2][0]->columnNames(null);
        $constraints['1: check'][2][0]->expression('"C_check" <> \'\'');
        $constraints['1: unique'][2][0]->name(AnyValue::getInstance());
        $constraints['1: index'][2][1]->name(AnyValue::getInstance());

        $constraints['2: primary key'][2]->name(null);
        $constraints['2: unique'][2][0]->name(AnyValue::getInstance());
        $constraints['2: index'][2][2]->name(AnyValue::getInstance());

        $constraints['3: foreign key'][2][0]->name(null);
        $constraints['3: index'][2] = [];

        $constraints['4: primary key'][2]->name(null);
        $constraints['4: unique'][2][0]->name(AnyValue::getInstance());

        return $constraints;
    }
}
