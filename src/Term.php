<?php

namespace Corcel;

use Corcel\Traits\HasAcfFields;

/**
 * Class Term.
 *
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Term extends Model
{
    use HasAcfFields;

    protected $table = 'terms';
    protected $primaryKey = 'term_id';
    public $timestamps = false;

    /**
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function taxonomy()
    {
        return $this->hasOne(TermTaxonomy::class, 'term_id');
    }

    /**
     * @return AdvancedCustomFields
     */
    public function getAcfAttribute()
    {
        return new AdvancedCustomFields($this);
    }
}
