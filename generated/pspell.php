<?php

namespace Safe;

use Safe\Exceptions\PspellException;

/**
 *
 *
 * @param int $dictionary An PSpell\Dictionary instance.
 * @param string $word The added word.
 * @throws PspellException
 *
 */
function pspell_add_to_personal(int $dictionary, string $word): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_add_to_personal($dictionary, $word);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 *
 *
 * @param int $dictionary An PSpell\Dictionary instance.
 * @param string $word The added word.
 * @throws PspellException
 *
 */
function pspell_add_to_session(int $dictionary, string $word): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_add_to_session($dictionary, $word);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 *
 *
 * @param int $dictionary An PSpell\Dictionary instance.
 * @throws PspellException
 *
 */
function pspell_clear_session(int $dictionary): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_clear_session($dictionary);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 * Create a config used to open a dictionary.
 *
 * pspell_config_create has a very similar syntax to
 * pspell_new. In fact, using
 * pspell_config_create immediately followed by
 * pspell_new_config will produce the exact same result.
 * However, after creating a new config, you can also use
 * pspell_config_* functions before calling
 * pspell_new_config to take advantage of some
 * advanced functionality.
 *
 * For more information and examples, check out inline manual pspell
 * website:http://aspell.net/.
 *
 * @param string $language The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * @param string $spelling The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * @param string $jargon The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * @param string $encoding The encoding parameter is the encoding that words are expected to
 * be in.  Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * @return int Returns an PSpell\Config instance on success.
 * @throws PspellException
 *
 */
function pspell_config_create(string $language, string $spelling = "", string $jargon = "", string $encoding = ""): int
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_create($language, $spelling, $jargon, $encoding);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
    return $result;
}


/**
 * This function is
 * currently not documented; only its argument list is available.
 *
 *
 * @param int $config
 * @param string $directory
 * @throws PspellException
 *
 */
function pspell_config_data_dir(int $config, string $directory): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_data_dir($config, $directory);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 * This function is
 * currently not documented; only its argument list is available.
 *
 *
 * @param int $config
 * @param string $directory
 * @throws PspellException
 *
 */
function pspell_config_dict_dir(int $config, string $directory): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_dict_dir($config, $directory);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 *
 *
 * @param int $config An PSpell\Config instance.
 * @param int $min_length Words less than min_length characters will be skipped.
 * @throws PspellException
 *
 */
function pspell_config_ignore(int $config, int $min_length): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_ignore($config, $min_length);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 *
 *
 * @param int $config An PSpell\Config instance.
 * @param int $mode The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 *
 *
 *
 * PSPELL_FAST - Fast mode (least number of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_NORMAL - Normal mode (more suggestions)
 *
 *
 *
 *
 * PSPELL_BAD_SPELLERS - Slow mode (a lot of
 * suggestions)
 *
 *
 *
 * @throws PspellException
 *
 */
function pspell_config_mode(int $config, int $mode): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_mode($config, $mode);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 * Set a file that contains personal wordlist. The personal wordlist will be
 * loaded and used in addition to the standard one after you call
 * pspell_new_config. The file is also the file where
 * pspell_save_wordlist will save personal wordlist to.
 *
 * pspell_config_personal should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $config An PSpell\Config instance.
 * @param string $filename The personal wordlist. If the file does not exist, it will be created.
 * The file should be writable by whoever PHP runs as (e.g. nobody).
 * @throws PspellException
 *
 */
function pspell_config_personal(int $config, string $filename): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_personal($config, $filename);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 * Set a file that contains replacement pairs.
 *
 * The replacement pairs improve the quality of the spellchecker. When a word
 * is misspelled, and a proper suggestion was not found in the list,
 * pspell_store_replacement can be used to store a
 * replacement pair and then pspell_save_wordlist to
 * save the wordlist along with the replacement pairs.
 *
 * pspell_config_repl should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $config An PSpell\Config instance.
 * @param string $filename The file should be writable by whoever PHP runs as (e.g. nobody).
 * @throws PspellException
 *
 */
function pspell_config_repl(int $config, string $filename): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_repl($config, $filename);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 * This function determines whether run-together words will be treated as
 * legal compounds.  That is, "thecat" will be a legal compound, although
 * there should be a space between the two words. Changing this setting only
 * affects the results returned by pspell_check;
 * pspell_suggest will still return suggestions.
 *
 * pspell_config_runtogether should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $config An PSpell\Config instance.
 * @param bool $allow TRUE if run-together words should be treated as legal compounds,
 * FALSE otherwise.
 * @throws PspellException
 *
 */
function pspell_config_runtogether(int $config, bool $allow): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_runtogether($config, $allow);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 * pspell_config_save_repl determines whether
 * pspell_save_wordlist will save the replacement pairs
 * along with the wordlist. Usually there is no need to use this function
 * because if pspell_config_repl is used, the
 * replacement pairs will be saved by
 * pspell_save_wordlist anyway, and if it is not,
 * the replacement pairs will not be saved.
 *
 * pspell_config_save_repl should be used on a config
 * before calling pspell_new_config.
 *
 * @param int $config An PSpell\Config instance.
 * @param bool $save TRUE if replacement pairs should be saved, FALSE otherwise.
 * @throws PspellException
 *
 */
function pspell_config_save_repl(int $config, bool $save): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_config_save_repl($config, $save);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 *
 *
 * @param int $config The config parameter is the one returned by
 * pspell_config_create when the config was created.
 * @return int Returns an PSpell\Dictionary instance on success
 * @throws PspellException
 *
 */
function pspell_new_config(int $config): int
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_new_config($config);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
    return $result;
}


