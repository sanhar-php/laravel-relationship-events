<?php

namespace Chelout\RelationshipEvents;

use Chelout\RelationshipEvents\Contracts\EventDispatcher;
use Chelout\RelationshipEvents\Traits\HasEventDispatcher;
use Chelout\RelationshipEvents\Traits\HasOneOrManyMethods;
use Illuminate\Database\Eloquent\Relations\HasMany as HasManyBase;

class HasMany extends HasManyBase implements EventDispatcher
{
    use HasEventDispatcher;
    use HasOneOrManyMethods;
}
