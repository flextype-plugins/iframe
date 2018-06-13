<?php

/**
 *
 * Flextype Iframe Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Flextype\Component\Event\Event;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [iframe src="http://flextype.org"]
    Content::shortcode()->addHandler('iframe', function(ShortcodeInterface $s) {
        return Themes::view('iframe/views/templates/iframe')
                        ->assign('src', $s->getParameter('src'))
                        ->assign('class', ((null !== $s->getParameter('class')) ? $s->getParameter('class') : '' ))
                        ->assign('width', ((null !== $s->getParameter('width')) ? $s->getParameter('width') : '600' ))
                        ->assign('height', ((null !== $s->getParameter('height')) ? $s->getParameter('height') : '300' ))
                        ->assign('frameborder', ((null !== $s->getParameter('frameborder')) ? $s->getParameter('frameborder') : '0' ))
                        ->render();
    });
});
