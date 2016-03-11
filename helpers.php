<?php

/**
 * Bitrix helpers (webgsite.ru)
 * Функции облегчающию работу с битриксом
 *
 * @author    Falur <ienakaev@ya.ru>
 * @link      https://github.com/falur/bitrix.helpers
 * @copyright 2015 - 2016 webgsite.ru
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl-2.0.html
 */

if (!function_exists('prop')) {
    /**
     * Вернёт значение свойства
     *
     * @param array $arItem
     * @param string $name
     * @return string
     */
    function prop(array $arItem, $name)
    {
        if (isset($arItem['PROPERTIES'][$name]['VALUE']) && !empty($arItem['PROPERTIES'][$name]['VALUE'])) {
            return $arItem['PROPERTIES'][$name]['VALUE'];
        }

        return null;
    }
}

if (!function_exists('img_cache')) {
    /**
     * Вернёт закешированную картинку нужных размеров
     *
     * @param array|int $image
     * @param int $width
     * @param int $height
     * @param int $type
     * @return string
     */
    function img_cache($image, $width = 800, $height = 600, $type = BX_RESIZE_IMAGE_EXACT)
    {
        $arFileTmp = CFile::ResizeImageGet(
                $image, ['width' => $width, 'height' => $height], $type
        );

        return $arFileTmp['src'];
    }
}

if (!function_exists('app')) {
    /**
     * Вернёт приложение
     *
     * @return Bitrix\Main\Application
     */
    function app()
    {
        return Bitrix\Main\Application::getInstance();
    }
}

if (!function_exists('request')) {
    /**
     * Вернёт запрос
     *
     * @return Bitrix\Main\HttpRequest
     */
    function request()
    {
        return app()->getContext()->getRequest();
    }
}

if (!function_exists('server')) {
    /**
     * Вернёт сервер
     *
     * @return Bitrix\Main\Server
     */
    function server()
    {
        return app()->getContext()->getServer();
    }
}

if (!function_exists('db')) {
    /**
     * Вернёт соеденение с сервером
     *
     * @return Bitrix\Main\DB\Connection
     */
    function db()
    {
        return Bitrix\Main\Application::getConnection();
    }
}

if (!function_exists('path_root')) {
    /**
     * Вернёт путь к дому
     *
     * @return string
     */
    function path_root()
    {
        return server()->getDocumentRoot();
    }
}

if (!function_exists('gApp')) {
    /**
     * Вернёт глобальный класс приложения
     *
     * @global CMain $APPLICATION
     * @return CMain
     */
    function gApp()
    {
        global $APPLICATION;

        return $APPLICATION;
    }
}

if (!function_exists('gUser')) {
    /**
     * Вернёт глобальный класс пользователя
     *
     * @global CUser $USER
     * @return CUser
     */
    function gUser()
    {
        global $USER;

        return $USER;
    }
}
