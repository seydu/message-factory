<?php

namespace Http\Message;

use Psr\Http\Message\UriInterface;

/**
 * Factory for PSR-7 URI.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface UriFactory
{
    /**
     * Creates an PSR-7 URI.
     *
     * @param mixed $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the URI is invalid.
     */
    public function createUri($uri);
}
