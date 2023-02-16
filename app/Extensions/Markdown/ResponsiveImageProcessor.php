<?php

namespace App\Extensions\Markdown;

use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Inline\Element\Image;

class ResponsiveImageProcessor
{
    /**
     * @param DocumentParsedEvent $e
     *
     * @return void
     */
    public function __invoke(DocumentParsedEvent $e)
    {
        $walker = $e->getDocument()->walker();

        while ($event = $walker->next()) {
            $node = $event->getNode();

            $node->data['attributes']['class'] = 'img-responsive';

        }
    }
}
