<?php

declare(strict_types=1);

namespace Deviantintegral\Har;

trait StartedDateTimeTrait
{
    /**
     * Date and time stamp of the request start.
     *
     * @var \DateTime
     * @Serializer\Type("DateTime")
     */
    private $startedDateTime;

    /**
     * @param \DateTime $startedDateTime
     *
     * @return self
     */
    public function setStartedDateTime(\DateTime $startedDateTime): self
    {
        $this->startedDateTime = $startedDateTime;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartedDateTime(): \DateTime
    {
        return $this->startedDateTime;
    }
}
