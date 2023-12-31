<?php

namespace App\EnumsAndConsts;

/**
 * HTTP Status codes
 */
class HttpStatus
{
    public const OK = '200';                   // OK

    public const CREATED = '201';              // Created

    public const ACCEPTED = '202';             // Created

    public const NO_CONTENT = '204';           // No Content

    public const BAD_REQUEST = '400';          // Bad Request

    public const UNAUTHORIZED = '401';         // Unauthenticated

    public const NOT_FOUND = '404';            // Not Found

    public const FORBIDDEN = '403';            // Access Denied

    public const CONFLICT = '409';             // Conflict

    public const METHOD_NOT_ALLOWED = '405';   // Method Not Allowed

    public const UNPROCESSABLE_ENTITY = '422'; // Unprocessable Entity

    public const TOO_MANY_REQUESTS = '429';    // Too Many Requests

    public const SERVER_ERROR = '500';         // Internal Server Error

    public static function message(string $code)
    {
        return (new self())->getMessage($code);
    }

    public function getMessage($code = self::OK)
    {
        switch ($code) {
            case self::OK:
                return 'Your request was successful.';
                break;

            case self::CREATED:
                return 'Created';
                break;

            case self::ACCEPTED:
                return 'Accepted';
                break;

            case self::NO_CONTENT:
                return 'No Content.';
                break;

            case self::BAD_REQUEST:
                return 'Something went wrong.';
                break;

            case self::UNAUTHORIZED:
                return 'Unauthenticated: Please login to continue.';
                break;

            case self::FORBIDDEN:
                return 'We are sorry, but you do not have permission to perform this action.';
                break;

            case self::CONFLICT:
                return 'Conflict';
                break;

            case self::METHOD_NOT_ALLOWED:
                return 'The requested method is not allowed.';
                break;

            case self::UNPROCESSABLE_ENTITY:
                return 'The given data was invalid.';
                break;

            case self::TOO_MANY_REQUESTS:
                return 'You have made too many requests. Please try again later.';
                break;

            case self::SERVER_ERROR:
                return 'Whoops! Something went wrong on our end. Please try again later.';
                break;

            case self::NOT_FOUND:
                return 'The requested resource was not found.';
                break;

            default:
                return 'Not found.';
                break;
        }
    }
}