<?php

declare(strict_types=1);

namespace Deviantintegral\Har\SharedFields;

trait BodySizeTrait
{
    /**
     * bodySize [number] - Size of the received response body in bytes. Set to
     * zero in case of responses coming from the cache (304). Set to -1 if the
     * info is not available.
     *
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $bodySize = -1;

    public function setBodySize(int $bodySize): self
    {
        $this->bodySize = $bodySize;

        return $this;
    }

    public function getBodySize(): int
    {
        return $this->bodySize;
    }
}
