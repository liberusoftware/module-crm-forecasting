<?php

declare(strict_types=1);

namespace Liberu\CRM\Forecasting\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $category_id @property string $period @property float $pipeline @property float $best_case @property float $commit */
final class Forecast extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_forecasts';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['pipeline' => 'decimal:2', 'best_case' => 'decimal:2', 'commit' => 'decimal:2', 'coverage' => 'decimal:4', 'metadata' => 'array'];
    }
}
