<?php

declare(strict_types=1);

namespace Deviantintegral\Har\SharedFields;

use JMS\Serializer\Annotation as Serializer;

trait TextTrait
{
    /**
     * Response body sent from the server or loaded from the browser cache. This
     * field is populated with textual content only. The text field is either
     * HTTP decoded text or an encoded (e.g. "base64") representation of the
     * response body. Leave out this field if the information is not available.
     *
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    protected ?string $text = null;

    /**
     * @param string|null $text
     */
    public function setText(string $text = null): self
    {
        $this->text = $text;

        return $this;
    }

    public function hasText(): bool
    {
        return null !== $this->text;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
}
