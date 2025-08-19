<?php

use Illuminate\Database\Eloquent\Model;
use Dashed\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class ModelWithTranslatableRoutes extends Model implements LocalizedUrlRoutable
{
    public function getLocalizedRouteKey($locale)
    {
        if ($locale == 'es') {
            return 'empresa';
        }

        return 'company';
    }
}
