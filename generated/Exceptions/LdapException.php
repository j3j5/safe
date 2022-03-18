<?php
namespace Safe\Exceptions;

class LdapException extends \ErrorException implements SafeExceptionInterface
{
    /**
     *
     * @param array{type?: int, message?: string, file?: string, line?: int} $error
     * @return \Safe\Exceptions\{LdapException}
     */
    public static function createFromPhpError(array $error = null): self
    {
        return new self(
            $error['message'] ?? 'An error occured',
            0,
            $error['type'] ?? 1,
            $error['file'] ?? __FILE__,
            $error['line'] ?? __LINE__,
        );
    }
}
