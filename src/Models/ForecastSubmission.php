<?php

declare(strict_types=1);

namespace Liberu\CRM\Forecasting\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $forecast_id */
final class ForecastSubmission extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_forecast_submissions';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['snapshot' => 'array', 'submitted_at' => 'datetime'];
    }
}
