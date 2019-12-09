<?php

namespace OhSeeSoftware\LaravelServerAnalytics\Models;

use Illuminate\Database\Eloquent\Model;
use OhSeeSoftware\LaravelServerAnalytics\ServerAnalytics;

class AnalyticsRelation extends Model
{
    public $timestamps = false;

    public function getTable()
    {
        return ServerAnalytics::getAnalyticsRelationTable();
    }

    public function analytics()
    {
        return $this->belongsTo(Analytics::class);
    }

    public function relation()
    {
        return $this->morphTo('relation');
    }
}
