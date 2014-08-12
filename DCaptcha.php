<?php
/**
 * MediaWiki adapter for DCaptcha.
 *
 * Copyright (C) 2014 Vladimir Panteleev <vladimir@thecybershadow.net>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$dir = __DIR__;
$cedir = $dir . '/../ConfirmEdit';
require_once $cedir . '/ConfirmEdit.php';
require_once $cedir . '/QuestyCaptcha.class.php';
$wgCaptchaClass = 'DCaptcha';

$wgExtensionMessagesFiles['DCaptcha'] = $cedir . '/QuestyCaptcha.i18n.php';
$wgAutoloadClasses['DCaptcha'] = $dir . '/DCaptcha.class.php';

$wgExtensionCredits['antispam'][] = array(
	'path' => __FILE__,
	'name' => 'DCaptcha',
	'author' => array( 'Vladimir Panteleev' ),
	'url' => 'https://github.com/CyberShadow/DCaptcha-MW',
	'version' => '1.0',
	'description' => 'A CAPTCHA for D programming websites.',
);
