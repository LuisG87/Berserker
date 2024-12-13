<?php

class bBuffer{

    /**
     * Flush system output buffer
     * use it when you need to share data fastest as posible to the browser
     */
    public static function _flush(): void{
        flush();
    }

    /**
     * Turn on output buffering
     * ALIAS of ob_start()
     * @param callable
     * @param int $chunk_size
     * @param int $flags
     * @return bool
     */
    public static function start(?callable $callback = null, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS): bool{
        return ob_start( $callback,$chunk_size,$flags);
    }

    /**
     * Clean (erase) the contents of the active output buffer
     * ALIAS of ob_clean();
     * @return bool
     */
    public static function clean(): bool{
        return ob_clean();
    }

    /**
     * Flush (send) the return value of the active output handler
     * @return bool
     */
    public static function flush(): bool{
        return ob_flush();
    }

    /**
     * Clean (erase) the contents of the active output buffer and turn it off
     * ALIAS of ob_end_clean()
     * @return bool
     */
    public static function endAndClean(): bool{
        return ob_end_clean();
    }

    /**
     * Flush (send) the return value of the active output handler and turn the active output buffer off
     * ALIAS of ob_end_flush()
     * @return bool
     */
    public static function endAndFlush(): bool{
        return ob_end_flush();
    }

    /**
     * ob_get_clean — Get the contents of the active output buffer and turn it off
     * ALIAS of ob_get_clean()
     * @return string|false
     */
    public static function getAndClean():string|false{
        return ob_get_clean();
    }

    /**
     * getContents
     * — Return the contents of the output buffer
     * ALIAS of ob_get_contents()
     * @return string|false
     */
    public static function getContents(): string|false{
        return ob_get_contents();
    }

    /**
     * getFlushEnd
     * Flush (send) the return value of the active output handler, return the contents of the active output buffer and turn it off
     * ALIAS of ob_get_flush()
     * what does?
     * -GetContent
     * -Flush
     * -End(turn the output buffer off)
     * @return string|false
     */
    public static function getFlushEnd():string|false{
        return ob_get_flush();
    }

    /**
     * length
     * — Return the length of the output buffer
     * ALIAS of ob_get_length
     * @return int|false
     */
    public static function length(): int|false{
        return ob_get_length();
    }

    /**
     * nestingLevel
     *  — Return the nesting level of the output buffering mechanism
     * Alias of ob_get_level()
     * @return int
     */
    public static function nestingLevel(): int{
        return ob_get_level();
    }

    /**
     * status
     * Get status of output buffers
     * @return array
     */
    public static function status(bool $full_status = false): array{
        return ob_get_status($full_status);
    }


    /**
     * ob_implicit_flush
     *  Turn implicit flush on/off
     */
    public static function implicitFlush(bool $enable = true): void{
        ob_implicit_flush($enable);
    }

    /**
     * Turn implicit flush on
     * Alias of ob_implicit_flush(true)
     */
    public static function autoFlushON(): void{
        ob_implicit_flush(true);
    }

    /**
     * Turn implicit flush off
     * Alias of ob_implicit_flush(false)
     */
    public static function autoFlushOFF(): void{
        ob_implicit_flush(False);
    }
    
    /**
     * listHandlers
     * List all output handlers in use
     * @return array
     */
    public static function listHandlers():array{
        return ob_list_handlers();
    }

    /**
     * addRewriteVar
     * - Add URL rewriter values
     * @return bool
     */
    public static function addRewriteVar(string $name, string $value): bool{
        return output_add_rewrite_var($name, $value);
    }

    /**
     * resetRewriteVar()
     * - Reset URL rewriter values
     * @return bool
     */
    public static function resetRewriteVar(): bool{
        return output_reset_rewrite_vars();
    }    
}