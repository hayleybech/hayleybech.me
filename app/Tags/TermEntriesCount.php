<?php

namespace App\Tags;

use Statamic\Facades\Entry;
use Statamic\Tags\Tags;

class TermEntriesCount extends Tags
{
    /**
     * The {{ term_entries_count }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        return Entry::query()
            ->where('collection', $this->params->get('collection'))
            ->whereTaxonomy($this->params->get('term'))
            ->where('status', 'published')
            ->count();
    }
}
