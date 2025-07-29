<?php

namespace statikbe\sentry\models;

use craft\base\Model;

class Settings extends Model
{
    public $enabled = true;
    public $anonymous = true;
    public $clientDsn;
    public $excludedCodes = ['400', '404'];
    public $excludedExceptions = [];
    public $release;
    public $enableLogs = false;

    public function rules(): array
    {
        return [
            [['enabled', 'anonymous', 'enableLogs'], 'boolean'],
            [['clientDsn', 'excludedCodes', 'release'], 'string'],
            [['excludedExceptions'], 'array'],
            [['clientDsn'], 'required'],
        ];
    }
}
