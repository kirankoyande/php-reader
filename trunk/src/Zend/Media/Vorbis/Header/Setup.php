<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Media
 * @subpackage Vorbis
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**#@+ @ignore */
require_once 'Zend/Media/Vorbis/Header.php';
/**#@-*/

/**
 * The setup header contains the bulk of the codec setup information needed for decode. The setup header contains, in
 * order, the lists of codebook congurations, time-domain transform congurations (placeholders in Vorbis I), oor con
 * gurations, residue congurations, channel mapping congurations and mode congurations. It finishes with a framing
 * bit of '1'.
 *
 * @category   Zend
 * @package    Zend_Media
 * @subpackage Vorbis
 * @author     Sven Vollbehr <sven@vollbehr.eu>
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 * @todo       Implementation
 */
final class Zend_Media_Vorbis_Header_Setup extends Zend_Media_Vorbis_Header
{
    /**
     * Constructs the class with given parameters.
     *
     * @param Zend_Io_Reader $reader The reader object.
     */
    public function __construct($reader)
    {
        parent::__construct($reader);

        $this->_reader->skip($this->_packetSize - 7 /* header */);
    }
}
