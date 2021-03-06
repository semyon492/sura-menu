<?php

namespace Sura\Menu\Traits;

use Sura\Menu\Item;

trait HasTextAttributes
{
    /**
     * Prepend the anchor with a string of html on render.
     *
     * @param string|Item $prepend
     *
     * @return $this
     */
    public function prepend(Item|string $prepend): static
    {
        $this->prepend = $prepend;

        return $this;
    }

    /**
     * Prepend the text with a string of html on render if a certain condition is
     * met.
     *
     * @param mixed $condition
     * @param string|Item $prepend
     *
     * @return $this
     */
    public function prependIf(mixed $condition, Item|string $prepend): static
    {
        if ($this->resolveCondition($condition)) {
            return $this->prepend($prepend);
        }

        return $this;
    }

    /**
     * Append a text of html to the menu on render.
     *
     * @param string|Item $append
     *
     * @return $this
     */
    public function append(Item|string $append): static
    {
        $this->append = $append;

        return $this;
    }

    /**
     * Append the text with a string of html on render if a certain condition is
     * met.
     *
     * @param bool $condition
     * @param string|Item $append
     *
     * @return static
     */
    public function appendIf(bool $condition, Item|string $append): static
    {
        if ($this->resolveCondition($condition)) {
            return $this->append($append);
        }

        return $this;
    }
}