/**
 * For more information and examples, check out inline manual pspell
 * website:http://aspell.net/.
 *
 * @param string $filename The file where words added to the personal list will be stored.
 * It should be an absolute filename beginning with '/' because otherwise
 * it will be relative to $HOME, which is "/root" for most systems, and
 * is probably not what you want.
 * @param string $language The language code which consists of the two letter ISO 639 language
 * code and an optional two letter ISO 3166 country code after a dash
 * or underscore.
 * @param string $spelling The requested spelling for languages with more than one spelling such
 * as English. Known values are 'american', 'british', and 'canadian'.
 * @param string $jargon Extra information to distinguish two different words lists that have
 * the same language and spelling parameters.
 * @param string $encoding The encoding that words are expected to be in.  Valid values are
 * utf-8, iso8859-*,
 * koi8-r, viscii,
 * cp1252, machine unsigned 16,
 * machine unsigned 32.
 * @param int $mode The mode in which spellchecker will work. There are several modes available:
 *
 *
 *
 * PSPELL_FAST - Fast mode (least number of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_NORMAL - Normal mode (more suggestions)
 *
 *
 *
 *
 * PSPELL_BAD_SPELLERS - Slow mode (a lot of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_RUN_TOGETHER - Consider run-together words
 * as legal compounds.  That is, "thecat" will be a legal compound,
 * although there should be a space between the two words. Changing this
 * setting only affects the results returned by
 * pspell_check; pspell_suggest
 * will still return suggestions.
 *
 *
 *
 * Mode is a bitmask constructed from different constants listed above.
 * However, PSPELL_FAST,
 * PSPELL_NORMAL and
 * PSPELL_BAD_SPELLERS are mutually exclusive, so you
 * should select only one of them.
 * @return int Returns an PSpell\Dictionary instance on success.
 * @throws PspellException
 *
 */
function pspell_new_personal(string $filename, string $language, string $spelling = "", string $jargon = "", string $encoding = "", int $mode = 0): int
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_new_personal($filename, $language, $spelling, $jargon, $encoding, $mode);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
    return $result;
}


/**
 * pspell_new opens up a new dictionary and
 * returns an PSpell\Dictionary instance for use in other pspell
 * functions.
 *
 * For more information and examples, check out inline manual pspell
 * website:http://aspell.net/.
 *
 * @param string $language The language parameter is the language code which consists of the
 * two letter ISO 639 language code and an optional two letter ISO
 * 3166 country code after a dash or underscore.
 * @param string $spelling The spelling parameter is the requested spelling for languages
 * with more than one spelling such as English. Known values are
 * 'american', 'british', and 'canadian'.
 * @param string $jargon The jargon parameter contains extra information to distinguish
 * two different words lists that have the same language and
 * spelling parameters.
 * @param string $encoding The encoding parameter is the encoding that words are expected to
 * be in.  Valid values are 'utf-8', 'iso8859-*', 'koi8-r',
 * 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32'. This parameter is largely untested, so be careful when
 * using.
 * @param int $mode The mode parameter is the mode in which spellchecker will work.
 * There are several modes available:
 *
 *
 *
 * PSPELL_FAST - Fast mode (least number of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_NORMAL - Normal mode (more suggestions)
 *
 *
 *
 *
 * PSPELL_BAD_SPELLERS - Slow mode (a lot of
 * suggestions)
 *
 *
 *
 *
 * PSPELL_RUN_TOGETHER - Consider run-together words
 * as legal compounds.  That is, "thecat" will be a legal compound,
 * although there should be a space between the two words. Changing this
 * setting only affects the results returned by
 * pspell_check; pspell_suggest
 * will still return suggestions.
 *
 *
 *
 * Mode is a bitmask constructed from different constants listed above.
 * However, PSPELL_FAST,
 * PSPELL_NORMAL and
 * PSPELL_BAD_SPELLERS are mutually exclusive, so you
 * should select only one of them.
 * @return int Returns an PSpell\Dictionary instance on success.
 * @throws PspellException
 *
 */
function pspell_new(string $language, string $spelling = "", string $jargon = "", string $encoding = "", int $mode = 0): int
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_new($language, $spelling, $jargon, $encoding, $mode);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
    return $result;
}


/**
 *
 *
 * @param int $dictionary An PSpell\Dictionary instance.
 * @throws PspellException
 *
 */
function pspell_save_wordlist(int $dictionary): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_save_wordlist($dictionary);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}


/**
 *
 *
 * @param int $dictionary An PSpell\Dictionary instance.
 * @param string $misspelled The misspelled word.
 * @param string $correct The fixed spelling for the misspelled word.
 * @throws PspellException
 *
 */
function pspell_store_replacement(int $dictionary, string $misspelled, string $correct): void
{
    $error = [];
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) use (&$error) {
        $error = [
            'type' => $errno,
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
        ];
        return false;
    });
    $result = \pspell_store_replacement($dictionary, $misspelled, $correct);
    restore_error_handler();

    if ($result === false) {
        throw PspellException::createFromPhpError($error);
    }
}
