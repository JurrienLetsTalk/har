<?php

declare(strict_types=1);

namespace Deviantintegral\Har;

trait HeadersTrait
{
    /**
     * headers [array] - List of header objects.
     *
     * @var \Deviantintegral\Har\Header[]
     * @Serializer\Type("array<Deviantintegral\Har\Header>")
     */
    protected $headers;

    /**
     * headersSize [number]* - Total number of bytes from the start of the HTTP
     * response message until (and including) the double CRLF before the body.
     * Set to -1 if the info is not available.
     *
     * @var int
     * @Serializer\Type("integer")
     */
    protected $headersSize = -1;

    /**
     * @return int
     */
    public function getHeadersSize(): int
    {
        return $this->headersSize;
    }

    /**
     * @param \Deviantintegral\Har\Header[] $headers
     *
     * @return Request
     */
    public function setHeaders(array $headers): Request
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @param int $headersSize
     *
     * @return Request
     */
    public function setHeadersSize(int $headersSize): Request
    {
        $this->headersSize = $headersSize;

        return $this;
    }

    /**
     * @return \Deviantintegral\Har\Header[]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
}