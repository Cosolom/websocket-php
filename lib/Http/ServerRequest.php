<?php

namespace WebSocket\Http;

use BadMethodCallException;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * WebSocket\Http\ServerRequest class.
 */
class ServerRequest extends Request implements ServerRequestInterface
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retrieve server parameters.
     * @return array
     */
    public function getServerParams(): array
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Retrieves cookies sent by the client to the server.
     * @return array
     */
    public function getCookieParams(): array
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Return an instance with the specified cookies.
     * @param array $cookies Array of key/value pairs representing cookies.
     * @return static
     */
    public function withCookieParams(array $cookies): self
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Retrieves the deserialized query string arguments, if any.
     * @return array
     */
    public function getQueryParams(): array
    {
        parse_str($this->getQuery(), $result);
        return $result;
    }

    /**
     * Return an instance with the specified query string arguments.
     * @param array $query Array of query string arguments
     * @return static
     */
    public function withQueryParams(array $query): self
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Retrieve normalized file upload data.
     * @return array An array tree of UploadedFileInterface instances.
     */
    public function getUploadedFiles(): array
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Create a new instance with the specified uploaded files.
     * @param array $uploadedFiles An array tree of UploadedFileInterface instances.
     * @return static
     * @throws \InvalidArgumentException if an invalid structure is provided.
     */
    public function withUploadedFiles(array $uploadedFiles): self
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Retrieve any parameters provided in the request body.
     * @return null|array|object The deserialized body parameters, if any.
     */
    public function getParsedBody()
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Return an instance with the specified body parameters.
     * @param null|array|object $data The deserialized body data.
     * @return static
     * @throws \InvalidArgumentException if an unsupported argument type is provided.
     */
    public function withParsedBody($data): self
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Retrieve attributes derived from the request.
     * @return mixed[] Attributes derived from the request.
     */
    public function getAttributes()
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Retrieve a single derived request attribute.
     * @param string $name The attribute name.
     * @param mixed $default Default value to return if the attribute does not exist.
     * @return mixed
     */
    public function getAttribute($name, $default = null)
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Return an instance with the specified derived request attribute.
     * @param string $name The attribute name.
     * @param mixed $value The value of the attribute.
     * @return static
     */
    public function withAttribute($name, $value): self
    {
        throw new BadMethodCallException("Not implemented.");
    }

    /**
     * Return an instance that removes the specified derived request attribute.
     * @param string $name The attribute name.
     * @return static
     */
    public function withoutAttribute($name): self
    {
        throw new BadMethodCallException("Not implemented.");
    }
}
