<?php

namespace Sura\Menu\Traits;

/**
 * Expects a `$htmlAttributes` propert on the class.
 *
 * @property $htmlAttributes \Sura\Menu\Html\Attributes
 */
trait HasHtmlAttributes
{
    /**
     * @param string $attribute
     * @param string $value
     *
     * @return $this
     */
    public function setAttribute(string $attribute, string $value = ''): static
    {
        $this->htmlAttributes->setAttribute($attribute, $value);

        return $this;
    }

    /**
     * @param array $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes): static
    {
        $this->htmlAttributes->setAttributes($attributes);

        return $this;
    }

    /**
     * @param string $class
     *
     * @return $this
     */
    public function addClass(string $class): static
    {
        $this->htmlAttributes->addClass($class);

        return $this;
    }
}
